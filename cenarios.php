<?php
    $nome = $_GET['nome'];

    $i = $_GET['i'] / 100;
    $n = $_GET['n'];
    $PV = $_GET['PV'];
    $VE = $_GET['VE'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.3.3_dist_css_bootstrap.min.css" rel="stylesheet">
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
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/cdn.jsdelivr.net_npm_bootstrap@5.3.3_dist_js_bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>