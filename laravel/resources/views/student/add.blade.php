@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Thêm Sinh Viên</h2>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên SV</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label>Tên lớp</label>
                    <select name="room_id">
                        @foreach($rooms as $room)
                            <option value="{{$room->id}}">
                                {{$room->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Thêm" class="form-control btn btn-primary"/>
            </form>
        </div>
    </div>
@endsection