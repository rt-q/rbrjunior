@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POST [API/DELETE]</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('api.deletepost.rmv') }}" method="POST" id="contentForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <input type="text" class="form-control" id="postId" name="postId" placeholder="Post ID" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
