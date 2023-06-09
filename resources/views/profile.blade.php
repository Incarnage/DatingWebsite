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
  <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions" id="male" value="male">
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input fs-5 " type="radio" name="inlineRadioOptions" id="female" value="female">
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions" id="binary" value="binary" >
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio3">Binary</label>
</div>

<div class="pt-2 pb-0 mb-0 form-group">
  <p class="fw-bold fs-5">Nickname</p>

  <label for="nickname"></label>
                            <input class="form-control @error('nickname') is-invalid @enderror" required id="nickname" name="nickname" type="text" placeholder="Enter product name" value="{{ old('nickname') }}">
                            @error('nickname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
    <option value="Ateneo de Naga University">Ateneo de Naga University</option>
    <option value="University of Nueva Caceres">University of Nueva Caceres</option>
    <option value="STI College - Naga">STI College - Naga</option>
    <option value="Naga View Adventist College">Naga View Adventist College</option>
    <option value="Naga College Foundation">Naga College Foundation</option>
    <option value="Universidad de Sta. Isabel">Universidad de Sta. Isabel</option>
    <option value="Bicol State College of Applied Sciences and Technology">Bicol State College of Applied Sciences and Technology</option>
    <option value="Mariners' Polytechnic Colleges Foundation">Mariners' Polytechnic Colleges Foundation</option>
    <option value=">Brentwood College of Asia International School">Brentwood College of Asia International School</option>
    <option value="Philippine Computer Foundation College">Philippine Computer Foundation College</option>
    <option value="Our Lady of the Most Holy Trinity College Seminary">Our Lady of the Most Holy Trinity College Seminary</option>
    <option value="AMA Computer University - Naga Campus">AMA Computer University - Naga Campus</option>
    <option value="Don Bosco TVET Center - Carolina">Don Bosco TVET Center - Carolina</option>
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
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30+">30+</option>
  </select>
</div>

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Height</p>
</div>

<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select your height</option>
    <option value="4ft below">4ft below</option>
    <option value="5ft">5ft</option>
    <option value="5'1">5'1</option>
    <option value="5'2">5'2</option>
    <option value="5'3">5'3</option>
    <option value="5'4">5'4</option>
    <option value="5'5">5'5</option>
    <option value="5'6">5'6</option>
    <option value="5'7">5'7</option>
    <option value="5'8">5'8</option>
    <option value="5'9">5'9</option>
    <option value="5'10">5'10</option>
    <option value="5'11">5'11</option>
    <option value="6ft">6ft</option>
    <option value="6'1">6'1</option>
    <option value="6'2">6'2</option>
    <option value="6'3">6'3</option>
    <option value="6'4 above">6'4 above</option>
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
    <option value="Writing">Writing</option>
    <option value="Blogging">Blogging</option>
    <option value="Photography">Photography</option>
    <option value="Travel">Travel</option>
    <option value="Sports">Sports</option>
    <option value="Art">Art</option>
    <option value="Dance">Dance</option>
    <option value="Making Music">Making Music</option>
    <option value="Cooking">Cooking</option>
    <option value="Cycling">Cycling</option>
    <option value="Reading">Reading</option>
    <option value="Martial Arts">Martial Arts</option>
    <option value="Gaming">Gaming</option>
    <option value="Star Gazing">Star Gazing</option>
    <option value="Foreign Language">Foreign Language</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select a hobby</option>
    <option value="Writing">Writing</option>
    <option value="Blogging">Blogging</option>
    <option value="Photography">Photography</option>
    <option value="Travel">Travel</option>
    <option value="Sports">Sports</option>
    <option value="Art">Art</option>
    <option value="Dance">Dance</option>
    <option value="Making Music">Making Music</option>
    <option value="Cooking">Cooking</option>
    <option value="Cycling">Cycling</option>
    <option value="Reading">Reading</option>
    <option value="Martial Arts">Martial Arts</option>
    <option value="Gaming">Gaming</option>
    <option value="Star Gazing">Star Gazing</option>
    <option value="Foreign Language">Foreign Language</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select a hobby</option>
    <option value="Writing">Writing</option>
    <option value="Blogging">Blogging</option>
    <option value="Photography">Photography</option>
    <option value="Travel">Travel</option>
    <option value="Sports">Sports</option>
    <option value="Art">Art</option>
    <option value="Dance">Dance</option>
    <option value="Making Music">Making Music</option>
    <option value="Cooking">Cooking</option>
    <option value="Cycling">Cycling</option>
    <option value="Reading">Reading</option>
    <option value="Martial Arts">Martial Arts</option>
    <option value="Gaming">Gaming</option>
    <option value="Star Gazing">Star Gazing</option>
    <option value="Foreign Language">Foreign Language</option>
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
    <option value="Animals">Animals</option>
    <option value="Architecture">Architecture</option>
    <option value="Botany">Botany</option>
    <option value="Baking">Baking</option>
    <option value="Cosplay">Cosplay</option>
    <option value="Documentaries">Documentaries</option>
    <option value="History">History</option>
    <option value="Investing">Investing</option>
    <option value="Origami">Origami</option>
    <option value="Pool">Pool</option>
    <option value="Robotics">Robotics</option>
    <option value="Science">Science</option>
    <option value="Swimming">Swimming</option>
    <option value="Theatre">Theatre</option>
    <option value="v">Wrestling</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select an interest</option>
  <option value="Animals">Animals</option>
    <option value="Architecture">Architecture</option>
    <option value="Botany">Botany</option>
    <option value="Baking">Baking</option>
    <option value="Cosplay">Cosplay</option>
    <option value="Documentaries">Documentaries</option>
    <option value="History">History</option>
    <option value="Investing">Investing</option>
    <option value="Origami">Origami</option>
    <option value="Pool">Pool</option>
    <option value="Robotics">Robotics</option>
    <option value="Science">Science</option>
    <option value="Swimming">Swimming</option>
    <option value="Theatre">Theatre</option>
    <option value="v">Wrestling</option>
  </select>
</div>
</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
  <option selected>Select an interest</option>
  <option value="Animals">Animals</option>
    <option value="Architecture">Architecture</option>
    <option value="Botany">Botany</option>
    <option value="Baking">Baking</option>
    <option value="Cosplay">Cosplay</option>
    <option value="Documentaries">Documentaries</option>
    <option value="History">History</option>
    <option value="Investing">Investing</option>
    <option value="Origami">Origami</option>
    <option value="Pool">Pool</option>
    <option value="Robotics">Robotics</option>
    <option value="Science">Science</option>
    <option value="Swimming">Swimming</option>
    <option value="Theatre">Theatre</option>
    <option value="v">Wrestling</option>
  </select>
</div>
</div>

</div>
  </div>
</div>
</div>

<div>
    <div class="container-fluid p-5">
        <div class="col-4 mx-auto p-4  border border-success border-2">
           
            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nickname">Product Name</label>
                            <input class="form-control @error('nickname') is-invalid @enderror" required id="nickname" name="nickname" type="text" placeholder="Enter product name" value="{{ old('nickname') }}">
                            @error('nickname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- /.row-->
                <div class="form-group">
                    <label for="img">Upload Product Image</label>
                    <div class="row">




                        <div class="col-sm-6 ">
                            <img id="preview-image-before-upload" src="{{asset('/img/add.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">
                            <input class=" form-control @error('img') is-invalid @enderror " type="file" name="img" value="{{ old('img') }}" id="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <button class="btn-dark-green ">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });


    });
</script>
@endsection

