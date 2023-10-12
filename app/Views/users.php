<div class="container mt-5">
    <div class="align-right">
        <?php echo anchor(base_url('user/create'), 'Novo usuário', ['class' => 'btn success mb-3']) ?>
    </div>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo anchor(base_url('user/edit/'.$user['id']), 'Editar') ?>
            <?php echo anchor(base_url('user/delete/'.$user['id']), 'Excluir', ['onclick' => 'return confirme()']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="align-right">
        <?php echo $pager->links(); ?>

    </div>
    

</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/table.css">
<script>
    function confirme() {
        if (confirm('Deseja excluir o registro?')) {
            return true;
        }
        return false;
    }
</script>