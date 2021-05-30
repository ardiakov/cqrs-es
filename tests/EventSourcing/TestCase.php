<?php

declare(strict_types=1);

namespace Ardiakov\CqrsEs\Tests\EventSourcing;

use Ardiakov\CqrsEs\Tests\EventSourcing\Model\Cart;
use PHPUnit\Framework\TestCase as UnitTestCase;

/**
 * Class TestCase
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class TestCase extends UnitTestCase
{
    public function test(): void
    {
        $cart = Cart::create();

        $this->assertEquals(0, $cart->playhead);

        $expectedEvent = [];

        $this->assertEquals($cart->uncommittedEvents, $expectedEvent);
    }
}