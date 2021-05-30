<?php

declare(strict_types=1);

namespace Ardiakov\CqrsEs\EventSourcing;

use DateTimeImmutable;

/**
 * Class Event
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
abstract class Event
{
    public $eventName;

    abstract static function withData(string $aggregateId, array $payload): Event;
}