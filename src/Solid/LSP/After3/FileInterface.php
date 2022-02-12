<?php

namespace Src\Solid\LSP\After3;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();
}
