<?php

namespace Database\Seeders;

use App\Models\MyCustomModel;
use App\Models\User;
use Database\Factories\SomeCustomFactory;
use Illuminate\Database\Seeder;

class MyCrazySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        MyCustomModel::factory(10)->create();

        User::factory()->has(MyCustomModel::factory()->count(10))->create();

    }
}
