<?php
    class ProjetCourt extends Projet(){
        private $periode;


         public function getPeriode(){
            return $this->periode;
        }
        public function setPeriode($periode){
            $this->periode = $periode;
        }
        public function __construct($id_projet = null,$titre, $date_debut, $date_fin, $status, $nbr_sprojets, $id_membre,$periode){
            $this->periode = $periode;
            parent::__construct($id_projet = null,$titre, $date_debut, $date_fin, $status, $nbr_sprojets, $id_membre);
        }
    }

?>