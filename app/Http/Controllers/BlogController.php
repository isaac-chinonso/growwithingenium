<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

      // Save Category
    public function savecategory(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
        ]);

        // Save Record into User DB
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        \Session::flash('Success_message', 'You Have Successfully Added a Category');

        return back();
    }

    public function deletecategory($id)
    {
        // Delete Category
        $category = Category::where('id', $id)->first();
        $category->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Category');

        return back();
    }

    public function index()
    {
        $blog = Blog::orderBy('updated_at','desc')->get();
    	return view('blog/blog',compact('blog'));
    }

    public function add()
    {
        $tags = ['Tag1','Tag2','Tag3'];
        return view('blog/addBlog',compact('tags'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'blog_image' => 'mimes:jpeg,jpg,png|required|max:10000',
        ]);

        $slug = Str::slug($request->title);
        $bslug = Blog::where('slug',$slug)->first();
        //check if slug exists
        if ($bslug) {
            $slug = $slug.'-copy';
        }

        $article = new Blog;
        $blogImg = null;
        if ($request->hasFile('blog_image'))
        {
            $image = $request->file('blog_image');
            $filename  = rand(11111,99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $filename);
            $blogImg= 'uploads/'.$filename;
        }

        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->slug = $slug;
        $article->short_desc = $request->short_desc;
        $article->long_desc = $request->long_desc;
        $article->blog_image = $blogImg;
        $article->status = 1;
        $article->save();

       \Session::flash('Success_message', 'Blog Created Successfully');

        return back();
    }

    // Blog details
    public function blogBySlug($slug){
        $blog = Blog::where('slug',$slug)->first();
        if (empty($blog)) {
            return redirect('/')    ;
        }
        return view('/blog/blogDetail',compact('blog'));
    }

    // Blog by id
    public function blogById($id){
        $blog = Blog::find($id);
        if(empty($blog))   
            return redirect('/');

        return view('blog/editBlog',compact('blog'));
    }

    // Update blog
    public function updateBlog(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'tags' => 'required',
            'blog_image' => 'mimes:jpeg,jpg,png|nullable|max:10000',
        ]);

        $article = Blog::find($request->blog_id);
        if (empty($article))
            return redirect('/');

        if ($request->hasFile('blog_image'))
        {
            $image = $request->file('blog_image');
            $filename  = rand(11111,99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $filename);
            $blogImg= 'uploads/'.$filename;
            $article->blog_image = $blogImg;
        }

        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->short_desc = $request->short_desc;
        $article->long_desc = $request->long_desc;
        $article->tags = $request->tags;
        $article->save();

        return back()->with('success','Blog updated successfully.');
    }
    
    // Delete blog 
    public function deleteBlog($id){
        $blog = Blog::find($id);
        if(empty($blog))   
            return redirect('/');

        $blog->delete();
        return back()->with('success','Blog deleted successfully.');
    }
}