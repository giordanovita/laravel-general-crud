@extends('layout.main-layout')

@section('component')
    
    <h2>compila i capi per inserireuna nuova partita:</h2>

    <form class="form" method="POST" action="{{route('store')}}">

        @csrf
        @method('POST')

            <label for="team1">Casa:</label>
            <input type="text" name="team1">

            <label for="team2">Ospiti:</label>
            <input type="text" name="team2">

            <label for="point1">goal casa:</label>
            <input type="number" name="point1">

            <label for="point2">goal ospiti:</label>
            <input type="number" name="point2" >

            <div for="result">Risultato: <br>
            <label for="result">squadra 1 vincitore</label>
            <input type="radio" name="result"  value="0"> <br>

            <label for="result">squadra 2 vincitore</label>
            <input type="radio" name="result" value="1" >
           
          </div>
          <div class="button-cont">
            <button class="button" type="submit">Aggiungi</button>
          </div>


       </form>




@endsection