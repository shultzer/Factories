<?php

    namespace App\lib\interfaces;

    Interface FactoryInterface
    {

        public function __construct ($factory);

        public function run ($job);

        public function getResources ($recipe, $job);

        public function makeProduct ($recipe);

    }