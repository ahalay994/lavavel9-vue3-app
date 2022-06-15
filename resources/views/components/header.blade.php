<header id="header" class="container mx-auto">
    <v-header
        :menu="{{ json_encode($menu) }}"
        :logo="{{ json_encode($logo) }}"
        :current-page="{{ json_encode(request()->route()->getName()) }}"
        :user="{{ json_encode($user) }}"
        :app-name="{{ json_encode($appName) }}"
    ></v-header>
</header>

@push('js')
    <script src="{{ mix('js/components/header.js') }}"></script>
@endpush
