<?php
/**
 * User: Jota
 * Date: 13/08/2016
 * Time: 1:19 PM
 */

namespace Onebrain\Domain\Event;


interface DomainEvent{

    /**
     * @return \DateTime
     */
    public function ocurredOn();

}