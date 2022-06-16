@extends('app')

@include('components.meta', ['meta' => $meta])

@section('content')
    <div id="main-page">
        <main-page></main-page>
    </div>
@endsection

@push('js')
    <script src="{{ mix('js/pages/main-page.js') }}"></script>
@endpush
