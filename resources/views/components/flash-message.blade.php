@if (session()->has('message'))
    <div class="fixed top-0 transform -translate-x-1/2 left-1/2 bg-blue-500 text-white px-48 py3">
        <p>
            {{ session('message') }}
        </p>
    </div>

@endif