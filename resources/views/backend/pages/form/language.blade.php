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
                            Language Information
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="registration-logo container">
            <div class="text-center">
                <div class="logo-image py-4">
                    <img src="{{asset('assets/image/01.png')}}" alt="n/a">
                </div>
			</div> 
            
				<div class="language-information">
					<h5 class="text-center">Language Skill</h5>
					<form action="">
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Language</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="">
									<option selected>Select</option>
									<option value="">...</option>
								  </select>
							</div>
							<label for="" class="col-sm-2 col-form-label ">Oral Skill</label>
							<div class="col-sm-4 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="">
									<option selected>Select</option>
									<option value="">...</option>
								  </select>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label ">Writing Skill</label>
							<div class="col-sm-10 ">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="">
									<option selected>Select</option>
									<option value="">...</option>
								  </select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-info">Submit</button>
							</div>
						  </div>
					</form>
				</div>
                @endsection