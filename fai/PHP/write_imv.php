<?php
    include("connect.php");

    $actID = $_POST[0];

    $selRegq = "SELECT * FROM imoveis WHERE nreg= '".$actID."'";
    $raw_regs = $cnx->query("$selRegq");

    while($rrow = $raw_regs->fetch_assoc()) {
        echo "Reg nº: ", $rrow["nreg"];
    }
    
?>