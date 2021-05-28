@extends('layout.main-layout')

@section('component')

    
    <main>
        <ul>
            @foreach ($matches as $match)

                <li>
                    <a href="{{route('show', $match -> id)}}">
                        <h4> {{$match -> team1}}  -  {{$match -> team2}}
                        
                            <a class="" href="{{route('edit', $match -> id)}}">
                                <i  class="far fa-edit"></i>
                            </a>
                            <a class="" href="{{route('delete', $match -> id)}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </h4>

                       
                    </a>
                    
                </li>


                
            @endforeach
       </ul>

    </main>

@endsection