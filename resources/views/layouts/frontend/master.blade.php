@include('layouts.frontend.header')

{{-- Start Home --}}

@yield('home')
@yield('about')
@yield('offer')
@yield('work')
@yield('articles')
@yield('clients')

{{-- End Home --}}

{{-- Start Article Details --}}

@yield('article-details')

{{-- End Article Details --}}

{{-- Start Our Articles --}}

@yield('our-articles')

{{-- End Our Articles --}}

{{-- Start Our Work --}}

@yield('our-work')

{{-- End Our Work --}}

{{-- Start Project Details --}}

@yield('project-preview')
@yield('project-details')
@yield('project-tour')

{{-- End Project Details --}}


@include('layouts.frontend.footer')