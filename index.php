<?php

class StartApplication {
    private static StartApplication $instance;


    private function __construct() {

    }


    public static function getInstance(): StartApplication
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }



    public function start(): void
    {

    }
}

$app = StartApplication::getInstance();
$app->start();