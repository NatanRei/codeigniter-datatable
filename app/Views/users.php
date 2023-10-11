<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <script>
        function confirm() {
            if (confirm('Deseja excluir o registro?')) {
                return true;
            }
            return false;
        }
    </script>
</head>
<body>
    <div class="container mt-5">
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
                    <td><?php echo anchor('user/edit/'.$user['id'], 'Editar') ?>
                <?php echo anchor('user/delete/'.$user['id'], 'Excluir', ['onclick' => 'return confirm()']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>

    </div>
</body>
</html>