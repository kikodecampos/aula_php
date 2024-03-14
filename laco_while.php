<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lação Repetição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, .container, .row {
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-4">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            Tela Login
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>