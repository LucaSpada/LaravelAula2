<h1>Lista de Mensagem</h1>
<hr>
@if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif
@foreach($mensagens as $mensagem)
	<p><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->title}}</a></p>
	<p>{{$mensagem->description}}</p>
	<br>
	@auth<p>Ações:
  <a href="/mensagens/{{$mensagem->id}}">Ver Mais</a>
  <a href="/mensagens/{{$mensagem->id}}/edit">Editar</a>
  <a href="/mensagens/{{$mensagem->id}}/delete">Deletar</a>
  </p>
@endauth
@endforeach
@auth
<a href="/mensagens/create">Criar novo registro </a>
@endauth