@extends('layouts.app')

@section('content')
    <style>
        body{
            background-color: #F6FAFF;
            padding-top: 25px;
            padding-left: 250px;
        }

        .card{
            color : #008B75 ;
            background-color : #DAE8F9;

        }

        
    </style>

    <body>
        <div class="container">
            <div class="col text-center">
                <h2>Timeline</h2>
                <a href="/post/create">
                    <button type="button" class="btn btn-primary">Create Post</button>
                </a>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    
                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="card-header">{{ $post->title }}</div>

                            <div class="card-body">
                                <p>{{ $post->content }}</p>
                            </div>
                        </div>
                        <br>
                    @endforeach    
                </div>
            </div>
        </div>
    </body>
    
@endsection