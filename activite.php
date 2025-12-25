<?php
    class Activite{
        /**
         * @var int : la variable ou on va stocker les identifiants des instances de ce projet 
         */
        private $id_activite;
        /**
         * @var string : la variable ou on stocke les titres des instances de cette classe 
         */
        private $titre;
        /**
         * @var DATTIME : la variable ou on stocke les dates d'assignation des instances de cette classe 
         */
        private $date_assignation;
        /**
         * @var string : la variable ou on stocke les status des instances de cette classe
         */
        private $status;
        /**
         * @var int : la variable ou on stocke les clés de références des produits
         */
        private $id_projet;

        /**
         * @return int : permet de récupérer la valeur de l'id d'une instance de cette classe 
         */
        public function getIdActivite(){
            return $this->id_activite;
        }
        /**
         * @return string : permet de récupérer la valeur de titre d'une instance de cette classe
         */
        public function getTitre(){
            return $this->titre;
        }
        /**
         * @param : permet d'affecter une valeur à un titre d'une instance de cette classe
         */
        public function setTitre($titre){
            $this->titre = $titre;
        }
        /**
         * @return DATETIME : permet de récupérer la date d'assignation d'une activité à une instance de classe
         */
        public function getDateAssignation(){
            return $this->date_assignation 
        }
        /**
         * @param : permet d'affecter une valeur à la date d'assignation d'une instance de cette classe
         */
        public function setDateAssignation($date_assignation){
            $this->date_assignation = $date_assignation;
        }
        /**
         * @return string : permet de récupérer la valeur de status d'une instance de cette classe
         */
        public function getStatus(){
            return $this->status;
        }
        /**
         * @param : permet d'affecter une valeur aux status d'une instance de cette classe
         */
        public function setStatus($status){
            $this->status = $status;
        }
        /**
         * @return int : permet de récupérer la valeur de clés de références d'une instance de cette projet
         */
        public function getIdProjet(){
            return $this->id_projet;
        }
        /**
         * @param : permet de définir la valeur de clé de référence d'une instance de cette classe
         */
        public function setIdProjet($id_projet){
            $this->id_projet = $id_projet;
        }
        public function __construct($id_activite = null,$titre,$date_assignation,$status,$id_projet){
            $this->setTitre($id_activite);
            $this->setTitre($titre);
            $this->setDateAssignation($date_assignation);
            $this->setStatus($status);
            $this->setIdProjet($id_projet);
        }
    }
?>