<?php 
abstract class Product {
    protected $naam;
    protected $inkoopprijs;
    protected $btw;
    protected $omschrijving;

    public function __construct($naam, $inkoopprijs, $btw, $omschrijving) {
        $this->naam = $naam;
        $this->inkoopprijs = $inkoopprijs;
        $this->btw = $btw;
        $this->omschrijving = $omschrijving;
    }

    abstract public function berekenVerkoopprijs();

    abstract public function getProductInformatie();
}
class Music extends Product {
    private $artiest;
    private $nummers;

    public function __construct($naam, $inkoopprijs, $btw, $omschrijving, $artiest, $nummers) {
        parent::__construct($naam, $inkoopprijs, $btw, $omschrijving);
        $this->artiest = $artiest;
        $this->nummers = $nummers;
    }

    public function berekenVerkoopprijs() {
        // Implementeer verkoopprijsberekening voor muziek
    }

    public function getProductInformatie() {
        // Implementeer productinformatie voor muziek
    }
}

class Film extends Product {
    private $kwaliteit;

    public function __construct($naam, $inkoopprijs, $btw, $omschrijving, $kwaliteit) {
        parent::__construct($naam, $inkoopprijs, $btw, $omschrijving);
        $this->kwaliteit = $kwaliteit;
    }

    public function berekenVerkoopprijs() {
        // Implementeer verkoopprijsberekening voor films
    }

    public function getProductInformatie() {
        // Implementeer productinformatie voor films
    }
}

class Game extends Product {
    private $genre;
    private $minimaleHardwareEisen;

    public function __construct($naam, $inkoopprijs, $btw, $omschrijving, $genre, $minimaleHardwareEisen) {
        parent::__construct($naam, $inkoopprijs, $btw, $omschrijving);
        $this->genre = $genre;
        $this->minimaleHardwareEisen = $minimaleHardwareEisen;
    }

    public function berekenVerkoopprijs() {
        // Implementeer verkoopprijsberekening voor games
    }

    public function getProductInformatie() {
        // Implementeer productinformatie voor games
    }
}

?>
