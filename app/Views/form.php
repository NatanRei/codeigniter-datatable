<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Usuário - Edição</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css">
</head>
<body>
    <div class="form container mt-5">
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
            <input type="submit" value="Salvar" class="btn success mt-5" />
        <?php echo form_close() ?>

    </div>
</body>
</html>