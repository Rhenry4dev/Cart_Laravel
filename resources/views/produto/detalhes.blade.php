@extends('layout.principal')
@section('conteudo')
<div class="container">
    <table class="table table-striped table-bordered table-hover">

		<h1>Detalhes do produto {{$p->name}} </h1>
        <ul>
            <li>
                <b>Valor:</b> R$ {{$p->price}} 
            </li>
            <li>
                <b>Descrição:</b> {{$p->description}}
            </li>
            <li>
                <b>Quantidade em estoque:</b> {{$p->quantity}}
            </li>
        </ul>
        </br>
        </br>
</table>
</div>
@stop
