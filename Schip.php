<?php

class Schip
{
    public string $naam;
    public int $gewicht;
    public int $lengte;

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
}
