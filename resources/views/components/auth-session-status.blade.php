@if(\Illuminate\Support\Facades\Session::has('status'))
    <p class="text-green-500 mb-2">
        {{ \Illuminate\Support\Facades\Session::get('status') }}
    </p>

@endif
