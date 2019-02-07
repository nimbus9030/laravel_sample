@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a href="{{ url('post') }}" class="btn btn-primary btn-sm">新規作成</a>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered no-margin">
                        <tbody>
                        <tr>
                            <th></th>
                            <th>id</th>
                            <th>タイトル</th>
                            <th>作成日時</th>
                            <th>更新日時</th>
                        </tr>
                        <!-- foreach -->
                        @foreach( $posts as $post )
                            <tr>
                                <td>
                                <form class="form-horizontal" method="POST" action="{{ route('delete') }}">
                                    {{ csrf_field() }}
                                    <input id="id" name="id" value="{{ $post->id }}" style="display:none">
                                    <button type="submit" class="btn-small btn-danger">
                                        Delete
                                    </button>
                                </form>                                
                                </td>
                                <td>{{ $post->id }}</td>
                                <td> <a href=" {{ url('post/'.$post->id.'/edit/') }}">{{ $post->title}} </td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="box-footer">
                        <div class="col-md-4 no-padding">
                            <ul class="pagination no-margin pull-left">
                                <!-- paginate -->
                                {{ $posts->links() }}
                            </ul>
                        </div><!-- end col-md-4 no-padding-->
                    </div><!-- end box-footer-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
