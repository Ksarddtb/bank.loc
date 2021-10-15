<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Subject::insert([[
            'name'=>'Юридическое лицо',
            'status'=>true,
        ],[
            'name'=>'физияческое лицо',
            'status'=>true,
        ],[
            'name'=>'Индивидуальный предприниматель',
            'status'=>true,
        ]
        ]);

    }
}
