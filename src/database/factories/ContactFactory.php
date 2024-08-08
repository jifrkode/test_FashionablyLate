<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->numberBetween(0, 2), 
            'email' => $this->faker->safeEmail,
            'tell' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->word,
            'category_id' => Category::inRandomOrder()->first()->id,  // ランダムなカテゴリID
            'detail' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
