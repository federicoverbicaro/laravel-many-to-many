<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;

use App\Models\Wallet;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;


class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker ): void
    {
        for($i = 0; $i < 15; $i++){
            $wallet = new Wallet();

            $wallet->title = $faker->sentence(2);
            $wallet->description = $faker->paragraph();
            $wallet->new_image = $faker->image(null, 360, 360);
            $wallet->category = $faker->word();
            $wallet->client = $faker->company();
            $wallet->date = $faker->date();
            $wallet->url = $faker->url();
            $wallet->slug = Str::slug($wallet->title, '-');

            $wallet->save();
        };
    }
}
