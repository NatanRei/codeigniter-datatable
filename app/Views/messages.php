<div class="container mt-5">
    <div class="alert success-light">
        <h1><?php echo $message; ?></h1>
        <p class="mt-3" >
            <a href="<?php echo base_url('user')?>" alt="voltar" ><img src="<?php echo base_url();?>assets/images/arrow-left.svg" > Voltar </a></p> 
    </div>
</div>
<style>
    h1 {
        font-size: 1.6rem;
    }
    a {
        all: unset;
        cursor: pointer;
    }
    a img {
        width: 1.6rem;
    }
</style>