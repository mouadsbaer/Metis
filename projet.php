<?php
    class Projet{
        private $id_projet;
        private $titre;
        private $date_debut;
        private $date_fin;
        private $periode;
        private $status;
        private $nbr_sprojets;
        private $id_membre;

        public function getId(){
            return $this->id_projet;
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
        public function getPeriode(){
            return $this->periode;
        }
        public function setPeriode($periode){
            $this->periode = $periode;
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
        public function detNbrSprojets($nbr_sprojets){
            $this->nbr_sprojets = $nbr_sprojets;
        }
        public function getIdMembre(){
            return $this->id_membre;
        }
        public function setIdMembre($id_membre){
            $this->id_membre = $id_membre;
        }
    }

?>