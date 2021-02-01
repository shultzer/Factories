<?php

    namespace App\Jobs;

    use App\Models\FactoryModel;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldBeUnique;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\Dispatchable;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Queue\SerializesModels;

    class ProcessFactories implements ShouldQueue
    {

        use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

        protected $factory;
        public $timeout = 1800;

        /**
         * Create a new job instance.
         *
         * @return void
         */
        public function __construct ($factory) {
            $this->factory = $factory;
        }

        /**
         * Execute the job.
         *
         * @return void
         */
        public function handle () {
            (new \App\lib\Factory($this->factory))->run($this);
        }
    }
