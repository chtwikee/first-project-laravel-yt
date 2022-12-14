@extends('layout.main')


@section('title', 'HDC Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento:</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
        </form>
    </div>

    <div id="events-contaienr" class="col-md-12">
        <h2>Próximos eventos:</h2>
        <p  class=" subtitle">Veja os próximos eventos</p>

        <div id="cards-container" class="row">
            @foreach($events as $event)

                <div class="card col-md-3">
                    <img src="./public-img/{{$event->image}}" alt="{{$event->description}}">
                    <div class="card-body">
                        <p class="card-date">{{date('d-m-Y', strtotime($event->date))}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="./events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>

            @endforeach

            @if(count($events) == 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>
    </div>

@endsection