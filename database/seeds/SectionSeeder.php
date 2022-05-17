<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Amazon',
            ],
            [
                'name' => 'Gas',
            ],
            [
                'name' => 'Benzina',
            ],
            [
                'name' => 'Luce',
            ],
            [
                'name' => 'Amashop',
            ],
            [
                'name' => 'Manutenzione Auto',
            ],
            [
                'name' => 'Manutenzione Moto',
            ],
            [
                'name' => 'Pensione',
            ],
            [
                'name' => 'Mutuo',
            ],
            [
                'name' => 'Rata',
            ],
            [
                'name' => 'Manutenzione Campagna',
            ],
            [
                'name' => 'Manutenzione Attrezzatura Campagna',
            ],
            [
                'name' => 'Lavori Campagna',
            ],
            [
                'name' => 'Rimborso Dialisi',
            ],
            [
                'name' => 'Bonifico Cantina',
            ],
            [
                'name' => 'Altro',
            ],
        ];

        foreach ($types as $type) {
            $newType = new Section();
            $newType->name = $type['name'];
            $newType->save();
        }
    }
}
