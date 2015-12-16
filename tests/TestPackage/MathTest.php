<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Mauri870\Tests;

use Mauri870\Test\Math;
use PHPUnit_Framework_TestCase as PhpUnit;
class MathTest extends PhpUnit
{
    private $x,$y, $total;

    public function __construct()
    {
        $this->x = 5;
        $this->y = 3;
        $this->total = $this->x+$this->y;
    }

    public function test_check_can_sum_2_numbers()
    {
        $math =new Math();
        $soma = $math->soma($this->x,$this->y);

        $this->assertEquals($this->total, $soma);
    }
}