<?php
declare(strict_types=1);
/***************************************/
/* AJOUTEZ LA CLASSE "RESERVATION" ICI */
/***************************************/

require_once("classVoiture.php");

class Reservation {
    private string $dateDebut;
    private string $dateFin;
    private Voiture $voiture;

    public function __construct(string $dateDebut, string $dateFin, object $voiture) {
        $this->set_dateDebut($dateDebut);
        $this->set_dateFin($dateFin);
        $this->set_voiture($voiture);
    }

    // SETTERS
    public function set_dateDebut(string $dateDebut) : void {
        $this->dateDebut = $dateDebut;
    }

    public function set_dateFin(string $dateFin) : void {
        $this->dateFin = $dateFin;
    }

    public function set_voiture(object $voiture) : void {
        $this->voiture = $voiture;
    }

    // GETTERS
    public function get_dateDebut() : string {
        return $this->dateDebut;
    }

    public function get_dateFin() : string {
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
        $html = (string) "
            <ul>
                <li><strong>Date début : </strong>{$this->get_dateDebut()}</li>
                <li>Date fin : </strong>{$this->get_dateFin()}</li>
            </ul>
        ";
    }
}
?>