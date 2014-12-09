<?php
$cfgBase = "margo";
$cfgId = "root";
$cfgPwd = "joliverie";
$cfglocal = "localhost";

$link = mysql_connect($cfglocal,$cfgId, $cfgPwd) or die("errreur de connexion");
if(mysql_select_db($cfgBase, $link)){
    echo "selection de base de données impossible";
    exit();
}
mysql_query("SET NAMES UTF8");

?>