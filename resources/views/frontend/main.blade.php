<!DOCTYPE html>
<html lang="zh-TW">

    <!-- head -->
    @include('frontend/partials/_head')
    <!-- /head -->

    <body>
        @include('frontend/partials/_nav')
        @include('frontend/partials/_banner')
        @include('frontend/partials/_messages')

        @yield('content')

        @include('frontend/partials/_footer')
        @include('frontend/partials/_script')

    </body>
</html>