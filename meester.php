<?php

require_once 'Schip.php';
require_once 'container.php';

class Meester
{
    private array $haven = [];

    public function voegSchipToe(string $sleutel, Schip $schip): void
    {
        $this->haven[$sleutel] = $schip;
    }

    public function toonOverzicht(): void
    {
        foreach ($this->haven as $sleutel => $schip) {
            echo 'Havenpositie: ' . $sleutel . '<br>';
            $schip->toonInfo();
            $schip->toonContainers();
            echo '<br>';
        }
    }
}
?>
