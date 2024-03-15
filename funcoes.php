<?php
$numero = $_POST["numero"] ?? 0;
$expoente = $_POST["expoente"] ?? 0;

function expoente($a, $b) {
    $calculo = $a ** $b;
    return $calculo;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            Funções PHP
                        </div>
                        <div class="card-body">
                            <!-- MB = Margin Bottom, ou seja, margem inferior -->
                            <div class="mb-3">
                                <label for="" class="form-label">Número</label>
                                <input name="numero" class="form-control" value="<?php echo $numero ?>">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Expoente</label>
                                <input name="expoente" class="form-control" value="<?php echo $expoente ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Contar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Resultado
                    </div>
                    <div class="card-body">
                        <p>
                            <?php
                            echo expoente($numero, $expoente);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>