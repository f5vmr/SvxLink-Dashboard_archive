<?php

include "config/config.php";
include "include/tools.php";
include "include/functions.php";

$configs = getSvxConfig();
$txStatus = getSvxTGLines();

if (strpos($txStatus,"#")) {
	
	echo "<tr><td class=\"table-danger text-center\"></td></tr>";
} else {
	echo "<tr><td class=\"table-success text-center\"></td></tr>";
}


?>
