<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário - Edição</title>
</head>
<body>
    <div class="container mt-5">
        <?php echo form_open('user/store') ?>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" value="<?php echo $user['name'] ?? '' ?>" name="name" id="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" value="<?php echo $user['phone'] ?? '' ?>" name="phone" id="phone" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" value="<?php echo $user['email'] ?? '' ?>" name="email" id="email" class="form-control" />
            </div>
            <input type="hidden" name="id" value="<?php echo $user['id'] ?? '' ?>" >
            <input type="submit" value="Salvar" class="btn btn-primary" />
        <?php echo form_close() ?>

    </div>
</body>
</html>