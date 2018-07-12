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

<h1>Login de Administrador: </h1>

<form action="/admin/login" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
	<label>Email:</label>
	<input class = "form-control"  name="email" value="">
</div>

<div class="form-group">
	<label>Senha:</label>
	<input class = "form-control"  type="password" name="password" value="">
</div>

<button class="btn btn-primary" type="submit"> Login </button>

</form>


@stop