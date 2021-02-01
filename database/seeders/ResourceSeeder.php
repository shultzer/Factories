<?php

    namespace Database\Seeders;

    use App\Models\Resource;
    use Illuminate\Database\Seeder;

    class ResourceSeeder extends Seeder
    {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run () {
            $data = [
              ['name' => 'Вода', 'quantity' => 100],
              ['name' => 'Камень', 'quantity' => 50],
              ['name' => 'Глина', 'quantity' => 30],
            ];
            foreach ( $data as $datum ) {
                Resource::create($datum);
            }

        }
    }
