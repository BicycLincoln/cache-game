@if(env('APP_ENV') === 'production')
    User-agent: *
    Disallow: /claim/
@else
    User-agent: *
    Disallow: /
@endif
