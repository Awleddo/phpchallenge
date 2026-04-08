<?php


class Vuurtoren {
    public $naam;
    public $hoogte;

    public function __construct($naam, $hoogte) {
        $this->naam = $naam;
        $this->hoogte = $hoogte;
    }

    public function info() {
        return "Vuurtoren {$this->naam} is {$this->hoogte} meter hoog.";
    }
}



class Haven {
    public $postcode;
    public $locatie;
    public $vuurtoren; // branch (object)

    public function __construct($postcode, $locatie, Vuurtoren $vuurtoren) {
        $this->postcode = $postcode;
        $this->locatie = $locatie;
        $this->vuurtoren = $vuurtoren;
    }

    public function info() {
        return "Haven in {$this->locatie} ({$this->postcode}) met " . $this->vuurtoren->info();
    }
}



$vuurtoren = new Vuurtoren("De Noord", 35);
$haven = new Haven("1234AB", "Rotterdam", $vuurtoren);

echo $haven->info();

?>
