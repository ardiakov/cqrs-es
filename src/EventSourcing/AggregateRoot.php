<?php

declare(strict_types=1);

namespace Ardiakov\CqrsEs\EventSourcing;

/**
 * Class AggregateRoot
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
abstract class AggregateRoot
{
    public int $playhead = -1;
    public array $uncommittedEvents = [];

    public function apply(Event $event): void
    {
        $this->uncommittedEvents[] = $event;
        $this->playhead++;
    }

    /**
     * Получение метода
     *
     * @param Event $event
     *
     * @return string
     */
    public function methodName(Event $event): string
    {
        return 'when'.ucfirst($event->eventName);
    }

    abstract public function aggregateRoot(): string;
}