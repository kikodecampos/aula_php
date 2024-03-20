<?php
$numero = $_POST["numero"] ?? 0;

function exibir_mes($a)
{

    switch ($a) {

        case 1:
            $nome_mes = "Janeiro";
            break;
        case 2:
            $nome_mes =  "Fevereiro";
            break;
        case 3:
            $nome_mes =  "Março";
            break;
        case 4:
            $nome_mes =  "Abril";
            break;
        case 5:
            $nome_mes =  "Maio";
            break;
        case 6:
            $nome_mes =  "Junho";
            break;
        case 7:
            $nome_mes =  "Julho";
            break;
        case 8:
            $nome_mes =  "Agosto";
            break;
        case 9:
            $nome_mes =  "Setembro";
            break;
        case 10:
            $nome_mes =  "Outubro";
            break;
        case 11:
            $nome_mes =  "Novembro";
            break;
        case 12:
            $nome_mes =  "Dezembro";
            break;
        default:
            $nome_mes =  "Mês não reconhecido";
            break;
    }

    return $nome_mes;
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
                <form method="post" id="form" name="form" onsubmit="return validar()">
                    <div class="card">
                        <div class="card-header">
                            Funções Mês
                        </div>
                        <div class="card-body">
                            <!-- MB = Margin Bottom, ou seja, margem inferior -->
                            <div class="mb-3">
                                <label for="" class="form-label">Número</label>
                                <input id="numero" type="number" name="numero" class="form-control" value="<?php echo $numero ?>">
                            </div>
                            <div id="alerta" class="alert alert-warning d-none">
                                Favor informar um número entre 1 e 12
                                <button type="button" class="btn-close float-end" 
                                    data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Verificar</button>
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
                            echo exibir_mes($numero);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function validar() {
            var numero = form.numero.value;
            var alerta = document.getElementById("alerta");

            if (parseInt(numero) < 1 || parseInt(numero) > 12) {
                alerta.classList.remove('d-none');
                return false;
            } else {
                alerta.classList.add('d-none');
            }

        }
    </script>

</body>

</html>