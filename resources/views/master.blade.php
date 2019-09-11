<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    @include('components.scripts')
    <title>@yield('title')</title>
    {{-- @yield('page-head') --}}

</head>
<body>
    <div class="grid-container">
      @include('components.header')


        <div id="app">
                @yield('content')
        </div>




        @include('components.footer')
    </div>

    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/TimelineMax.min.js"></script>
    <script src="/js/TweenMax.min.js"></script>
  <script>
    AOS.init();
  </script>
  <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a4fd48c4-1a4e-42ad-a097-5f29d8b098e7', f: true }); done = true; } }; })();</script>

    @yield('scripts')

</body>
</html>
