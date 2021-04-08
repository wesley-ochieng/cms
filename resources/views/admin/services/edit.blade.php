@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif
<div class="container">
    <h4>Video</h4>
    <form action="{{ route('service.update', ['id' => $service->id]) }}" method="post" enctype="multipart/form-data" id="myform">
        @csrf
        <div class="form-row">
            <div class="col">
                    <div class="form-group"><label>Category</label><select class="form-control" name="category_id">
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $service->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select></div>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
{{--                <div class="form-group"><label>Category</label><input class="form-control" type="text" name="category_id" value="{{ $service->heading }}"></div>--}}
            </div>
            <div class="col">
                <div class="form-group"><label>Body</label><input class="form-control" type="text" name="body" value="{{ $service->body }}"></div>
            </div>
            <div class="col align-self-center">
                <div class="form-group mt-4"><button class="btn btn-primary" type="submit">Update</button></div>
            </div>
        </div>
    </form>
</div>


@include('admin.layouts.footer')

