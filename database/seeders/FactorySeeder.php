<?php

namespace Database\Seeders;

use App\Models\FactoryModel;
use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['name' => 'F1'],
          ['name' => 'F2'],


        ];
        foreach ( $data as $item ) {
            FactoryModel::create($item);
        }

    }
}
