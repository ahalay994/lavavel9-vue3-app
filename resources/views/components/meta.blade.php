@push('meta')
    <title>{{ $meta['title'] ?: env('APP_NAME')  }}</title>

    <meta name="title" content="{{ $meta['title'] }}">
    <meta name="description" content="{{ $meta['description'] }}">
    <meta name="keywords" content="{{ $meta['keywords'] }}">
    <meta name="author" content="{{ env('AUTHOR_PROJECT') }}">

    <meta name="og:title" content="{{ $meta['title'] }}">
    <meta name="og:description" content="{{ $meta['description'] }}">
    <meta name="og:url" content="{{ URL::current() }}">
    <meta name="og:image" content="{{ $meta['image'] }}">
@endpush
