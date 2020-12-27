<!DOCTYPE html>

 <html lang="en">

 <head>

     <meta charset="UTF-8">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
 
    <title>Report</title>

 </head>

 <body>
 <!-- logo-area start -->
    <section class="logo-area">
        <div class="text-center">
            <img src="" alt="n/a">
            <p class="p-0 m-0">Japan Bangla Recruiting (JBBRA)</p>
            <small class="p-0 m-0">Website: www.jbbra.com, e-mail: company@gmail.com</small>
            <p class="p-2 m-0">From Name</p>
        </div>
    </section>
 <!-- logo-area end -->

     <table class="table table-hover table-striped">

         <thead class="thead-blue">

           <tr>

             <th scope="col">Id</th> 

             <th scope="col">Name</th>

             <th scope="col">Email</th>

             <th scope="col">Phone</th>

            

           </tr>

         </thead>

         <tbody>

             @foreach ($users as $user)



             <tr>
                <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
            </tr>
             <tr>
                <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
            </tr>
             <tr>
                <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
            </tr>
             <tr>
                <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
            </tr>

           @endforeach


         </tbody>

       </table>


 </body>

 
</html>