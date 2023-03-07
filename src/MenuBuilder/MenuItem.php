<?php

namespace Src\MenuBuilder;

class MenuItem implements MenuComponentInterface
{
    private string $title;
    private string $url;

    /**
     * @param string $titel
     * @param string $url
     */
    public function __construct(string $title, string $url)
    {
        $this->title = $title;
        $this->url = $url;
    }


    public function build()
    {
        echo "<a href='{ $this->url }'>{ $this->title }</a>";
    }
}
