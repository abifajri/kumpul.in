@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">
                Chat
            </h3>

            <div class="card">
                <div class="card-header">
                    Chat
                </div>
                <div class="card-header">
                    Active user : Ahri , Seraphine
                </div>
                <div class="card-body">
                    <p>Seraphine: Hi!</p>
                    <p>Ahri: Hello!</p>
                    <p>Seraphine: Ahoy!</p>
                    <p>Ahri: Let's have fun today!</p>
                </div>
                <input
                    @keydown="sendTypingEvent"
                    @keyup.enter="sendMessage"
                    v-model="newMessage"
                    type="text"
                    name="message"
                    placeholder="Enter your message..."
                    class="form-control">
            </div>
        </div>
    </div>
</div>
@endsection