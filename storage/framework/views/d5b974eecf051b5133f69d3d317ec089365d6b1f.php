<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/meusLivros.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Meus Livros
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <a href="<?php echo e(route('criar_livros')); ?>">
        <button class="novo">Cadastrar livro novo</button>
    </a>
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
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($livro->title); ?></td>
                    <td><?php echo e($livro->descricao); ?></td>
                    <td><?php echo e($livro->autor); ?></td>
                    <?php if(!empty($livro->reservaDias)): ?>
                        <td><?php echo e($livro->reservaDias); ?> dias</td>
                    <?php else: ?>
                        <td>Nenhuma reserva</td>
                    <?php endif; ?>
                    <td>
                        <a href="/admin/meuslivros/<?php echo e($livro->id); ?>/editar">
                            <button class="editar">Editar</button>
                        </a>
                        <form method="post" action="/admin/meuslivros/excluir/<?php echo e($livro->id); ?>"
                        onsubmit="return confirm('Tem certeza que deseja remover este livro??')">
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



<?php echo $__env->make('layoutInicioAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tmax/Documents/gerenciamento-biblioteca/resources/views/livros/meuslivros.blade.php ENDPATH**/ ?>