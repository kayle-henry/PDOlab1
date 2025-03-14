//get user password in a form to access the database ,view ,controller ,model
//login.php //MVCModel GitHub

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

        public function addDog($dog){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO dogs (ownerName, dogName, dogBreed, dogColor, dogAge) VALUES (?, ?)");
            $stmt->bind_param("ss", $dog->getUsername(), $dog->getEmail());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getContacts(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM contacts;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $contact = new Contact();
                $contact->load($row);
                $contacts[]=$contact;
            }    
            $stmt->close();
            $connection->close();
            return $contacts;
        }



    }
?>


    }
?>
