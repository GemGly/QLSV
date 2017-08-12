@extends('layout.master')
@section('content')
    <div class="container">
        <h2>SINH VIÊN</h2>
        <a href="/sv/new" class="btn btn-primary">Thêm </a>
            <table class="table table-bordered table-responsive table-view">
                <thead>
                <tr>
                    <th class="align">STT</th>
                    <th class="align">Tên SV</th>
                    <th class="align">Địa chỉ</th>
                    <th class="align">SĐT</th>
                    <th class="align">Tên lớp</th>
                    <th class="align">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $index=>$sv)
                <tr>
                    <td class="align">{{++$index}}</td>
                    <td class="align">{{$sv->name}}</td>
                    <td class="align">{{$sv->address}}</td>
                    <td class="align">{{$sv->phone}}</td>
                    <td class="align">{{$sv->room->name}}</td>
                    <td class="align">
                        <a href="/suasv/{{$sv->id}}" class="btn btn-success">Edit</a>
                        <a href="/sv/{{$sv->id}}"  onclick="myFunction()" class="btn btn-danger">Delete</a> </td>
                </tr>
                @endforeach
                </tbody>
            </table>

    </div>
@endsection
<script>
    function myFunction() {
        confirm("Ban muon xoa hay ko?");
    }
</script>