@extends('app')

@section('content')
    <div id="main-page">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
            <main-page></main-page>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ mix('js/main-page.js') }}"></script>
@endpush
