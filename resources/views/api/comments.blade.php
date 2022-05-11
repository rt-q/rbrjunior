@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">COMMENTS [API/PAGE1]</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post</th>
                            <th scope="col">Content</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($allComments as $comment)
                              <tr>
                                <th scope="row">{{ $comment['id'] }}</th>
                                <td>{{ $comment['post_id'] }}</td>
                                <td>{{ $comment['content'] }}</td>
                                <td>{{ $comment['author'] }}</td>
                                <td>{{ $comment['createdAt'] }}</td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
