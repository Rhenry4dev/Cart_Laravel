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
    		<td>{{$address->street_name}}</td>
    		<td>{{$address->number}}</td>
    		<td>{{$address->public_place}}</td>
    		<td>{{$address->town}}</td>
    		<td>{{$address->CEP}}</td>
    		<td>{{$address->state}}</td>
    		<td>{{$address->country}}</td>
    	</tr>
    		
    	<tr>
    		<td>Forma da pagamento: </td>
    		<td>{{$orders->payment->name}}</td>
    		
    	</tr>
    	<tr>

    	</tr>
    </table>
    </br>
    <form action="{{ route('checkout.close', ['id' => $orders->id]) }}">
    	<button class='btn btn-primary'type='submit'> Finalizar Compra</button>
    </form>



@stop