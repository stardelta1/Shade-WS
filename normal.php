<?php

     $host = '127.0.0.1';
     $user = 'root';
     $db = 'androidreg';
     $pass = '';
 
    //$this -> conn = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db, $this -> user, $this -> pass);
    $conn =  mysqli_connect($host, $user, $pass, $db);
        if($conn) {
            echo  "Connection successuful";
            echo "<br>";
        }else{
            
            echo "could not connect";
        }
    
        $sql = mysqli_query($conn,'SELECT email from user');
       while ($data = mysqli_fetch_array($sql)){
          echo $data['email'];
       }
    

//checkUserExist("mali@music.com");
?> 
