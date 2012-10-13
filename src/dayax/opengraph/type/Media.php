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

use dayax\opengraph\type\BaseType;

/**
 * Description of Media
 *
 * @author toni
 */
abstract class Media extends BaseType
{
    /**
     * HTTP scheme URL
     *
     * @var string
     * @since 1.3
     */
    protected $url;

    /**
     * HTTPS scheme URL
     *
     * @var string
     * @since 1.3
     */
    protected $secure_url;

    /**
     * Internet media type of the linked URLs
     *
     * @var string
     * @since 1.3
     */
    protected $type;
    
    /**
     * 
     * @param   type $url   resource location
     * @return  \dayax\opengraph\type\Media
     */
    public function setURL($url)
    {
        if($url=$this->validateURL($url)){
            $this->url = $url;
        }
        return $this;
    }
    
    /**
     * @return string
     */
    public function getURL()
    {
        return $this->url;
    }
    
    /**
     * @param   type    $url
     * @return  \dayax\opengraph\type\Media
     */
    public function setSecureURL($url)
    {
        if($url=$this->validateURL($url)){
            $this->secure_url = $url;
        }
        return $this;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
}

?>
