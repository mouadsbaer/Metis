<?php
    class ProjetCourt extends Projet(){
        private $periode;
        private $priorite;

         public function getPeriode(){
            return $this->periode;
        }

        public function getPriorite(){
            return $this->priorite;
        }
        public function setPriorite($priorite){
            $this->priorite = $priorite;
        }
        public function setPeriode($periode){
            $this->periode = $periode;
        }
        public function __construct($id_projet = null,$titre, $date_debut, $date_fin, $status, $nbr_sprojets, $id_membre,$periode){
            $this->periode = $periode;
            $this->priorite = $priorite;
            parent::__construct($id_projet = null,$titre, $date_debut, $date_fin, $status, $nbr_sprojets, $id_membre, $type_projet);
        }
        
        
    }

?>