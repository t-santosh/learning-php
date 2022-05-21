<<<<<<< HEAD
<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
   <header>
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="">
       @include('includes.footer')
   </footer>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        @include('includes.footer')
    </footer>

>>>>>>> 8438bea5ee49e91ef9a28a45ca4e7dba2f81e2a3
</body>
</html>