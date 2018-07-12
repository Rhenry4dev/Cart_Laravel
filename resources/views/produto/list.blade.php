@extends('layout.principal')

@section('conteudo')

 @if(empty($produtos))

 @foreach ($produtos as $p)
  <div class="alert alert-danger">
    Você não tem nenhum produto no Estoque.
  </div>
 @endforeach

 @else

  <h1>Listagem de produtos</h1>


  @foreach ($produtos as $p)
<table class="table table-striped table-bordered table-hover">
    <tr class="{{$p->quantity<=1 ? 'danger' : '' }}">
      <td><img src='/storage/{{$p->image}}' height="100px" width="100px"></img></td>
      <td> {{$p->name}} </td>
      <td> {{$p->price}} </td>
      <td> {{$p->description}} </td>
      <td> {{$p->quantity}} </td>
      <td> {{$p->category->name}} </td>
      <td> 
        <a href="/produtos/mostra/{{$p->id}}">
          Visualizar
        </a>
      </td>
      <td>
        <a href="{{action('ProductController@remove', $p->id )}}">Remover</a>
      </td>
      <td>
        <a href="/produtos/atualiza_form/{{$p->id}}">Alterar</a>
      </td>
    </tr>

    @endforeach
  </table>

  
 @endif

@if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> 
      O produto {{ old('name') }} foi adicionado.
  </div>
@endif

 <h4>
  <span class="label label-danger pull-right">
    Um ou menos itens no estoque
  </span>
 </h4>
 
@stop
