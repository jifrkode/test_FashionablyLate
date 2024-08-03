<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {

        // ランダムなカテゴリIDを取得
        $category = Category::inRandomOrder()->first();
        $categoryId = $category ? $category->id : null; // カテゴリが存在する場合のみIDを設定

        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->numberBetween(0, 1, 2), // 男性（0）または女性（1）
            'email' => $this->faker->safeEmail,
            'tell' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->word,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id, // ランダムなカテゴリID
            'detail' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
