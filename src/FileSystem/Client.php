<?php

namespace Src\FileSystem;

class Client
{
    public function showFileSize(File $file): void
    {
        $file->accept(new SizeVisitor());
    }

    public function printFileSystem(Directory $directory): void
    {
        $directory->accept(new PrintVisitor());
    }
}
