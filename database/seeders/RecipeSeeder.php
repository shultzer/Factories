<?php

    namespace Database\Seeders;

    use App\Models\Recipe;
    use Illuminate\Database\Seeder;

    class RecipeSeeder extends Seeder
    {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run () {
            $data = [
              ['name' => 'p1', 'resource->Вода' => 2, 'resource->Камень' => 1, 'time' => 5],
              ['name' => 'p2', 'resource->Камень' => 1, 'resource->Глина' => 1, 'time' => 10],
              ['name' => 'p3', 'resource->Вода' => 3, 'resource->Глина' => 1, 'time' => 10],
              ['name' => 'p4', 'resource->Камень' => 2, 'resource->Глина' => 1, 'time' => 3],

            ];
            foreach ( $data as $datum ) {

                Recipe::create($datum);
            }

        }
    }
