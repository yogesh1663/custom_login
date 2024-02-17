<x-back.layout>
    <h2 class="text-center mt-5">Login</h2>
    <div class="container d-flex justify-content-center mt-4">

        <form class="w-50 ms-auto me-auto" action="{{ route('post.login') }}" method="POST">
            @csrf
            @if (session()->has('error'))
                <div class="alert alert-danger mt-2 mb-2">
                    {{ session('error') }}
                </div>
            @elseif (session()->has('success'))
                <div class="alert alert-success mt-2 mb-2">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</x-back.layout>
