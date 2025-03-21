<?php
    $nome = $_POST['nome'];
    $l = $_POST['l'];
    $nl = $_POST['nl'];
    $b = $_POST['b'];
    $nb = $_POST['nb'];

    $total = 0;
    $total2 = 0;

    switch($l)
    {
        case "1":
            $total += 6;
            break;
        case "2":
            $total += 8;
            break;
        case "3":
            $total += 10;
            break;
        case "4":
            $total += 12;
            break;
        case "5":
            $total += 15;
            break;
    }

    if ($nl >= 1)
    {
        $total = $total * $nl;
    }
    else
    {
        $total = $total;
    }

    switch($b)
    {
        case "1":
            $total2 += 2;
            break;
        case "2":
            $total2 += 5;
            break;
        case "3":
            $total2 += 3;
            break;
        case "4":
            $total2 += 5;
            break;
        case "5":
            $total2 += 8;
            break;
    }

    if ($nb >= 1)
    {
        $total = $total + ($total2 * $nb);
    }
    else
    {
        $total = $total;
    }

    echo "Olá ".$nome.", O total gasto foi de R$".$total;
?>