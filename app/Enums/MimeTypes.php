<?php

namespace App\Enums;

enum MimeTypes: string
{
    case IMAGE_JPG = 'image/jpg';
    case IMAGE_PNG = 'image/png';
    case IMAGE_GIF = 'image/gif';
    case APPLICATION_PDF = 'appliation/pdf';
    case VIDEO_MP4 = 'video/mp4';
    case TEXT = 'text/plain';
    case APPLICATION_ZIP = 'appliation/zip';
    case BIN = 'application/octet-stream';

    public function extension(): string
    {
        return match ($this) {
            self::IMAGE_JPG => 'jpg',
            self::IMAGE_PNG => 'png',
            self::IMAGE_GIF => 'gif',
            self::APPLICATION_PDF => 'pdf',
            self::VIDEO_MP4 => 'mp4',
            self::TEXT => 'txt',
            self::APPLICATION_ZIP => 'zip',
            self::BIN=> 'bin',
        };
    }
}
