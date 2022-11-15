<?php

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$databaseName = "easy farming fyp" ;

$connection = mysqli_connect($server,$username,$password,$databaseName);

// to check if the connection succeeded  
if($connection){
    ?>
<script>
// alert("Connection with database was succcessful");
</script>
<?php
}
// if the connection fails in any case
else{
// echo "Connection was not successful";
die("Connection was not successful". mysqli_connect_error());
}

?>