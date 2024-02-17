<x-back.layout>
    <h2 class="text-center mt-5">Registration</h2>
    <div class="container d-flex justify-content-center mt-4">

        <form class="w-50 ms-auto me-auto" action="{{ route('create.register') }}" method="POST">
            @csrf
            @if (session()->has('error'))
                <div class="alert alert-danger mt-2 mb-2">
                    {{ session('error') }}
                </div>
            @endif
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-back.layout>
