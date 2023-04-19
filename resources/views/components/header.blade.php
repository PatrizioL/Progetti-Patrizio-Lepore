@if (Route::currentRouteName()=='homepage')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="diplay-1 text-center">{{$title}}</h1>
            </div>
        </div>
    </div>
@elseif(Route::currentRouteName()=='register')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="diplay-1 text-center">{{$title}}</h1>
        </div>
    </div>
</div>
@elseif(Route::currentRouteName()=='login')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="diplay-1 text-center">{{$title}}</h1>
        </div>
    </div>
</div>
@elseif(Route::currentRouteName()=='annunci.create')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="diplay-1 text-center">{{$title}}</h1>
        </div>
    </div>
</div>
@endif