<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Rifa</h1>
    <?php
        $premio = 'Uno conversível';
        $valor = 4.00;
        $quantNum = 5;

        for($i=1; $i<=$quantNum; $i++){
            echo"<center><table>
                <tr class='esquerdo'>
                    <td><p>Número: $i<br></p>
                    <p>Valor: R$$valor,00<br></p>
                    <p>Nome:....................<br></p>
                    <p>Telefone:................<br></p></td>
                <td class='direito'>Friends Action<br><br>
                    Número: $i<br><br>
                    Prêmio: $premio<br>
                    <img src='unoConversivel.jpeg'></td></tr>
                
            
            
            </table></center>";
        }


    ?>
    </div>
</body>
</html>