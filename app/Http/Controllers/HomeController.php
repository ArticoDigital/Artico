<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactBudgetRequest;
use App\Http\Requests\ContactMessageRequest;
use App\Mail\NewForm;
use App\Models\Form;
use App\Models\Image;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\BlogCategory;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return view('front.contact');
    }

    public function home()
    {
        $messages = Message::where('day', Carbon::today()->dayOfWeek)->where('status', 1)->orderBy('order')->get();
        return view('front.home', compact('messages'));
    }

    public function wedo()
    {
        return view('front.web');
    }

    public function apps()
    {
        return view('front.apps');
    }

    public function marketing()
    {
        return view('front.marketing');
    }

    public function learning()
    {
        return view('front.learning');
    }

    public function ThreeD()
    {
        return view('front.3d');
    }

    public function portfolios()
    {
        return view('front.portfolios');
    }

    public function portfolio(Portfolio $porfolio)
    {
        return view('front.portfolio', compact('porfolio'));
    }

    public function culture()
    {
        return view('front.culture');
    }
     public function blog_category(BlogCategory $category_name)
    {
        //dd($category_name);
        $blog_name_category = $category_name->name;
        $blog_categories = BlogCategory::all();
        $blog_posts = Blog::where('post_active',1)->where('blog_category_id',$category_name->id)
                ->orderBy('updated_at', 'desc')
                ->paginate(4);
        $blog_posts_viewed = Blog::where('post_active',1)->where('blog_category_id',$category_name->id)
                ->orderBy('post_views_count', 'desc')
                ->limit(3)
                ->get();
        return view('front.blogs', compact('blog_categories', 'blog_posts','blog_posts_viewed','blog_name_category'));
    }
    public function searchBlogTag($tags){
        
         
         $blog_categories = BlogCategory::all();
        $blog_posts = Blog::where('post_active',1)->where('post_tags', 'like','%' . $tags.'%')
                ->orderBy('updated_at', 'desc')
                ->paginate(4);
        $blog_posts_viewed = Blog::where('post_active',1)
                ->orderBy('post_views_count', 'desc')
                ->limit(3)
                ->get();
        return view('front.blogs', compact('blog_categories', 'blog_posts','blog_posts_viewed'));
    }

    public function searchBlog(Request $request){
        
         $searchfor=$request->get('searchfor');
         
         $blog_categories = BlogCategory::all();
        $blog_posts = Blog::where('post_active',1)->where('post_content', 'like','%' . $searchfor.'%')
                ->orderBy('updated_at', 'desc')
                ->paginate(4);
        $blog_posts_viewed = Blog::where('post_active',1)
                ->orderBy('post_views_count', 'desc')
                ->limit(3)
                ->get();
        return view('front.blogs', compact('blog_categories', 'blog_posts','blog_posts_viewed'));
    }

    public function blogs()
    {
        $blog_categories = BlogCategory::all();
        $blog_posts = Blog::where('post_active',1)
                ->orderBy('updated_at', 'desc')
                ->paginate(3);
        $blog_posts_viewed = Blog::where('post_active',1)
                ->orderBy('post_views_count', 'desc')
                ->limit(3)
                ->get();
        return view('front.blogs', compact('blog_categories', 'blog_posts','blog_posts_viewed'));
    }
    public function blog(Blog $blog)
    {
        //dd($blog);
        $blog_categories = BlogCategory::all();
         $blog_posts_viewed = Blog::where('post_active',1)
                ->orderBy('post_views_count', 'desc')
                ->limit(3)
                ->get();
        
        $blog->increment('post_views_count');
        return view('front.blog', compact('blog','blog_categories','blog_posts_viewed'));
    }



    public function contactProject(ContactBudgetRequest $request)
    {
        $this->sendMessage($request);
        return redirect('/')->with(['messageModal' => [
            'title' => '¡Excelente!',
            'text' => "!Hemos recibido tu solicitud, nuestro equipo la esta revisando, en breve nos contactaremos contigo!",
            'type' => 'success',
        ]]);
    }

    public function contactMessage(ContactMessageRequest $request)
    {
        $this->sendMessage($request);
        return redirect('/')->with(['messageModal' => [
            'title' => '¡Excelente!',
            'text' => "!Hemos recibido tu mensaje, ya lo estamos leyendo en breve nos contactaremos contigo!",
            'type' => 'success',
        ]]);
    }

    private function sendMessage($request)
    {
        $image = ($request->hasFile('attached')) ? $request->file('attached')->store('forms', 'public') : '';
        $data = $request->all();
        $data['attached'] = $image;
        $form = Form::create($data);
        \Mail::to('hola@artico.io')->send(new NewForm($form));
    }
}
