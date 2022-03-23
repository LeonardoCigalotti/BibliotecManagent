<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/layoutInicio.css')); ?>">
    <title>Gerenciamento de Biblioteca</title>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <div class="tabela">
        <aside class="menu">
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/entrar">Entrar</a></li>
                <li>Se você não tem conta <a href="/registrar" id="dif">Registre-se</a></li>
            </ul>
            <footer>
                <p>&copy;Copyright 2022 Leonardo Cigalotti</p>
            </footer>
        </aside>
        <main class="conteudo">
        <header>
            Gerenciamento Biblioteca - <?php echo $__env->yieldContent('header'); ?>
        </header>
            <?php echo $__env->yieldContent('body'); ?>
        </main>
    </div>
</body>
</html>

<?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/layoutInicio.blade.php ENDPATH**/ ?>