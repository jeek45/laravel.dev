{{-- Footer content --}}
<footer class="footer">

    <div class="container">
        <p align="center">
            @if (!empty(config('app.github_link')))
                <a href="{{ config('app.github_link') }}" target="_blank">GitHub</a>
            @endif
        </p>
    </div>

</footer>