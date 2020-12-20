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
            <img class="pf_pic" src="https://i.pinimg.com/originals/0b/22/42/0b2242c6a2173763a1fe3a40ad5b019e.jpg" alt="Serasimps" width="225" height="225">
            </div>
        </div>
        <div class="col-sm-8 row" style="padding-left:40px; padding-top:30px;">
            <div class=row>
                <h4 class="pf_name">Seraphine</h4>
            </div>
            <div class=row>
                <h6 class="pf_username">@seraphine.qt</h4>
            </div>
            <div class=row>
                <h6 class="pf_bio">Activist | Nonwhite | Trans | Bi |</h4>
                <h6 class="pf_bio">Blacktivist</h4>
                <h6 class="pf_bio">twitch.tv/seraph1ne69x</h4>
            </div>
        </div>
        <!-- <div class="col-sm-14" style="color:fdb827;">
            <p>test2</p>
        </div> -->
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
                    <form>
                    <div class="form-group">
                        <label for="profilepic">Profile Picture :</label>
                        <input type="text" class="form-control" id="profilepic" placeholder="www.img.jpg">
                    </div>
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="name" placeholder="Seraphine">
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birth date :</label>
                        <input type="date" class="form-control" id="birthdate" value="2020-10-24">
                    </div>
                    <div class="form-group">
                        <label for="hobby">Hobby :</label>
                        <input type="text" class="form-control" id="hobby" placeholder="Streaming; Playing games; Getting Donations">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio :</label>
                        <textarea class="form-control" id="bio" rows="4">Activist | Nonwhite | Trans | Bi |
Blacktivist
twitch.tv/seraph1ne69x
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="color:#385A82;"><a style="color:#F6FAFF;"> Submit </a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection