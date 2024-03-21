<?php
    $nome = $_GET['nome'];

    $i = $_GET['i'] / 100;
    $n = $_GET['n'];
    $PV = $_GET['PV'];
    $VE = $_GET['VE'];

    $CF = $i / (1 - (1 / ((1 + $i)**$n)));
    $PMT1_2 = $PV * $CF;
    $PMT3 = ($PV * $CF) / (1 + $CF);

    $TaPC1 = $PMT1_2 *$n;
    $TaPC2 = $VE + ($PMT1_2 * $n);

    $TaPC3 = $VE + ($PMT3 * $n);
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
            <h2><?php echo round($TaPC1, 2) ?></h2>
        </div>

        <div id="cen2">
            <h1>O valor que o senhor terá que pagar caso tenha um valor de entrada</h1>
            <h2><?php echo round($TaPC2, 2) ?></h2>
        </div>

        <div id="cen3">
            <h1>O valor que o senhor terá que pagar caso o valor de entrada e a parcela sejam as mesmas</h1>
            <h2><?php echo round($TaPC3, 2) ?></h2>
        </div>
    </div>
</body>
</html>