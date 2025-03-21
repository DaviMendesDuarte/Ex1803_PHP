<?php
    $nome = $_POST['nome'];
    $s = $_POST['s'];
    $ns = $_POST['ns'];
    $a = $_POST['a'];
    $na = $_POST['na'];

    $total = 0;
    $total2 = 0;

    switch($s)
    {
        case "1":
            $total += 4;
            break;
        case "2":
            $total += 6;
            break;
        case "3":
            $total += 2;
            break;
        case "4":
            $total += 12;
            break;
        case "5":
            $total += 15;
            break;
    }

    if ($ns >= 1)
    {
        $total = $total * $ns;
    }
    else
    {
        $total = $total;
    }

    switch($a)
    {
        case "1":
            $total2 += 7;
            break;
        case "2":
            $total2 += 8;
            break;
        case "3":
            $total2 += 10;
            break;
        case "4":
            $total2 += 13;
            break;
        case "5":
            $total2 += 20;
            break;
    }

    if ($na >= 1)
    {
        $total = $total + ($total2 * $na);
    }
    else
    {
        $total = $total;
    }

    echo "Olá ".$nome.", O total gasto foi de R$".$total;
?>