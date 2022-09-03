<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Complain;
use App\Models\LessonTask;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTaskSubmit;

class PostStudentController extends Controller
{
    // Save Reviews
    public function savereview(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'lesson' => 'required',
            'feedback' => 'required',
        ]);

        // Save Record into Review DB
        $review = new Review();
        $review->user_id = $user->id;
        $review->lesson = $request->input('lesson');
        $review->feedback = $request->input('feedback');
        $review->status = 1;
        $review->save();

        \Session::flash('Success_message', 'Review Sent Successfully');

        return back();
    }

    // Save Complains
    public function savecomplain(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'feedback' => 'required',
        ]);

        // Save Record into Complain DB
        $complain = new Complain();
        $complain->user_id = $user->id;
        $complain->feedback = $request->input('feedback');
        $complain->status = 1;
        $complain->save();

        \Session::flash('Success_message', 'Complain Sent Successfully');

        return back();
    }

    // Delete Complain 
    public function deletecomplain($id)
    {
        $complain = Complain::find($id);
        $complain->delete();

        \Session::flash('Success_message', 'Complain Deleted Successfully');
        return back();
    }

    // Delete Review 
    public function deletereview($id)
    {
        $review = Review::find($id);
        $review->delete();

        \Session::flash('Success_message', 'Review Deleted Successfully');
        return back();
    }

    // Save Lessons Task
    public function savelessontask(Request $request)
    {
        // Validation
        $this->validate($request, [

            'lesson_id' => 'required',
        ]);

        // Save Record into Lesson Task DB
        $taskfile = $request['taskfile'];
        $filename = $taskfile->getClientOriginalName();
        $destination = public_path('upload/');
        $taskfile->move($destination, $filename);

        $user = Auth::user();
        // Save Record into Lesson Video DB
        $lessontask = new LessonTask();
        $lessontask->user_id = $user->id;
        $lessontask->lesson_id = $request->input('lesson_id');
        $lessontask->source = $filename;
        $lessontask->status = 1;

        $this->email = ['isaacchinonsogift@gmail.com'];
        
        Mail::to($this->email)->send(new SendTaskSubmit($lessontask));

        $lessontask->save();

        \Session::flash('Success_message', 'Task Submitted to Admin Successfully');

        return back();
    }
}
