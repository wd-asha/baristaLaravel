@extends('layouts.admin')
@section('content')

    <div class="card pd-20 pd-sm-40 mg-t-50 m-5">
        <h6 class="card-body-title">New product</h6>

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-layout">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" name="category_id">
                                <option label="Select category"></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select><br>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Title:</label>
                            <input class="form-control" type="text" name="title" placeholder="Title"><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">SKU:</label>
                            <input class="form-control" type="text" name="sku" placeholder="SKU"><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Dimensions:</label>
                            <input class="form-control" type="text" name="dime" placeholder="Dimensions"><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label">Weight:</label>
                            <input class="form-control" type="number" name="weight" placeholder="Weight"><br>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Price:</label>
                            <input class="form-control" type="number" name="price" placeholder="Price"><br>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-group">
                            <label class="form-control-label">Amount:</label>
                            <input class="form-control" type="number" name="amount" placeholder="Amount"><br>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-control-label">About:</label>
                            <textarea class="form-control" id="summernote1" name="about"></textarea><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-control-label">Description:</label>
                            <textarea class="form-control" id="summernote2" name="desc"></textarea><br>
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
                                <img src="{{ asset('media/shop/no-image.png') }}" id="one" style="width: 5rem">
                            </label>
                        </div>
                    </div>
                </div><br>

                <hr>

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-success mg-r-5">
                        <i class="fa fa-floppy-o"></i>
                    </button>
                    <a href="{{ route('admin.products') }}" class="btn btn-info">To list products</a>
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
