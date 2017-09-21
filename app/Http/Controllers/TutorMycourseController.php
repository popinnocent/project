<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB;

class TutorMycourseController extends Controller {

    public function __construct(){
        
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {

        //Get data from database
        $subject = DB::table('subject')->orderBy('subject_name','asc')->get();
        $day = DB::table('day')->orderBy('dayfull','asc')->get();
        $level = DB::table('levels')->orderBy('level_name','asc')->get();
        $duration = DB::table('duration')->orderBy('duration_name','asc')->get();

        $tutorSchedule = DB::table('tutor_schedule')
        ->select(['img_profile', 'learner.firstname', 'learner.lastname', 'subject_name', 'start_time', 'dayfull', 'level_name', 'duration_name', 'tutor.price', 'status_name', 'learner.tel'])
        ->join('subject','tutor_schedule.subjects_id','=','subject.subjects_id')
        ->join('levels','tutor_schedule.levels_id','=','levels.levels_id')
        ->join('day','tutor_schedule.day_id','=','day.day_id')
        ->join('duration','tutor_schedule.duration_id','=','duration.duration_id')
        ->join('learner','tutor_schedule.learner_id','=','learner.learner_id')
        ->join('tutor','tutor_schedule.tutor_id','=','tutor.tutor_id')
        ->join('schedule_status','tutor_schedule.status_sch_id','=','schedule_status.status_sch_id')
        ->where('tutor_schedule.status_sch_id',1)
        ->paginate(10);

        //Set data to view
        $data = compact('subject', 'day','level','duration','tutorSchedule');
     
        return view('tutor.mycourse',$data);
    }

}