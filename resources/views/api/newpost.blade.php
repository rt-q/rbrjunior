@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POSTS [API/PAGE1]</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('api.newpost.store') }}" method="POST" id="contentForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <input type="text" class="form-control" id="postTitle" name="postTitle" placeholder="New Post Title" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="postContent" name="postContent" placeholder="Content" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
