<?php

namespace Src\Solid\LSP\After3;

interface DownloadableFileInterface extends FileInterface
{
    public function download(): void;
}
