@extends ('layouts.app') <!-- aca llamamos el tema , la pahina debe llevar la extencion de .blade.php-->

@section ('titulo') <!-- el titulo -->
<title> Actualizar </title>
@endsection


@section ('content') <!--todo lo que se encuentre aca es lo que va a varias en el contenido de la pg-->



<body>
	<form action = "/jhon1/public/pais/guardaractualizar" method = "post">
		{{csrf_field()}}
			<label>Nombre País *</label>
			<input type = "text" required = "true" name = "nombre" value = "{{$pais->nombre}}">
			<input type = "text"  disabled required = "true" name = "id" value = "{{$pais->id}}">
			<button type = "submit"> actualizar </button>
	</form>
</body>




@endsection



