<?php

include_once 'dbconnect.php';?>
<?php
if (isset($_GET['id'])) {
	echo $_GET['id'];
}

else {echo "daymn!";}
?>