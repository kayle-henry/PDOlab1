<?php
    class Dog{
        private $dogID;
        private $ownerName;
        private $dogName;
        private $dogColor;
        private $dogBreed;
        private $dogAge;

        public function load($row){
            $this->setDogID($row['dogID']);
            $this->setOwnerName($row['ownerName']);
            $this->setDogName($row['dogName']);
            $this->setDogColor($row['dogColor']);
            $this->setDogBreed($row['dogBreed']);
            $this->setDogAge($row['dogAge']);
        }

        public function setDogID($dogID){
            $this->dogID=$dogID;
        }

        public function getDogID(){
            return $this->dogID;
        }

        public function setOwnerName($ownerName){
            $this->ownerName=$ownerName;
        }

        public function getOwnerName(){
            return $this->ownerName;
        }

        public function setDogName($dogName){
            $this->dogName=$dogName;
        }

        public function getDogName(){
            return $this->dogName;
        }
        public function setDogColor($dogColor){
            $this->dogColor=$dogColor;
        }

        public function getDogColor(){
            return $this->dogColor;
        }
        public function setDogBreed($dogBreed){
            $this->dogBreed=$dogBreed;
        }

        public function getDogBreed(){
            return $this->dogBreed;
        }
        public function setDogAge($dogAge){
            $this->dogAge=$dogAge;
        }

        public function getDogAge(){
            return $this->dogAge;
        }
    }
?>
