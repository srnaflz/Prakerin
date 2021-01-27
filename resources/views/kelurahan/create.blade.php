@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Data Kelurahan') }} 
                </div>
                
                <div class="card">

                <div class="card-body" >
                  
                <form  action="{{route('kelurahan.store')}}" method="POST">
                @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kecamatan</label>
                        <select name="id_kecamatan" class="form-control" required>
                                @foreach($kecamatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                @endforeach
                            </select>                 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan"  value="{{@old('nama_kelurahan')}}"  class="form-control" id="exampleInputPassword1"  >
                        @error('nama_kelurahan')
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
