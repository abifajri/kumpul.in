@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">
                Lobby
            </h3>

            <div class="d-flex justify-content-center">
                <a href="/create_room">
                    <button type="button" class="btn btn-info">Create Room</button>
                </a>
            </div>

            <br>
            <div class="card">
                <div class="card-header">
                    Fun Karaoke! (Private)
                </div>
                <ul class="list-group list-group-flush">
                    <div class="row">
                        <div class="col-8">
                            <li class="list-group-item">Room ID: R000001</li>
                            <li class="list-group-item">Capacity: 5</li>
                            <li class="list-group-item">Activity: Karaoke</li>
                            <li class="list-group-item">
                                <u>Description</u> <br>
                                Karaoke with Ahri, Kai’sa, Evelynn, and Akali.
                            </li>
                        </div>
                        <div class="col-4 text-center">
                            <u>Room Master</u> <br>
                            <img src="https://avatarfiles.alphacoders.com/252/252465.jpg" class="rounded-circle" style="width:80px;height:80px;"> <br>
                            Seraphine <br>
                            <span style="font-size:10px;">@seraphine.qt</span> <br>
                        </div>
                    </div> 
                </ul>
                <div class="card-footer text-center">
                    <a href="/create_room">
                        <button type="button" class="btn btn-info">Join Room</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
