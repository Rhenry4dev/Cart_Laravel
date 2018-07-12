@extends('layout.principal')

@section('conteudo')

 @if(empty($carts));
 @foreach ($carts as $cart)
  <div class="alert alert-danger">
    Você não tem nenhum produto no Carrinho.
  </div>
 @endforeach
 @else
 @php
 $subtotal = 0;

 @endphp
  <h1>Listagem de produtos no Carrinho</h1>
  <table class="table table-striped table-bordered table-hover">
    <td></td>
    <td>Nome</td>
    <td>Preço</td>
    <td>Descrição</td>
    <td></td>
    <td>Qtd</td>
    <td></td>
    <td>Total</td>

  @foreach ($carts->cart_item as $item)
    @php
      $ProductQTD = $item->product['quantity'];
      $quantity = $item->quantity;
      $total = $quantity*($item->product['price']);
      $qtd= 0 ;
    @endphp
    <tr>
      <td><img class="rounded-circle" src="/storage/{{$item->product['image']}}" height="90px" width="90px"></img></td>
      <td> {{$item->product['name']}} </td>
      <td class="table-secondary" > {{$item->product['price']}} </td>
      <td> {{$item->product['description']}} </td>
      <form action="/carrinho/atualizaqtdb" method="post">
        <input type="hidden" name="cart_id" value="{{$item->id}}">
        <input type="hidden" name="product_id" value="{{$item->product['id']}}">
        <input type="hidden" name="quantity" value= "{{ $item->quantity }}" >
        {{ csrf_field() }}
        <td><button class="btn btn-primary" type="submit">-</button></td>
        <td>

        {{$quantity}}

      </td>
      </form>
      <form action="/carrinho/atualizaqtda" method="post">
        <input type="hidden" name="cart_id" value="{{$item->id}}">
        <input type="hidden" name="product_id" value="{{$item->product['id']}}">
        <input type="hidden" name="quantity" value= "{{ $item->quantity }}" >
        {{ csrf_field() }}
        <td><button class="btn btn-primary" type="submit">+</button></td>
      </form>
      </td>
      <td>{{$total}}</td>
      <td>
        <a href="{{action('CartController@ProductDelete', $item->product['id'] )}}">Remover</a>
      </td>
    </tr>
    @php
      $subtotal = $subtotal + $total;
    @endphp
    @endforeach
    <td >Total da compra: </td>
    <td class="table-info" >{{$subtotal}}</td>
    @if(!(Auth::user()->user_type == "user"))
    <td><p>Logue com uma conta que seja possível conlcuir as próximas etapas (Conta não-administrativa.)</p></td> 
    @else
  </table>
    <form action='/checkout/comprando'>
      <button class="btn-primary" type="submit">Finalizar Pedido</button>
    </form>
  @endif
  @endif
  @stop