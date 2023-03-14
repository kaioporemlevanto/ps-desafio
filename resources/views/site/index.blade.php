@extends('layouts.site.site')

@section('titulo')
    Book.io
@endsection

@section('conteudo')

    <section class="livros-container">
        <div class="darkModebtn">
            <label for="switch">
                <input type="checkbox" id="switch"> Dark Mode
            </label>
        </div>
        <div class="filtrar-categoria">
            <form class="select" action="{{ route('filtro') }}">
                <div class="select-container">
                    <label for="categorias">Filtrar por Categoria:</label>
                    <select name="categorias" id="categorias">
                        <option value="default" class="selecione">Selecione uma opção</option>
                        <option value="">Mostrar todas</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria['categoria'] }}">
                                {{ $categoria['categoria'] }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit">
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </button>
                </div>
            </form>
        </div>
        <div id="livros-container">
            <div class="livros">
                @isset($produtos)
                    @if (count($produtos))
                        @foreach ($produtos as $produto)
                            <div class="cada-livro">
                                <div class="imagem-container">
                                    <img src="/storage/{{ $produto['imagem'] }}" alt="imagem do produto">
                                </div>
                                <div class="info-livro">
                                    <h3>{{ $produto['nome'] }}</h3>
                                    <h4>{{ $produto->categoria->categoria }}</h4>
                                    <p>Und: {{ $produto['quantidade'] }}</p>
                                    <p>{{ $produto['descricao'] }}</p>
                                    <p class="numero-maior">{{ $produto['preco'] }}</p>
                                </div>
                                <form method="POST" action="{{ route('comprar', ['id' => $produto->id]) }}">
                                    @csrf
                                    <input type="number" name="quantidade" placeholder="quant." style="text-align:center"
                                        id="quantidade">
                                    <button type="submit">Comprar</button>
                                </form>
                            </div>
                        @endforeach
                    @else
                        <p class="no-livros"> Sem livros no momento</p>
                    @endif
                @endisset
            </div>
        </div>
    </section>
@endsection
