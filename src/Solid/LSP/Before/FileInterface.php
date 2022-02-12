<?php

namespace Src\Solid\LSP\Before;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();

    public function download();
}
