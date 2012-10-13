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
use dayax\opengraph\type\Image;

/**
 * Description of ImageTest
 *
 * @author toni
 */
class ImageTest extends TestCase
{
    /**
     * @dataProvider getMediaType
     */
    public function testGetMediaType($type,$expected)
    {
        $o = new Image();
        $this->assertEquals($expected,$o->getMediaType($type));
    }
    
    public function getMediaType()
    {
        return array(
            array('jpeg','image/jpeg'),
            array('jpg','image/jpeg'),
            array('ico','image/vnd.microsoft.icon'),
        );
    }
}

?>
