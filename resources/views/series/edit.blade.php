<x-layout title="Editar Serie">
    <form action="/series/atualiza" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $serie->nome }}">
            <input name="id" id="id" hidden value="{{ $serie->id }}">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>