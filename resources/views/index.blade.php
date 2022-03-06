@extends ('layouts.main')

@section('title', 'Testezada')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form class="form-pesquisa" action="">
        <input type="text" id="search" name="search" class="form-control pesquisa" placeholder="Procurar...">
    </form>
</div>   
<div class="container ct1">
    <div id="events-container" class="cold-mb-12">
        <h2 class="centerlize">Próximos Eventos</h2>
        <p class="subs centerlize">Veja os eventos nos proximos dias</p>
        <div id="cards-container " class="row jus-cont">
            @foreach ($eventos as $evento)
            <div class="card">
                <img class="img-card" src="/img/event.png" alt="{{$evento->titulo}}">
                <div class="card-body">
                    <h5 class="card-title">{{$evento->titulo}}</h5>
                    <p class="card-date">10/10/2010</p>
                    <p class="card-participant nParticipantes">N participantes</p>
                    <p class="card-participant">Local: {{$evento->cidade}}</p>
                    <p class="card-participant">Privado: 
                        @if ($evento->privado)
                        <span class="text-green">&check;</span>
                        @else
                        <span class="text-red">&cross;</span>
                        
                        @endif</p>
                        <div class="btn-center">
                            <a href="#" class="btn">Saiba mais</a>
                        </div>
                    </div>
            </div>            
            @endforeach
        </div>
    </div>
</div>
 
@endsection
                    