@extends ('layouts.main')

@section('title', 'Criar um Eventos')

@section('content')
<div id="create-container" class="col-md-12">
    <h1>Crie um evento</h1>
</div>  

<div class="container create-event">
    <form action="/eventos" method="POST">
        <div class="mb-3 ">
            <label for="titulo" class="form-label">Evento:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nome do evento">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Local do evento:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Nome da cidade">
        </div>
        <div class="mb-3">
            <label for="privado" class="form-label">Seu evento é privado?</label>
            <select name="privado" class="form-select" aria-label="Default select example" id="privado">
                <option selected>Selecione uma opção</option>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="descriçao" class="form-label">Descrição:</label>
            <textarea class="form-control"  id="descriçao" rows="3" placeholder="O que vai rolar no seu evento?"></textarea>
        </div>
        <div class="btn-center cont-p-50">
            <input type="reset" class="btn btn-bad centerlize" value="Cancelar">
            <input type="submit" class="btn centerlize" value="Criar Evento">
            
        </div>

    </form>


    




</div>


@endsection