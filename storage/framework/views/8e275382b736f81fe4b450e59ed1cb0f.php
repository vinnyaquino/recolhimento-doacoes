<?php $__env->startSection('content'); ?>
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Dashboard - Lista de Recibos</h1>
        
        <form action="<?php echo e(route('dashboard')); ?>" method="GET" class="mb-6">
            <label for="data" class="block text-sm font-medium">Selecione a Data:</label>
            <input type="date" name="data" id="data" value="<?php echo e($data); ?>" class="mt-1 block w-full">
            <button type="submit" class="mt-2 bg-sky-600 text-white px-4 py-2 rounded">Buscar</button>
        </form>

        <table class="w-full table-auto bg-white shadow-lg rounded">
            <thead>
                <tr>
                    <th class="px-4 py-2">Recibo</th>
                    <th class="px-4 py-2">Contribuinte</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $recibos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recibo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="text-center">
                    <td class="px-4 py-2"><?php echo e($recibo->recibo); ?></td>
                    <td class="px-4 py-2"><?php echo e($recibo->contribuinte->nome); ?></td>
                    <td class="px-4 py-2">R$ <?php echo e(number_format($recibo->valor, 2, ',', '.')); ?></td>
                    <td class="px-4 py-2">
                        <?php if($recibo->status == 'Pendente'): ?>
                            <span class="text-gray-500">Pendente</span>
                        <?php elseif($recibo->status == 'Recebido'): ?>
                            <span class="text-green-500">Recebido</span>
                        <?php else: ?>
                            <span class="text-red-500">Cancelado</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-2">
                        <a href="<?php echo e(route('recibos.show', $recibo->recibo)); ?>" class="text-indigo-500">Visualizar</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center text-red-500">Nenhum recibo encontrado para essa data.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinny/projeto/projeto03/resources/views/dashboard/index.blade.php ENDPATH**/ ?>