@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kelurahan') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body" >
                <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="post">
                    @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kecamatan</label>
                        <select name="id_kecamatan" class="form-control" required>
                        @foreach($kecamatan as $data)
                                <option value="{{$data->id}}"
                                    {{ $data->id == $kelurahan->id_kota ? "selected" : "" }}>
                                    {{$data->nama_kecamatan}}
                                </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" required >
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

