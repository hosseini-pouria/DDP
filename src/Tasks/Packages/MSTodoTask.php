<?php

namespace Src\Tasks\Packages;

class MSTodoTask
{
    private $title;
    private $content;
    private $status;

    /**
     * @param $title
     * @param $content
     * @param $status
     */
    public function __construct($title, $content, $status)
    {
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


}
