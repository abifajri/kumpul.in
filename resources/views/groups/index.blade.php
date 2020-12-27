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
                    {{$group->name}}
                </div>
                <ul class="list-group list-group-flush">
                    <div class="row">
                        <div class="col-8">
                            <li class="list-group-item">Group ID: {{$group->id}}</li>
                            <li class="list-group-item">
                                <u>Description</u> <br>
                                {{$group->description}}
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
            </div>        
            <br>
            <div class="card">
                <div class="card-header">
                    Group Member
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img src="https://avatarfiles.alphacoders.com/252/252465.jpg" class="rounded-circle" style="width:40px;height:40px;"> Seraphine</li>
                    <li class="list-group-item"><img src="https://i.pinimg.com/originals/b3/0e/54/b30e54bf0bddc2352761a5e35f343647.jpg" class="rounded-circle" style="width:40px;height:40px;"> Ahri</li>
                    <li class="list-group-item"><img src="https://avatarfiles.alphacoders.com/160/160743.jpg" class="rounded-circle" style="width:40px;height:40px;"> Akali</li>
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
