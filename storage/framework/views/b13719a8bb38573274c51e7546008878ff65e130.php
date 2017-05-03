<?php $__env->startSection('contentheader_title'); ?>
    <?php /* <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Pais
            <a class="btn btn-success pull-right" href="<?php echo e(route('pais.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div> */ ?>
    <a class="btn btn-success pull-left" href="<?php echo e(route('pais.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($pais->count()): ?>
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Pais</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($pais as $pai): ?>
                            <tr>
                                <td><?php echo e($pai->id); ?></td>
                                <td><?php echo e($pai->pais); ?></td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('pais.show', $pai->id)); ?>"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="<?php echo e(route('pais.edit', $pai->id)); ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="<?php echo e(route('pais.destroy', $pai->id)); ?>" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pais->render(); ?>

            <?php else: ?>
                <h3 class="text-center alert alert-info">Empty!</h3>
            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>