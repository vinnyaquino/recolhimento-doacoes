<?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Recibo #<?php echo e($recibo->recibo); ?></h1>

        <div class="bg-white rounded shadow p-6">
            <p><strong>Contribuinte:</strong> <?php echo e($recibo->contribuinte->nome); ?></p>
            <p><strong>Endereço:</strong> <?php echo e($recibo->contribuinte->endereco); ?></p>
            <p><strong>Valor:</strong> R$ <?php echo e(number_format($recibo->valor, 2, ',', '.')); ?></p>
            <p><strong>Status:</strong> <?php echo e($recibo->status); ?></p>
            <p><strong>Data de Recebimento:</strong> 
                <?php echo e($recibo->data_recebimento ? $recibo->data_recebimento->format('d/m/Y H:i') : 'Pendente'); ?>

        </div>

        <form method="POST" action="<?php echo e(route('recibos.updateStatus', $recibo->recibo)); ?>" class="mt-4">
            <?php echo csrf_field(); ?>
            <label for="status" class="block mb-2">Alterar Status:</label>
            <select name="status" id="status" class="border rounded px-2 py-1">
                <option value="Recebido">Recebido</option>
                <option value="Cancelado">Cancelado</option>
                <option value="Cancelado">Pendente</option>
            </select>
            <button type="submit" class="ml-2 bg-sky-600 text-white px-4 py-1 rounded">
                Atualizar
            </button>
        </form>
        <a href="<?php echo e(route('dashboard')); ?>" class="mt-6 inline-block bg-sky-600 text-white px-4 py-2 rounded">Voltar ao Dashboard</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinny/projeto/projeto03/resources/views/recibos/show.blade.php ENDPATH**/ ?>