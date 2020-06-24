<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      @yield('title')
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
       .links > a {
             color: #636b6f;
             padding: 0 25px;
             font-size: 13px;
             font-weight: 600;
             letter-spacing: .1rem;
             text-decoration: none;
             text-transform: uppercase;
         }
    </style>
  </head>
  <body>
    <div class="container">
       <div class="links text-center">
           <a href="\">Home</a>
           <a href="\about">About</a>
           <a href="\todos">Todos</a>
           <a href="\completed">Completed</a>
           <a href="\new-todo">Create New Todo</a>
           <a href="">Source Code</a>
       </div>
       @if (session()->has('message'))
           <div class="alert alert-success">
               {{ session()->get('message') }}
           </div>
       @endif
     @yield('content')
       </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
