@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kota') }} 
                </div>
                
                <div class="card">
                <a href="{{route('kota.create')}}" class="btn btn-primary float-right"> Add Data </a>

                <div class="card-body" >
                <div class="table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <table class="table table-bordered" id="e">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Nama Provinsi</th>
                                    <th scope="col">kode Kota</th>
                                    <th scope="col">Nama Kota</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kota as $data)
                                <tr>
                                    <td  scope="row">{{$no++}}</td>
                                    <td  scope="row">{{$data->provinsi->nama_provinsi}}</td>
                                    <td  scope="row">{{$data->kode_kota}}</td>
                                    <td  scope="row">{{$data->nama_kota}}</td>
                                    <td  scope="row">
                                        <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kota.show',$data->id)}}" class="btn btn-sm btn-success">Show</a> |
                                            <a href="{{route('kota.edit',$data->id)}}" class="btn btn-sm btn-warning">Update</a> |
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
</div>
@endsection
