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
            <br>
            <div class="card">
                <div class="card-header">
                    Room Member
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">img Seraphine</li>
                    <li class="list-group-item">img Ahri</li>
                    <li class="list-group-item">img Akali</li>
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
