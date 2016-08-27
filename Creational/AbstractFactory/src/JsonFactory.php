<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Creational\AbstractFactory;

/**
 * Class JsonFactory
 * 
 * JsonFactory is a factory for creating a family of JSON component
 * (example for ajax).
 *
 * @author theAdmin
 */
class JsonFactory extends AbstractFactory
{
    /**
     * Creates a picture component.
     * 
     * @param string $path
     * @param string $name
     * 
     * @return Json\Picture|Picture
     */
    public function createPicture($path, $name = '') 
    {
        return new Json\Picture($path, $name);
    }
    /**
     * Creates a text component.
     * 
     * 
     * @param string $content
     * @return \Creational\AbstractFactory\Json\Text
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }
    
    
    
    
}
