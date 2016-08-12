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
     * @var bool
     */
    protected $isActive;

    /**
     * Idea constructor.
     *
     * @param string $ideaId
     * @param $authorId
     * @param string $title
     * @param $description
     * @internal param string $author
     * @internal param string $body
     */
    public function __construct($ideaId, $authorId, $title, $description){


        $this->ideaId  = $ideaId;
        $this->authorId = $authorId;
        $this->title = $title;
        $this->description = $description;
        $this->isActive = true;
        $this->createdOn = new \DateTime();


    }

    /**
     * @return string
     */
    public function ideaId()
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
     * @param string $title
     */
    public function editTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $body
     */
    public function editDescription($description)
    {
        $this->body = $description;
    }

    /**
     * @return bool
     */
    public function isActive(){

        return $this->isActive;

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