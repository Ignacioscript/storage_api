<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Enums\DiskDriver;
use App\Models\Disk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Disk>
 */
final class DiskFactory extends Factory
{

    /** @var class-string<Model>  */
    protected $model = Disk::class;

    /**@return array<string, mixed> */
    public function definition(): array
    {

        $driver = $this->faker->randomElement(DiskDriver::cases());

        return [
            'name' => $this->faker->unique()->words(2, true) . ' Storage',
            'driver' => $driver,
            'configuration' => $this->getConfigurationForDriver($driver),
            'is_active' => $this->faker->boolean(90)
        ];

        // $disk = Disk::factory()->create();
    }

    private function getConfigurationForDriver(DiskDriver $driver): array
    {
        //match is a better switch, no breaks need it
        return match ($driver) {
            DiskDriver::S3 => [
                'key' => $this->faker->uuid(),
                'secret' => $this->faker->sha256(),
                'region' => $this->faker->randomElement(['us-east-1', 'us-west-2', 'eu-west-1' ]),
                'bucket' => $this->faker->slug(),
            ],
            DiskDriver::FTP, DiskDriver::SFTP =>[
                'host' => $this->faker->domainName(),
                'port' => $driver === DiskDriver::SFTP ? 22 : 21,
                'username' => $this->faker->userName(),
                'password' => $this->faker->password(),
            ],
            default => [],
        };
    }


    //Factories States, stablish or hardcode a specific type of value and dont rely on the definition part, it is like you need the exact value for one or more factory elements and dot want to rely
    // on lucky random elements
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }


    // Disk::factory()->inactive()->local()->create();
    public function local(): static
    {
        $driver = DiskDriver::Local;
        //state() is a factory helper like faker,
        return $this->state(fn () => [ //$attributes part is only need it when you need all values
            'driver' => $driver,
            'configuration' => [],
        ]);
    }


    // Disk::factory()->count(5)->s3()->inactive()->create();
    public function s3(): static
    {
        $driver = DiskDriver::S3;
        return $this->state(fn (array $attributes) => [
            'driver' => $driver,
            'configuration' => $this->getConfigurationForDriver($driver),
        ]);
    }


}
