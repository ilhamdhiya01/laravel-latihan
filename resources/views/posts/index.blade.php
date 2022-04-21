<x-app-layout>
    <h1>Post page</h1>
    {{-- gunakan push untuk memanggil stack --}}
    @push('scripts')
        <script>
            $('h1').click(function() {
                alert('hello');
            });
        </script>
    @endpush
</x-app-layout>