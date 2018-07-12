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
<h1>Criar nova conta</h1>

<form action="/register" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="user_type" value="user">

<div class="form-group">
	<label>Nome: </label>
	<input class = "form-control"  name="name" value="">
</div>

<div class="form-group">
	<label>Email:</label>
	<input class = "form-control"  name="email" value="">
</div>

<div class="form-group">
	<label>Senha:</label>
	<input class = "form-control"  type="password" name="password" value="">
</div>

<div class="form-group">
	<label>Confirmar senha:</label>
	<input class = "form-control"  type="password" name="password_confirmation" value="">
</div>


<button class="btn btn-primary" type="submit"> Login </button>

</form>


@stop