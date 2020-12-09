<?php

    namespace app\core;

    class Router {

        private $uriEx;

        public function __construct() {

            $this->init();
            
        }

        private function init() {

            $uri = $_SERVER['REQUEST_URI'];

            $this->uriEx = $uri;

            dd($uri);
        }
    }