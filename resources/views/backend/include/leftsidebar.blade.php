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
                    <p>Employee</p>
                    @else
                    <p>Candidate</p>
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
                            <a href="">
                            <div class="left">
                                    dashboard
                            </div>
                            <div class="right">
                                    <i class="fas fa-home"></i>
                            </div>
                            </a>
                        </li>
                        <!-- nav single view end -->

                          
                        <!-- nav drop down view end -->
                        
                        
                    </ul>
                </div>
            </div>
            <!-- navbar item end -->

        </div>
    </section>
    <!-- left sidebar pc end -->