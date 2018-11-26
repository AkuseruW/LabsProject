<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardHomePage;
use App\TextEditor;
use App\VideoHomePage;
use App\HomeBackground;
use App\Testimonial;
use App\Service;
use App\Position;
use App\User;
use App\Icone;
use App\Project;
use App\Article;
use App\Categorie;
use App\Tag;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::all();
        $articles = Article::orderBy('created_at')->where('validation','=','0')->paginate(10);

        return view('administration/adminHome',compact('articles'));
    }

    public function indexValidationPost()
    {
        return view('administration/validationPost');
    }

    public function indexHomeTestimonial()
    {
        $testimonial = Testimonial::all();
        return view('homePageTask/testimonial',compact('testimonial'));
    }

    public function indexHomeService()
    {
        $service = Service::all();
        $icones = Icone::all();
        return view('homePageTask/myService',compact('service','icones'));
    }

    public function indexHomeImageBG()
    {
        $tasks = HomeBackground::all();
        // dd($tasks);
        return view('homePageTask/imageBackground',compact('tasks'));
    }

    public function indexHomeVideo()
    {
        $video = VideoHomePage::all();
        return view('homePageTask/video',compact('video'));
    }

    public function indexHomeAbout()
    {
        $text = TextEditor::all();
        return view('homePageTask/about',compact('text'));
    }

    public function indexHomeTeam()
    {
        return view('homePageTask/team',compact(''));
    }

    public function indexMyProject()
    {
        $projects = Project::all();
        $icones = Icone::all();
        return view('servicePage/myProject',compact('projects','icones'));
    }

    public function indexMesArticles(){
        $articles = Article::with('tags')->get();
        return view('blogPageTask/mesArticles',compact('articles'));
    }

    public function indexMonArticle($id){

        $tags = Tag::find($id);
        $article = Article::find($id);
        $categories = Categorie::find($id);

        return view('blogPageTask/monArticle',compact('article','categories','tags'));
    }
}
