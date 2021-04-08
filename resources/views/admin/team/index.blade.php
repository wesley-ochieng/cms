@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')
<div class="container-fluid">

    @if(Session::has('message'))
        <div class="alert alert-success mt-3">
            {{ Session::get('message') }}
        </div>
    @endif

</div>
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold w-50">Team</p>
        </div>
        <div class="card-body">
            <a href="{{ route('teams.create') }}" class="justify-content-start btn btn-success mb-4">Add Team Details</a>
            <div class="row">
                <table class="table table-sm mb-0">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $key => $user)
                        <tr>
                            <td>{{ (($teams->currentPage() * 5) - 5) + $loop->iteration  }}</td>
                            <td><img src="{{ asset('storage/teams/'. $user->image) }}" style="width:80px; height:80px"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->description }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('teams.edit', ['id' => $user->id]) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('teams.delete', ['id' => $user->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{ $teams->links() }}
        </div>
    </div>
</div>

{{--@include('admin.layouts.footer')--}}


