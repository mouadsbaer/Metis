<?php

    class form{
        public $donnees;
        private $titre;
        public $surrond = 'div style="padding:15px 0; width:90%;"';

        public function getTitre(){
            return $this->titre;
        }
        public function setTitre($titre){
            $this->titre = $titre;
        }
        public function formTitre(){
            return $this->surrond('<h1 style="color:green; font-weight:bold; font-size:4vmin; padding:10px 0; text-align:center;">'.((isset($this->titre)) ? $this->titre : '' ). '</h1>');
        }
        public function surrond($html){
            return "<{$this->surrond}>{$html}</{$this->surrond}>";
        }
        public function input($name){
            return $this->surrond('<input type="text" name="' . $name . '" style=" width:100%;padding: 12px; border:1px solid green;border-radius: 9px" placeholder="Veuillez saisir le ' . $name . '">');
        }
        public function submit(){
            return $this->surrond('<input type="submit" name="submit" value="Créer" style="background-color:green; width:50%;outline:none;border:none; padding:15px 0; text-align:center; color:whitesmoke; border-radius:5px; font-weight:600; margin-left:100px; margin-top:30px;justify-content:center;">');
        }
        public function __construct($donnees = array()){
            $this->donnes = $donnees;
        }
    }

?>

