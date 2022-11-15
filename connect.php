<?php

$server ="localhost";
$username = "root";
$password = "";
$database = "easy farming fyp";

$connect = mysqli_connect($server, $username, $password, $database);

if($connect){
    ?>
<script>
// alert("Connection Successful...");
</script>
<?php
}
else{
    ?>
<script>
alert("Connection did not success".mysqli_connect_error());
</script>
<?php
}
?>