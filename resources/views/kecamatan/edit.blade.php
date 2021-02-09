@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body" >
                <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="post">
                    @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kota</label>
                        <select name="id_kota" class="form-control" required>
                        @foreach($kota as $data)
                                <option value="{{$data->id}}"
                                    {{ $data->id == $kecamatan->id_kota ? "selected" : "" }}>
                                    {{$data->nama_kota}}
                                </option>
                                @endforeach
                            </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" required >
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

