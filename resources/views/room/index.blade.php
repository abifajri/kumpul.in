@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">
                Your Room
            </h3>

            <div class="d-flex justify-content-center">
                <a href="{{ route('create_room') }}">
                    <button type="button" class="btn btn-info">Create Room</button>
                </a>
            </div>
            <br>

            @if(count($rooms) > 0)
                @foreach($rooms as $room)
                    <div class="card">
                        <div class="card-header">
                            {{$room->name}} 
                            @if($room->isPrivate == true)
                                (Private)
                            @endif
                        </div>
                        <ul class="list-group list-group-flush">
                            <div class="row">
                                <div class="col-8">
                                    <li class="list-group-item">Room ID: {{$room->id}}</li>
                                    <li class="list-group-item">Capacity: {{$room->capacity}}</li>
                                    <li class="list-group-item">Activity: {{$room->activity}}</li>
                                    <li class="list-group-item">
                                        <u>Description</u> <br>
                                        {{$room->description}}
                                    </li>
                                </div>
                                <div class="col-4 text-center">
                                    <u>Room Master</u> <br>
                                    <img src="https://avatarfiles.alphacoders.com/252/252465.jpg" class="rounded-circle" style="width:80px;height:80px;"> <br>
                                    Seraphine <br>
                                    <span style="font-size:12px;">@seraphine.qt</span> <br>
                                    <small>Created on {{$room->created_at}}</small>
                                </div>
                            </div> 
                        </ul>
                        <div class="card-footer text-center">
                            <a href="{{route('show_room', ['id' => $room->id])}}">
                                <button type="button" class="btn btn-info">Join Room</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No rooms found.</p>
            @endif

        </div>
    </div>
</div>
@endsection
