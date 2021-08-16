@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-4 "id="clcl" width="80%">
            <nav class="panel panel-default" >
                <div class="panel-heading" >フォルダ</div>
                <div class="panel-body">
                    <p class="btn btn-default btn-block">
                        本を追加する
                    </p>
                </div>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $message)
                        <li> {{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('list.create') }}" method="post" class="submit22">
                    @csrf
                    <div class="form-group formgg">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                    </div>
                    <div class="form-group formgg">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}" />
                    </div>
                    <div class="form-group formgg">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn" value="{{ old('isbn') }}" />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">送信</button>
                    </div>
                </form>
            </nav>
        </div>
        <div class="column col-md-8">
            <!-- ここにタスクが表示される -->
        </div>
    </div>
</div>

@endsection