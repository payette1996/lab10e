<?php
declare(strict_types=1);
/***************************************/
/* AJOUTEZ LA CLASSE "RESERVATION" ICI */
/***************************************/

require_once("classVoiture.php");

class Reservation {
    private object $dateDebut;
    private object $dateFin;
    private Voiture $voiture;

    public function __construct(string $dateDebut, string $dateFin, object $voiture) {
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->voiture = $voiture;
    }

    // SETTERS
    public function set_dateDebut(object $dateDebut) : void {
        if ($this->validateDate($dateDebut)) {
            $this->dateDebut = $dateDebut;
        } else {
            throw new Exception("Date invalide");
        }
    }

    public function set_dateFin(string $dateFin) : void {
        $this->dateFin = $dateFin;
    }

    public function set_voiture(object $voiture) : void {
        $this->voiture = $voiture;
    }

    // GETTERS
    public function get_dateDebut() : object {
        return $this->dateDebut;
    }

    public function get_dateFin() : object {
        return $this->dateFin;
    }

    public function get_voiture() : object {
        return $this->voiture;
    }

    // METHODS
    public function validateDate(object $date) : bool {
        if ($date->format("Y-m-d"))
            return true;

        return false;
    }

    public function print_reservation_info() /*:string*/ {
        $html = (string) "";
    }
}
?>