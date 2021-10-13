<?php

namespace Database\Seeders;

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
        $this->call([
            \Database\Seeders\ProvinceSeeder::class,
            \Database\Seeders\RegionSeeder::class,
            \Database\Seeders\CompanySeeder::class,
        ]);
        \App\Models\User::factory(1)->create();

    }
}
