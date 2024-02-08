<?php
// Code van Ouail
class Huis {
    private $Vloer;
    private $kamers;
    private $kubiek;
    private $width;
    private $height;
    

    public function printDetails() {
        echo "Aantal verdiepingen: " . $this->Vloer . "<br>";
        echo "Aantal kamers: " . $this->kamers . "<br>";
        echo "Kubieke meters: " . $this->kubiek . "<br>";
        echo "Prijs: €" . $this->Berekenprijs() . "<br><br>";
        
    }
    

    public function __construct($Vloer, $kamers, $kubiek) {
        $this->Vloer = $Vloer;
        $this->kamers = $kamers;
        $this->kubiek = $kubiek;
        
    }

    public function berekenprijs() {
        //  berekening
        $prijsperkubiekemeter = 500; 
        return $this->kubiek * $prijsperkubiekemeter;
    }

    
}
// Maak 3 huizen
$Huis1 = new Huis(2, 4, 400); 
$Huis2 = new Huis(1, 3, 192); 
$Huis3 = new Huis(3, 6, 720); 

// Print alles van de huizen
$Huis1->printDetails();
$Huis2->printDetails();
$Huis3->printDetails();

?>