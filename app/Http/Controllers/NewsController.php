<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('pages.home',array('news' => $news));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       $category = ['Life', 'Politics', 'Sports','Magazine'];
        return view('pages.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       News::insert([
            'news_name'=>$request->name,
            'news_title'=>$request->title,
            'news_content'=>$request->content,
            'news_category'=>$request->category,
        ]);
        
        return redirect('news');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news= News::find($id);
        return view('pages.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($news_id)
    {
        //
        $news= News::find($news_id);
        return view('pages.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {      
       $data = News::find($id);
       $data->news_name=$request->name; 
       $data->news_title=$request->title; 
       $data->news_content=$request->content; 
       $data->save();
       return redirect()->route('news.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       News::find($id)->delete();
        return redirect('news');
    }
    public function life()
    {
        $news = News::where('news_category','Life')->get();
        return view('pages.home',array('news' => $news));
    }
    public function politics()
    {
        $news = News::where('news_category','Politics')->get();
        return view('pages.home',array('news' => $news));
    }
    public function sports()
    {
        $news = News::where('news_category','Sports')->get();
        return view('pages.home',array('news' => $news));
    }
    public function magazine()
    {
        $news = News::where('news_category','Magazine')->get();
        return view('pages.home',array('news' => $news));
    }
}
