{{-- All error show in Toaster --}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        toastr.error(`{!! $error !!}`, 'Error')
    </script>
    @endforeach
@endif


