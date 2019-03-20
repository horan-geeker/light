<?php
/**
 * Created by PhpStorm.
 * User: xmly
 * Date: 2019-03-15
 * Time: 09:46
 */
namespace Http;

class Response
{
    private $_content;

    public function setHeader($headers)
    {

    }

    public function setContent($content)
    {
        $this->_content = $content;
    }

    public function send()
    {
        echo $this->_content;
        exit;
    }

}