@extends ('layouts.app') <!-- aca llamamos el tema , la pahina debe llevar la extencion de .blade.php-->

@section ('titulo') <!-- el titulo -->
<title> Crear País </title>
@endsection


@section ('content') <!--todo lo que se encuentre aca es lo que va a varias en el contenido de la pg-->



<body>
	<form action = "/jhon1/public/pais/guardar" method = "post">
		{{csrf_field()}}
			<label>Nombre País *</label>
			<input type = "text" required = "true" name = "nombre">
			<button type = "submit"> Crear </button>
	</form>
</body>




@endsection



