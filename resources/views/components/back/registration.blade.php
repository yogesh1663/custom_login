<x-back.layout>
    <h2 class="text-center mt-5">Registration</h2>
    <div class="container d-flex justify-content-center mt-4">
        <form class="w-50 ms-auto me-auto">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-back.layout>
