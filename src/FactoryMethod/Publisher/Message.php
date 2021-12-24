<?php

namespace Src\FactoryMethod\Publisher;

class Message
{
    private $title;
    private $image;
    private $content;

    /**
     * @param $title
     * @param $image
     * @param $content
     */
    public function __construct($title, $image, $content)
    {
        $this->title = $title;
        $this->image = $image;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }


}
