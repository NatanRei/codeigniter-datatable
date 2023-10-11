<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atenção!</title>
</head>
<body>
        <div class="container mt-5">
            <div class="alert alert-info">
                <?php echo $message; ?>
                <p class="mt-3" ><?php echo anchor(base_url(), 'Página inicial') ?></p> 
            </div>
        </div>
</body>
</html>