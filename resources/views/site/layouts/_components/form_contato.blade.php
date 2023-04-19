{{$slot}}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{$class}}">
    <br>
    <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{$class}}">
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$class}}">
    <br>
    <select name="motivo_contato" class="{{$class}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $motivo)
            <option value="{{$motivo->id}}" {{ (old('motivo_contatos') == $motivo->id) ? 'selected' : ''}}>{{$motivo->motivo_contato}}</option>
        @endforeach
       
    </select>
    <br>
    <textarea name="mensagem"  class="{{$class}}">
        {{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}
    </textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>