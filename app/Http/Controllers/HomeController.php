<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vacancy;
use App\Models\Blog;
use App\Models\File;
use App\Models\Events;
use App\Models\News;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //blogs
        $blogs = Blog::all();
        $allblogs = count($blogs);
        //News
        $news = News::all();
        $allnews = count($news);
        //News
        $events = Events::all();
        $allevents = count($events);
        //files
        $files = File::all();
        $allfiles = count($files);  
        
        //recent blogs
        $recent_blog = Blog::orderBy('id', 'desc')->skip(0)->take(5)->get();
        //recent news
        $recent_news = News::orderBy('id', 'desc')->skip(0)->take(5)->get();
         //recent vacancies
         $recent_vacancies = vacancy::orderBy('id', 'desc')->skip(0)->take(5)->get();

        return view('admin.index')->with([
            'blogs' => $allblogs,
            'news' => $allnews,
            'events' => $allevents,
            'files' => $allfiles,
            'recent_blog' => $recent_blog,
            'recent_news' => $recent_news,
            'recent_vacancies' => $recent_vacancies
        ]);
    }

   
}
