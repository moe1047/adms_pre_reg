@if($errors->any())
    <ol class="notice notice-danger">
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach

    </ol>
@endif