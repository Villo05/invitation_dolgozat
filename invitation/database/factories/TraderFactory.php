<?php

namespace Database\Factories;

use App\Models\Trader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Trader>
 */
class TraderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>'Lajos',
            'description'=>'leírás',
            'country'=>'török'
        ];
        [
            'name'=>'Marika',
            'description'=>'leírás',
            'country'=>'magyar'
        ];
        [
            'name'=>'Norbert',
            'description'=>'leírás',
            'country'=>'olasz'
        ];
        [
            'name'=>'Margit',
            'description'=>'leírás',
            'country'=>'német'
        ];
        [
            'name'=>'Károly',
            'description'=>'leírás',
            'country'=>'magyars'
        ];
    }
}
