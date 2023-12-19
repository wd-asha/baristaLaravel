@extends('layouts.admin')
@section('title', 'Barista | Admin Panel')
@section('content')

    <div class="card pd-20 pd-sm-40 mg-t-50 m-5">
        <h6 class="card-body-title">New Post</h6>

        <form action="{{--{{ route('post.store') }}--}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-layout">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Title:</label>
                            <input class="form-control" type="text" name="title" placeholder="Title"><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Author:</label>
                            <input class="form-control" type="text" name="author" placeholder="Author"><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Tag:</label>
                            <input class="form-control" type="text" name="tag" placeholder="Tag"><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-control-label">Description:</label>
                            <textarea class="form-control" id="summernote1" name="desc"></textarea><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-control-label">Content:</label>
                            <textarea class="form-control" id="summernote2" name="content"></textarea><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label">Photo:</label><br>
                            <label class="custom-file">
                                <input class="custom-file-input" type="file" id="file" name="image" data-placeholder="Select photo" onchange="readURL1(this);"><br><br><br>
                                <span class="custom-file-control"></span>
                                <img src="{{ asset('media/blog/no-image.png') }}" id="one" style="width: 5rem">
                            </label>
                        </div>
                    </div>
                </div><br>
                <hr>

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-success mg-r-5">
                        <i class="fa fa-floppy-o"></i>
                    </button>
                    <a href="{{ route('admin.blog') }}" class="btn btn-info">To list posts</a>
                </div>
            </div>
        </form>

    </div>

    <script type="text/javascript">
        function readURL1(input){
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
