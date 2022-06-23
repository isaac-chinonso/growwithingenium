<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Complain;
use App\Models\Lesson;
use App\Models\LessonTask;
use App\Models\LessonVideo;
use App\Models\Module;

class StudentController extends Controller
{
    public function dashboard()
    {
        $data['allmodules'] = Module::where('status', 1)->count();
        $data['alllesson'] = Lesson::where('status', 1)->count();
        $data['lesson'] = Lesson::where('status', 1)->limit(3)->get();
        return view('user.dashboard', $data);
    }

    public function schedule()
    {
        return view('user.schedule');
    }

    public function setting()
    {
        return view('user.setting');
    }

    public function review()
    {
        $data['allusers'] = User::where('role_id', 2)->first();
        $data['allreview'] = Review::where('status', 1)->get();
        $data['allcomplain'] = Complain::where('status', 1)->get();
        return view('user.review', $data);
    }

    public function module()
    {
        $data['module'] = Module::where('status', 1)->get();
        return view('user.module', $data);
    }

    public function lesson($id)
    {
        $data['lesson'] = Lesson::where('module_id', $id)->get();
        return view('user.lesson', $data);
    }

    public function lessonvideo($id)
    {
        $data['lessonvideo'] = LessonVideo::where('lesson_id', $id)->get();
        return view('user.lessonvideo', $data);
    }

    public function video($id)
    {
        $data['lessonvideo'] = LessonVideo::where('id', $id)->first();
        $data['lessontask'] = LessonTask::where('lesson_id', $data['lessonvideo']->lesson_id)->where('user_id', 1)->get();
        return view('user.video', $data);
    }
}
