<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class FactoryRecipeSeeder extends Seeder
    {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run () {
            $data = [
              ['factory_id' => 1, 'recipe_id' => 1],
              ['factory_id' => 1, 'recipe_id' => 2],
              ['factory_id' => 2, 'recipe_id' => 3],
              ['factory_id' => 2, 'recipe_id' => 4],
            ];
            //foreach ( $data as $key => $value ) {
            DB::table('factory_recipe')->insert($data);
            //}

        }
    }
