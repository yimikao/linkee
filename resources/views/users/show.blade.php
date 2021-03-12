@extends('layouts.links')

@section('content')
     <!-- <div class="container py-4">
        <div class="row">
        
            <div class="col-12 col-md-6 offset-md-3">
            <div class="h1 text-center"
                style="color: {{ $user->text_color }};"
            >{{ $user->username  }}</div>
                @foreach($user->links as $link) 
                    <div class="link">
                        <a href="{{ $link->link }}"
                            data-link-id="{{ $link->id }}" 
                            class="user-link d-block p-4 mb-4 mt-4 rounded h3 text-center"
                            target="_blank"
                            rel="nofollow"
                            style="border: 2px solid {{ $user->text_color }}; color: {{ $user->text_color }};"
                        >{{ $link->name }}</a>
                    </div>
                @endforeach
            </div>

            @auth
                <div class="h2 text-center">I'm authenticated</div>
            @endauth
        </div>
    </div>  -->

    <div class="container">
    <a style=" display: block;
    width: 100px;
    text-align: center;
    padding: 1em;
    background-color: black;
    color: white;
    border-radius: 40px;
    margin:  1em auto;
    background-color:  rgb(211, 211, 211);
    border-radius: 10px;
}" href="{{ url('/') }}"> Home</a>

        <h1 class="name m-5">{{ $user->username  }}</h1>
        <div class="links-container">
        @foreach($user->links as $link)
            <div class="linkk" style="color: {{ $user->background_color }}">
            <a href="{{ $link->link }} "
                            data-link-id="{{ $link->id }}" 
                            target="_blank"
                            rel="nofollow"
                        >{{ $link->name }}</a>
            </div>
        @endforeach

        </div>
    </div>
@endsection