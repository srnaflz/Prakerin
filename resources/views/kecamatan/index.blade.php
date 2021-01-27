@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kecamatan') }} 
                </div>
                
                <div class="card">
                <a href="{{route('kecamatan.create')}}" class="btn btn-primary float-right"> Add Data </a>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Kota</th>
                                    <th>kode Kecamatan</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kecamatan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kota->nama_kota}}</td>
                                    <td>{{$data->kode_kecamatan}}</td>
                                    <td>{{$data->nama_kecamatan}}</td>
                                    <td>
                                        <form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-sm btn-success">Show</a> |
                                            <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-sm btn-warning">Update</a> |
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
