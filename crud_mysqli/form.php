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
                                    <input readonly type="text" id="pk_cliente" name="id_cliente" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="cpf" class="form-label">CPF</label>
                                    <input type="text" id="cpf" name="cpf" class="form-control" data-mask="000.000.000-00">
                                </div>
                                <div class="col">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <input type="text" id="whatsapp" name="whatsapp" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="button" class="btn btn-outline-danger"><i class="bi bi-arrow-left"></i></button>
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
</body>

</html>