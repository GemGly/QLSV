@extends('layout.master')

@section('content')
    <div class="container">
        <h2>Lop</h2>
        <a href="/room/new" class="btn btn-primary">Them</a>
        <table class="table table-bordered table-responsive table-view">
            <thead>
                    <tr>
                        <th class="align">STT</th>
                        <th class="align">Ten lop</th>
                        <th class="align">Thao tac</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($rooms as $index=>$room)
                    <tr>
                        <td class="align">{{++$index}}</td>
                        <td class="align">{{$room->name}}</td>
                        <td class="align">
                            <a href="/sualop/{{$room->id}}" class="btn btn-success">Edit</a>
                            <a href="/room/{{$room->id}}"  onclick="myFunction()" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
<script>
    function myFunction() {
        confirm("Ban muon xoa hay ko?");
    }
</script>

@endsection
