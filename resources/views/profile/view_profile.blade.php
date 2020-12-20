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
                <div class="row align-items-start" style="background-color:#BAD9FF; padding-top:15px; padding-left:50px;">
                    <h4 style="color:#000000; ">About {{$user->name}}</h4>
                </div>
                <div class="row" style="background-color:#DAE8F9; padding-top:20px; padding-bottom:35px;">
                    <h6 style="color:#697885">Birth date</h6>
                    @if(! $user->birth_date)
                        <h4 style="color:#435E77;">-</h4>
                    @else
                        <h4 style="color:#435E77;">{{$user->birth_date}}</h4>
                    @endif
                    <br><br>

                    <h6 style="color:#697885">Hobby</h6>
                    @if(! $user->hobby)
                    <h4 style="color:#435E77; font-size: 20px;">No hobbies...</h4>
                    @else
                        {{-- <h4 style="color:#435E77; font-size: 20px;">Streaming </h4>
                        <h4 style="color:#435E77; font-size: 20px;">Playing games </h4>
                        <h4 style="color:#435E77; font-size: 20px;">Getting donations </h4> --}}
                        <h4 style="color:#435E77; font-size: 20px;">{{$user->hobby}}</h4>
                    @endif
                    <br><br>
                    <h6 style="color:#697885">Followed Groups</h6>
                    {{-- <div class=row>
                        <div class="col-sm-3" style="padding-top:15px; padding-left:35px;">
                        <img class="group_pic" src="data:image/jpeg;base64,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Gx5KoYfS0+Bu9/vpicrWt8TyXaZWtFySdBqtc7KuF5sP72tq2hks7Q2OMg5oor5srujnHLdttMo5kgZ4oVZecrovdNRp+TQ0RF3nMFWcZ4CoMbldNURyPkcA0nv5QMosQ0Na8ANuAbAb67qzIgKQeyfCD/w7/wBvN/7F+x9lGExkH2dxtyM0pB8iC+xHkrsijSJ2zxYwRgAAAAWAGwA5BeSIpICIiAIiIAuesooq4ZZY2SDo9ocPquhEBkmOdkbamtjdES2neXOkOl47WIaLnx3Js02OXUm9tdLwnBKbB2hsETIwABcNGY20u527j5kqQRVUJeCXTYREViAiIgCIiAjsTwKlxYg1FPDMRoDJG1xHoXC4UJP2a4TObmkYP6LntHya4BWxE0NkPhPC1DgxDoKWGNw2c1gzf2j4vqphEQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREB//Z" alt="lol" width="70" height="70">
                        </div>
                        <div class="col-sm-9" style="padding-top:30px;">
                            <h5>League of Legends</h5>
                        </div>
                    </div> --}}
                    <h4 style="color:#435E77; font-size: 20px;">No Groups Followed...</h4>
                </div>
                
                @if($user->id === Auth::id())
                    <div style="padding-top:20px;">
                        <button class="btn btn-primary" style="color:#385A82;"><a href="/edit_profile" style="color:#F6FAFF;"> Edit Profile </a></button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection