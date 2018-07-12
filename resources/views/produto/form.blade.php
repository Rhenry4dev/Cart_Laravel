@extends('layout.principal')
@section('conteudo')

@if (count($errors) > 0)

<div class="alert alert-danger">
<ul>
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
</ul>

</div>

@endif

<h1>Novo produto:</h1>

<form action="/produtos/adiciona" method="post" enctype="multipart/form-data">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
	<label>Nome:</label>
	<input class = "form-control"  name="name" value="{{ old('name') }}">
</div>

<div class="form-group">
	<label>Preço:</label>
	<input class = "form-control"  name="price" value="{{ old('price') }}">
</div>

<div class="form-group">
	<label>Descrição:</label>
	<input class="form-control"  name="description" value="{{ old('description') }}">
</div>

<div class="form-group">
	<label>Quantidade: </label>
	<input class="form-control"  name="quantity" value="{{ old('quantity') }}">
</div>

<div class="form-group">
	<label>Categoria:</label>
		<select name="category_id" class="form-control">
	@foreach($categorys as $category)
        <option value="{{$category->id}}"> {{$category->name}} </option>
    @endforeach
    </select> 
</div>

<div class="form-group">
	<label for="image">Imagem:</label> 
	<input type="file" name="image" class="form-control">
</div>


<button class="btn btn-primary" type="submit"> Adicionar </button>

</form>


@stop