<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Group;

class GroupSeeder extends Seeder
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
                'name' => 'Casa',
            ],
            [
                'name' => 'Campagna',
            ],
        ];

        foreach ($types as $type) {
            $newType = new Group();
            $newType->name = $type['name'];
            $newType->save();
        }
    }
}
