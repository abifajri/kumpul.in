@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">
                Room
            </h3>

            <div class="card">
                <div class="card-header">
                    {{$data['0']->name}} 
                    @if($data['0']->isPrivate == true)
                        (Private)
                    @endif
                </div>
                <ul class="list-group list-group-flush">
                    <div class="row">
                        <div class="col-8">
                            <li class="list-group-item">Room ID: {{$data['0']->id}}</li>
                            <li class="list-group-item">Capacity: {{$data['0']->capacity}}</li>
                            <li class="list-group-item">Activity: {{$data['0']->activity}}</li>
                            <li class="list-group-item">
                                <u>Description</u> <br>
                                {{$data['0']->description}}
                            </li>
                        </div>
                        <div class="col-4 text-center">
                            <u>Room Master</u> <br>
                            <img src="https://avatarfiles.alphacoders.com/252/252465.jpg" class="rounded-circle" style="width:80px;height:80px;"> <br>
                            {{ \App\Models\User::where('id', $data['0']->admin_id)->first()->name }} <br>
                            <span style="font-size:12px;">{{ \App\Models\User::where('id', $data['0']->admin_id)->first()->username }} </span> <br>
                            <small>Created on {{$data['0']->created_at}}</small>
                        </div>
                    </div> 
                </ul>
            </div>        
            <br>
            <div class="card">
                <div class="card-header">
                    Room Member
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($data['1'] as $user_room)
                    <li class="list-group-item"><img src="https://avatarfiles.alphacoders.com/252/252465.jpg" class="rounded-circle" style="width:40px;height:40px;"> {{  \App\Models\User::where('id', $user_room->user_id)->first()->name }}</li>
                    @endforeach
                </ul>
            </div>        
            <br>
            <div class="card">
                <div class="card-header">
                    Chat
                </div>
                <div class="card-body">
                    <p>Seraphine: Hi!</p>
                    <p>Ahri: Hello!</p>
                    <p>Akali: Ahoy!</p>
                    <p>Seraphine: Let's have fun today!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
