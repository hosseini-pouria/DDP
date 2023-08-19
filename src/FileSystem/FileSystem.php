<?php

namespace Src\FileSystem;

interface FileSystem
{
    public function accept(Visitor $visitor);
}
