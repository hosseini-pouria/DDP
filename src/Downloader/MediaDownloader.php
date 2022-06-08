<?php

namespace Src\Downloader;

class MediaDownloader
{
    private FileDownloader $fileDownloader;
    private FileEncoder $fileEncoder;

    /**
     * @param FileDownloader $fileDownloader
     * @param FileEncoder $fileEncoder
     */
    public function __construct(FileDownloader $fileDownloader, FileEncoder $fileEncoder)
    {
        $this->fileDownloader = $fileDownloader;
        $this->fileEncoder = $fileEncoder;
    }

    public function downloadMP3(string $url): void
    {
        $downloadFile = $this->fileDownloader->download($url, 'sample-download.mp3');
        $encodedFile = $this->fileEncoder->encodeToMp3($downloadFile);
    }
}
