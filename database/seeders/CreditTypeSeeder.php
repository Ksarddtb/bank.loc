<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreditTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\CreditType::insert([[
            'name'=>'Любые типы клиентов',
            'subject_id'=>null,
        ],[
            'name'=>'Государственные организации и предприятия',
            'subject_id'=>1,
        ],[
            'name'=>'Небанковские финансовые институты',
            'subject_id'=>1,
        ],[
            'name'=>'Другие типы клиентов',
            'subject_id'=>null,
        ],[
            'name'=>'Центральный банк Республики Узбекистан',
            'subject_id'=>1,
        ],[
            'name'=>'Коммерческие банки',
            'subject_id'=>1,
        ],[
            'name'=>'Физические лица',
            'subject_id'=>2,
        ],[
            'name'=>'Молодые семьи',
            'subject_id'=>2,
        ],[
            'name'=>'Малоимущие',
            'subject_id'=>2,
        ],[
            'name'=>'Сироты',
            'subject_id'=>2,
        ],[
            'name'=>'Инвалиды',
            'subject_id'=>2,
        ],[
            'name'=>'Частные предприятия, хозяйственные товарищества и общества  ',
            'subject_id'=>1,
        ],[
            'name'=>'Фермерские хозяйства',
            'subject_id'=>1,
        ],[
            'name'=>'Дехканские хозяйства с образованием юридического лица',
            'subject_id'=>1,
        ],[
            'name'=>'Агрофирма',
            'subject_id'=>1,
        ],[
            'name'=>'Микрофирма',
            'subject_id'=>1,
        ],[
            'name'=>'Малое предприятие',
            'subject_id'=>1,
        ],[
            'name'=>'Молодые семьи',
            'subject_id'=>1,
        ],[
            'name'=>'Предприятия с участием иностранного капитала',
            'subject_id'=>1,
        ],[
            'name'=>'Индивидуальные предприниматели',
            'subject_id'=>3,
        ],[
            'name'=>'Семейные предприниматели',
            'subject_id'=>3,
        ],[
            'name'=>'Женщины предприниматели',
            'subject_id'=>3,
        ],[
            'name'=>'Дехканские хозяйства без образования юридического лица',
            'subject_id'=>3,
        ],[
            'name'=>'Молодые семьи',
            'subject_id'=>3,
        ],[
            'name'=>'Бюджетные учреждения',
            'subject_id'=>1,
        ],[
            'name'=>'Республиканский дорожный фонд',
            'subject_id'=>1,
        ]
        ]);
    }
}
