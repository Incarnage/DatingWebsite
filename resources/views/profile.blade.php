@extends('layouts.app')
@section('title','Profile')
@section('content')


<div class="container-fluid profile" style="height: 300px;">
<div class="row mt-5">
<div class="col">
    <h2 class="text-start fw-bold pt-5 pb-0 mb-0">Photos</h2>
        
        <h3 class="text-start ">Upload photos in the order you like them to appear</h3>
    </div>

    <x-profile-list :profiles="$profile" ></x-profile-list>
</div>
</div>


<div class="container-fluid profile">
    <div class="row mt-3">
        <div class="col-md-auto">
        <h2 class="text-start fw-bold  pb-0 mb-0">About Yourself</h2>
        
        <h3 class="text-start  ">Tell us about yourself</h3>
        </div>
        <div class="col" >
        <hr style="height:10px;border-width:0;color:black;background-color:black">
        </div>
    </div>
    
</div>


<div class="container-fluid profile">
<div class="row">
<div class="col p-3 ">

<div class="form-check form-check-inline">
  <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input fs-5 " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio3">Binary</label>
</div>

<div class="pt-2 pb-0 mb-0">
  <p class="fw-bold fs-5">Nickname</p>
</div>
<div class="input-group">
    <input type="text" class="form-control" placeholder="Nickname" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="pt-2 pb-0 mb-0 pt-2 mt-2">
  <p class="fw-bold fs-5">Address</p>
</div>

<div class="input-group mb-3">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select your address</option>
    <option value="1">Abella</option>
    <option value="2">Bagumbayan Norte</option>
    <option value="3">Bagumbayan Sur</option>
    <option value="4">Balatas</option>
    <option value="5">Calauag</option>
    <option value="6">Cararayan</option>
    <option value="7">Carolina</option>
    <option value="8">Concepcion Grande</option>
    <option value="9">Concepcion Pequeña</option>
    <option value="10">Dayangdang</option>
    <option value="11">Del Rosario</option>
    <option value="12">Dinaga</option>
    <option value="13">Igualdad Interior</option>
    <option value="14">Lerma</option>
    <option value="15">Liboton</option>
    <option value="16">Mabolo</option>
    <option value="17">Pacol</option>
    <option value="18">Panicuason</option>
    <option value="19">Peñafrancia</option>
    <option value="20">Sabang</option>
    <option value="21">San Felipe</option>
    <option value="22">San Francisco</option>
    <option value="23">San Isidro</option>
    <option value="24">Santa Cruz</option>
    <option value="25">Tabuco</option>
    <option value="26">Tinago</option>
    <option value="27">Triangulo</option>
  </select>
</div>

<div class="row pt-5 mt-4">
<div class="col text-center">

<div class="d-grid gap-2">
<a role="button" class="btn btn-danger btn-lg" href="/home">SAVE</a>
</div>

</div>
<div class="col text-center">
<div class="d-grid gap-2">
<a role="button" class="btn btn-danger btn-lg" href="/home">CANCEL</a>
</div>

</div>
</div>


    </div>
  <div class="col">

  <div class="p-0 m-0">
  <p class="fw-bold fs-5">Bio</p>
  </div>
  <div class="input-group">
  <textarea class="form-control" aria-label="With textarea" placeholder="Nice to meet you!"></textarea>
</div>

<div class="pt-2 pb-0 mb-0 pt-2 mt-2">
  <p class="fw-bold fs-5">School</p>
</div>

<div class="input-group mb-3">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select your school</option>
    <option value="1">Ateneo de Naga University</option>
    <option value="2">University of Nueva Caceres</option>
    <option value="3">STI College - Naga</option>
    <option value="4">Naga View Adventist College</option>
    <option value="5">Naga College Foundation</option>
    <option value="6">Universidad de Sta. Isabel</option>
    <option value="7">Bicol State College of Applied Sciences and Technology</option>
    <option value="8">Mariners' Polytechnic Colleges Foundation</option>
    <option value="9">Brentwood College of Asia International School</option>
    <option value="10">Philippine Computer Foundation College</option>
    <option value="11">Our Lady of the Most Holy Trinity College Seminary</option>
    <option value="12">AMA Computer University - Naga Campus</option>
    <option value="13">Don Bosco TVET Center - Carolina</option>
  </select>
</div>

<div class="p-0 m-0">
  <p class="fw-bold fs-5">Course</p>
  </div>
  <div class="input-group">
  <input type="text" class="form-control" placeholder="Type in your course" aria-label="Username" aria-describedby="basic-addon1">
</div>

  </div>

  <div class="col">
   
  <div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Age</p>
</div>

<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select your age</option>
    <option value="1">18</option>
    <option value="2">19</option>
    <option value="3">20</option>
    <option value="4">21</option>
    <option value="5">22</option>
    <option value="6">23</option>
    <option value="7">24</option>
    <option value="8">25</option>
    <option value="9">26</option>
    <option value="10">27</option>
    <option value="11">28</option>
    <option value="12">29</option>
    <option value="13">30+</option>
  </select>
</div>

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Height</p>
</div>

<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select your height</option>
    <option value="1">4ft below</option>
    <option value="2">5ft</option>
    <option value="3">5'1</option>
    <option value="4">5'2</option>
    <option value="5">5'3</option>
    <option value="6">5'4</option>
    <option value="7">5'5</option>
    <option value="8">5'6</option>
    <option value="9">5'7</option>
    <option value="10">5'8</option>
    <option value="11">5'9</option>
    <option value="12">5'10</option>
    <option value="13">5'11</option>
    <option value="14">6ft</option>
    <option value="15">6'1</option>
    <option value="16">6'2</option>
    <option value="17">6'3</option>
    <option value="18">6'4 above</option>
  </select>
</div>


<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Hobbies</p>
</div>

<div class="row">

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select a hobby</option>
    <option value="1">Writing</option>
    <option value="2">Blogging</option>
    <option value="3">Photography</option>
    <option value="4">Travel</option>
    <option value="5">Sports</option>
    <option value="6">Art</option>
    <option value="7">Dance</option>
    <option value="8">Making Music</option>
    <option value="9">Cooking</option>
    <option value="10">Cycling</option>
    <option value="11">Reading</option>
    <option value="12">Martial Arts</option>
    <option value="13">Gaming</option>
    <option value="14">Star Gazing</option>
    <option value="15">Foreign Language</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select a hobby</option>
    <option value="1">Writing</option>
    <option value="2">Blogging</option>
    <option value="3">Photography</option>
    <option value="4">Travel</option>
    <option value="5">Sports</option>
    <option value="6">Art</option>
    <option value="7">Dance</option>
    <option value="8">Making Music</option>
    <option value="9">Cooking</option>
    <option value="10">Cycling</option>
    <option value="11">Reading</option>
    <option value="12">Martial Arts</option>
    <option value="13">Gaming</option>
    <option value="14">Star Gazing</option>
    <option value="15">Foreign Language</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select a hobby</option>
    <option value="1">Writing</option>
    <option value="2">Blogging</option>
    <option value="3">Photography</option>
    <option value="4">Travel</option>
    <option value="5">Sports</option>
    <option value="6">Art</option>
    <option value="7">Dance</option>
    <option value="8">Making Music</option>
    <option value="9">Cooking</option>
    <option value="10">Cycling</option>
    <option value="11">Reading</option>
    <option value="12">Martial Arts</option>
    <option value="13">Gaming</option>
    <option value="14">Star Gazing</option>
    <option value="15">Foreign Language</option>
  </select>
</div>
</div>

</div>

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Interests</p>
</div>

<div class="row">

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select an interest</option>
    <option value="1">Animals</option>
    <option value="2">Architecture</option>
    <option value="3">Botany</option>
    <option value="4">Baking</option>
    <option value="5">Cosplay</option>
    <option value="6">Documentaries</option>
    <option value="7">History</option>
    <option value="8">Investing</option>
    <option value="9">Origami</option>
    <option value="10">Pool</option>
    <option value="11">Robotics</option>
    <option value="12">Science</option>
    <option value="13">Swimming</option>
    <option value="14">Theatre</option>
    <option value="15">Wrestling</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select an interest</option>
    <option value="1">Animals</option>
    <option value="2">Architecture</option>
    <option value="3">Botany</option>
    <option value="4">Baking</option>
    <option value="5">Cosplay</option>
    <option value="6">Documentaries</option>
    <option value="7">History</option>
    <option value="8">Investing</option>
    <option value="9">Origami</option>
    <option value="10">Pool</option>
    <option value="11">Robotics</option>
    <option value="12">Science</option>
    <option value="13">Swimming</option>
    <option value="14">Theatre</option>
    <option value="15">Wrestling</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select an interest</option>
    <option value="1">Animals</option>
    <option value="2">Architecture</option>
    <option value="3">Botany</option>
    <option value="4">Baking</option>
    <option value="5">Cosplay</option>
    <option value="6">Documentaries</option>
    <option value="7">History</option>
    <option value="8">Investing</option>
    <option value="9">Origami</option>
    <option value="10">Pool</option>
    <option value="11">Robotics</option>
    <option value="12">Science</option>
    <option value="13">Swimming</option>
    <option value="14">Theatre</option>
    <option value="15">Wrestling</option>
  </select>
</div>
</div>

</div>
  </div>
</div>
</div>





@endsection
