<div>

    <h1>Halaman Login</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          
            <form wire:submit="login_masuk">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" placeholder="name@example.com">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button class="btn btn-primary">Login</button>
   
        </form>
          
        </div>
      </div>

</div>