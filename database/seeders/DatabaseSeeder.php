<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\MimeTypes;
use App\Models\Disk;
use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /** @var  $s3Disk<Disk> */
        $s3Disk = Disk::factory()
            ->s3()
            ->create([
                'name' => 'AWS S3 Production'
            ]);

        $localDisk = Disk::factory()
            ->local()
            ->create([
                'name' => 'Local Storage',
            ]);

        // Create files on local disk
        File::factory()
            ->count(10)
            ->image(MimeTypes::IMAGE_GIF)
            ->onDisk($localDisk)
            ->create();

        File::factory()
            ->count(5)
            ->video(MimeTypes::VIDEO_MP4)
            ->onDisk($localDisk)
            ->create();

        File::factory()
            ->count(8)
            ->pdf(MimeTypes::APPLICATION_PDF)
            ->onDisk($localDisk)
            ->create();

        // Create files on S3 disk
        File::factory()
            ->count(15)
            ->image(MimeTypes::IMAGE_PNG)
            ->onDisk($s3Disk)
            ->create();

        File::factory()
            ->count(3)
            ->video(MimeTypes::VIDEO_MP4)
            ->onDisk($s3Disk)
            ->create();

        // Create some random disks with random files
        Disk::factory()
            ->count(3)
            ->create()
            ->each(function (Disk $disk) {
                File::factory()
                    ->count(rand(5, 15))
                    ->onDisk($disk)
                    ->create();
            });
    }
}
