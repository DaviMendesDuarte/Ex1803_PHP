<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <fieldset>
        <legend>Sorveteria</legend>
        <form method="post" action="calcular.php">  
            Insira o seu nome:
            <input type="text" name="nome" size="25">
            <br> <br>
            1 – Casquinha (R$4,00) <br>
            2 – Cascão (R$6,00) <br>
            3 – Picolé (R$2,00) <br>
            4 – Milk Shake 100ml (R$12,00) <br>
            5 – milk Shake 250ml (R$15,00) <br>
            <br>
            Insira qual sorvete você deseja:
            <input type="text" name="s" size="25">
            <br>
            Insira a quantidade que você deseja:
            <input type="text" name="ns" size="25">
            <br> <br>
            1 – Açái 300ml (R$7,00) <br>
            2 – Açaí 400ml (R$8,00) <br> 
            3 – Açái 500ml (R$10,00) <br>
            4 – Açái 700ml (R$13,00) <br>
            5 – Açaí 1l (R$20,00) <br>  
            <br>
            Insira qual açaí você deseja:
            <input type="text" name="a" size="25">
            <br>
            Insira a quantidade que você deseja:
            <input type="text" name="na" size="25">
            <br>
            <input type="submit" name="mostrarTotal" value="Mostral Total">
        </form>
    </fieldset>
</body>

</html>