<?php

namespace App\Enums;

enum DiskDriver: string
{
    case Local = 'local';
    case S3 = 's3';
    case FTP = 'ftp';
    case SFTP = 'sftp';
}
