@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">編集</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">タイトル</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">本文</label>
                            <div class="col-md-6">
                                <textarea id="content" name="content" class="form-control" cols="50" rows="10" required> </textarea>
                            </div>
                        </div>
                        <input id="" name="id" value="" style="display:none">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>

                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
