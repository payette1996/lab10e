<?php
    /***************************************/
    /* AJOUTEZ LA CLASSE "RESERVATION" ICI */
    /***************************************/

    require_once("classVoiture.php");

    class Reservation {
        private string $dateDebut;
        private string $dateFin;
        private Voiture $voiture;

        public function __construct(string $dateDebut, string $dateFin, object $voiture) {
            $this->dateDebut = $dateDebut;
            $this->dateFin = $dateFin;
            $this->voiture = $voiture;
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

        
        // METHODS

    }
?>