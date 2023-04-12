
  @foreach($profiles as $profile)
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profile->img1)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
            </div>
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profile->img2)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profile->img3)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            @endforeach
