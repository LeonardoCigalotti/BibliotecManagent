<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/inicio.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<?php $__env->startSection('header'); ?>
Início/Home
<?php $__env->stopSection(); ?>
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
                            <td><?php echo e($livro->reserva); ?></td>
                        <?php else: ?>
                            <td>Disponível</td>
                        <?php endif; ?>
                        <td><?php echo e($livro->name); ?></td>
                        <td><button class="reservar" onclick="myFunction()">Reservar</button></td>

                        <script>
                            function myFunction() {
                                let text = "Você não está logado\nDeseja logar?";
                                if (confirm(text) == true) {
                                    window.location.href = "/entrar";
                                } else {
                                    windows.close;
                                }
                            }
                        </script>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutInicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/Usuarios/inicio.blade.php ENDPATH**/ ?>