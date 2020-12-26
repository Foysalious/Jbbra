@extends('backend.template.layout')

@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-bars"></i>
                        </li>
                        <li>
                            Notice
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">

          
            <!-- add row start -->
            <div class="row add-row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new Notice
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Notice</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('noticeAdd') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Notice Title</label>
                                                <input type="text" class="form-control-file" name="title" >                                 
                                            </div>                                      
                                        </div>  
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                               
                                                <textarea name="description" id="div_editor1" ></textarea>                              
                                            </div>                                      
                                        </div>    

                                       
                                                                      
                                    </div>

                                        
                                       
                                        
                                  
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add</button>                                    
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>   

                </div>
            </div>
            <!-- add row end -->


            <!-- manage row start -->
            <div class="row">

                
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                               
                                <td>Title</td>
                                <td>Description</td>
                                
                               
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($notices as $notice)
                            <tr>
                                <th>{{ $i }}</th>
                               
                                <td>
                                   {{$notice->title}}
                                </td>
                                <td>
                                {!!Str::limit($notice->description,200)!!}
                                </td>
                                
                                <td>
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $notice->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $notice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">notice</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('noticeUpdate', $notice->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                               
                                                
                                                    
                                            <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Notice Title</label>
                                                <input type="text" class="form-control-file" name="title" value="{{$notice->title}}" >                                 
                                            </div>                                      
                                        </div>  
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                               
                                                <textarea name="description"  class="ckeditor" >{!!$notice->description!!}</textarea>                              
                                            </div>                                      
                                        </div>     

                                       
                                                                      
                                    </div>

                                        
                                       
                                        
                                  
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add</button>                                    
                                    </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit end -->

                                <!-- delete start -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $notice->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $notice->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">notice delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('noticeDelete', $notice->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-success">yes</button>
                                            </form>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete end -->

                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage row end -->

        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection