<div class="course_slider_item">
    <a href="{{route('department',['slug'=>$department->slug])}}">
        <div class="couse_icon"><img src="{{asset('uploads/'.$department->image)}}" alt="Cloud Computing"></div>
        <div class="couse_text">
            <h3>{{$department->name}}</h3>
        </div>
    </a>
</div>
