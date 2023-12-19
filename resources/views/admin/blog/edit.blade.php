@extends('layouts.admin')
@section('title', 'Barista | Admin Panel')
@section('content')

    <div class="card pd-20 pd-sm-40 mg-t-50 m-5">
        <h6 class="card-body-title">Edit Post</h6>

        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-layout">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Title:</label>
                            <input class="form-control" type="text" name="title" value="{{ $post->title }}"><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Author:</label>
                            <input class="form-control" type="text" name="author" value="{{ $post->author }}"><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Tag:</label>
                            <input class="form-control" type="text" name="tag" value="{{ $post->tag }}"><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-control-label">Description:</label>
                            <textarea class="form-control" id="summernote1" name="desc">{{ $post->desc }}</textarea><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-control-label">Content:</label>
                            <textarea class="form-control" id="summernote2" name="contents">{{ $post->content }}</textarea><br>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-success mg-r-5">
                        <i class="fa fa-floppy-o"></i>
                    </button>
                    <a href="{{ route('admin.blog') }}" class="btn btn-info">To list posts</a>
                </div>

            </div>
        </form>

        <hr>

        <div class="card pd-20 pd-sm-40 mg-t-50 m-5">
            <h6 class="card-body-title">Chane photo</h6><br>

            <form action="{{ route('admin.post.updatePhoto', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="form-control-label">Photo:</label><br>
                            <label class="custom-file">
                                <input class="custom-file-input" type="file" id="file1" name="image" data-placeholder="Select photo" onchange="readURL1(this);"><br><br><br>
                                <span class="custom-file-control"></span>
                                <input type="hidden" name="old_image" value="{{ $post->image }}">
                            </label>
                        </div>
                        <img src="/{{ $post->image }}" style="width: 80px; height: 80px;" alt=""> &rarr;
                        <img src="{{ asset('media/blog/no-image.png') }}" id="one" style="width: 80px; height: 80px;" alt="">
                    </div>
                </div><br>

                <hr>

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-success mg-r-5">
                        <i class="fa fa-floppy-o"></i>
                    </button>
                    <a href="{{ route('admin.blog') }}" class="btn btn-info">To list posts</a>
                </div>
            </form>
        </div>

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