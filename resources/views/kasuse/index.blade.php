@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">{{ __('Kasus') }} 
                </div>
                
                <div class="card ">
                <a href="{{route('kasuse.create')}}" class="btn btn-primary float-right"> Add Data </a>

                <div class="card-body"  >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <table class="table table-dark table-hover " id ="e" >
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Lokasi</th>
                                    <th>Rw</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasuse as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                    Provinsi  : {{$data->r_w_->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}<br><br>
                                    Kota      : {{$data->r_w_->kelurahan->kecamatan->kota->nama_kota}}<br><br>
                                    Kecamatan : {{$data->r_w_->kelurahan->kecamatan->nama_kecamatan}}<br><br>
                                    Kelurahan : {{$data->r_w_->kelurahan->nama_kelurahan}}<br><br>
                                    </td>
                                    <td>{{$data->r_w_->nama_rw}}</td>
                                    <td>{{$data->positif}}</td>
                                    <td>{{$data->sembuh}}</td>
                                    <td>{{$data->meninggal}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>
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
@endsection
