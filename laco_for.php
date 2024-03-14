<?php
$numero = $_POST["numero"] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço Repetição FOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            Laço For
                        </div>
                        <div class="card-body">
                            <input name="numero" class="form-control" value="<?php echo $numero?>">
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
                        $numeros = "";
                        for($i=1;$i<=$numero;$i++) {
                            $numeros.= "$i - ";
                        }
                        echo substr($numeros,0,-2);
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>