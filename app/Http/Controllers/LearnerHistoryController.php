<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB;

class LearnerHistoryController extends Controller {

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

        $learnerSchedule = DB::table('learner_schedule')
        ->select(['tutor_image_profile', 'firstname', 'lastname', 'subject_name', 'start_time', 'dayfull', 'level_name', 'duration_name', 'learner_schedule.price', 'status_name', 'tel'])
        ->join('subject','learner_schedule.subjects_id','=','subject.subjects_id')
        ->join('levels','learner_schedule.levels_id','=','levels.levels_id')
        ->join('day','learner_schedule.day_id','=','day.day_id')
        ->join('duration','learner_schedule.duration_id','=','duration.duration_id')
        ->join('tutor','learner_schedule.tutor_id','=','tutor.tutor_id')
        ->join('schedule_status','learner_schedule.status_sch_id','=','schedule_status.status_sch_id')
        ->where('learner_schedule.status_sch_id',5)
        ->paginate(10);

        //Set data to view
        $data = compact('firstname', 'subject', 'day','level','duration','learnerSchedule');
     
        return view('learner.history',$data);
    }

}