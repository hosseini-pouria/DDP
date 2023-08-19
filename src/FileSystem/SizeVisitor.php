<?php

namespace Src\FileSystem;

class SizeVisitor implements Visitor
{

    public function visitFile(File $file): bool|int
    {
        if (!is_readable($file->path())) {
            return 0;
        }

        if (!file_exists($file->path())) {
            return 0;
        }

        return filesize($file->path());
    }

    public function visitDirectory(Directory $directory): bool|int
    {
       $totalSize = 0;
        foreach ($directory->files() as $file) {
            $totalSize += $this->visitFile($file);
       }

        return $totalSize;
    }
}
