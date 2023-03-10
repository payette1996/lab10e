<?php
declare(strict_types=1);
/***********************************/
/* AJOUTEZ LA CLASSE "VOITURE" ICI */
/***********************************/

class Voiture {
    private int $id;
    private string $marque;
    private string $modele;
    private string $categorie;
    private int $nbPassager;
    private string $image;
    private string $description;

    public function __construct(array $voiture) {
        foreach($voiture as $key => $value) {
            $method = "set_$key";
            $this->$method($value);
        }
    }

    // SETTERS
    public function set_id(int $id) : void {
        $this->id = $id;
    }

    public function set_marque(string $marque) : void {
        $this->marque = $marque;
    }

    public function set_modele(string $modele) : void {
        $this->modele = $modele;
    }

    public function set_categorie(string $categorie) : void {
        $this->categorie = $categorie;
    }

    public function set_nbPassager(int $nbPassager) : void {
        $this->nbPassager = $nbPassager;
    }

    public function set_image(string $image) : void {
        $this->image = $image;
    }

    public function set_description(string $description) : void {
        $this->description = $description;
    }

    // GETTERS
    public function get_id() : int {
        return $this->id;
    }

    public function get_marque() : string {
        return $this->marque;
    }

    public function get_modele() : string {
        return $this->modele;
    }

    public function get_categorie() : string {
        return $this->categorie;
    }

    public function get_nbPassager() : int {
        return $this->nbPassager;
    }

    public function get_image() : string {
        return $this->image;
    }

    public function get_description() : string {
        return $this->description;
    }

    // METHODS
    public function print_voiture_info() : string {
        $html = (string) "
            <ul>
                <li>ID : {$this->get_id()}</li>
                <li>Marque : {$this->get_marque()}</li>
                <li>Modèle : {$this->get_modele()}</li>
                <li>Catégorie : {$this->get_categorie()}</li>
                <li>Nombre de passagers : {$this->get_nbPassager()}</li>
                <li>Image : <img src='{$this->get_image()}'></li>
                <li>Description : {$this->get_description()}</li>
            </ul>
        ";

        return $html;
    }
}
?>