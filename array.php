<?php

// CRIAR VARIÁVEL VAZIA DO TIPO "ARRAY"
$array = array();

$array = $_POST["item"] ?? [];

// UMA FORMA DE INCLUIR ITEM NO ARRAY
// $array[] = $item;
// array_push($array, $item);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            Variável Array
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input class="form-control" name="item[]">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="item[]">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="item[]">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="item[]">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="item[]">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Incluir</button>
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
                        <ul>
                        <?php
                        // for($i=0;$i<count($array);$i++) {
                        //     echo "<li> $array[$i] </li>";
                        // }
                        foreach (array_filter($array) as $key => $value) {
                            echo "<li> $value - posição $key </li>";
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>