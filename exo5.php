<?php
$tab = ["Le","Chat","Botté","de","Charles","Perrault"];
$petit;
$grand;
    function smallandbig($mot)
{
    return strlen($mot) ;
}
$tabsmbig = array_map('smallandbig', $tab);
print_r($tabsmbig);
?>