@extends ('layouts.app') <!-- aca llamamos el tema , la pahina debe llevar la extencion de .blade.php-->

@section ('titulo') <!-- el titulo -->
<title> Paises </title>
@endsection


@section ('content') <!--todo lo que se encuentre aca es lo que va a varias en el contenido de la pg-->



<body>
	<table name = 'Encabezados' class="display compact">
		<thead>
			<tr>
				<td>Id</td>
				<td>País</td>
				<td>Acciones</td>
				<td></td>
				<td></td>
			</tr>
		</thead>

		<tbody>
			<tr>
				@foreach($pais as $pais) <!-- aca estamos recibiendo el objeto del controlador $pais y lo asignamos a un alias-->
				<td>{{$pais->id}}</td>
				<td>{{$pais->nombre}}</td>
				<td><a href = "{{ 'pais/ver/' . $pais->id}}">Detalle</a></td>
				<td><a href="{{route('pais.eliminar',$pais->id)}}" class="btn btn-danger" onsubmit = "return confirmacion()">Eliminar</a>
					<script type = "text/javascript">
						function confirmacion() {
							if(confirm("Esta seguro que desea eliminar este registro?")){
								return true;
								else {return false;}
							}
						}
					</script>
				</td>
				<td><a href="{{route('pais.actualizar',$pais->id)}}" class="btn btn-danger">Actualizar</a>
				</td>
			</tr>
				@endforeach		
		</tbody>
	</table>

	<a href = "{{ 'pais/crear'}}">Crear País</a>

</body>




@endsection



