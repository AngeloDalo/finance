<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Type;

class TypeSeeder extends Seeder
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
                'name' => 'Entrata',
            ],
            [
                'name' => 'Uscita',
            ],
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->save();
        }
    }
}
