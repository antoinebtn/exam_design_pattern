<?php

require_once 'Box.php';

class BoxManager {
    public $boxes = [];

    public function addBox(Box $box) {
        $this->boxes[] = $box;
    }

    public function addEngineToBox(Engine $engine) {
        foreach ($this->boxes as $box) {
            if ($box->canAddEngineOfType($engine->type)) {
                if (count($box->engines) < 8){
                    if ($box->addEngine($engine)) {
                        return true;
                    }
                }
            }
        }

        $newBox = new Box();
        $newBox->addEngine($engine);
        $this->addBox($newBox);
        return true;
    }

    public function displayBoxes() {
        foreach ($this->boxes as $index => $box) {
            echo "Box " . ($index + 1) . ":\n";
            foreach ($box->engines as $engine) {
                echo "- " . $engine->type . "\n";
            }
            echo "\n";
        }
    }
}
