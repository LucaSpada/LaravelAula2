<h1>Lista de Mensagem</h1>
<hr>
@foreach($mensagens as $mensagem)
	<p><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->title}}</a></p>
	<p>{{$mensagem->description}}</p>
	<br>
@endforeach