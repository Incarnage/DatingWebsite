@extends('layouts.app')
@section('content')


<div class="container-fluid profile">
<div class="row">
<div class="col">
    <h1 class="text-start fw-bold  pb-0 mb-0">Photos</h1>
        
        <h2 class="text-start   ">Upload photos in the order you like them to appear</h2>
    </div>
  <div class="col-sm-3">
    <div class="card">
    <img src="{{asset('img/Summer-reading-list.png')}}" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
    <img src="{{asset('img/Summer-reading-list.png')}}" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
    <img src="{{asset('img/Summer-reading-list.png')}}" class="card-img-top" alt="...">
    </div>
  </div>
</div>
</div>

<div class="container-fluid profile">
    <div class="row">
        <div class="col-md-auto">
        <h1 class="text-start fw-bold  pb-0 mb-0">About Yourself</h1>
        
        <h2 class="text-start   ">Tell us about yourself</h2>
        </div>
        <div class="col my-auto" >
        <hr style="height:5px;border-width:0;color:black;background-color:black">
        </div>
    </div>
    
</div>

@endsection
