<?php $__env->startSection('contentheader_title'); ?>
    <?php /* <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Clientes */ ?>
            <a class="btn btn-success pull-left" href="<?php echo e(route('clientes.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
        <?php /* </h1>

    </div> */ ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($clientes->count()): ?>
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($clientes as $cliente): ?>
                            <tr>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('clientes.show', $cliente->id)); ?>"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="<?php echo e(route('clientes.edit', $cliente->id)); ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="<?php echo e(route('clientes.destroy', $cliente->id)); ?>" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $clientes->render(); ?>

            <?php else: ?>
                <h3 class="text-center alert alert-info">Empty!</h3>
            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>