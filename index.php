<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.3.3_dist_css_bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cp1</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Insira abaixo os seus dados e após isso você será redirecionado para a página de cenários</h1>

        <form action="cenarios.php" method="GET" class="formulario">
            <div class="form-pessoal">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu nome aqui" name="nome" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="000.000.00-00" name="CPF" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="SeuEmail@seuEmail.com" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(00)0000-0000" name="telefone" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">data de nascimento</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" name="dataNasc" required>
                </div>
            </div>

            <div class="form-financeiro">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Valor da compra</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" name="PV" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">taxa de juros</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="i" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Número de parcelas</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="n" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Valor de Entrada</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="VE" required>
                </div>

                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/cdn.jsdelivr.net_npm_bootstrap@5.3.3_dist_js_bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>