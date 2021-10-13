<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Данные для запольнение первоначальный данных о компании
        \App\Models\Company::create([
            'name'=>'Имя Компании',
            'inn'=>'123456789',
            'rs'=>'21002222222222222221',
            'mfo'=>'00086',
            'mfo_address'=>'Бухоро ш.',
            'ndc_kod'=>'123456789012',
            'nked'=>'1593571',
            'email'=>'admin@admin.adm',
            'address'=>'Бухоро ш.',
            'phone'=>'998906111111',
            'fax'=>'998906111111',
            'exat'=>'exat@exat.uz',
            'url'=>'',
            'province_id'=>'3',
            'region_id'=>'17',
            'director'=>'Тестер',
        ]);
    }
}
