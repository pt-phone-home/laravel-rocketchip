<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    @include('components.scripts')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
      @include('components.header')
      
      
      
        @yield('content')




    </div>

    <script src="/js/app.js"></script>

</body>
</html>