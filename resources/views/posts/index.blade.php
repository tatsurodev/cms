@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success float-right">Add Post</a>
</div>
<div class="card card-default">
    <div class="card-header">Posts</div>
    <div class="card-body">
        @if($posts->count() > 0)
        <table class="table">
            <thead>
                <th>Image</th>
                <th>Title</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td><img src={{ asset('/storage/'.$post->image) }} alt="" widrh="120px"
                            height="60px">{{ $post->image }}
                    </td>
                    <td>{{ $post->title }}</td>
                    <td><a href="" class="btn btn-info btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Trash</button>
                            Lorem.
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h3 class="text-center">No Posts Yet.</h3>
        @endif
    </div>
</div>

@endsection
