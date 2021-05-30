<?php

declare(strict_types=1);

namespace Ardiakov\CqrsEs\Tests\EventSourcing\Model;

use Ardiakov\CqrsEs\EventSourcing\AggregateRoot;
use Ardiakov\CqrsEs\Tests\EventSourcing\Model\Events\CartCreated;
use Ramsey\Uuid\Uuid;

/**
 * Class Cart
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class Cart extends AggregateRoot
{
    public static function create(): Cart
    {
        $self = new self();

        $self->apply(
            CartCreated::withData(Uuid::uuid4()->toString(), [
                'test' => 1
            ])
        );

        return $self;
    }

    public function aggregateRoot(): string
    {
        return Cart::class;
    }
}