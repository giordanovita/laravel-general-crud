@extends('layout.main-layout')

@section('component')
    
    <h2>Modifica dettagli partita:</h2>

    <form class="form" method="POST" action="{{route('update', $match -> id)}}">

        @csrf
        @method('POST')

            <label for="team1">Casa:</label>
            <input type="text" name="team1" value="{{$match -> team1}}">

            <label for="team2">Ospiti:</label>
            <input type="text" name="team2" value="{{$match -> team2}}">

            <label for="point1">goal casa:</label>
            <input type="number" name="point1" value="{{$match -> point1}}">

            <label for="point2">goal ospiti:</label>
            <input type="number" name="point2"  value="{{$match -> point2}}">

            <div for="result">Risultato: <br>
            <label for="result">squadra 1 vincitore</label>
            <input type="radio" name="result"  value="0"> <br>

            <label for="result">squadra 2 vincitore</label>
            <input type="radio" name="result" value="1" >
           
          </div>
          <div class="button-cont">
            <button type="submit">Modifica</button>
          </div>


       </form>




@endsection