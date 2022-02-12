<?php

namespace Src\Solid\LSP\After2;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();
}
