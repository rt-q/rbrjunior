@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">API DOCUMENTATION</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Info</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">/api/v1/posts</th>
                            <td>GET</td>
                            <td><strong>id['eq', 'gt', 'lt']=${id}</strong><br />
                                api/v1/posts?id[gt]=5<br />
                                <strong>authorId[eq]={$id}<br /></strong>
                                api/v1/posts?authorId[eq]=5<br />
                                <strong>includeComments=true/false</strong><br />
                                api/v1/posts?includeComments=true
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/posts</th>
                            <td>POST, PUT</td>
                            <td>Required: title, content, author</td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/posts/{$id}</th>
                            <td>GET</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/posts/{$id}</th>
                            <td>POST, PUT</td>
                            <td>Required: title, content, author</td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/posts/{$id}</th>
                            <td>DEL</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/comments</th>
                            <td>GET</td>
                            <td><strong>id['eq', 'gt', 'lt']=${id}</strong><br />
                                api/v1/comments?id[gt]=5<br />
                                <strong>authorId[eq]={$id}<br /></strong>
                                api/v1/comments?authorId[eq]=5<br />
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/comments</th>
                            <td>POST, PUT</td>
                            <td>Required: content, author</td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/comments/{$id}</th>
                            <td>GET</td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/comments/{$id}</th>
                            <td>POST, PUT</td>
                            <td>Required: content, author</td>
                          </tr>
                          <tr>
                            <th scope="row">/api/v1/comments/{$id}</th>
                            <td>DEL</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
