<?php

    namespace App\lib;

    use App\Jobs\ProcessFactories;
    use App\lib\interfaces\FactoryInterface;
    use App\Models\FactoryModel;
    use App\Models\Resource;
    use App\Models\Product;
    use Illuminate\Support\Facades\Log;

    class Factory implements FactoryInterface
    {

        protected $factory;

        public function __construct ($factory) {

            $this->factory = FactoryModel::where('name', $factory)->with('recipes')->first();
        }

        public function run ($job) {
            while ( TRUE ) {
                foreach ( $this->factory->recipes as $recipe ) {
                    $this->getResources($recipe, $job);
                    $this->makeProduct($recipe);
                }
            }

        }

        public function getResources ($recipe, $job) {
            foreach ( $recipe->resource as $key => $item ) {

                $res = Resource::where('name', $key)->first();
                if ( !empty($res) and $res->quantity < $item ) {
                    $job->fail('no resources')->delete();
                }
                else {
                    $res->quantity = $res->quantity - $item;
                    $res->save();
                    Log::channel('factories')->info('Фабрика '.$this->factory->name.' забрала '.$key.' '.$item);

                }
            }
        }

        public function makeProduct ($recipe) {
            sleep($recipe->time);
            $p = Product::where('name', $recipe->name)->first();
            if ( !empty($p) ) {
                $p->quantity = $p->quantity + 1;
                $p->save();
                Log::channel('factories')->info('На фабрике '.$this->factory->name.' произвели '.$recipe->name);

            }
            else {
                Product::create(['name' => $recipe->name, 'quantity' => 1]);
                Log::channel('factories')->info('На фабрике '.$this->factory->name.' произвели '.$recipe->name);

            }
        }

    }