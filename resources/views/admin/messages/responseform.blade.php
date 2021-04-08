@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-8 offset-2 mt-2">--}}
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('response') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" value="{{ $data->email }}"/>
                        </div>
                        <div class="form-group">
                            <label><strong>Message :</strong></label>
                            <textarea class="ckeditor form-control" name="message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">Respond</button>
                        </div>
                    </form>
                </div>
            </div>
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

@include('admin.layouts.footer')
