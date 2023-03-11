<?php

namespace Src\ProjectManagement;

interface ProjectComponentInterface
{
    public function done();

    public function duplicate();

    public function delete();

    public function move();
}
