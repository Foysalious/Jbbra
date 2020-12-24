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
                            <i class="fas fa-home"></i>
                        </li>
                        <li>
                            dashboard
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
    <section class="statistics">
        
        <div class="row"> 
                <!--- stat card start -->
                <div class="col-md-4">
                    <a href="">
                        <div class="stat-card">
                            <div><i class="fas fa-history"></i></div>
                            <div class="tex-center"></div><p>Total Candidate</p>
                           
                            
                            <div class="tex-center"></div><p>{{$count}}</p>
                        </div>
                    </a>                
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="stat-card">
                            <div><i class="fas fa-history"></i></div>
                            <div class="tex-center"></div><p>Verified Candidate</p>
                            
                            <div class="tex-center"></div><p>{{$count1}}</p>
                        </div>
                    </a>                
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="stat-card">
                            <div><i class="fas fa-history"></i></div>
                            <div class="tex-center"></div><p>Non Verified Candidate</p>
                            
                            <div class="tex-center"></div><p> {{$count2}}</p>
                        </div>
                    </a>                
                </div>
                <!--- stat card end -->
        </div>
    </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection