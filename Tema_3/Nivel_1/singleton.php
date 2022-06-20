<?php

class tiggerSingleTon
{
    private static $instance;
    private $counter;

    private function __construct()

    // definimos el constructor como privado para evitar que pueda ser llamado desde fuera de la clase
    {
        echo 'Contruyendo objeto..'.PHP_EOL;
    }

    public static function getInstance()
    {
        // comprueba que no exista un objeto creado previamente

        if (self::$instance == null) {   
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function roar() {

for ($i = 0; $i <= 2; $i++) {

    echo "Grrr!" .PHP_EOL;

// Aumenta en +1 el contador

    $this->counter++;

}} 
    public function getCounter()
    {
        return $this->counter;
    }
}

tiggerSingleTon::getInstance()->roar();

echo tiggerSingleTon::getInstance()->getCounter(). " rugidos";
