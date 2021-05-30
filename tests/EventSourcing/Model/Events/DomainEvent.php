<?php

declare(strict_types=1);

namespace Ardiakov\CqrsEs\Tests\EventSourcing\Model\Events;

use Ardiakov\CqrsEs\EventSourcing\Event;
use DateTimeImmutable;

/**
 * Class DomainEvent
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
class DomainEvent extends Event
{
    public static function withData(string $aggregateId, array $payload): Event
    {
        $self = new self();

        $payload['aggregateId'] = $aggregateId;
        $payload['createdAt'] = (new DateTimeImmutable())->format('d-m-Y H:i:s:u');

        return $self;
    }
}