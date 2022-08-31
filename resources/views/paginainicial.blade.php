@extends('layouts.main')


{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

@section('title', 'pagina inicial')

@section('content')

    <body>
        <div class="container-fluid">

            <h1> Busque um evento</h1>
            <div class="col-md-6 col-12 ">
                <form action="#">
                    <input type="text" id="search" name="sarch" class="form-control" placeholder="Procurar...">
                </form>
            </div>

            <div id="events-container" class="col-md-12 mt-4">
                <h3> Próximos eventos:</h3>
                <p>Veja os eventos dos próximos dias</p>
                <div id="cards-container" class="row">
                    @foreach ($events as $event)
                        {{-- <div class="card col-md-3 mb-2 mx-2 text-center">
                            <div class="text-center">

                                <img src="https://img.freepik.com/free-photo/waiting-room-with-monitors_1232-1390.jpg?w=900&t=st=1661888751~exp=1661889351~hmac=4ff764e828e88dd412b11dc960d47215f114dbeb32a3c301988914c39da23d7e"
                                    alt="#" width="200" height="150" class="mt-2 rounded">
                            </div>


                            
                        </div> --}}


                        <div class="card p-0" style="width: 18rem;">
                            <img class="card-img-top"
                                src="https://img.freepik.com/free-photo/waiting-room-with-monitors_1232-1390.jpg?w=900&t=st=1661888751~exp=1661889351~hmac=4ff764e828e88dd412b11dc960d47215f114dbeb32a3c301988914c39da23d7e"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <div class="card-date">
                                    <p>{{ $event->title }}</p>
                                    <span> 10/09/2022</span>
                                    <p class="card-participants"> {{ $event->participants }}</p>
                                    <p>{{ $event->description }}</p>
                                    <a href="" class="btn btn-primary"> Saiba mais</a>
                                </div>

                            </div>
                        </div>
                    @endforeach





                </div>
            </div>
        </div>
    </body>
@endsection


{{-- @foreach ($events as $event)
                <p>{{ $event->title }}</p>
                {{-- Exibindo informaçoes vindo do BD via Controller/Model --}}
{{-- <p> {{ $event->description }}</p>
                <p> {{ $event->city }}</p>
            @endforeach --}}
