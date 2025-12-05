<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Disk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
