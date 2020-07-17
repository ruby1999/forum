<!DOCTYPE html>
<html lang="zh-TW">

    <!-- head -->
    @include('partials/_head')
    <!-- /head -->

    <body>
        @include('partials/_nav')
        @include('partials/_banner')
        @include('partials/_messages')

        @yield('content')

        @include('partials/_footer')
        @include('partials/_script')

    </body>
</html>