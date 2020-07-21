<!DOCTYPE html>
<html lang="zh-TW">

    <!-- head -->
    @include('backend/partials/_head')
    <!-- /head -->

    <body>
        @include('backend/partials/_nav')
        @include('backend/partials/_banner')
        @include('backend/partials/_messages')

        @yield('content')

        @include('backend/partials/_footer')
        @include('backend/partials/_script')

    </body>
</html>