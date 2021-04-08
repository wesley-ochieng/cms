@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')
<div class="container-fluid">
    <a href="{{ route('createuser') }}" class="btn btn-success">Create user</a> <br>
    <h3 class="badge badge-info mt-3">Registered Users</h3>
</div>
<div class="container-fluid">
    <div class="card shadow mt-3">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold w-50">Users&nbsp;</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                </div>
                <div class="table-responsive table mt-2">
                    <table class="table my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Emails</th>
                            <th>Joined</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ (($users->currentPage() * 5) - 5) + $loop->iteration  }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('user.delete', ['id' => $user->id])  }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>

@include('admin.layouts.footer')
