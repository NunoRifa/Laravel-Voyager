<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_menus')->insert([
            [
                'user_id' => 1,
                'menu_item_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'menu_item_id' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'menu_item_id' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'menu_item_id' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'menu_item_id' => 18,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'menu_item_id' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
