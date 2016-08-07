<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 06/08/2016
 * Time: 9:58 PM
 */

namespace Onebrain\Infrastructure\Domain\Model;


use Ramsey\Uuid\Codec\TimestampFirstCombCodec;
use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\UuidFactory;
use Ramsey\Uuid\Converter\NumberConverterInterface;
use Ramsey\Uuid\Provider\NodeProviderInterface;
use Ramsey\Uuid\Generator\RandomGeneratorInterface;
use Ramsey\Uuid\Generator\TimeGeneratorInterface;
use Ramsey\Uuid\Codec\CodecInterface;
use Ramsey\Uuid\Builder\UuidBuilderInterface;
use Ramsey\Uuid\FeatureSet;
use Ramsey\Uuid\BinaryUtils;

class OrderedUuidIdentityFactory extends UuidFactory{

    /**
     * @var CodecInterface
     */
    private $codec = null;

    /**
     * @var NodeProviderInterface
     */
    private $nodeProvider = null;

    /**
     * @var NumberConverterInterface
     */
    private $numberConverter = null;

    /**
     * @var RandomGeneratorInterface
     */
    private $randomGenerator = null;

    /**
     * @var TimeGeneratorInterface
     */
    private $timeGenerator = null;

    /**
     * @var UuidBuilderInterface
     */
    private $uuidBuilder = null;

    /**
     * @var CombGenerator
     */
    private $combGenerator;

    /**
     * Constructs a `UuidFactory` for creating `Ramsey\Uuid\UuidInterface` instances
     *
     * @param FeatureSet $features A set of features for use when creating UUIDs
     */
    public function __construct(Feature $features = null){

        $features = $features ?: new FeatureSet();

        $this->nodeProvider = $features->getNodeProvider();
        $this->numberConverter = $features->getNumberConverter();
        $this->randomGenerator = $features->getRandomGenerator();
        $this->timeGenerator = $features->getTimeGenerator();
        $this->uuidBuilder = $features->getBuilder();
        $this->combGenerator = $this->buildCombGenerator($this->randomGenerator, $this->numberConverter);
        $this->codec = new TimestampFirstCombCodec($this->uuidBuilder);

    }

    private function buildCombGenerator($randomGenerator, $numberConverter){

        return new CombGenerator($randomGenerator, $numberConverter);

    }

    public function orderedUuid(){

        $bytes = $this->combGenerator->generate(16);
        $hex = bin2hex($bytes);

        return $this->uuidFromHashedName($hex, 4);

    }

    public function uuid(array $fields)
    {
        return $this->uuidBuilder->build($this->codec, $fields);
    }

    protected function uuidFromHashedName($hash, $version)
    {
        $timeHi = BinaryUtils::applyVersion(substr($hash, 12, 4), $version);
        $clockSeqHi = BinaryUtils::applyVariant(hexdec(substr($hash, 16, 2)));

        $fields = array(
            'time_low' => substr($hash, 0, 8),
            'time_mid' => substr($hash, 8, 4),
            'time_hi_and_version' => sprintf('%04x', $timeHi),
            'clock_seq_hi_and_reserved' => sprintf('%02x', $clockSeqHi),
            'clock_seq_low' => substr($hash, 18, 2),
            'node' => substr($hash, 20, 12),
        );

        return $this->uuid($fields);
    }

}