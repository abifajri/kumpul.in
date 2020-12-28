@extends('layouts.app')

@section('content')
    <style>
        body{
            background-color: #F6FAFF;
            padding-top: 25px;
            padding-left: 250px;
        }
    </style>
    <body style="background-color: #F6FAFF;
                padding-top: 25px;
                padding-left: 250px;">
        <div class="container">
            <form clas="" action="{{ route('post.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="post title">
                </div>

                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" rows="5" class="form-control" placeholder="post content"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="save">
                </div>

            </form>
        </div>
    </body>

@endsection