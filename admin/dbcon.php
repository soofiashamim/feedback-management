<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "feedback_system";


$con = mysqli_connect($server, $user, $password, $db);

if($con){
    ?>
    <!-- <script>
        alert("CONNECTION SUCCESSFUL")
    </script> -->
    <?php
}else{
    ?>
    <script>
        alert("NO CONNECTION")
    </script>
    <?php
}

?>