@extends('backend.template.layout')

@section('body-content')

<div class="main-content">
    <div class="container-fluid">
        

        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-bars"></i>
                        </li>
                        <li>
                            Newsletter
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="statistics">

           
            <div class="row">

                
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                          
                                <td>email</td>
                                <td>date</td>
          
                          
                               
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($messages as $message)
                            <tr>
                                <th>{{ $i }}</th>
                                
                                <td> {{$message->email}} </td>
                             
                                <td> {{$message->created_at->toDayDateTimeString()}} </td>
                                
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </section>
    

    </div>
</div>

@endsection