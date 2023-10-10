<div class="course_catagory_item">
    <div class="course_category_slider">
        @foreach(getDepartmentCourse($id) as $course)
        @include('front.includes.course_category_slider_item',$course)
        @endforeach
    </div>
</div>
