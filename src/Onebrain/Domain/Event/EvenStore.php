<?php
/**
 * User: Jota
 * Date: 17/08/2016
 * Time: 9:29 AM
 */

namespace Onebrain\Domain\Event;


interface EvenStore{

    /**
     * @param DomainEvent $anEvent
     * @return mixed
     */
    public function append($anEvent);

    /**
     * @param $anEventId
     * @return array mixed
     */
    public function eventsSince($anEventId);

}