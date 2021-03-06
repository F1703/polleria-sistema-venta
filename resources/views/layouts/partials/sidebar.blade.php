<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    {{-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a> --}}
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> --}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{-- <li class="header">{{ trans('adminlte_lang::message.header') }}</li> --}}
            <!-- Optionally, you can add icons to the links -->
            {{-- <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li> --}}
            <li class="treeview active">
              {{-- <a href="#"><i class='fa fa-circle-o'></i> <span>Pais</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="{{ url('pais') }}">Pais</a></li>
                  <li><a href="{{url('provincias')}}">Provincia</a></li>
                  <li><a href="{{url('localidads')}}">Localidad</a></li>
              </ul> --}}
            </li>
            {{-- <li class="#"><a href="{{url('domicilios')}}"><i class='fa fa-circle-o'></i> <span>Domicilio</span></a></li> --}}
            <li class="#"><a href="{{url('proveedors')}}"><i class='fa fa-circle-o'></i> <span>Proveedores</span></a></li>
            <li class="#"><a href="{{url('clientes')}}"><i class='fa fa-circle-o'></i> <span>Clientes</span></a></li>
            <li class="#"><a href="{{url('ventas')}}"><i class='fa fa-circle-o'></i> <span>Ventas</span></a></li>
            <li class="#"><a href="{{url('compras')}}"><i class='fa fa-circle-o'></i> <span>Compras</span></a></li>
            <li class="#"><a href="{{url('empleados')}}"><i class='fa fa-circle-o'></i> <span>Empleados</span></a></li>
            <li class="#"><a href="{{url('liquidacions')}}"><i class='fa fa-circle-o'></i> <span>Liquidaciones</span></a></li>
            <li class="#"><a href="{{url('productos')}}"><i class='fa fa-circle-o'></i> <span>Productos</span></a></li>

            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview active">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
