<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->hasCarts(2)->create();
        TransactionHeader::factory(2)->hasDetails(2)->create();
        Category::factory(2)->hasProducts(20)->create();

        User::insert([
            'name' => 'admin',
            'isAdmin' => 1,
            'email' => 'admin@admin.com',
            'gender' => 'male',
            'password' => bcrypt('admin'),
            'dob' => '2010-10-10',
            'country' => 'Indonesia',
        ]);
    }
}
