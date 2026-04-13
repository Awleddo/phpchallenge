<?php
require_once 'container.php';

class Schip
{
    public string $naam;
    public int $gewicht;
    public int $lengte;
    private array $containers = [];

    public function __construct(string $naam, int $gewicht, int $lengte)
    {
        $this->naam = $naam;
        $this->gewicht = $gewicht;
        $this->lengte = $lengte;
    }

    public function toonInfo(): void
    {
        echo "Naam: " . $this->naam . "<br>";
        echo "Gewicht: " . $this->gewicht . " ton<br>";
        echo "Lengte: " . $this->lengte . " meter<br>";
        echo "Groot schip: " . ($this->isGroot() ? "Ja" : "Nee") . "<br><br>";
    }

    public function isGroot(): bool
    {
        return $this->lengte > 200;
    }

    public function voegContainerToe(Container $container): void
    {
        $this->containers[] = $container;
    }

    public function toonContainers(): void
    {
        echo 'Containers op dit schip:<br>';

        if (count($this->containers) === 0) {
            echo 'Geen containers<br>';
            return;
        }

        foreach ($this->containers as $container) {
            $inhoud = $container->getContent();
            echo 'Inhoud: ' . ($inhoud ?? 'Container is op slot') . '<br>';
        }
    }
}
