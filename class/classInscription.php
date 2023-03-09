<?php
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
        private bool $promotions;
        private bool $modalites;

        public function __construct(
            string $prenom,
            string $nom,
            string $courriel,
            string $motPasse,
            string $pays,
            string $adresse,
            string $ville,
            string $province,
            string $codePostal,
            string $typeTelephone,
            int $telephone,
            string $paysDelivrance,
            string $permis,
            string $dateNaissance,
            string $dateExpiration,
            bool $promotions,
            bool $modalites
        ) {
            $this->set_prenom($prenom);
            $this->set_nom($nom);
            $this->set_courriel($courriel);
            $this->set_motPasse($motPasse);
            $this->set_pays($pays);
            $this->set_adresse($adresse);
            $this->set_ville($ville);
            $this->set_province($province);
            $this->set_codePostal($codePostal);
            $this->set_typeTelephone($typeTelephone);
            $this->set_telephone($telephone);
            $this->set_paysDelivrance($paysDelivrance);
            $this->set_permis($permis);
            $this->set_dateNaissance($dateNaissance);
            $this->set_dateExpiration($dateExpiration);
            $this->set_promotions($promotions);
            $this->set_modalites($modalites);
        }

        // SETTERS
        public function set_prenom(string $prenom) : void {
            $this->prenom = $prenom;
        }

        public function set_nom(string $nom) : void {
            $this->nom = $nom;
        }

        public function set_courriel(string $courriel) : void {
            $this->courriel = $courriel;
        }

        public function set_motPasse(string $motPasse) : void {
            $this->motPasse = $motPasse;
        }

        public function set_pays(string $pays) : void {
            $this->pays = $pays;
        }

        public function set_adresse(string $adresse) : void {
            $this->adresse = $adresse;
        }  

        public function set_ville(string $ville) : void {
            $this->ville = $ville;
        }

        public function set_province(string $province) : void {
            $this->province = $province;
        }

        public function set_codePostal(string $codePostal) : void {
            $this->codePostal = $codePostal;
        }

        public function set_typeTelephone(string $typeTelephone) : void {
            $this->typeTelephone = $typeTelephone;
        }

        public function set_telephone(int $telephone) : void {
            $this->telephone = $telephone;
        }

        public function set_paysDelivrance(string $paysDelivrance) : void {
            $this->paysDelivrance = $paysDelivrance;
        }

        public function set_permis(string $permis) : void {
            $this->permis = $permis;
        }

        public function set_dateNaissance(string $dateNaissance) : void {
            $this->dateNaissance = $dateNaissance;
        }

        public function set_dateExpiration(string $dateExpiration) : void {
            $this->dateExpiration = $dateExpiration;
        }

        public function set_promotions(bool $promotions) : void {
            $this->promotions = $promotions;
        }

        public function set_modalites(bool $modalites) : string {
            return $this->modalites;
        }

        // GETTERS
        public function get_prenom(string $prenom) : string {
            return $this->prenom;
        }

        public function get_nom(string $nom) : string {
            return $this->nom;
        }

        public function get_courriel(string $courriel) : string {
            return $this->courriel;
        }

        public function get_motPasse(string $motPasse) : string {
            return $this->motPasse;
        }

        public function get_pays(string $pays) : string {
            return $this->pays;
        }

        public function get_adresse(string $adresse) : string {
            return $this->adresse;
        }  

        public function get_ville(string $ville) : string {
            return $this->ville;
        }

        public function get_province(string $province) : string {
            return $this->province;
        }

        public function get_codePostal(string $codePostal) : string {
            return $this->codePostal;
        }

        public function get_typeTelephone(string $typeTelephone) : string {
            return $this->typeTelephone;
        }

        public function get_telephone(int $telephone) : int {
            return $this->telephone;
        }

        public function get_paysDelivrance(string $paysDelivrance) : string {
            return $this->paysDelivrance;
        }

        public function get_permis(string $permis) : string {
            return $this->permis;
        }

        public function get_dateNaissance(string $dateNaissance) : string {
            return $this->dateNaissance;
        }

        public function get_dateExpiration(string $dateExpiration) : string {
            return $this->dateExpiration;
        }

        public function get_promotions(bool $promotions) : bool {
            return $this->promotions;
        }

        public function get_modalites(bool $modalites) : bool {
            return $this->modalites;
        }

        // METHODS
        public function print_inscription_info() : string {
            $html = (string) "
                <h1>Informations reçues !</h1>
                <ul>
                    <li><strong>Profil :</strong>
                        <ul>
                            <li>Prénom : {$this->prenom}</li>
                            <li>Nom : {$this->nom}</li>
                            <li>Courriel : {$this->courriel}</li>
                            <li>Mot de passe hashé :<br>{$this->motPasse}</li>
                        </ul>
                    </li>
                    <li><strong>Coordonnées :</strong>
                        <ul>
                            <li>Pays : {$this->pays}</li>
                            <li>Adresse : {$this->adresse}</li>
                            <li>Ville : {$this->ville}</li>
                            <li>Province : {$this->province}</li>
                            <li>Code Postal : {$this->codePostal}</li>
                            <li>Type de téléphone : {$this->typeTelephone}</li>
                            <li>Numéro de téléphone : {$this->telephone}</li>
                        </ul>
                    </li>
                    <li><strong>Informations du condeucteur :</strong>
                        <ul>
                            <li>Pays de délivrance : {$this->paysDelivrance}</li>
                            <li>Date de naissance : {$this->dateNaissance}</li>
                            <li>Numéro de permis : {$this->permis}</li>
                            <li>Date d'expiration : {$this->dateExpiration}</li>
                        </ul>
                    </li>
                    <li><strong>Préférences</strong>
                        <ul>
                            <li>Infolettre : {$this->promotions}</li>
                            <li>Modalités : {$this->modalites}</li>
                        </ul>
                    </li>
                </ul>
            ";

            return $html;
        }
    }
?>