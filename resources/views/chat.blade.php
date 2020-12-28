@extends('layouts.app')

@section('content')
<body style="background-color: #F6FAFF;
            padding-top: 25px;
            padding-left: 250px;">
    <div class="container">

        <chat :user="{{ auth()->user() }}"></chat>

    </div>
</body>
@endsection