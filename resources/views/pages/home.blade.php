@extends('layouts.default')
@section('content')

   <!-- PAGE CONTAINER-->
   <div class="page-container">
        

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                   
                    <div class="row" style="margin-right:10px">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">News Table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i><a href="{{url('/news/create')}}"style ="color:white" >add item</a></button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                         
                                            <!--<th>date</th>
                                            <th>status</th>
                                            <th>price</th>-->
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    @foreach($news as $dneme)
                                        <tr class="tr-shadow">
                                            <td>{{$dneme->news_name}}</td>
                                            <td>{{$dneme->news_title}}</td>
                                            <td>{{$dneme->news_category}}</td>
                                          
                        
                                             <td>
                                             <div class="table-data-feature">
                                                <form action="{{route('news.show', $dneme->id) }}" method="POST">
                                                    @method('GET')
                                                    @csrf
                                                    <button class="btn btn-outline-primary" title="Show">Show
                                                    <a href="{{url('/news/{news}')}}"></a>
                                                    </button>
                                                    </form>
                                                    <form action="{{route('news.edit', $dneme->id) }}" method="POST">
                                                    @method('GET')
                                                    @csrf
                                                    <button  class="btn btn-outline-secondary" title="Edit">Edit</button>
                                                    </form>
                                                    <form action="{{url('news', [$dneme->id])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-outline-danger" title="Delete">Delete</button>
                                                    </form>
                
                                                </div>
                                             </td>
                                            
                                        </tr>
                                      
                                        <tr class="spacer"></tr>
                                    @endforeach   
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
  
    
@stop




