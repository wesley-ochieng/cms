@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4>Team</h4>

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    <form class="user" method="POST" action="{{ route('user.store') }}" autocomplete="off">
        @csrf
        <div class="form-group"><label>Name</label><input type="text" class="form-control @error('name') is-invalid @enderror" name="name"></div>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>E-mail</label><input type="text" class="form-control @error('email') is-invalid @enderror" name="email"></div>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>password</label><input type="password" class="form-control @error('password') is-invalid @enderror" name="password"></div>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>Password Confirmation</label><input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"></div>
        @error('password_confirmation')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="col-md-3 align-self-end"><button class="btn btn-primary mt-2" type="submit">Register</button></div>
    </form>
</div>


@include('admin.layouts.footer')
