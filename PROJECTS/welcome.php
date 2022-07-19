
<html>
<body>

    <?php
    $car=$_POST['car'];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    if (isset($_POST["name"])) {
        echo "Welcome ".$name ."<br>";
    }
    if (isset($_POST["email"])) {
        echo "It appears that your E-mail is ".$email."<br>" ;
    }
    if (isset($_POST["username"])) {
        echo "Your Username ".$username." is seen by the public not your actual name."."<br>";
    }
   
    $string1 = "ferrari";
    if(preg_match("/{$string1}/i", $car)) {
        echo 'true';
    }
    
    $string2 = "lamborghini";
    if(preg_match("/{$string2}/i", $car)) {
        echo 'true';
    }
    
    
    $string3 = "pagani";
    if(preg_match("/{$string3}/i", $car)) {
        echo 'true';
    }
   
   
    $string4 = "maserati";
    if(preg_match("/{$string4}/i", $car)) {
        echo 'true';
    }
        
        
        elseif (isset($_POST["car"])) {
            echo $car. " is an average car";
        }
    ?>


</body>
</html>