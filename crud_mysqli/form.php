<?php
include("../verificar_autenticidade.php");

$pk_cliente = "";
$nome = "";
$cpf = "";
$whatsapp = "";
$email = "";

// VERIFICA SE EXISTE UMA VARIÁVEL NA URL CHAMADA "REF"
if (isset($_GET['ref'])) {
    $pk_cliente = base64_decode(trim($_GET['ref']));

    include('../conexao_mysqli.php');
    $sql = "
    SELECT *
    FROM clientes
    WHERE pk_cliente = '$pk_cliente'
    ";

    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_object($query);
        $nome = $row->NOME;
        $cpf = $row->CPF;
        $whatsapp = $row->WHATSAPP;
        $email = $row->EMAIL;
    } else {
        echo '
        <script>
            alert("Registro não encontrado.");
            window.location="./"
        </script>
        ';
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="salvar.php">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-people"></i> Cadastro de cliente
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-1">
                                    <label for="pk_cliente" class="form-label">ID</label>
                                    <input value="<?php echo $pk_cliente?>" readonly type="text" id="pk_cliente" name="pk_cliente" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input value="<?php echo $nome?>" type="text" id="nome" name="nome" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="cpf" class="form-label">CPF</label>
                                    <input value="<?php echo $cpf?>" type="text" id="cpf" name="cpf" class="form-control" data-mask="000.000.000-00" required minlength="14">
                                </div>
                                <div class="col">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <input value="<?php echo $whatsapp?>" type="text" id="whatsapp" name="whatsapp" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input value="<?php echo $email?>" type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <a href="./" class="btn btn-outline-danger"><i class="bi bi-arrow-left"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // INÍCIO -- FORMATAR MÁSCARA DO WHATSAPP
        var options = {
            onKeyPress: function(whatsapp, e, field, options) {
                var masks = ['(00) 0000-000#', '(00) 00000-0000'];
                var mask = (whatsapp.length > 14) ? masks[1] : masks[0];
                $('#whatsapp').mask(mask, options);
            }
        };
        $('#whatsapp').mask('(00) 0000-000#', options);
        // FIM -- FORMATAR MÁSCARA DO WHATSAPP
    </script>

</body>

</html>