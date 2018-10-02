@extends ('layouts.layout')

@section ('content')

<h1>{{ $estate->title }}</h1>
<div>{{ $estate->body }}</div>
<img src="{{ $estate->picture_url}}" alt="">

<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$estate->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://www.embedgooglemap.net"></a>
    </div>
    <style>.mapouter{text-align:right;height:300px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style>
</div>

@endsection