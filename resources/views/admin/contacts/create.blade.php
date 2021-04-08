@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card align-content-center">
                <div class="card-body">
                    <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="col">
                            {{--                            <div class="form-group"><label class="mr-3">Current Image</label><img src="assets/img/avatars/avatar1.jpeg"></div>--}}
                            <div class="form-group">
                                <label>Enter Youtube URL</label>
                                <input class="form-control" type="text" name="youtube">
                            </div>
                        
                        </div>

                        <div class="col">
                            <div class="form-group"><label>Enter Twitter URL</label><input
                                    class="form-control"
                                    type="text" name="twitter"></div>
                           
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Enter E-mail</label><input
                                    class="form-control"
                                    type="email" name="email"></div>
                       
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Enter Instagram URL</label><input
                                    class="form-control "
                                    type="text" name="instagram">
                            </div>
                         
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Enter Whatsapp Number</label><input
                                    class="form-control "
                                    type="number" name="whatsapp"
                                ></div>
                     
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Enter Facebook URL</label><input
                                    class="form-control"
                                    type="text" name="facebook">
                            </div>
                          
                        </div>
                        <button class="btn btn-primary" type="submit">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
