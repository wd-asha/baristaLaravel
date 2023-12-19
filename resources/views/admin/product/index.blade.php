@extends('layouts.admin')
@section('content')

    <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Products</h6>
        <p class="mg-b-20 mg-sm-b-30">Total products: {{ $products->total() }}
            <span style="float: right">
                <a href="{{ route('product.create') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i></a>
            </span>
        </p>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered mg-b-0 mb-5">
                <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Weight, g.</th>
                    <th>Price, $</th>
                    <th>Status</th>
                    <th>Amount, pc.</th>
                    <th>Date created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><img src="../../../../{{ $product->image}}" alt="" style="width: 100px;"></td>
                        <td>
                            <a href="{{--{{ route('product', $product->id) }}--}}" target="_blank">{{ $product->title }}</a>
                        </td>
                        <td>{{ $product->category->title }}</td>
                        <td>{{ $product->weight }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <div class="togglebutton">
                                <label>
                                    @if($product->status)
                                        <a href="{{route('product.status0', $product->id)}}">
                                            <input type="checkbox" checked="">
                                            <span class="toggle"></span>
                                        </a>
                                    @endif
                                    @if(!$product->status)
                                        <a href="{{route('product.status1', $product->id)}}">
                                            <input type="checkbox">
                                            <span class="toggle"></span>
                                        </a>
                                    @endif
                                </label>
                            </div>
                        </td>
                        <td>
                            @if($product->amount < 3)
                                <span style="color: red; font-size: 1rem">{{ $product->amount }}</span>
                                <a href="" data-toggle="modal" data-target="#modaldemo{{ $product->id }}" class="btn btn-warning" style="display: inline-block; margin-bottom: 10px; padding: .2rem .4rem .2rem .4rem;">
                                    <i class="fa fa-edit" style="font-size: .66rem;"></i>
                                </a>
                            @else
                                <span style="font-size: 1rem">{{ $product->amount }}</span>
                                <a href="" data-toggle="modal" data-target="#modaldemo{{ $product->id }}" class="btn btn-info" style="display: inline-block; margin-bottom: 10px; padding: .2rem .4rem .2rem .4rem;">
                                    <i class="fa fa-edit" style="font-size: .66rem;"></i>
                                </a>
                            @endif
                        </td>
                        <td>{{ $product->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{--{{ route('product.show', $product->id) }}--}}" class="btn btn-info" style="display: inline-block; margin-right: .5rem;" target="_blank">
                                <i class="fa fa-eye" style="font-size: 1.2rem;"></i>
                            </a>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning" style="display: inline-block; margin-right: .5rem">
                                <i class="fa fa-edit" style="font-size: 1.2rem;"></i>
                            </a>
                            <a href="{{ route('product.delete', $product->id) }}" id="delete" class="btn btn-danger"><i class="fa fa-trash" style="font-size: 1.2rem; padding: 2px"></i></a>
                        </td>
                    </tr>

                    <div id="modaldemo{{ $product->id }}" class="modal fade">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content tx-size-sm">
                                <div class="modal-header pd-x-20">
                                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Amount</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form method="POST" action="{{ route('amount.product', $product->id) }}">
                                    @csrf
                                    <div class="modal-body pd-20">
                                        <div class="form-group @error('title') is-invalid @enderror">
                                            <input type="number" name="amount" class="form-control" placeholder="Количество" value="{{ $product->amount }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-block">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach
                @if($products->total() == 0)
                    <tr>
                        <td><p style="text-align: center; width: 100%">not data</p></td>
                    </tr>
                @endif
                </tbody>
            </table>

            <div class="mt-3">
                {{ $products->withQueryString()->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>

    </div>

@endsection