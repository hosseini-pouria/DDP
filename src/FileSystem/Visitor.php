<?php

namespace Src\FileSystem;

interface Visitor
{
    public function visitFile(File $file);

    public function visitDirectory(Directory $directory);
}
