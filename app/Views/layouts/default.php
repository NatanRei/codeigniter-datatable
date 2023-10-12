<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">

</head>
<body>
    <header>
            <h2>
                <?php echo anchor(base_url('user'), 'Usuários') ?>
            </h2>
        </a>
        <span>Teste de implementação DataTable</span>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer>
        
    </footer>
</body>
</html>