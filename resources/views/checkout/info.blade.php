@extends('layout.principal')

@section('conteudo')


<h1>Informações Pessoais: </h1>
  <table class="table table-striped table-bordered table-hover">
      <td> Nome: </td>
      <td>{{Auth::user()->name}}</td>

      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    <tr>
    	

    		<td> Endereço: </td>
    		<td>{{$address[0]->street_name}}</td>
    		<td>{{$address[0]->number}}</td>
    		<td>{{$address[0]->public_place}}</td>
    		<td>{{$address[0]->town}}</td>
    		<td>{{$address[0]->CEP}}</td>
    		<td>{{$address[0]->state}}</td>
    		<td>{{$address[0]->country}}</td>
    	</tr>
    		
    	<tr>
    		<td>Forma da pagamento: </td>
    		<td>{{$orders->payment->name}}</td>
    		
    	</tr>
    	<tr>

    	</tr>
    </table>
    </br>
    <form action="/checkout/close/{{$orders->id}}">
    	<button class='btn btn-primary'type='submit'> Finalizar Compra</button>
    </form>



@stop