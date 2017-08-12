@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Sửa lớp</h2>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Ten lop</label>
                    <input type="text" class="form-control" name="name" value="{{$room->name}}"/>
                </div>
                <input type="submit" value="Sửa" class="form-control btn btn-primary">
            </form>
        </div>
    </div>

@endsection