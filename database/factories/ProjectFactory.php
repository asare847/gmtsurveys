<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*
        This could be used when want to upload to S3 
        $image = $faker->image();
        $imageFile = new File($image);
        
        
        return [
        'image' => Storage::disk('public')->putFile('images', $imageFile),
        ]; */
        return [
            'name' => $this->faker->sentence(),
            'location' => $this->faker->state(),
            'client' => $this->faker->company(),
            //'image' => $this->faker->image('app/public/storage/images',400,300, null, false),
            'image' => $this->faker->image('public/storage/images',640,480, null, false),
        ];
    }
}
