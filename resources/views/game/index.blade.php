@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <br>
        <center>
        <h5>List Arnoriel Repacked Games</h5>
        </center>
        <div class="card" style="margin: 2%;">
            <div class="card-header bg-success text-white">
                Games List
                <a href="{{route('game.create')}}" class="btn btn-sm btn-warning float-right" >Tambah Game</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                    @php $no=1 @endphp
                    @foreach ($game as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><img src="{{$item->gambar()}}" alt="" style="width: 200px;"></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <form action="{{route('game.destroy',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{route('game.edit',$item->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('game.show',$item->id)}}" class="btn btn-warning">Show</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
  