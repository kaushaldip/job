<?php
// constants

define("JOB_APPLIED",1);
define("JOB_ACCEPTED",2);
define("JOB_DECLINED",3);

function hospital_url($path = false){
    if($path){
        $path = '/hospital'.$path;
        return url($path);
    }

    return url('hospital');
}
function employee_url($path = false){
    if($path){
        $path = '/employee'.$path;
        return url($path);
    }

    return url('employee');
}
