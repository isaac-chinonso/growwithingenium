<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;
use App\Models\LessonVideo;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\LessonTask;
use App\Models\Program;
use App\Models\ProgramCategory;
use App\Models\Resource;
use App\Models\ResourceCategory;

class AdminPostController extends Controller
{
    // Save Module
    public function savemodule(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        // Save Record into Module DB
        $module = new Module();
        $module->name = $request->input('name');
        $module->description = $request->input('description');
        $module->status = 1;
        $module->save();

        \Session::flash('Success_message', 'Module Added Successfully');

        return back();
    }

    // Update Module function
    public function updatemodule(Request $request, $id)
    {
        $module = Module::find($id);
        // Validation
        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required',
        ));

        $module = Module::find($id);

        $module->name = $request->input('name');

        $module->description = $request->input('description');

        $module->save();

        \Session::flash('Success_message', '✔ Module Updated Succeffully');

        return back();
    }


    // Delete Module 
    public function deletemodule($id)
    {
        $module = Module::find($id);
        $module->delete();

        \Session::flash('Success_message', 'Module Deleted Successfully');
        return back();
    }

    // Save Lessons
    public function savelesson(Request $request)
    {
        // Validation
        $this->validate($request, [
            'module_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'worksheet' => 'required',
        ]);

        // Save Record into Lesson DB
        $lessonimage = $request['lessonimage'];
        $filename = $lessonimage->getClientOriginalName();
        $destination = public_path('upload/');
        $lessonimage->move($destination, $filename);

        // Save Record into Lesson DB
        $lesson = new Lesson();
        $lesson->module_id = $request->input('module_id');
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        $lesson->worksheet = $request->input('worksheet');
        $lesson->source = $filename;
        $lesson->status = 1;
        $lesson->save();

        \Session::flash('Success_message', 'Lesson Added Successfully');

        return back();
    }

    // Update Lesson function
    public function updatelesson(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        // Validation
        $this->validate($request, array(
            'module_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'worksheet' => 'required',
        ));

        $lesson = Lesson::find($id);

        $lesson->module_id = $request->input('module_id');
        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        $lesson->worksheet = $request->input('worksheet');

        $lesson->save();

        \Session::flash('Success_message', '✔ Lesson Updated Succeffully');

        return back();
    }

    // Delete Lesson 
    public function deletelesson($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();

        \Session::flash('Success_message', 'Lesson Deleted Successfully');
        return back();
    }

    // Save Lessons videos
    public function savelessonvideo(Request $request)
    {
        // Validation
        $this->validate($request, [
            'lesson_id' => 'required',
            'focusarea' => 'required',
            'videourl' => 'required',
        ]);

        // Save Record into Lesson Video DB
        $lessonvideo = new LessonVideo();
        $lessonvideo->lesson_id = $request->input('lesson_id');
        $lessonvideo->focusarea = $request->input('focusarea');
        $lessonvideo->videourl = $request->input('videourl');
        $lessonvideo->save();


        \Session::flash('Success_message', 'Lesson Video Added Successfully');

        return back();
    }

    // Update Lesson Video function
    public function updatelessonvideo(Request $request, $id)
    {
        $lessonvideo = LessonVideo::find($id);
        // Validation
        $this->validate($request, array(
            'lesson_id' => 'required',
            'focusarea' => 'required',
            'videourl' => 'required',
        ));

        $lessonvideo = LessonVideo::find($id);

        $lessonvideo->lesson_id = $request->input('lesson_id');
        $lessonvideo->focusarea = $request->input('focusarea');
        $lessonvideo->videourl = $request->input('videourl');
        $lessonvideo->save();

        \Session::flash('Success_message', '✔ Lesson Video Updated Succeffully');

        return back();
    }

    // Delete Lesson Video 
    public function deletelessonvideo($id)
    {
        $lessonvideo = LessonVideo::find($id);
        $lessonvideo->delete();

        \Session::flash('Success_message', 'Lesson Video Deleted Successfully');
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
        $lessontask->save();


        \Session::flash('Success_message', 'Lesson Task Added Successfully');

        return back();
    }

    // Delete Lesson Video 
    public function deletelessontask($id)
    {
        $lessontask = LessonTask::find($id);
        $file_path = public_path() . '/upload/' . $lessontask->first()->source;
        unlink($file_path);
        $lessontask->delete();

        \Session::flash('Success_message', 'Lesson Task Deleted Successfully');
        return back();
    }

    // Save Program Category
    public function saveprogramcategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
        ]);

        // Save Record into Program Category DB
        $programcategory = new ProgramCategory();
        $programcategory->title = $request->input('title');
        $programcategory->save();

        \Session::flash('Success_message', 'Program Category Added Successfully');

        return back();
    }

    // Delete Program Category 
    public function deleteprogramcategory($id)
    {
        $programcategory = ProgramCategory::find($id);
        $programcategory->delete();

        \Session::flash('Success_message', 'Program Category Deleted Successfully');
        return back();
    }


    // Save Program
    public function saveprogram(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'description' => 'required',
            'reglink' => 'required',
        ]);

        $image = $request['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destination = public_path('upload/');
        $image->move($destination, $filename);

        // Save Record into Program DB
        $program = new Program();
        $program->category_id = $request->input('category_id');
        $program->title = $request->input('title');
        $program->venue = $request->input('venue');
        $program->date = $request->input('date');
        $program->description = $request->input('description');
        $program->reglink = $request->input('reglink');
        $program->source = $filename;
        $program->status = 1;
        $program->save();

        \Session::flash('Success_message', 'Program Added Successfully');

        return back();
    }

    // Update Program function
    public function updateprogram(Request $request, $id)
    {
        $program = Program::find($id);
        // Validation
        $this->validate($request, array(
            'category_id' => 'required',
            'title' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'description' => 'required',
            'reglink' => 'required',
        ));

        $program = Program::find($id);

        $program->category_id = $request->input('category_id');
        $program->title = $request->input('title');
        $program->venue = $request->input('venue');
        $program->date = $request->input('date');
        $program->description = $request->input('description');
        $program->reglink = $request->input('reglink');

        if ($request->file != '') {
            $path = public_path() . '/uploads/images/';

            //code for remove old file
            if ($program->image != ''  && $program->image != null) {
                $file_old = $path . $program->image;
                unlink($file_old);
            }

            //upload new file
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $image->move($path, $filename);

            //for update in table
            $program->update(['source' => $filename]);
        }

        $program->save();

        \Session::flash('Success_message', '✔ Program Updated Succeffully');

        return back();
    }

    // Delete Program
    public function deleteprogram($id)
    {
        $program = Program::find($id);
        $program->delete();

        \Session::flash('Success_message', 'Program Deleted Successfully');
        return back();
    }

    // Save Resource Category
    public function saveresourcecategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
        ]);

        // Save Record into Module DB
        $resourcecategory = new ResourceCategory();
        $resourcecategory->title = $request->input('title');
        $resourcecategory->save();

        \Session::flash('Success_message', 'Resource Category Added Successfully');

        return back();
    }

    // Delete Resource Category
    public function deleteresourcecategory($id)
    {
        $resourcecategory = ResourceCategory::find($id);
        $resourcecategory->delete();

        \Session::flash('Success_message', 'Resource Category Deleted Successfully');
        return back();
    }

    // Save Resource
    public function saveresource(Request $request)
    {
        // Validation
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $coverimage = $request['coverimage'];
        $filename = time() . '.' . $coverimage->getClientOriginalExtension();
        $destination = public_path('upload/');
        $coverimage->move($destination, $filename);

        $rfile = $request['rfile'];
        $filename1 = time() . '.' . $rfile->getClientOriginalExtension();
        $destination = public_path('upload/');
        $rfile->move($destination, $filename1);

        // Save Record into Resource DB
        $resource = new Resource();
        $resource->category_id = $request->input('category_id');
        $resource->title = $request->input('title');
        $resource->description = $request->input('description');
        $resource->source = $filename;
        $resource->rfile = $filename1;
        $resource->status = 1;
        $resource->save();

        \Session::flash('Success_message', 'Resource Added Successfully');

        return back();
    }

    // Update Resource function
    public function updateresource(Request $request, $id)
    {
        $resource = Resource::find($id);
        // Validation
        $this->validate($request, array(
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ));

        $resource  = Resource::find($id);

        $resource ->category_id = $request->input('category_id');
        $resource ->title = $request->input('title');
        $resource ->description = $request->input('description');

        if ($request->file != '') {
            $path = public_path() . '/upload/';

            //code for remove old file
            if ($resource ->coverimage != ''  && $resource ->coverimage != null) {
                $file_old = $path . $resource ->coverimage;
                unlink($file_old);
            }

            //upload new file
            $coverimage = $request->coverimage;
            $filename = $coverimage->getClientOriginalName();
            $coverimage->move($path, $filename);

            //for update in table
            $resource ->update(['source' => $filename]);
        }

        if ($request->file != '') {
            $path = public_path() . '/upload/';

            //code for remove old file
            if ($resource ->rfile != ''  && $resource ->rfile != null) {
                $file_old = $path . $resource ->rfile;
                unlink($file_old);
            }

            //upload new file
            $rfile = $request->rfile;
            $filename1 = $rfile->getClientOriginalName();
            $rfile->move($path, $filename1);

            //for update in table
            $resource ->update(['rfile' => $filename]);
        }

        $resource ->save();

        \Session::flash('Success_message', '✔ Resource Updated Succeffully');

        return back();
    }

    // Delete Resource 
    public function deleteresource($id)
    {
        $resource = Resource::find($id);
        $file_path = public_path() . '/upload/' . $resource->first()->source;
        $file_path1 = public_path() . '/upload/' . $resource->first()->rfile;
        unlink($file_path);
        unlink($file_path1);
        $resource->delete();

        \Session::flash('Success_message', 'Resource Deleted Successfully');
        return back();
    }
}
