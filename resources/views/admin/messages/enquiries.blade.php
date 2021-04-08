@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')


<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Total Enquiries</h5>
                    <h2 class="font-weight-bold">{{ $totalEnquiries }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Total Responses</h5>
                    <h2 class="font-weight-bold">{{ $totalResponses }}</h2>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-2">

        <div class="col-xl-12">
            @if ($message = Session::get('message'))<div class="alert alert-success alert-block">	<button type="button" class="close" data-dismiss="alert">×</button>	        <strong>{{ $message }}</strong></div>@endif

            <div class="card">

                <div class="card-body">

                    <h4 class="badge badge-success">All Messages</span></h4>

                    <div class="table-responsive mt-5">
                        <table class="table table-sm mb-0">
                            <thead>
                            <tr> <div class="table-responsive mt-5">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date Sent</th>
                                            <th scope="col">Number of Guests</th>
                                            <th scope="col">Message</th>
                                            <th>Response Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{ $message->id }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->date }}</td>
                                                <td>{{ $message->numberofguests }}</td>
                                                <td>{{ $message->message }}</td>
                                                @if ($message->status == 1)
                                                    <td><img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" style="width: 30px; height: 35px"></td>
                                                @else
                                                    <td><img src="https://lh3.googleusercontent.com/proxy/n-OBsjFByhRmNdr_CSAOI6mJgT0UXHaHUL1GvZHd2god2zGWWGif4mhiJLztQOIXpuugTaEjiZzjYmtk2R8X6zssXPSTNd2wLZiaGuM3bSYlfcgme7EP5XbWsbtfJ6WD5drJWFCVC40" style="width: 30px; height: 35px"></td>
                                                @endif
                                                <td><a class="btn btn-info" href="{{ route('response.form', ['id' => $message->id]) }}">Respond</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                    </div>
                    {{ $messages->links() }}
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col -->

    </div>
</div> <!-- container-fluid -->

</div> <!-- content -->



</div>

@include('admin.layouts.footer')


