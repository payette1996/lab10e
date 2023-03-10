<?php
declare(strict_types = 1);

/**********************************/
/* AJOUTEZ LA CLASSE "CLIENT" ICI */
/**********************************/

class Client {
    private string $courriel;
    private array $reservationArray;

    public function __construct(string $email) {
        $this->set_courriel($email);
        $this->reservationArray = [];
    }

    // SETTERS
    public function set_courriel(string $email) : void {
        if (filter_var($email)) {
            $this->courriel = (string) $email;
        } else {
            throw new Exception("Courriel invalide");
        }
    }

    // GETTERS
    public function get_courriel() : string {
        return $this->courriel;
    }

    public function get_nbReservations() : int {
        return count($this->reservationArray);
    }

    public function get_reservation(int $index) : object {
        if (array_key_exists($index, $this->reservationArray)) {
            return $this->reservationArray[$index];
        } else {
            return "Aucune réservation";
        }
    }

    // METHODS
    public function add_reservation(object $reservation) : void {
        $this->reservationArray[] = (object) $reservation;
    }

    public function delete_reservation(int $id) : void {
        $keys = array_keys($this->reservationArray);
        foreach($keys as $key => $value) {
            if($id == $value) {
                array_splice($this->reservationArray, $key, 1);
            }
        }
    }

    public function print_client_info() : string {
        $html = (string) "<strong>{$this->get_courriel()}</strong><ul>";

        $listItems = (string) "";
        foreach($this->reservationArray as $reservation) {
            $listItems .= (string) "<li>{$reservation->get_dateFin()}</li>";
        }

        $html .= (string) $listItems .= (string) "</ul>";

        return (string) $html;
    }
}
?>