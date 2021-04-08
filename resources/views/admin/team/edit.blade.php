@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4 class="badge badge-danger">Edit Team Details</h4>
    <form action="{{ route('teams.update', ['id' => $team->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group"><label>Name</label><input type="text"
                                                          class="form-control"
                                                          name="name" value="{{ $team->name }}"></div>
        <div class="form-group"><label>Facebook</label><input type="text"
                                                              class="form-control"
                                                              name="facebook" value="{{ $team->facebook }}"></div>
        <div class="form-group"><label>Twitter</label><input type="text"
                                                             class="form-control"
                                                             name="twitter" value="{{ $team->twitter }}"></div>
        <div class="form-group"><label>Instagram</label><input type="text"
                                                               class="form-control"
                                                               name="instagram" value="{{ $team->instagram }}"></div>
        <div class="form-group"><label>Image</label><input type="file"
                                                           class="form-control"
                                                           name="image"></div>
        <div class="form-group"><label>Description</label><textarea class="form-control" rows="4"
                                                                    name="description">{{ $team->description }}</textarea></div>
        <div class="col-md-3 align-self-end">
            <button class="btn btn-primary mt-2" type="submit">Update</button>
        </div>
    </form>
</div>


{{--@include('admin.layouts.footer')--}}
