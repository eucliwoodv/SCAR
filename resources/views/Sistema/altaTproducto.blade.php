
<h1>Alta Tipo de Producto</h1>	
<br>
<form action="" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	@if($errors->first('idtp'))
	<i> {{ $errors->first('idtp') }} <i>
	@endif  <br>	
Clave de tipo de producto<input type='text' name='idtp' value="{{$idtp}}" readonly = 'readonly'>	
<br>
@if($errors->first('nomtp'))
	<i> {{ $errors->first('nomtp') }} <i>
	@endif  <br>	
Nombre tipo de producto<input type='text' name='nomtp' value="{{old('nomtp')}}">
<br>
@if($errors->first('activo'))
	<i> {{ $errors->first('activo') }} <i>
	@endif  <br>
Activo<input type='text' name='activo' value="{{old('edad')}}">
<br>
<input type='submit' name='Guardar'>
</form>

