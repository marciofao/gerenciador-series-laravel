<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">
            {{htmlentities($serie->nome)}}
            <div class="show-on-hover">
                <a href="/series/editar">Editar</a>
                <a href="/series/excluir">Excluir</a>
            </div>
        </li>
        @endforeach
    </ul>
    <script>
        const series = {{ Js:: from($series)}}
    </script>
</x-layout>