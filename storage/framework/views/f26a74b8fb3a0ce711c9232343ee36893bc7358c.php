<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/navbar.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <header>
        <div>
            <h1>Gerenciamento Biblioteca</h1>
            <h3><?php echo $__env->yieldContent('header'); ?></h3>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?php echo $__env->yieldContent('body'); ?>
    </div>
</body>
</html>
<?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/navbar.blade.php ENDPATH**/ ?>