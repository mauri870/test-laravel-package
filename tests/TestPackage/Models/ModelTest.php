<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Mauri870\Test\Tests\Models;


use Mauri870\Test\Models\Test;
use Mauri870\Test\Tests\AbstractTestCase;

class ModelTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_if_a_data_can_be_persisted(){
        $model= Test::create(['name'=>'Teste','description'=>'Descrição']);
        $this->assertEquals('Teste',$model->name);
    }
}