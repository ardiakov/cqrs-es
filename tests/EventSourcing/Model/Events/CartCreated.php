<?php

declare(strict_types=1);

namespace Ardiakov\CqrsEs\Tests\EventSourcing\Model\Events;

use Ardiakov\CqrsEs\EventSourcing\Event;

/**
 * Class CartCreated
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class CartCreated extends DomainEvent
{
    public $eventName = 'CartCreated';

    public string $test;

    public static function withData(string $aggregateId, array $payload): Event
    {
         $event = parent::withData($aggregateId, $payload);

         $event->test = $payload['test'];

         return $event;
    }

    public static function fromPayload(): Event
    {

    }
}