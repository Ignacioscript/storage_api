<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\MimeTypes;
use App\Models\Disk;
use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{

    /** @var class-string<Model> */
    protected $model = File::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $mimeType = $this->faker->randomElement(MimeTypes::cases());
        $fileName = $this->faker->word() . '.' . $mimeType->extension();

        return [
            'disk_id' => Disk::factory(),
            'name' => $fileName,
            'path' => $this->faker->filePath() . '/' . $fileName,
            'mime_type' => $mimeType->value,
            'size' => $this->faker->numberBetween(1024, 10485760), // 1KB to 10MB
            'hash' => $this->faker->sha256(),
            'metadata' => $this->getMetadataForMimeType($mimeType),
        ];
    }

    private function getMetadataForMimeType(MimeTypes $mimeType): array
    {
        if (str_starts_with($mimeType->value, 'image/')) {
            return [
                'width' => $this->faker->numberBetween(800,3840),
                'height' => $this->faker->numberBetween(600, 2160)
            ];
        }

        if(str_starts_with($mimeType->value, 'video/')) {
            return [
                'duration' => $this->faker->numberBetween(10,600),
                'width' => $this->faker->numberBetween(1280, 1920),
                'height' => $this->faker->numberBetween(720, 1080)
            ];
        }
        return [];
    }

    public function image(MimeTypes $mimeTypes): static
    {
        return  $this->state(fn (array $attributes) => [
            'mime_type' => $mimeTypes,
            'name' => $this->faker->word() . '.' . $mimeTypes->extension(),
            'metadata' => $this->getMetadataForMimeType($mimeTypes),
        ]);
    }

    public function video(MimeTypes $mimeTypes): static
    {
        return $this->state(fn (array $attributes) => [
            'mime_type' => $mimeTypes,
            'name' => $this->faker->word() . '.' . $mimeTypes->extension(),
            'metadata' => $this->getMetadataForMimeType($mimeTypes),
        ]);
    }

    /**
     * Create a PDF file.
     */
    public function pdf(MimeTypes $mimeTypes): static
    {
        return $this->state(fn (array $attributes) => [
            'mime_type' => 'application/pdf',
            'name' => $this->faker->word() . '.' . $mimeTypes->extension(),
            'metadata' => [],
        ]);
    }

    /** accepts int as disk_id or the Model Disk
     * so yu can use File::factory()->onDisk(5)->create(); or
     * File::factory()->onDisk(Disk::factory()->create())->create();*/
    public function onDisk(int|Disk $disk): static
    {
        // verify that either given Disk or disk_id yu get an integer instanceof (operator), like : or ?
        $diskId = $disk instanceof Disk ? $disk->id : $disk;
        return $this->state(fn(array $attributes) => [
            'disk_id' => $diskId
        ]);
    }


}
