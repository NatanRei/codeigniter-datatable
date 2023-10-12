<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Usuários</title>
    <style>
        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #4caf50;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
    <script>
        function confirme() {
            if (confirm('Deseja excluir o registro?')) {
                return true;
            }
            return false;
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <?php echo anchor(base_url('user/create'), 'Novo usuário', ['class' => 'btn btn-success mb-3']) ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo anchor(base_url('user/edit/'.$user['id']), 'Editar') ?>
                <?php echo anchor(base_url('user/delete/'.$user['id']), 'Excluir', ['onclick' => 'return confirme()']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>

    </div>
</body>
</html>