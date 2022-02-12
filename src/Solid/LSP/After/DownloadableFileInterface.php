<?php

namespace Src\Solid\LSP\After;

interface DownloadableFileInterface extends FileInterface
{
    public function download();
}
