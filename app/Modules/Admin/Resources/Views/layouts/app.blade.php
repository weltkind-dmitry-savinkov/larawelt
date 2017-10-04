@include('admin::common.meta-head')
<div class="wrapper">
    <header class="main-header">
        <a href="/{{ config('cms.uri') }}/" class="logo">
            <img src="/adminlte/img/logo.png" alt="CMS" class="logo__image">
            <span class="logo__text">LaraWelt</span>
        </a>
        <nav class="navbar navbar-static-top">

            @if (Auth::user())
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="{{ home() }}">
                                <i class="fa fa-home"></i>
                                <span class="hidden-xs">@lang('admin::admin.return_to_site')</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('admin.users.edit', Auth::user()->id)}}">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/'.config('cms.uri').'/logout') }}">
                                <i class="fa fa-sign-out"></i>
                                <span class="hidden-xs">@lang('admin::admin.exit')</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif
        </nav>
    </header>

    @include('admin::common.menu')


    <div class="content-wrapper">
        <section class="content-header">
            @yield('title')
            @include('admin::common.languages')

            @section('topmenu')
                @include('admin::common.topmenu.all')
            @show

        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.1
        </div>
        <strong>Copyright &copy; 2017 <a href="http://weltkind.com" target="_blank">LaraWelt</a>.</strong> All rights reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

@include('admin::common.meta-footer')