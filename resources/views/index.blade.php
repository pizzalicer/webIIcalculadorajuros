@extends('layout')

@section('content')

        <form class="form-signin" action="{{route('calcular')}}" method="POST">
            @csrf
            <div class="texto">
                <h1 class="h3 mb-3 font-weigth-normal"> Calcular Juros ao Mês</h1>
            </div>
            <label for="capital" class="sr-only">Capital Inicial: R$</label>
            <input type="number" id="capital" class="form-control" name="capital"
                placeholder="100.00" min="10" required autofocus>
            <label for="taxa" class="sr-only">Taxa Fixa: %</label>
            <input type="number" id="number" class="form-control" name="periodo"
                placeholder="3" min="1" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
        </form>

@endsection

