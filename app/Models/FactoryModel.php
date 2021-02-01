<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class FactoryModel extends Model
    {

        use HasFactory;

        protected $table = 'factories';

        public function recipes () {
            return $this->belongsToMany(Recipe::class, 'factory_recipe', 'factory_id', 'recipe_id', '');
        }
    }
