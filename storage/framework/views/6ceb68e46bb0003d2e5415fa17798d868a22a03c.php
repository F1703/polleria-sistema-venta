<?php $__env->startSection('contentheader_title'); ?>
    <?php /* <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Provincias */ ?>
            <a class="btn btn-success pull-left" href="<?php echo e(route('provincias.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Create</a>
        <?php /* </h1>

    </div> */ ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($provincias->count()): ?>
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>IDPais</th>

                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($provincias as $provincium): ?>
                            <tr>
                              <td><?php echo e($provincium->id); ?></td>
                              <td><?php echo e($provincium->provincia); ?></td>
                              <td><?php echo e($provincium->idpais); ?></td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('provincias.show', $provincium->id)); ?>"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="<?php echo e(route('provincias.edit', $provincium->id)); ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="<?php echo e(route('provincias.destroy', $provincium->id)); ?>" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $provincias->render(); ?>

            <?php else: ?>
                <h3 class="text-center alert alert-info">Empty!</h3>
            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>