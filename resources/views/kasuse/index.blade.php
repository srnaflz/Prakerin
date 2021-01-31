@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">{{ __('Kasus') }} 
                </div>
                
                <a href="{{route('kasuse.create')}}" class="btn btn-primary float-right"> Add Data </a>

                <div class="card-body" >
                <div class="table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <table class="table table-bordered" id ="e" >
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Rw</th>
                                    <th scope="col">Positif</th>
                                    <th scope="col">Sembuh</th>
                                    <th scope="col">Meninggal</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasuse as $data)
                                <tr>
                                    <td  scope="row">{{$no++}}</td>
                                    <td  scope="row">
                                    Provinsi  : {{$data->r_w_->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}<br><br>
                                    Kota      : {{$data->r_w_->kelurahan->kecamatan->kota->nama_kota}}<br><br>
                                    Kecamatan : {{$data->r_w_->kelurahan->kecamatan->nama_kecamatan}}<br><br>
                                    Kelurahan : {{$data->r_w_->kelurahan->nama_kelurahan}}<br><br>
                                    </td>
                                    <td  scope="row">{{$data->r_w_->nama_rw}}</td>
                                    <td  scope="row">{{$data->positif}}</td>
                                    <td  scope="row">{{$data->sembuh}}</td>
                                    <td  scope="row">{{$data->meninggal}}</td>
                                    <td  scope="row">{{$data->tanggal}}</td>
                                    <td  scope="row">
                                        <form action="{{route('kasuse.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kasuse.show',$data->id)}}" class="btn btn-sm btn-success">Show</a> |
                                            <a href="{{route('kasuse.edit',$data->id)}}" class="btn btn-sm btn-warning">Update</a> |
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