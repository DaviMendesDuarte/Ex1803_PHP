<?php
    $total = $_POST['tg'];
    $tipo = $_POST['tipo'];
    $par = $_POST['par'];

    $total2;

    switch($tipo)
    {
        case "1":
            $total2 = $total - ($total * 0.1);
            break;
        case "2":
            if ($par <= 3)
            {
                $total2 = $total;
            }
            else if ($par >= 4 && $par <= 6)
            {
                $total2 = $total + ($total * 0.1);
            }
            else if ($par > 6)
            {
                $total2 = $total + ($total * 0.2);
            }
            break;
    }

    echo "O total gasto foi de R$".$total2;
?>