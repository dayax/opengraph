<?php

/*
 * This file is part of the dayax project.
 *
 * (c) Anthonius Munthi <toni.munthi@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dayax\opengraph\type;

use dayax\opengraph\type\VisualMedia;

/**
 * Description of Image
 *
 * @author toni
 */
class Image extends VisualMedia
{    
    protected function configure()
    {        
        $this->setRequiredProperties(array(
           'width','height',
        ));
    }
    
    public function getMediaType($extension)
    {
        if(empty($extension)||!is_string($extension)) return;
        
        switch($extension){
            case "jpeg":
            case 'jpg':
                return 'image/jpeg';
            case 'png':
                return 'image/png';
            case 'gif':
                return 'image/gif';
            case 'svg':
                return 'image/svg+sml';
            case 'ico':
                return 'image/vnd.microsoft.icon';
        }
    }
    
    public function render()
    {
    }
    
}

?>
