<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @section('header')
    @include('layouts.partials.header')
    @show
<body>
    <div id="app">

        @include('layouts.partials.top_menu')

        <div class="container content" role="main">
            <div class="content-wrapper">
                <section class="content">

                    @include('layouts.partials.all_messages')

                    @yield('content')

                </section>
            </div>

            @include('layouts.partials.footer')

            @section('scripts')
                @include('layouts.partials.scripts')
            @show

        </div>
    </div>
</body>
</html>

