@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Them Lop</h2>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Ten lop</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <input type="submit" value="Thêm" class="form-control btn btn-primary">
            </form>
        </div>
    </div>
@endsection