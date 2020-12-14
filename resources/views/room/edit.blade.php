@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h2>
                    Edit Room
                </h2>
            </div>
            <div>
                <form action="/room">
                    @csrf

                    <div class="form-group row">
                        <label for="room_name" class="col-md-4 col-form-label text-md-right">Room Name</label>

                        <div class="col-md-6">
                            <input id="room_name" class="form-control" name="room_name" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="activity" class="col-md-4 col-form-label text-md-right">Activity</label>

                        <div class="col-md-6">
                            <input id="activity" class="form-control" name="activity" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="room_description" class="col-md-4 col-form-label text-md-right">Room Description</label>

                        <div class="col-md-6">
                            <textarea id="room_description" class="form-control" name="room_description" rows="3" autofocus></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="visibility" class="col-md-4 col-form-label text-md-right">Private</label>

                        <div class="col-md-6">
                            <input type="checkbox" id="visibility" class="form-control" name="visibility" value="private" autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
