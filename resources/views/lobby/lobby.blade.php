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
                            IMG <br>
                            <p style="font-size:16px;">
                                Seraphine <br>
                                <span style="font-size:12px;">@seraphine.qt</span>
                            </p>
                        </div>
                    </div> 
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
