<?php
require_once 'Engines/Pelleteuse.php';
require_once 'Engines/Tractopelle.php';
require_once 'Engines/Nacelle.php';
require_once 'Engines/Buldozer.php';
require_once 'Engines/RouleauCompresseur.php';

class EngineFactory {
    public static function createEngine($type) {
        switch ($type) {
            case 'Pelleteuse':
                return new Pelleteuse();
            case 'Tractopelle':
                return new Tractopelle();
            case 'Nacelle':
                return new Nacelle();
            case 'Bulldozer':
                return new Bulldozer();
            case 'Rouleau Compresseur':
                return new RouleauCompresseur();
            default:
                throw new Exception("Type d'engin inconnu : $type");
        }
    }
}
