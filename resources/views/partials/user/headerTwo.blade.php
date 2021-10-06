<header class="header">
    <div class="header-inner container">
        <a href="{{ $__env->yieldContent('back_link') ? $__env->yieldContent('back_link') : route('user.home') }}"><i class="feather-chevron-left"></i>back</a>
        <p class="page-title text-capitalize">@yield('title')</p>
        <a href="#"><i style="font-size: 24px;" class="feather-bell"></i></a>
    </div>
</header>