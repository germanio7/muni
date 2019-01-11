@extends('home')

@section('contenido')

<br><br>
<div class="container">
    <div class="row">
    	<div class="col s12">
    		<form action="{{route('reclamos.store')}}" method="POST" enctype="multipart/form-data">
    			@csrf
    			<input type="text" name="titulo" value="{{old('titulo')}}" placeholder="titulo">
    			<textarea name="descripcion" value="{{old('descripcion')}}" placeholder="descripción"></textarea> 
    			<input type="text" name="direccion" value="{{old('direccion')}}" placeholder="dirección">
    			<input type="file" name="foto" >
    			<input type="text" name="coordenadas" value="{{old('coordenadas')}}" placeholder="ubicación">
    			<select name="categoria_id" id="" >
					@foreach($categorias as $categoria)

						<option value="{{$categoria->id}}">{{$categoria->categoria}}</option>

					@endforeach    				 
    			</select>
				
				<input type="submit" value="Enviar">

    		</form>
    	</div>
    </div>
</div>

@endsection