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

    public function set_courriel(string $email) : void {
        if (filter_var($email)) {
            $this->courriel = (string) $email;
        } else {
            throw new Exception("Courriel invalide");
        }
    }

    public function get_courriel() : string {
        return $this->courriel;
    }

    public function get_nbReservations() : int {
        return count($this->reservationArray);
    }

    public function get_reservation(int $index) : object {
        if (array_key_exists($index, $this->reservationArray))
            return $this->reservationArray[$index];
    }

    public function add_reservation(object $reservation) : void {
        $this->reservationArray[] = (object) $reservation;
    }

    public function delete_reservation(object $reservation) : void {
        foreach ($this->reservationArray as $key => $value) {
            if ($reservation === $value)
                unset($this->reservationArray[$key]);
        }
    }

    public function print_client_info() : string {
        $html = (string) "<strong>{$this->courriel}</strong><ul>";

        $listItems = (string) "";
        foreach($this->reservationArray as $reservation) {
            $listItems .= (string) "<li>{$reservation->dateFin}</li>";
        }

        $html .= (string) $listItems .= (string) "</ul>";

        return (string) $html;
    }
}
?>