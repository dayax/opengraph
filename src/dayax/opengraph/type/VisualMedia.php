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

use dayax\opengraph\type\Media;

/**
 * Description of VisualMedia
 *
 * @author toni
 */
abstract class VisualMedia extends Media
{
    protected $height;
    
    protected $width;
    
    /**
     * Set media width
     * @param   integer $width
     * @return  \dayax\opengraph\type\VisualMedia
     * @throws  InvalidArgumentException
     */
    public function setWidth($width)
    {
        if(!is_int($width)){
            throw new InvalidArgumentException('og.media_integer_value','width',$width);
        }
        $this->width = $width;
        return $this;
    }
    
    /**
     * Set media height
     * @param type $height
     * @return \dayax\opengraph\type\VisualMedia
     * @throws InvalidArgumentException
     */
    public function setHeight($height)
    {
        if(!is_int($height)){
            throw new InvalidArgumentException('og.media_integer_value','height',$height);
        }
        $this->height = $height;
        return $this;
    }
    
    /**
     * Return width of media
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }
    
    /**
     * Return height of the media
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }
}

?>
