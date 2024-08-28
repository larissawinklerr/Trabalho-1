<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            </tr>
    </thead>
    <body>
        <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarefa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($tarefa->id); ?></td>
                <td><?php echo e($tarefa->titulo); ?></td>
                <td><?php echo e($tarefa->descricao); ?></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</table>
<?php /**PATH C:\Users\laris\OneDrive\Área de Trabalho\aula matheus\trabalho1\ListadeTarefas\resources\views/tarefas.blade.php ENDPATH**/ ?>