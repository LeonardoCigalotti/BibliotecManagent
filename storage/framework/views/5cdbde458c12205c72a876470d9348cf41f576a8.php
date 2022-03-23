<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/inicio.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Início
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php if(!empty($mensagem)): ?>
    <div class="mensagem">
        <p>   <?php echo e($mensagem); ?> </p>
    </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="mensagem">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="listar">
        <table>
            <thead class="linha">
                <tr>
                    <th>Livro</th>
                    <th>Descrição</th>
                    <th>Autor(es)</th>
                    <th>Reservado</th>
                    <th>Registrado por</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($livro->title); ?></td>
                        <td><?php echo e($livro->descricao); ?></td>
                        <td><?php echo e($livro->autor); ?></td>
                        <?php if(!empty($livros->reserva)): ?>
                            <td>Reservado</td>
                        <?php else: ?>
                            <td>Disponível</td>
                        <?php endif; ?>
                        <td><?php echo e($livro->name); ?></td>
                        <td>
                            <a href="/admin/reservar/<?php echo e($livro->id); ?>">
                                <button class="reservar" onclick="myFunction()">Reservar</button>
                            </a>
                        </td>
                            <script>
                                function myFunction() {
                                    let text = "Você deseja reservar este livro?";
                                    if (confirm(text) == true) {
                                        windows.close;
                                    } else {
                                        windows.close;
                                    }
                                }
                            </script>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Livros/indexAdmin.blade.php ENDPATH**/ ?>