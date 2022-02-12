<?php

namespace Src\Solid\LSP\After;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();
}
