@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-4 "id="clcl" width="80%">
            <nav class="panel panel-default" >
                <div class="panel-heading" >フォルダ</div>
                <div class="panel-body">
                    <a href="{{ route('list.create') }}" class="btn btn-default btn-block">
                        本を追加する
                    </a>
                </div>
                <div class="list-group">
                    <table class="table">
                        <thead><tr>
                            <th>Name</th>
                            <th>author</th>
                            <th>user</th>
                            <th>ISBN</th>
                            <th>Date</th>
                        </tr></thead>
                        <tbody>
                        @foreach($nankores as $nankore)
                            <tr>
                                <th class="list-group-item"> {{ $nankore->title }}</th>
                                <th>{{ $nankore->author }}</th>
                                <th>{{ $nankore->user_id }}</th>
                                <th>{{ $nankore->ISBN }}</th>
                                <th>{{ $nankore->created_at }}<th>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </nav>
        </div>
        <div class="column col-md-8">
            <!-- ここにタスクが表示される -->
        </div>
    </div>
</div>

@endsection