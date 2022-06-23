<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Complain;
use App\Models\Module;
use App\Models\User;
use App\Models\Review;
use App\Models\Lesson;
use App\Models\LessonTask;
use App\Models\LessonVideo;
use App\Models\Program;
use App\Models\ProgramCategory;
use App\Models\Resource;
use App\Models\ResourceCategory;

class AdminPageController extends Controller
{
    public function dashboard()
    {
        $data['allcategory'] = Category::count();
        $data['allblogpost'] = Blog::where('status', '=', 1)->count();
        $data['allusers'] = User::where('role_id', 2)->count();
        $data['allreviews'] = Review::where('status', 1)->count();
        $data['allmodules'] = Module::where('status', 1)->count();
        $data['alllesson'] = Lesson::where('status', 1)->count();
        return view('admin.dashboard', $data);
    }

    public function category()
    {
        $data['categories'] = Category::get();
        return view('admin.category', $data);
    }

    public function blogpost()
    {
        $data['categories'] = Category::get();
        $data['blogpost'] = Blog::where('status', '=', 1)->get();
        return view('admin.post', $data);
    }

    public function createpost()
    {
        $data['categories'] = Category::get();
        return view('admin.creatblog', $data);
    }

    public function users()
    {
        $data['allusers'] = User::where('role_id', 2)->get();
        return view('admin.users', $data);
    }

    public function reviews()
    {
        $data['allreview'] = Review::where('status', 1)->get();
        return view('admin.review', $data);
    }

    public function complain()
    {
        $data['allcomplain'] = Complain::where('status', 1)->get();
        return view('admin.complain', $data);
    }

    public function module()
    {
        $data['modules'] = Module::where('status', 1)->get();
        return view('admin.module', $data);
    }

    public function lesson()
    {
        $data['lesson'] = Lesson::where('status', 1)->get();
        $data['modules'] = Module::where('status', 1)->get();
        return view('admin.lesson', $data);
    }

    public function createlesson()
    {
        $data['modules'] = Module::where('status', 1)->get();
        return view('admin.createlesson', $data);
    }

    public function lessonvideo()
    {
        $data['lesson'] = Lesson::where('status', 1)->get();
        $data['lessonvideo'] = LessonVideo::get();
        return view('admin.lessonvideo', $data);
    }

    public function lessontask()
    {
        $user = Auth::user();
        $data['lesson'] = Lesson::where('status', 1)->get();
        $data['lessontask'] = LessonTask::where('user_id', $user->id)->get();
        $data['submittedlessontask'] = LessonTask::where('user_id', !1)->get();
        return view('admin.task', $data);
    }

    public function submittedlessontask($id)
    {
        $user = Auth::user();
        $data['submittedlessontask'] = LessonTask::where('user_id', '!=', 1)->where('lesson_id', $id)->get();
        return view('admin.submitedtask', $data);
    }

    public function programcategory()
    {
        $data['programcatgeory'] = ProgramCategory::get();
        return view('admin.program_category', $data);
    }

    public function program()
    {
        $data['program'] = Program::where('status', 1)->get();
        return view('admin.program', $data);
    }

    public function addprogram()
    {
        $data['programcatgeory'] = ProgramCategory::get();
        return view('admin.addprogram', $data);
    }

    public function editprogram()
    {
        $data['programcatgeory'] = ProgramCategory::get();
        $data['editprogram'] = Program::where('status', 1)->first();
        return view('admin.editprogram', $data);
    }

    public function resourcecategory()
    {
        $data['resourcecatgeory'] = ResourceCategory::get();
        return view('admin.resouce_category', $data);
    }

    public function resource()
    {
        $data['resourcecatgeory'] = ResourceCategory::get();
        $data['resource'] = Resource::where('status', 1)->get();
        return view('admin.resource', $data);
    }

    public function editresource()
    {
        $data['resourcecategory'] = ResourceCategory::get();
        $data['editresource'] = Resource::where('status', 1)->first();
        return view('admin.editresource', $data);
    }
}
