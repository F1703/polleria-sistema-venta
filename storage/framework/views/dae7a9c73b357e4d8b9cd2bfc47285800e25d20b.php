<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(asset('/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <?php /* <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a> */ ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- search form (Optional) -->
        <?php /* <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.search')); ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> */ ?>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <?php /* <li class="header"><?php echo e(trans('adminlte_lang::message.header')); ?></li> */ ?>
            <!-- Optionally, you can add icons to the links -->
            <?php /* <li class="active"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li> */ ?>
            <li class="treeview active">
              <?php /* <a href="#"><i class='fa fa-circle-o'></i> <span>Pais</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo e(url('pais')); ?>">Pais</a></li>
                  <li><a href="<?php echo e(url('provincias')); ?>">Provincia</a></li>
                  <li><a href="<?php echo e(url('localidads')); ?>">Localidad</a></li>
              </ul> */ ?>
            </li>
            <?php /* <li class="#"><a href="<?php echo e(url('domicilios')); ?>"><i class='fa fa-circle-o'></i> <span>Domicilio</span></a></li> */ ?>
            <li class="#"><a href="<?php echo e(url('proveedors')); ?>"><i class='fa fa-circle-o'></i> <span>Proveedores</span></a></li>
            <li class="#"><a href="<?php echo e(url('clientes')); ?>"><i class='fa fa-circle-o'></i> <span>Clientes</span></a></li>
            <li class="#"><a href="<?php echo e(url('ventas')); ?>"><i class='fa fa-circle-o'></i> <span>Ventas</span></a></li>
            <li class="#"><a href="<?php echo e(url('compras')); ?>"><i class='fa fa-circle-o'></i> <span>Compras</span></a></li>
            <li class="#"><a href="<?php echo e(url('empleados')); ?>"><i class='fa fa-circle-o'></i> <span>Empleados</span></a></li>
            <li class="#"><a href="<?php echo e(url('liquidacions')); ?>"><i class='fa fa-circle-o'></i> <span>Liquidaciones</span></a></li>
            <li class="#"><a href="<?php echo e(url('productos')); ?>"><i class='fa fa-circle-o'></i> <span>Productos</span></a></li>

            <li><a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.anotherlink')); ?></span></a></li>
            <li class="treeview active">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.multilevel')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><?php echo e(trans('adminlte_lang::message.linklevel2')); ?></a></li>
                    <li><a href="#"><?php echo e(trans('adminlte_lang::message.linklevel2')); ?></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
