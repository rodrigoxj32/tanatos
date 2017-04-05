@extends('layouts.app')

@section('htmlheader_title')
	Ingresar Medicamentos
@endsection


@section('main-content')

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Ingresar nuevo medicamento</div>

					<div class="panel-body">
						<div class="form-group">
							{!! Form::open(['action' =>'MedicamentosController@store','class'=>'form-horizontal', ]) !!}

								{!!Form::label('codigomedicamento', 'Codigo del medicamento')!!}
								{!!Form::text('codigomedicamento', 'example@gmail.com')!!}
						
							{!! Form::close() !!}						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
@endsection