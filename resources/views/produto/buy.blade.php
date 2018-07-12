@extends('layout.principal')

@section('conteudo')

 @if(empty($produtos))
 @foreach ($produtos as $p)
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>
 @endforeach
 @else
   <h1>Listagem de produtos</h1>
  <table class="table table-striped table-bordered table-hover">
  @foreach ($produtos as $p)
    <tr class="{{$p->quantity<=1 ? 'danger' : '' }}">
      <td><img src='/storage/{{$p->image}}' height="100px" width="100px"></img></td>
      <td> {{$p->name}} </td>
      <td> {{$p->price}} </td>
      <td> {{$p->description}} </td>
      <td> {{$p->category->name}} </td>
      @if ((Auth::guest()))

      <form action="/login" method="get">  
      <td><button class="btn btn-primary" type="submit">Comprar</button></td>
      </form>
      @elseif (( Auth::user()->user_type) == 'user')

      <form action="/carrinho/adiciona/{{Auth::user()->id}}" method="post">
                {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{$p->id}}">
        
        <input type="hidden" name="status" value= "open">

        <input type="hidden" name="user_id" value ="{{Auth::user()->id}}">

        <input type="hidden" name="quantity" value=1>

        <td><button class="btn btn-primary" type="submit">Comprar</button></td>
      </form>


      @endif
      <td> 
        <a href="/produtos/mostra/{{$p->id}}">
          Visualizar
        </a>
      </td>
    </tr>
    @endforeach
  </table>
  
 @endif
@stop
    