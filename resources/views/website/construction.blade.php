<x-website-layout>
    <section>
        <nav class="navbar navbar-light navbar-expand-lg bg-white">
            <div class="container-fluid position-relative">
                <a class="navbar-brand h4 mb-0 text-decoration-none text-bold" href="#">
                   Linux.cn(α)
                </a>
                <div class="d-lg-none">
                    <button class="btn p-0 btn-sm navbar-burger">
                        <svg width="39" height="13" viewBox="0 0 39 13" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="39" height="2" rx="1" transform="matrix(-1 0 0 1 39 0)" fill="#C4C4C4"></rect><rect width="20" height="2" rx="1" transform="matrix(-1 0 0 1 20 11)" fill="#C4C4C4"></rect></svg>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto me-xxl-12">

{{--                        <li class="nav-item position-relative">--}}
{{--                            <a class="nav-link" href="#">新闻</a>--}}
{{--                            <div class="position-absolute top-50 end-0 bg-secondary-light rounded-circle" style="width: 5px; height: 5px;"></div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"><a class="nav-link" href="#">科技</a></li>--}}
                        @auth
                        @else
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
                        @endif
                        @endauth

                    </ul>
                    @auth
                    <a class="btn btn-primary" href="{{ url('/dashboard') }}">用户中心</a>
                    @else
                        <a class="btn btn-primary" href="{{ route('login') }}">登录</a>
                    @endauth
                </div>
            </div>
        </nav>
        <div class="d-none navbar-menu position-fixed top-0 start-0 bottom-0 w-75 mw-sm" style="z-index: 9999;">
            <div class="navbar-close navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-dark" style="opacity: 75%;"></div>
            <nav class="position-relative h-100 w-100 d-flex flex-column py-8 px-8 bg-white overflow-auto">
                <div class="d-flex align-items-center mb-32">
                    <a class="me-auto h4 mb-0 text-decoration-none" href="#">
                        Linux.cn
                    </a>
                    <button class="navbar-close btn-close" type="button" aria-label="Close"></button>
                </div>
{{--                <div>--}}
{{--                    <ul class="nav flex-column">--}}
{{--                        <li class="nav-item"><a class="nav-link text-dark py-5 ps-8 bg-primary-light rounded" href="#">新闻</a></li>--}}

{{--                        <li class="nav-item"><a class="nav-link text-dark py-5 ps-8" href="#">科技</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="mt-auto">
                    <div class="py-6">
                        @auth
                            <a class="w-100 mb-2 btn btn-outline-light text-dark" href="{{ route('dashboard') }}">用户中心</a>
                        @else
                            <a class="w-100 mb-2 btn btn-outline-light text-dark" href="{{ route('login') }}">登录</a>
                            @if (Route::has('register'))
                                <a class="w-100 btn btn-primary" href="{{ route('register') }}">注册</a></div>
                             @endif
                        @endauth


{{--                    <p class="mb-4 small text-center text-muted">--}}
{{--                        <span>© 2022. All rights reserved.</span>--}}
{{--                    </p>--}}
                </div>
            </nav>
        </div>
    </section>
    <section class="position-relative bg-secondary-dark py-24 py-md-40 overflow-hidden"><div class="container">
            <div class="text-center py-auto my-auto">
                <h1 class="text-black mt-10">网站建设中</h1>
            </div>
            <div class="text-center mt-5"><a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}">先看看 AI?</a></div>
        </div>
    </section>
</x-website-layout>
