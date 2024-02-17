<x-back.layout>
    <div class="container mt-5">
        <h1>Welcome, <span class="h4 text-uppercase">{{ Auth::user()->name }}</span> </h1>
        <br>
        <p>Your Email address is: <span class="h5 text-bold"> {{ Auth::user()->email }}</span></p>

    </div>
</x-back.layout>
