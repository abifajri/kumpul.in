@extends('layouts.app')

@section('content')
<style>
    /* .fond {
        color: #385A82;
    } */

    body {
        background-color: #F6FAFF;
    }

    .pf_pic {
        border-radius: 50%;
        border: 10px solid transparent;
    }

    .pf_name {
        color: #385A82;
        font-size: 30px;
        /* font-family: 'Archivo', sans-serif; */
        /* font-weight: bold; */
    }

    .pf_username {
        color: #8E9090;
        font-size: 18px;
        /* font-weight: normal; */
        /* font-family: 'Archivo', sans-serif; */
        /* font-weight: bold; */
    }

    .pf_bio {
        padding-top: 10px;
        color: #515151;
        font-size: 19px;
    }

    .group_pic {
        border-radius: 50%;
        border: 2px solid transparent;
    }

</style>
<div class="container bg_settings">
    <div class="row align-items-start justify-content-center">
        <div class="col-sm-4">
            <div style="padding-left:140px;">
            @if(! $user->img_url)
                <img class="pf_pic" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Default PP" width="225" height="225">
            @else
                <img class="pf_pic" src="{{$user->img_url}}" alt="your pfp" width="225" height="225">
            @endif
            </div>
        </div>
        <div class="col-sm-6 row" style="padding-left:40px; padding-top:30px;">
            <div class=row>
                <h4 class="pf_name">{{$user->name}}</h4>
            </div>
            <div class=row>
                <h6 class="pf_username">@ {{$user->username}}</h4>
            </div>
            <div class=row>
                @if(! $user->status)
                    <h6 class="pf_bio">No Bio...</h4>
                @else
                    <h6 class="pf_bio">{{$user->status}}</h4>
                @endif
            </div>
        </div>
        <div class="col-sm-2">
            {{-- <p>empty space</p> --}}
        </div>
    </div>
    <div class="row justify-content-center" style="padding-top: 30px;  padding-right:400px">
        <div class="col-sm-1">  
        </div>
        <div class="col-sm-11">
            <div class="container-fluid" style="width:680px;">
                <div class="row align-items-start" style="padding-top:15px; padding-left:50px;">
                    <h4 style="color:#000000; ">Edit Profile</h4>
                </div>
                <div class="row" style="padding-top:20px; padding-bottom:35px;">
                    <form method="POST" action="/save_profile/{{$user->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="img_url">Profile Picture URL:</label>
                        <input type="text" class="form-control" id="img_url" name="img_url" value="{{$user->img_url}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Birth date :</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$user->birth_date}}">
                    </div>
                    <div class="form-group">
                        <label for="hobby">Hobby :</label>
                        <input type="text" class="form-control" id="hobby" name="hobby" value="{{$user->birth_date}}">
                    </div>
                    <div class="form-group">
                        <label for="status">Bio :</label>
                        <textarea class="form-control" id="status" name="status" rows="4">{{$user->status}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="color:#385A82;"><a style="color:#F6FAFF;"> Submit </a></button>
                    </form>
                </div>
            </div>
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection