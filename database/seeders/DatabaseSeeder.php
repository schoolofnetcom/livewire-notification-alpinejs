<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Thiago',
            'email' => 'thiago@son.com',
        ]);
        \App\Models\Book::factory(10)->create();
    }
}
