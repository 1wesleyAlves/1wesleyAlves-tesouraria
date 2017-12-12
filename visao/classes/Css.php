<?php
/**
 * Created by PhpStorm.
 * User: wesley.cast
 * Date: 28/11/2017
 * Time: 11:19
 */

class Css
{
    private $css;


    /**
     * @return mixed
     */
    public function getCss()
    {
        return $this->css;
    }

    /**
     * @param mixed $css
     */
    public function setCss($css)
    {
        $this->css = $css;
    }
}