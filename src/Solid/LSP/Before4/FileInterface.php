<?php

namespace Src\Solid\LSP\Before4;

interface FileInterface
{
    public function rename();

    public function move();

    public function copy();
}
