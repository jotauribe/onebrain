<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 14/07/2016
 * Time: 1:23 PM
 */

namespace Onebrain\Domain\Model\Content\Idea;

use Onebrain\Domain\Model\User\UserId;
use Onebrain\Onebrain\Domain\Model\Content\Problem\ProblemId;

class Idea{
    /**
     * @var IdeaId
     */
    protected $ideaId;

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var UserId
     */
    protected $authorId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $createdOn;

    /**
     * @var \DateTime
     */
    protected $updatedOn;

    /**
     * Idea constructor.
     *
     * @param string $ideaId
     * @param UserId $authorId
     * @param string $title
     * @param $description
     * @internal param string $author
     * @internal param string $body
     */
    public function __construct($ideaId, $authorId, $title, $description){


        $this->setIdeaId($ideaId);
        $this->setAuthorId($authorId);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->createdOn = new \DateTime();
        $this->updatedOn = new \DateTime();


    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->ideaId;
    }

    /**
     * @return string
     */
    public function author()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @param IdeaId $ideaId
     */
    protected function setIdeaId($ideaId)
    {
        $this->ideaId = $ideaId;
    }

    /**
     * @param ProblemId $problemId
     */
    protected function setProblemId($problemId)
    {
        $this->problemId = $problemId;
    }

    /**
     * @param UserId $authorId
     */
    protected function setAuthorId($authorId)
    {
        if(is_null($authorId) || !($authorId instanceof UserId))
        {
            throw  new \InvalidArgumentException('Ivalid Author provided. Author must be an instance of User');
        }
        $this->authorId = $authorId;
    }

    /**
     * @param string $title
     */
    protected function setTitle($title)
    {
        $title = trim($title);
        if (!$title) {
            throw new \InvalidArgumentException('Idea title not provided. A valid idea title must be provided');
        }
        $this->title = $title;
    }

    /**
     * @param string $description
     */
    protected function setDescription($description)
    {
        $description = trim($description);
        if (!$description) {
            throw new \InvalidArgumentException('Idea description not provided');
        }
        $this->description = $description;
    }

    /**
     * @return void
     */
    protected function setUpdateDate()
    {
        $this->updatedOn = new \DateTime();
    }

    /**
     * @param string $title
     */
    public function changeTitle($title)
    {
        $this->setTitle($title);
        $this->setUpdateDate();
    }

    /**
     * @param string $description
     */
    public function changeDescription($description)
    {
        $this->setDescription($description);
        $this->setUpdateDate();
    }

    /**
     * @return \DateTime
     */
    public function createdOn(){

        return $this->createdOn;

    }

    /**
     * @return \DateTime
     */
    public function updatedOn(){

        return $this->updatedOn;

    }

}