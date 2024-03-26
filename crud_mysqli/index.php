<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - MYSQLI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Lista de Ordem de Serviço
                        <button class="btn btn-primary btn-sm float-end">
                            <i class="bi bi-plus-lg"></i> Novo
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>Cliente</th>
                                    <th>Serviços</th>
                                    <th class="text-center">R$ Valor</th>
                                    <th class="text-center">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Glauco Luiz</td>
                                    <td>
                                        Manutenção de micro<br>
                                        Configuração de roteador
                                    </td>
                                    <td class="text-center">R$ 500,00</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-gear"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Editar</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Remover</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Glauco Santos</td>
                                    <td>
                                        Instalação de software
                                    </td>
                                    <td class="text-center">R$ 100,00</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-gear"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Editar</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i> Remover</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>