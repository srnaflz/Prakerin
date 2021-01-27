@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }} 
                </div>
                
                <div class="card">

                <div class="card-body" >
                  
                <form  action="{{route('kota.store')}}" method="POST">
                @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Provinsi</label>
                        <select name="id_provinsi" class="form-control" required>
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>                 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kode Kota</label>
                        <input type="text" name="kode_kota" value="{{@old('kode_kota')}}" class="form-control" id="exampleInputPassword1" >
                        @error('kode_kota')
                      <div class="alert  alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{@old('nama_kota')}}" class="form-control" id="exampleInputPassword1" >
                        @error('nama_kota')
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
