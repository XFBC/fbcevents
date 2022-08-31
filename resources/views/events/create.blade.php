@extends('layouts.main')

@section('title', 'Crie um evento')


@section('content')

    <h1> Crie um evento</h1>

    <div class="container-fluid">

        <div class="col-md-6 offset-md-3">
            <form action="/events" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="title">Evento</label>
                    <input type="text" id="title" name="title" class="form-control"
                        placeholder="Digite o nome do evento...">
                </div>
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" id="city" name="city" class="form-control"
                        placeholder="Local do evento...">
                </div>
                <div class="form-group">
                    <label for="private">O evento é privado ?</label>
                    <select id="private" name="private" class="form-control" placeholder="Digite o nome do evento...">
                        <option value="1">sim</option>
                        <option value="0">não</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="participants">Participantes</label>
                    <input type="text" id="participants" name="participants" class="form-control"
                        placeholder="Participantes..">
                </div>


                <div class="form-group">
                    <label for="description">Descrição</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                </div>

                <input type="submit" class="btn btn-primary mt-2" value="Criar evento">

            </form>
        </div>

    </div>

@endsection
