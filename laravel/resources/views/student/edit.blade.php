@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Sửa Sinh Viên</h2>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên SV</label>
                    <input type="text" class="form-control" name="name" value="{{$student->name}}">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{$student->address}}">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
                </div>
                <div class="form-group">
                    <label>Tên lớp</label>
                    <select name="room_id">
                        @foreach($rooms as $room)
                            <option value="{{$room->id}}">
                                {{$room->name}}
                            </option>
                            {{--@if($student->rooms->name == $room->name)--}}
                                {{--<option selected value="{{$room->id}}">{{$room->name}}</option>--}}
                            {{--@endif--}}
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Sửa" class="form-control btn btn-primary"/>
            </form>
        </div>
    </div>
@endsection