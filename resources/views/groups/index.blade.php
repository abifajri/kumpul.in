@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                 <p>John</p>
                 <img src="default.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="card">
                  <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                 <p>Bo</p>
                 <img src="default.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="card">
                  <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                 <p>Jane</p>
                 <img src="default.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="card">
                  <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                 <p>Anja</p>
                 <img src="{{asset('/images/default.jpg')}}" class="img-circle" height="55" width="55" alt="Avatar">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="card">
                  <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                </div>
              </div>
            </div>     
          </div>
    </div>
</div>
@endsection
