<?php

/*
 * This file is part of the dayax project.
 *
 * (c) Anthonius Munthi <toni.munthi@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dayax\opengraph\tests\type;

use dayax\core\test\TestCase;
use dayax\opengraph\type\BaseType;

class FooType extends BaseType
{
    protected $width;
    
    protected $height;
    
    protected function configure()
    {
        $this->setRequiredProperties(array(
            'width','height'
        ));
    }           
    
    public function setWidth($width)
    {
        $this->width = $width;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    public function render()
    {
        
    }
}

/**
 * Description of BaseTypeTest
 *
 * @author toni
 */
class BaseTypeTest extends TestCase
{
    public function testValidate()
    {
        $o = new FooType();
        $o->Width = 100;
        $o->Height = 200;
        $this->assertTrue($o->validate());
        
        $o = new FooType();
        $this->assertCount(2, $o->validate());
    }
}

?>
