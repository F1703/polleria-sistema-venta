<?php /* <?php $__env->startSection('css'); ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
<?php $__env->stopSection(); ?> */ ?>
<?php $__env->startSection('contentheader_title'); ?>
    <?php /* <div class="page-header"> */ ?>
        <h3><i class="glyphicon glyphicon-plus"></i> Provincias / Create </h3>
    <?php /* </div> */ ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo e(route('provincias.store')); ?>" method="POST">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                <label for="idpais">Seleccione pais:</label>
                  <select class="form-control" id="pais" name="idpais">
                    <?php foreach($pais as $pai): ?>
                      <option value="<?php echo e($pai->id); ?>"><?php echo e($pai->nombre); ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <input type="text" name="descripcion" class="form-control" >
                </div>


                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="<?php echo e(route('provincias.index')); ?>"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>