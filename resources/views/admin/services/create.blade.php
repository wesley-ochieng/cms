@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')
                <div class="container px-1">
                    <h4>Create Services</h4>
                    <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data" id="myform">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group"><label>Category</label><select class="form-control" name="category_id">
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select></div>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <div class="form-group"><label>Body</label><input class="form-control @error('body') is-invalid @enderror" type="text" name="body"></div>
                                @error('body')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-1 align-self-center">
                                <div class="form-group mt-4"><button class="btn btn-primary" type="submit">Save</button></div>
                            </div>
                        </div>
                    </form>
                </div>


                @include('admin.layouts.footer')


            </div>
            <div class="col">
                <div class="form-group"><label>Heading</label><input class="form-control @error('heading') is-invalid @enderror" type="text" name="heading"></div>
                @error('heading')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <div class="form-group"><label>Body</label><input class="form-control @error('body') is-invalid @enderror" type="text" name="body"></div>
                @error('body')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col align-self-center">
                <div class="form-group mt-4"><button class="btn btn-primary" type="submit">Save</button></div>
            </div>
        </div>
    </form>
</div>


@include('admin.layouts.footer')

