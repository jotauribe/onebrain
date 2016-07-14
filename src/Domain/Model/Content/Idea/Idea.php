<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 14/07/2016
 * Time: 1:23 PM
 */

namespace Onebrain\Domain\Model\Content\Idea;

class Idea{
    /**
     * @var string
     */
    private $ideaId;

    /**
     * @var string
     */
    private $author;

    /**
     * @var Context
     */
    private $context;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var bool
     */
    private $state;

    /**
     * Idea constructor.
     *
     * @param string $ideaId
     * @param string $author
     * @param string $title
     * @param string $body
     */
    public function __construct($ideaId, $author, $title, $body){

        
        this.$ideaId  = $ideaId;
        this.$author = $author;
        this.$title = $title;
        this.$body = $body;
        this.$this->state;

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
    public function body()
    {
        return $this->body;
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
    public function editBody($body)
    {
        $this->body = $body;
    }

}