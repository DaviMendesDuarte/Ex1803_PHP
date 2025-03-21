<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <fieldset>
        <legend>Lanchonete</legend>
        <form method="post" action="calcular.php">  
            Insira o seu nome:
            <input type="text" name="nome" size="25">
            <br> <br>
            1 – X Burguer (R$6,00) <br>
            2 – X Salada (R$8,00) <br>
            3 – X Bacon (R$10,00) <br>
            4 – X Tudo (R$12,00) <br>
            5 – X Duplo (R$15,00) <br>
            <br>
            Insira qual lanche você deseja:
            <input type="text" name="l" size="25">
            <br>
            Insira o número de lanches que você deseja:
            <input type="text" name="nl" size="25">
            <br> <br>
            1 – Água (R$2,00) <br>
            2 – Suco (R$5,00) <br>
            3 – Lata (R$3,00) <br>
            4 – 600 ml (R$5,00) <br>
            5 – 2 Litros (R$8,00) <br>  
            <br>
            Insira qual bebida você deseja:
            <input type="text" name="b" size="25">
            <br>
            Insira o número de bebidas que você deseja:
            <input type="text" name="nb" size="25">
            <br>
            <input type="submit" name="mostrarTotal" value="Mostral Total">
        </form>
    </fieldset>
</body>

</html>