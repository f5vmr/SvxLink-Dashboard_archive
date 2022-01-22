<?php

include "config/config.php";
include "include/tools.php";
include "include/functions.php";

$configs = getSvxConfig();
$txStatus = getSvxTXLines();

if (strpos($txStatus,"TG")) {
	echo "<tr><td class=\"table-danger text-center\"></td></tr>";
} else {
	echo "<tr><td class=\"table-success text-center\"></td></tr>";
}


?>
