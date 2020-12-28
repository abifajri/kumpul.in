@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">
                Group
            </h3>

            <div class="card">
                <div class="card-header">
                    {{$data['0']->name}}
                </div>
                <ul class="list-group list-group-flush">
                    <div class="row">
                        <div class="col-8">
                            <li class="list-group-item">Group ID: {{$data['0']->id}}</li>
                            <li class="list-group-item">
                                <u>Description</u> <br>
                                {{$data['0']->description}}
                            </li>
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
                  @foreach ($data['1'] as $member)
                  <li class="list-group-item"><img src="https://i.pinimg.com/originals/b3/0e/54/b30e54bf0bddc2352761a5e35f343647.jpg" class="rounded-circle" style="width:40px;height:40px;">{{$member->username}}</li>  
                  @endforeach
                </ul>
            </div>        
            <br>
            <div class="card">
                <div class="card-header">
                    Chat
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
