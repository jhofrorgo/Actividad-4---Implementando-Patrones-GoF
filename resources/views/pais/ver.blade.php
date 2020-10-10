@extends ('layouts.app') <!-- aca llamamos el tema , la pahina debe llevar la extencion de .blade.php-->

@section ('titulo') <!-- el titulo -->
<title> Pais Detalle </title>
@endsection


@section ('content') <!--todo lo que se encuentre aca es lo que va a varias en el contenido de la pg-->



<body>
	<table name = 'Encabezados' class="display compact">
		<thead>
			<tr>
				<td>Id</td>
				<td>País</td>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>{{$pais->id}}</td>
				<td>{{$pais->nombre}}</td>
			</tr>
		</tbody>
	</table>
</body>




@endsection



