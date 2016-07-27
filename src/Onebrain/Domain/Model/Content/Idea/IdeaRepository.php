<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 27/07/2016
 * Time: 8:02 AM
 */

namespace Onebrain\Domain\Model\Content\Idea;


interface IdeaRepository{

    /**
     * @return IdeaId
     */
    public function nextIdentity();

    /**
     * @param IdeaId $ideaId
     * @return Idea
     */
    public function ideaOfId($ideaId);

    /**
     * @param $array
     * @return \ArrayObject
     */
    public function ideaOf($array);

    /**
     * @param $idea
     * @return void
     */
    public function save($idea);

}