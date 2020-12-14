@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">
                Create Room
            </h3>

            <form>
                <div class="form-group">
                    <label for="roomName">Room Name</label>
                    <input class="form-control" id="roomName" placeholder="">
                </div>
                <div class="form-group">
                    <label for="roomDescription">Description</label>
                    <textarea class="form-control" id="roomDescription" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="roomCapacity">Capacity</label>
                    <input type="number" min="1" max="99" size="1" maxlength="2" class="form-control" id="roomCapacity" placeholder="">
                </div>
                <div class="form-group">
                    <label for="roomActivity">Activity</label>
                    <input class="form-control" id="roomActivity" placeholder="">
                </div>
                <div class="form-group">
                    <label for="roomPassword">Password</label>
                    <input type="" class="form-control" id="roomPassword" placeholder="">
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Is Private</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="roomIsPrivate">
                            <label class="form-check-label" for="roomIsPrivate" style="font-size:14px;">
                                (Your Room won't show in public lobby.)
                            </label>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
