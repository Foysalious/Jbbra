@extends('backend.template.layout')

@section('body-content')
<div class="main-content">
    <div class="container-fluid">
     
    
    <!-- guidance and progress area start -->
        <section class="guidance-and-progress">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="guidance-box">
                            <!-- <div class="guidance-text">
                                <a href="#"><h6><i class="far fa-lightbulb"></i></h6>
                                <h2> Guidance</h2></a>
                            </div> -->
                            <div class="guidance-text">
                                <a href="#">
                                    <h1><i class="far fa-lightbulb"></i></h1>
                                    <h2>Guidance</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="progress-box"> 
                        <!--progress area -->
                        <div class="frame">
                            <div>
                            <div class="headline">
                                    <div>Profile progress</div>
                                </div>
                                <!-- <div class="circle-big">
                                    <div class="text">
                                        50%   
                                    </div>
                                    <svg> -->
                                        <!-- <circle class="bg" cx="57" cy="57" r="52"></circle>
                                        <circle class="progress" cx="57" cy="57" r="52" style=" stroke-dasharray: 326.56; stroke-dashoffset: 0;"></circle> -->
                                        <!-- change the style of stroke-dasharray & stroke-dashoffset those valu for increase and decrease the progress-circle bar-->
                                    <!-- </svg>
                                </div> -->
                      
                                <div class="progress-bars" data-percent="{{$addressBar+$educationBar+$PersonalBar+$experience+$languageBar+$mailBar+$NomineeBar}}" data-duration="1000" data-color="#dcdcdc">
                                    <!-- change the data-percent for increase and decrease the progress-circle bar -->
                                </div>
                            
                                @if (App\User::orderBy('id','desc')->where('is_valid',1)->where('id',Auth::user()->id)->first())
                                <div class="text-center progress-text">Profile is live </div>
                                @else
                                <div class="text-center progress-text">Profile is not live yet.</div>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- guidance and progress area end -->
    <!-- Notification area start -->
    <section class="notification-area">
        <div class="container">
            <h4 class="text-center">Notice Board</h4>
            @foreach(App\Notice::orderBy('id','desc')->get() as $notice) 
            <div class="notification-bar my-3">
                <div class="row">
                    <div class="col-md-8 col-xs-8">
                        <div class="notifi-header mx-4">
                            <div class="notifi-text ">
                                <h4 class="p-0 m-0 notice-header">{{$notice->title}}</h4>
                                <p class="m-0 p-0">{!!Str::limit($notice->description,200)!!}</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-2 col-xs-2">
                        <div class="notifi-date text-center">
                            <h5>{{ $notice->created_at->toDayDateTimeString()}}</h5>
                           

                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2 text-center">
                        <div class="text-center"> 
                        <button type="submit" class="btn btn-theme py-2 my-2 px-2" data-toggle="modal" data-target="#staticBackdrop{{ $notice->id }}">Details...</button> <!-- need different data-target name for open the different modal menu -->
                         <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{ $notice->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <!-- id name and data-target name should be same for open the modal -->
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">{{$notice->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <p>{!!$notice->description!!}</p>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-theme" data-dismiss="modal">Close</button>
                                 
                                    </div>
                                </div>
                                </div>
                            </div>
                        <!-- Optional JavaScript; choose one of the two! -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </section>
    <!-- Notification area end -->
 </div>
 </div>
@endsection