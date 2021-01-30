<!doctype html>
<html lang="en">

@section('head')
    @include('partials.templates.head')
@endsection
@yield('head')
<body id="bg">
<div id="loading-area" class="loading-02"></div>
<div class="page-wraper">

    @section('header')
        @include('partials.templates.header')
    @endsection

    <div class="page-content bg-white">
        @section('content')
            <h1>{{ $documentObject['pagetitle'] }}</h1>
        @endsection
    </div>

    @section('footer')
        @include('partials.templates.footer')
    @endsection
</div>

@section('scripts')
    @include('partials.templates.scripts')
@endsection

@yield('header')
@yield('content')
@yield('footer')
@yield('scripts')

</body>
</html>