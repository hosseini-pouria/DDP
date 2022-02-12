<?php

namespace Src\Solid\LSP\After2;

interface DownloadableFileInterface extends FileInterface
{
    public function download(): void;
}
