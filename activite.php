<?php

    class Activite{
        private $id_activite;
        private $titre;
        private $date_assignation;
        private $status;
        private $id_projet;


        public function getIdActivite(){
            return $this->id_activite;
        }
        public function getTitre(){
            return $this->titre;
        }
        public function setTitre($titre){
            $this->titre = $titre;
        }
        public function getDateAssignation(){
            return $this->date_assignation 
        }
        public function setDateAssignation($date_assignation){
            $this->date_assignation = $date_assignation;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        public function getIdProjet(){
            return $this->id_projet;
        }
        public function setIdProjet($id_projet){
            $this->id_projet = $id_projet;
        }
    }

?>