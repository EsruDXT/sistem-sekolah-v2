<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $SchoolClasses = [
            '10 AKL',
            '11 TKJ 1',
            '10 BiD',
            '12 TKJ 1',
            '12 BiD 1',
            '12 AKL 1',
            '11 BiD 1',
            '11 AKL 1', 
            '10 TKJ 1',
            '10 BiD 2',
            '11 TKJ 2',
            '12 TKJ 2',
            '12 BiD 2',
            '12 AKL 2',
            '11 BiD 2',
            '11 AKL 2'];
        return [
            'name' => fake()->unique()->randomElement($SchoolClasses)
        ];
    }
}
