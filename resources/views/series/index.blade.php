<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">
            {{htmlentities($serie->nome)}}
            <div class="show-on-hover">
                <small>
                    <a href="/series/editar">Editar</a>
                    <a href="javascript:del({{$serie->id}})">Excluir</a>
                </small>

            </div>
        </li>
        @endforeach
    </ul>
    <script>
        function del(id){
            if(confirm('Tem certeza que deseja excluir a série?')){
                window.location.href = `/series/excluir?id=${id}`
            }else{
                return false
            }
        }
        
        const series = {{ Js:: from($series)}}
    </script>
</x-layout>