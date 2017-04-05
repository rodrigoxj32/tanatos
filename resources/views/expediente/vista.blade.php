@extends('template.main')

@section('title', 'Informacion del expediente')

@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:2000px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

	
	  @include('flash::message')
	<table class="table table-striped" > 
		<thead>
			<th>Cita</th>
			<th>Inicio</th>
		    <th>Fin</th>
		</thead>
		<tbody>
			@foreach($expedientes as $expediente)
				<tr>
				<td>{{$expediente->cita}} </td>
				<td>{{$expediente->start}} </td>
		        <td>{{$expediente->fin}} </td>
				</tr>
			@endforeach
		</tbody>
	</table>

  <form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">

    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Apellidos:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Genero:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Fecha de Nacimiento:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Direccion:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Telefono:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Email:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

    <label for="nombres">Telefono de Resposable:</label>
    <input type="text" name="nombres" id="{{ $consulta->nombres }}">

  </form>


        <!-- contenido principal -->
        <section class="content"  id="contenido_principal">






        </section>

      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            <br>


         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="imagenes/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>





      </div><!-- /.content-wrapper -->




    </div><!-- ./wrapper -->
@endsection