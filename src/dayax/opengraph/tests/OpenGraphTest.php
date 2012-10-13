<?php

namespace dayax\opengraph\tests;

use dayax\core\test\TestCase;
use dayax\opengraph\OpenGraph;

class OpenGraphTest extends TestCase
{
    public function testRender()
    {
        $o = new OpenGraph();
        $this->markTestIncomplete();
    }
    
    public function testRequiredProperties()
    {
        $this->markTestIncomplete();
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testConfigException()
    {        
        OpenGraph::config('foo', 'bar');
    }        
    
}