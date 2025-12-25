<?php
    abstract class Projet{
        private $id_projet;
        private $titre;
        private $date_debut;
        private $date_fin;
        private $status;
        private $nbr_sprojets;
        private $type_projet;
        private $id_membre;

        public function getId(){
            return $this->id_projet;
        }
        public function setId($id_projet){
            $this->id_projet = $id_projet;
        }
        public function getTitre(){
            return $this->titre;
        }
        public function setTitre($titre){
            $this->titre = $titre;
        }
        public function getDateDebut(){
            return $this->date_debut;
        }
        public function setDateDebut($date_debut){
            $this->date_debut = $date_debut;
        }
        public function getDateFin(){
            return $this->date_fin;
        }
        public function setDateFin($date_fin){
            $this->date_fin = $date_fin;
        }
       
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        public function getNbrSprojets(){
            return $this->nbr_sprojets;
        }
        public function setNbrSprojets($nbr_sprojets){
            $this->nbr_sprojets = $nbr_sprojets;
        }
        public function getIdMembre(){
            return $this->id_membre;
        }
        public function setIdMembre($id_membre){
            $this->id_membre = $id_membre;
        }
        public function getType(){
            return $this->type_projet;
        }
        public function setType($type_projet){
            $this->type_projet = $type_projet;
        }
        public function __construct($id_projet = null,$titre, $date_debut, $date_fin, $status, $nbr_sprojets, $id_membre,$type_projet){
            $this->setIdProjet($id_projet);
            $this->setTitre($titre);
            $this->setDateDebut($date_debut);
            $this->setDateFin($date_fin);
            $this->setStaus($status);
            $this->setNbrSprojets($nbr_sprojets);
            $this->setIdMembre($id_membre);
            $this->setType($type_projet);
        }
    }

?>