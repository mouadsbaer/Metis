<?php
    class membre{

        // Les propriétés de classe membre :
        /**
         * @var int permet de définir l'identifiant d'un membre
         */
        private $id_membre;
        /**
         * @var string permet de définir le nom complet d'un membre
         */
        private $nom_complet;
        /**
         * @var string permet de définir l'email d'un membre
         */
        private $email;
        /**
         * @var string permet de définir le numéro de téléphone d'un membre
         */
        private $telephone;
        /**
         * @var bool permet de savoir si un membre assigné à un projet ou pas
         */
        private $assigne = false;
        /**
         * @var DATTIME, permet d'identifier la date d'inscription d'un membre
         */
        private $date_inscription;



        // Les méthodes de classe membre :

        /**
         * @return int permet de récupérer l'identifiant d'une instance de cette classe :
         */
        public function getId(){
            return $this->id_membre;
        }

        /**
         * @return string, représente le nom d'une instance de classe membre :
         */
        public function getNom(){
            return $this->nom_complet;
        }

        /**
         * @param int $nom_complet, représente le nom complet à affecter à une instance de classe membre :
         */
        public function setNom($nom_complet){
            $this->nom_complet = $nom_complet;
        }

        /**
         * @return string, représente l'email d'un instance de classe membre :
         */
        public function getEmail(){
            return $this->email;
        }
        /**
         * @param string $email, représente l'email à affecter à une instance de classe membre :
         */
        public function setEmail($email){
            $this->email = $email
        }
        /**
         * @return string , représente le numéro de téléphone d'une instance de cette classe :
         */
        public function getTelephone(){
            return $this->telephone;
        }

        /**
         * @param string, représente la valeur à affecter à la propriété telephone d'une instance de cette classe :
         */
        public function setTelephne($telephone){
            $this->telephone = $telephone;
        }
        /**
         * @return DATETIME, représente la date d'inscription d'une instance de cette classe :
         */
        public function getDateInscription(){
            return $this->date_inscription;
        }
        /**
         * @param DATETIME , représente la valeur à affecter à la propriété date_inscription d'une instance de cette classe :
         */
        public function setDateInscription($date_inscription){
            $this->date_inscription = $date_inscription;
        }
        /**
         * @return bool , permet de stocker si un membre a assigné à un projet ou pas :
         */
        public function getAssigne(){
            return $this->assigne;
        }
        /**
         *@param string, permet de choisir entre oui, il est assigné à un projet ou non il n'a pas assigné :
         */
        public function setAssigne($assigne){
            if($assigne == 'oui'){
                $this->assigne = true;
            }
            elseif($assigne == 'non'){
                $this->assigne = false;
            }
        }


        /**
         * @param string représente le nom complet d'une instance de cette classe
         * @param string représente l'email d'une instance de cette classe
         * @param string représente le numéro de téléphone d'une instance de cette classe
         * @param DATETIME représente la date d'inscription d'une instance de cette classe
         * @param string représente l'état d'assignation d'un projet à une instance de cette classe
         */
        public function __construct($nom, $email,$telephone, $date_inscription, $assigne){
            $this->setNom($nom);
            $this->setEmail($email);
            $this->setTelephone($telephone);
            $this->setDateInscription($date_inscription);
            $this->setAssigne($assigne);
        }
    }

?>