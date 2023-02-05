<?php

namespace Src\Tasks\Packages;

class TodoistTask
{
    private $name;
    private $create_at;

    /**
     * @param $name
     * @param $create_at
     */
    public function __construct($name, $create_at)
    {
        $this->name = $name;
        $this->create_at = $create_at;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }


}
