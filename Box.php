<?php 

class Box {
    public $engines = [];

    public function addEngine(Engine $engine) {
        if (count($this->engines) < 8) {
            $this->engines[] = $engine;
            return true;
        } else {
            return false;
        }
    }

    public function canAddEngineOfType($type) {
        $types = ['Pelleteuse', 'Tractopelle', 'Nacelle', 'Bulldozer', 'Rouleau compresseur'];
        unset($types[array_search($type, $types)]);

        foreach ($this->engines as $key => $engine) {
            $engineType = $engine->type;
            unset($types[array_search($engineType, $types)]);
        }

        if (count($this->engines) + count($types) < 8) {
            return true;
        } else {
            return false;
        }
    }
}