@extends('layouts.admin')
@section('content')
    <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Times</h6>
        <p class="mg-b-20 mg-sm-b-30">Total Times: {{ $times->total() }}<span style="float: right">
            <a href="" class="btn btn-success" data-toggle="modal" data-target="#modaldemo3"><i class="fa fa-plus"></i></a>
        </span></p>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered mg-b-0 mb-5">
                <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($times as $time)
                    <tr>
                        <td>{{ $time->id }}</td>
                        <td>{{ $time->title }}</td>
                        <td>
                            <a href="{{ route('admin.book.timeDelete', $time->id) }}" id="delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach
                @if($times->total() == 0)
                    <tr>
                        <td></td>
                        <td></td>
                        <td><p style="text-align: center">not data</p></td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>

            <div class="mt-3">
                {{ $times->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>
    </div>

    <!-- LARGE MODAL -->
    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Time</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="{{ route('admin.book.timeStore') }}">
                    @csrf
                    <div class="modal-body pd-20">

                        <div class="form-group @error('time') is-invalid @enderror">
                            <input type="time" name="time" class="form-control" placeholder="Time">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-block">Create</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
