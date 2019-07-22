@extends('layouts.default')
@section('content')

   <!-- PAGE CONTAINER-->
   <div class="page-container"style="background: #fff">
  <!-- MAIN CONTENT-->
        <div class="main-content" style="background: #fff">
            <div class="section__content section__content--p30"style="background: #fff">
                <div class="container-fluid" style="background: #fff">
                   
                    <div class="row" style="margin-right:10px"style="background: #fff">
                         <div class="page-wrapper" style="background: #fff">
                            <div class="page-content--bge5" style="background: #fff">
                                <div >
                                    <div class="login-wrap" style="background: #fff">
                                         <div class="login-content"style="background: #fff">
                        
                                         <div class="login-form"style="background: #fff">
                                            <form method="post" action="{{url('news', $news->id) }}">
                                            <div class="form-group">
                                            <label type="name" name="name"><b><h1>{{$news->news_name}}</h1></b></label>
                                            </div>
                                            <div class="form-group">
                                            <label type="name" name="name"><h5>{{$news->news_title}}</h5></label>
                                            </div>
                                            <div class="form-group">
                                            <p  style=" display:block" type="content" name="content"> {{$news->news_content}}</p>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> 
  
    
@stop