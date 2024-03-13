<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\Classes\Dice;

final class DiceTest extends TestCase {

    public function testNumberOfFaces(): void
    {
        $dice = new Dice();
        $this->assertSame($dice->nb_face, 6);
    }

}