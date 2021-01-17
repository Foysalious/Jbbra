<!-- body content start -->
<div class="body-content">


    <!-- left sidebar pc start -->
    <section class="left-sidebar">
        <div class="container-fluid">
        
            <!-- top part start -->
            <div class="row top-part">

                <!-- middle part start -->
                <div class="col-md-9 col-9">
                    <h3></h3>
                    
                   
                    @if(Auth::user()->is_admin == 1)
                    <p>Super Admin</p>
                    @elseif(Auth::user()->is_admin == 2)
                    <p>Employer</p>
                    @else
                    <p>Candidate</p>
                    @endif
                    @if(Auth::user()->is_valid == 0 )
                    <p>Not Verified</p>
                    @elseif(Auth::user()->is_valid == 1)
                    <p>Verified</p>
                    @endif
                    
                </div>
                <!-- middle part end -->

                <!-- right part start -->
                <div class="col-md-3 col-3">
                    <img src="images/badge.png" class="img-fluid" alt="">
                </div>
                <!-- right part end -->

            </div>
            <!-- top part end -->

            <!-- navbar item start -->
            <div class="row nav-item">
                <div class="col-md-12">
                    <ul>

                        <!-- nav single view start -->
                        <li >
                        @if(Auth::user()->is_admin == 0)
                            <a href="{{route('home')}}">
                            @elseif(Auth::user()->is_admin ==1 )
                            <a href="{{route('admin.home')}}">
                            @else
                            <a href="{{route('employeeHome')}}">
                            @endif
                            <div class="left">
                                    dashboard
                            </div>
                            <div class="right">
                                    <i class="fas fa-home"></i>
                            </div>
                            </a>
                        </li>
                        <!-- nav single view end -->
                        
                        @if(Auth::user()->is_admin == 1)
                        
                        <li >
                            <a href="{{route('verified')}}">
                            <div class="left">
                                    Verified Candidate List
                            </div>
                            <div class="right">
                            <i class="fas fa-user-check"></i>
                            </div>
                            </a>
                        </li>
                        <li >
                            <a href="{{route('message')}}">
                            <div class="left">
                                    Message
                            </div>
                            <div class="right">
                            <i class="fas fa-sms"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('profession')}}">
                            <div class="left">
                                    Jobs
                            </div>
                            <div class="right">
                            <i class="fas fa-user-md"></i>
                            </div>
                            </a>
                        </li>
                   

                        <li >
                            <a href="{{route('newsletter')}}">
                            <div class="left">
                                    Newsletter
                            </div>
                            <div class="right">
                            <i class="fas fa-newspaper"></i>
                            </div>
                            </a>
                        </li>
                      
                        
                        <li >
                            <a href="{{route('Notverified')}}">
                            <div class="left">
                                   Non verified Candidate List
                            </div>
                            <div class="right">
                            <i class="fas fa-plane-slash"></i>
                            </div>
                            </a>
                        </li>
                        <li >
                            <a href="{{route('getReport')}}" target="blank">
                            <div class="left">
                                   Download Verified List
                            </div>
                            <div class="right">
                            <i class="fas fa-download"></i>
                            </div>
                            </a>
                        </li>
                        
                        <li >
                            <a href="{{route('usersIndex')}}">
                            <div class="left">
                                    Register New User
                            </div>
                            <div class="right">
                            <i class="far fa-registered"></i>
                            </div>
                            </a>
                        </li>

                        
                        <li >
                            <a href="{{route('noticeShow')}}">
                            <div class="left">
                                    Notice
                            </div>
                            <div class="right">
                            <i class="far fa-flag"></i>
                            </div>
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->is_admin == 0)
                        
                        <li >
                            <a href="{{route('personal')}}">
                            <div class="left">
                                    Personal Information
                            </div>
                            <div class="right">
                            <i class="fas fa-user-shield"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('address')}}">
                            <div class="left">
                                    Address Information
                            </div>
                            <div class="right">
                                    <i class="fas fa-address-card"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('education')}}">
                            <div class="left">
                                Education Information
                            </div>
                            <div class="right">
                                    <i class="fas fa-school"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('experience')}}">
                            <div class="left">
                                    Experience Information
                            </div>
                            <div class="right">
                                    <i class="fas fa-user-md"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('language')}}">
                            <div class="left">
                                    Language Information
                            </div>
                            <div class="right">
                                    <i class="fas fa-language"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('mailing')}}">
                            <div class="left">
                                    Mailing Information
                            </div>
                            <div class="right">
                                    <i class="fas fa-mail-bulk"></i>
                            </div>
                            </a>
                        </li>

                        <li >
                            <a href="{{route('nominee')}}">
                            <div class="left">
                            Nominee Information
                            </div>
                            <div class="right">
                                    <i class="fas fa-business-time"></i>
                            </div>
                            </a>
                        </li>

                      

                        @endif
                        
                    </ul>
                </div>
            </div>
            <!-- navbar item end -->

        </div>
    </section>
    <!-- left sidebar pc end -->