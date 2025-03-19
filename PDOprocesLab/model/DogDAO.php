<?php
    include_once 'Dog.php';

    class DogDAO {

        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "doguser", "dogpass","dogsDB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function getDogs(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM dogs;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $dog = new Dog();
                $dog->load($row);
                $dogs[]=$dog;
            }    
            $stmt->close();
            $connection->close();
            return $dogs;
        }
    }
?>