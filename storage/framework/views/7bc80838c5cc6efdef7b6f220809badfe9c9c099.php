<?php /* <?php $__env->startSection('css'); ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
<?php $__env->stopSection(); ?> */ ?>
<?php $__env->startSection('contentheader_title'); ?>
    <?php /* <div class="page-header"> */ ?>
        <h3><i class="glyphicon glyphicon-plus"></i> Domicilios / Create </h3>
    <?php /* </div> */ ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-md-12">

            <form action="<?php echo e(route('domicilios.store')); ?>" method="POST">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                <div class="form-group">
                  <?php echo e(Form::label('calle','Calle')); ?>

                  <?php echo e(Form::text('calle',null,['class'=>'form-control','placeholder'=>'nombre de la calle','required'])); ?>

                </div>
                <div class="form-group">
                  <?php echo e(Form::label('numero','Numero')); ?>

                  <?php echo e(Form::text('numero',null,['class'=>'form-control','placeholder'=>'numero de calle','required'])); ?>

                </div>
                <div class="form-group">
                  <?php echo e(Form::label('barrio','Barrio')); ?>

                  <?php echo e(Form::text('barrio',null,['class'=>'form-control','placeholder'=>'nombre del barrio','required'])); ?>

                </div>
                <?php /* <div class="form-group">
                  <?php echo e(Form::label('localidad','Localidad')); ?>

                  <?php echo e(Form::select('localidad[]',null,['class'=>'form-control','placeholder'=>'nombre de la calle','required'])); ?>

                </div> */ ?>
                <div class="form-group">
                  <?php echo e(Form::hidden('idlocalidad','')); ?>

                  <?php /* <?php echo e(Form::text('calle',null,['class'=>'form-control','placeholder'=>'nombre de la calle','required'])); ?> */ ?>
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="<?php echo e(route('domicilios.index')); ?>"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php /* <?php $__env->startSection('scripts'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
<?php $__env->stopSection(); ?> */ ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>