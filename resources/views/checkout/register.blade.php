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

<h1>Cadastro :</h1>

<form action="/checkout/adiciona_endereco" method="post" >

{{ csrf_field() }}

<div class="form-group">
	<label>Nome da rua :</label>
	<input class = "form-control"  name="street_name" value="{{ old('street_name') }}">
</div>

<div class="form-group">
	<label>Nº da Casa :</label>
	<input class = "form-control"  name="number" value="{{ old('number') }}">
</div>

<div class="form-group">
	<label>Bairro :</label>
	<input class = "form-control"  name="neighborhood" value="{{ old('neighborhood') }}">
</div>

<div class="form-group">
	<label>Cidade :</label>
	<input class = "form-control"  name="town" value="{{ old('town') }}">
</div>

<div class="form-group">
	<label>Logradouro :</label>
	<input class = "form-control"  name="public_place" value="{{ old('public_place') }}">
</div>


<div class="form-group">
	<label>Estado :</label>
	<input class = "form-control"  name="state" value="{{ old('state') }}">
</div>

<div class="form-group">
	<label>País :</label>
	<input class="form-control"  name="country" value="{{ old('country') }}">
</div>

<div class="form-group">
	<label>CEP : </label>
	<input class="form-control"  name="CEP" value="{{ old('CEP') }}">
</div>

<div class="form-group">
	<label>Forma de pagamento:</label>
		<select name="payment_id" class="form-control">
	@foreach($payments as $payment)
        <option value="{{$payment->id}}"> {{$payment->name}} </option>
    @endforeach
    </select> 
</div>

<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

<button class="btn btn-primary" type="submit"> Finalizar </button>

</form>

@stop