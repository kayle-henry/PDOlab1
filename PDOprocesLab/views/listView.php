<?php
    require 'model/DogDAO.php';

    $dogDAO = new DogDAO();
    $dogs=$dogDAO->getDogs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand" href="listContacts.php">
    </a>
    </nav>
    <div class="container">
        <div class="col">
        
            <table class="table table-bordered table-striped">
                <thead><tr><th>Dog ID</th><th>Owner Name</th><th>Dog Name</th><th>Dog Breed</th><th>Color</th><th>Age</th></tr></thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($dogs);$index++){
                            echo "<tr><td>".$dogs[$index]->getDogID()."</td><td>"
                                    .$dogs[$index]->getOwnerName()."</td><td>"
                                    .$dogs[$index]->getDogName()."</td><td>"
                                    .$dogs[$index]->getDogBreed()."</td><td>"
                                    .$dogs[$index]->getDogColor()."</td><td>"
                                    .$dogs[$index]->getDogAge()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>       
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>