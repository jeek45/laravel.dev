{{-- Footer content --}}
<footer class="footer">
    <div class="container">
        <p class="text-muted text-center">
            @if (!empty(config('app.github_link')))
                <a href="{{ config('app.github_link') }}" target="_blank">GitHub</a>
            @endif
        </p>
    </div>
</footer>