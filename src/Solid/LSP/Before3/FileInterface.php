<?php

namespace Src\Solid\LSP\Before3;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();
}
