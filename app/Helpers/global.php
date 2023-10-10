<?php

function getDepartments(){
    return \App\Models\Department::orderBy('order','asc')->get();
}
function getDepartmentCourse($id){
    if ($id >0){
        return \App\Models\Course::where('department_id',$id)->get();
    }else{
        return \App\Models\Course::all();
    }
}
