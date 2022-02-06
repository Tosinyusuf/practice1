<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  {{-- href="{{ asset('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  @yield('css')
</head>

  <body class="main"> 
    @include('layout.header')
       @include('frontend.content')
    @include('layout.footer')
 </body>
 @yield('content')

 
 <script>
  let toggle = false;
    const togglemenu = () => {
   const nav = document.querySelector(".menulist");
  
      if(toggle === false){
        nav.style.display = "block";
        toggle = true;
      }else if(toggle === true){
        nav.style.display = "none";
        toggle = false;
      }
    }
    window.load = function() {
      toggle = false;
    }
  
</script>
 </html>