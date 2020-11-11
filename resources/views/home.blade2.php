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
                                <!-- $post -->
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="box-footer">
                        <div class="col-md-4 no-padding">
                            <ul class="pagination no-margin pull-left">
                                <!-- paginate -->
                            </ul>
                        </div><!-- end col-md-4 no-padding-->
                    </div><!-- end box-footer-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
