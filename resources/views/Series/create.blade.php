<x-layout title="Nova Série">
    
    <form action="/serie/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>    
    </form>

</x-layout>