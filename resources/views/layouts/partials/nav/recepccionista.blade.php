<!-- ////////////////////////////////////////////////// -->
<!-- ///RECEPCCIONISTA///////////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->

<!-- MENU RECEPCCIONISTA -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('tntmessage.Recepccionista') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Inicio Menu Recepccionista -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>{{ trans('tntmessage.Usuario') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('users.paciente') }}">{{ trans('tntmessage.CrearPaciente') }}</a></li>
                        </ul>
                    </li>
                    <!-- Fin Menu Recepccionista -->

                 <!-- Inicio Menu Crear cita -->
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Citas</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('calendar') }}">Crear cita</a></li>
                        </ul>
                    </li>
                <!-- Fin Menu cita -->
                </ul>
            </li>
<!-- FIN MENU RECEPCCIONISTA -->

<!-- ////////////////////////////////////////////////// -->
<!-- ///FIN RECEPCCIONISTA///////////////////////////// -->
<!-- ////////////////////////////////////////////////// -->