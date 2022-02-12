<?php

namespace Src\Solid\LSP\Before3;

interface DownloadableFileInterface extends FileInterface
{
    public function download(): void;
}
