<?php
declare(strict_types=1);
/***************************************/
/* AJOUTEZ LA CLASSE "INSCRIPTION" ICI */
/***************************************/

class Inscription {
    private string $prenom;
    private string $nom;
    private string $courriel;
    private string $motPasse;
    private string $pays;
    private string $adresse;
    private string $ville;
    private string $province;
    private string $codePostal;
    private string $typeTelephone;
    private int $telephone;
    private string $paysDelivrance;
    private string $permis;
    private string $dateNaissance;
    private string $dateExpiration;
    private string $promotions = "Non";
    private string $modalites = "Non";

    public function __construct(array $user) {
        foreach($user as $key => $value) {
            $method = "set_$key";
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // SETTERS
    public function set_prenom(string $prenom) : void {
        $this->prenom = (string) $prenom;
    }

    public function set_nom(string $nom) : void {
        $this->nom = (string) $nom;
    }

    public function set_courriel(string $courriel) : void {
        $this->courriel = (string) $courriel;
    }

    public function set_motPasse(string $motPasse) : void {
        $this->motPasse = (string) password_hash($motPasse, PASSWORD_DEFAULT);
    }

    public function set_pays(string $pays) : void {
        $this->pays = (string) $pays;
    }

    public function set_adresse(string $adresse) : void {
        $this->adresse = (string) $adresse;
    }  

    public function set_ville(string $ville) : void {
        $this->ville = (string) $ville;
    }

    public function set_province(string $province) : void {
        $this->province = (string) $province;
    }

    public function set_codePostal(string $codePostal) : void {
        $this->codePostal = (string) $codePostal;
    }

    public function set_typeTelephone(string $typeTelephone) : void {
        $this->typeTelephone = (string) $typeTelephone;
    }

    public function set_telephone(string $telephone) : void {
        $this->telephone = (int) intval($telephone);
    }

    public function set_paysDelivrance(string $paysDelivrance) : void {
        $this->paysDelivrance = (string) $paysDelivrance;
    }

    public function set_permis(string $permis) : void {
        $this->permis = (string) $permis;
    }

    public function set_dateNaissance(string $dateNaissance) : void {
        $this->dateNaissance = (string) $dateNaissance;
    }

    public function set_dateExpiration(string $dateExpiration) : void {
        $this->dateExpiration = (string) $dateExpiration;
    }

    public function set_promotions(string $promotions) : void {
        $this->promotions = (string) $promotions;
    }

    public function set_modalites(string $modalites) : void {
        $this->modalites = (string) $modalites;
    }

    // GETTERS
    public function get_prenom() : string {
        return $this->prenom;
    }

    public function get_nom() : string {
        return $this->nom;
    }

    public function get_courriel() : string {
        return $this->courriel;
    }

    public function get_motPasse() : string {
        return $this->motPasse;
    }

    public function get_pays() : string {
        return $this->pays;
    }

    public function get_adresse() : string {
        return $this->adresse;
    }  

    public function get_ville() : string {
        return $this->ville;
    }

    public function get_province() : string {
        return $this->province;
    }

    public function get_codePostal() : string {
        return $this->codePostal;
    }

    public function get_typeTelephone() : string {
        return $this->typeTelephone;
    }

    public function get_telephone() : int {
        return $this->telephone;
    }

    public function get_paysDelivrance() : string {
        return $this->paysDelivrance;
    }

    public function get_permis() : string {
        return $this->permis;
    }

    public function get_dateNaissance() : string {
        return $this->dateNaissance;
    }

    public function get_dateExpiration() : string {
        return $this->dateExpiration;
    }

    public function get_promotions() : string {
        return $this->promotions;
    }

    public function get_modalites() : string {
        return $this->modalites;
    }

    // METHODS
    public function print_inscription_info() : void {
        $html = (string) "
            <ul>
                <li><strong>Profil :</strong>
                    <ul>
                        <li>Pr??nom : {$this->get_prenom()}</li>
                        <li>Nom : {$this->get_nom()}</li>
                        <li>Courriel : {$this->get_courriel()}</li>
                        <li>Mot de passe hash?? :<br>{$this->get_motPasse()}</li>
                    </ul>
                </li>
                <li><strong>Coordonn??es :</strong>
                    <ul>
                        <li>Pays : {$this->get_pays()}</li>
                        <li>Adresse : {$this->get_adresse()}</li>
                        <li>Ville : {$this->get_ville()}</li>
                        <li>Province : {$this->get_province()}</li>
                        <li>Code Postal : {$this->get_codePostal()}</li>
                        <li>Type de t??l??phone : {$this->get_typeTelephone()}</li>
                        <li>Num??ro de t??l??phone : {$this->get_telephone()}</li>
                    </ul>
                </li>
                <li><strong>Informations du condeucteur :</strong>
                    <ul>
                        <li>Pays de d??livrance : {$this->get_paysDelivrance()}</li>
                        <li>Date de naissance : {$this->get_dateNaissance()}</li>
                        <li>Num??ro de permis : {$this->get_permis()}</li>
                        <li>Date d'expiration : {$this->get_dateExpiration()}</li>
                    </ul>
                </li>
                <li><strong>Pr??f??rences</strong>
                    <ul>
                        <li>Infolettre : {$this->get_promotions()}</li>
                        <li>Modalit??s : {$this->get_modalites()}</li>
                    </ul>
                </li>
            </ul>
        ";

        echo $html;
    }
}
?>