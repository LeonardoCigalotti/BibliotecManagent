<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/meusLivros.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Minhas Reservas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php if($errors->any()): ?>
        <div class="mensagem">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(!empty($mensagem)): ?>
        <div class="mensagem">
            <p> <?php echo e($mensagem); ?> </p>
        </div>
    <?php endif; ?>

    <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
                    <th>Reservado por</th>
                    <th>Registrado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $reservas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($reserva->title); ?></td>
                    <td><?php echo e($reserva->descricao); ?></td>
                    <td><?php echo e($reserva->autor); ?></td>
                    <td><?php echo e($reserva->reservaDias); ?> dias</td>
                    <td><?php echo e($reserva->name); ?></td>
                    <td>
                        <a href="/admin/minhasreservas/<?php echo e($reserva->id); ?>/editar">
                            <button class="editar">Editar</button>
                        </a>
                        <form method="post" action="/admin/minhasreservas/excluir/<?php echo e($reserva->id); ?>"
                        onsubmit="return confirm('Tem certeza que deseja cancelar esta reserva??')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="excluir">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Reservas/minhasReservas.blade.php ENDPATH**/ ?>