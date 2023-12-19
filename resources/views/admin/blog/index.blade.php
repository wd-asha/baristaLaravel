@extends('layouts.admin')
@section('title', 'Barista | Admin Panel')
@section('content')
    <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Posts</h6>
        <p class="mg-b-20 mg-sm-b-30">Total posts: {{ $posts->total() }}<span style="float: right">
            <a href="{{ route('admin.post.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
        </span></p>

        <div class="table-responsive">
            <table class="table table-hover table-bordered mg-b-0 mb-5">
                <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Tag</th>
                    <th>Status</th>
                    <th>Date created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="/{{ $post->image }}" alt="" style="width: 5rem;"></td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->tag }}</td>
                        <td>
                            <div class="togglebutton">
                                <label>
                                    @if($post->status)
                                        <a href="{{route('post.status0', $post->id)}}">
                                            <input type="checkbox" checked="">
                                            <span class="toggle"></span>
                                        </a>
                                    @endif
                                    @if(!$post->status)
                                        <a href="{{route('post.status1', $post->id)}}">
                                            <input type="checkbox">
                                            <span class="toggle"></span>
                                        </a>
                                    @endif
                                </label>
                            </div>
                        </td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                            <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-warning" style="display: inline-block; margin-right: .5rem">
                                <i class="fa fa-edit" style="font-size: 1.2rem;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>
    </div>
@endsection
