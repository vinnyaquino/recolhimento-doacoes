<?php $__env->startSection('content'); ?>
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Trabalho Finalizado - <?php echo e(\Carbon\Carbon::parse($dataAtual)->format('d/m/Y')); ?></h1>

        <table class="w-full table-auto bg-white shadow-lg rounded">
            <thead>
                <tr>
                    <th class="px-4 py-2">Recibo</th>
                    <th class="px-4 py-2">Contribuinte</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Última Atualização</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $recibosRecebidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recibo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="text-center">
                    <td class="px-4 py-2"><?php echo e($recibo->recibo); ?></td>
                    <td class="px-4 py-2"><?php echo e($recibo->contribuinte->nome); ?></td>
                    <td class="px-4 py-2">R$ <?php echo e(number_format($recibo->valor, 2, ',', '.')); ?></td>
                    <td class="px-4 py-2"><?php echo e(\Carbon\Carbon::parse($recibo->updated_at)->format('d/m/Y H:i')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="px-4 py-2 text-center text-red-500">Nenhum recibo recebido encontrado.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="bg-white p-6 mt-6 rounded shadow">
            <p class="text-xl"><strong>Valor Total Recebido no Dia:</strong> R$ <?php echo e(number_format($valorTotal, 2, ',', '.')); ?></p>
        </div>

        <a href="<?php echo e(route('dashboard')); ?>" class="mt-6 inline-block bg-sky-600 text-white px-4 py-2 rounded">Voltar ao Dashboard</a>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinny/projeto/projeto03/resources/views/dashboard/finalizar.blade.php ENDPATH**/ ?>