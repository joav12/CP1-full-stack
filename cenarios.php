<?php
    session_start();

    require_once('funcoes.php');

    $nome = $_GET['nome'];

    $i = $_GET['i'] / 100;
    $n = $_GET['n'];
    $PV = $_GET['PV'];
    $VE = $_GET['VE'];

    $dados=[
        "nome" => $nome,
        "CPF" => $_GET['CPF'],
        "email" => $_GET['email'],
        "telefone" => $_GET['telefone'],
        "dataDeNasc" => $_GET['dataNasc'],
        "valorDaCompra" => $PV,
        "taxaDeJuros" => $i,
        "numeroDeParcelas" => $n,
        "valorDeEntrada" => $VE
    ];

    $_SESSION[$nome] = $dados;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.3.3_dist_css_bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.3.3_dist_js_bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js" defer></script>
    <title>Cp1-Cenários</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Olá senhor(a) <?php echo $nome ?>, por favor selecione um cenário</h1>

        <form class="form-cenarios">
            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="optionSE">
                        <label class="form-check-label" for="gridRadios1">
                        1: sem entrada
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="optionIDE">
                        <label class="form-check-label" for="gridRadios2">
                        2: valor inicial desejado de entrada
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="optionEPI">
                        <label class="form-check-label" for="gridRadios3">
                        3: valores de entrada e parcelas sejam iguais
                        </label>
                    </div>
                </div>
            </fieldset>
        </form>

        <div id="cen1">
            <h1>O valor que o senhor terá que pagar caso não tenha entrada é</h1>
            <div class="container lista text-center">
                <div class="row">
                    <div class="col">
                    Valor de compra
                    </div>
                    <div class="col">
                    Taxa de juros
                    </div>
                    <div class="col">
                    Numero de parcelas
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <?php echo $PV ?>
                    </div>
                    <div class="col">
                        <?php echo $i ?>
                    </div>
                    <div class="col">
                        <?php echo $n ?>
                    </div>
                </div>

                <h2><?php echo round(cenario1($PV, $i, $n), 2) ?></h2>
            </div>
        </div>

        <div id="cen2">
            <h1>O valor que o senhor terá que pagar caso tenha um valor de entrada</h1>
            <div class="container lista text-center">
                <div class="row">
                    <div class="col">
                    Valor de compra
                    </div>
                    <div class="col">
                    Taxa de juros
                    </div>
                    <div class="col">
                    Numero de parcelas
                    </div>
                    <div class="col">
                    Valor de entrada
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <?php echo $PV ?>
                    </div>
                    <div class="col">
                        <?php echo $i ?>
                    </div>
                    <div class="col">
                        <?php echo $n ?>
                    </div>
                    <div class="col">
                        <?php echo $VE ?>
                    </div>
                </div>

                <h2><?php echo round(cenario2($PV, $i, $n, $VE), 2) ?></h2>
            </div>
        </div>

        <div id="cen3">
            <h1>O valor que o senhor terá que pagar caso o valor de entrada e a parcela sejam as mesmas</h1>
            <div class="container lista text-center">
                <div class="row">
                    <div class="col">
                    Valor de compra
                    </div>
                    <div class="col">
                    Taxa de juros
                    </div>
                    <div class="col">
                    Numero de parcelas
                    </div>
                    <div class="col">
                    Valor de entrada
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <?php echo $PV ?>
                    </div>
                    <div class="col">
                        <?php echo $i ?>
                    </div>
                    <div class="col">
                        <?php echo $n ?>
                    </div>
                    <div class="col">
                        <?php echo $VE ?>
                    </div>
                </div>

                <h2><?php echo round(cenario3($PV, $i, $n, $VE), 2) ?></h2>
            </div>
        </div>
    </div>
</body>
</html>