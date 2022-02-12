<?php

namespace Src\Solid\LSP\Before4;

interface DownloadableFileInterface extends FileInterface
{
    public function download(): void;
}
