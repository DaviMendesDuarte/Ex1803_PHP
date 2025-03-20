<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <fieldset>
        <legend>Total gasto</legend>
        <form method="post" action="calcular.php">  
            Insira o total gasto:
            <input type="text" name="tg" size="25">
            <br>
            <br>
            Insira a forma de pagamento:
            <select name="tipo" id="tipo">
                <option value="1">À vista</option>
                <option value="2">Parcelado</option>
            </select>
            <br>
            <br>
            Se for parcelado, insira quantas parcelas:
            <input type="text" name="par" size="25">
            <br>
            - À vista: 10% de desconto <br>
            - Parcelado até 3x: Sem juros <br>
            - Parcelado de 4x a 6x: 10% de juros <br>
            - Parcelado acima de 6x: 20% de juros <br>
            <br>
            <input type="submit" name="mostrarTotal" value="Calcular Total">
        </form>
    </fieldset>
</body>

</html>