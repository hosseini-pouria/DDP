<?php

namespace Src\CachedDownload;

interface Downloader
{
    public function download(string $url);
}
