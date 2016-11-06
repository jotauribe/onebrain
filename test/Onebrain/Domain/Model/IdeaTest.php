<?php
/**
 * Created by PhpStorm.
 * User: jotauribe
 * Date: 5/11/16
 * Time: 05:20 PM
 */

namespace Onebrain\Domain\Model\Content\Idea;


use Onebrain\Domain\Model\User\UserId;
use phpDocumentor\Reflection\Types\Object_;
use PHPUnit\Framework\TestCase;

class IdeaTest extends TestCase
{
    /**
     * @dataProvider newIdeaSecondParameterProvider
     * @expectedException \InvalidArgumentException
     *
     */
    public function test_newIdea_2ndParameterDiferentFromUserID_ExceptionThrown($parameter)
    {
        $newIdea = new Idea("ID", $parameter, "TITULO", "DESCRIPTION");
    }

    /**
     * @dataProvider newIdea3rdOr4thParametersInvalidProvider
     * @expectedException \InvalidArgumentException
     */
    public function test_newIdea_3rdOr4thParametersInvalid_ExceptionThrown($param3, $param4)
    {
        $newIdea = new Idea("ID", new UserId("ID"), $param3, $param4);
    }

    /**
     * @return array
     */
    public function newIdeaSecondParameterProvider(){
        return [
            ["aString"],
            [Null],
            [new Object_()]
        ];
    }

    /**
     * @return array
     */
    public function newIdea3rdOr4thParametersInvalidProvider()
    {
        return [
            ["",""],
            ["TITLE",""],
            ["","DESCRIPTION"],
            ["    ","   "]
        ];
    }
}
