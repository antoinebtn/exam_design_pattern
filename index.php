<?php 

require_once 'BoxManager.php';
require_once 'EngineFactory.php';

$boxManager = new BoxManager();

$enginefactory = new EngineFactory();

$engines = [
    EngineFactory::createEngine('Pelleteuse'),
    EngineFactory::createEngine('Pelleteuse'),
    EngineFactory::createEngine('Pelleteuse'),
    EngineFactory::createEngine('Pelleteuse'),
    EngineFactory::createEngine('Pelleteuse'),
    EngineFactory::createEngine('Pelleteuse'),
    EngineFactory::createEngine('Tractopelle'),
    EngineFactory::createEngine('Nacelle'),
    EngineFactory::createEngine('Bulldozer'),
    EngineFactory::createEngine('Rouleau Compresseur'),
    EngineFactory::createEngine('Tractopelle'),
    EngineFactory::createEngine('Nacelle')
];

foreach ($engines as $engine) {
    $boxManager->addEngineToBox($engine);
}

$boxManager->displayBoxes();
?>