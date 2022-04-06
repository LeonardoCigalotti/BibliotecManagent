<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/entrar.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<?php $__env->startSection('header'); ?>
Novo Registro/Register
<?php $__env->stopSection(); ?>

<?php if($errors->any()): ?>
    <div class="mensagem">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
            <form method="POST">
                <?php echo csrf_field(); ?>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required><br>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit">Registrar</button>
            </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layoutInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Usuarios/registrar.blade.php ENDPATH**/ ?>