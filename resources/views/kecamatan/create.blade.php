@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }} 
                </div>
                
                <div class="card">

                <div class="card-body" >
                  
                <form  action="{{route('kecamatan.store')}}" method="POST">
                @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kota</label>
                        <select name="id_kota" class="form-control" required>
                                @foreach($kota as $data)
                                <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                                @endforeach
                            </select>                 
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="{{@old('kode_kecamatan')}}" class="form-control" id="exampleInputPassword1" >
                        @error('nama_kecamatan')
                      <div class="alert  alert-danger">{{$message}}</div>
                      @enderror
                    </div>
           
                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
