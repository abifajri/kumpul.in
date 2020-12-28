@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <form method="POST" action="{{ route('groups.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Group Name</label>

                        <div class="col-md-6">
                            <input id="name" name="name" class="form-control" name="name" value="Group Name" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

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
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="add_members" class="col-md-4 col-form-label text-md-right">Add Members</label>

                        <div class="col-md-6">
                            <input id="add_members" class="form-control" name="add_members" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="group_description" name="group_description" class="col-md-4 col-form-label text-md-right">Group Description</label>

                        <div class="col-md-6">
                            <textarea id="group_description" class="form-control" name="group_description" rows="3" autofocus></textarea>
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
