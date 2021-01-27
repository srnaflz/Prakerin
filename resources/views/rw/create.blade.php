@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Data Rw') }} 
                </div>
                
                <div class="card">

                <div class="card-body" >
                  
                <form  action="{{route('rw.store')}}" method="POST">
                @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                <div class="form-group">
                <label for="exampleInputPassword1">Nama Kelurahan</label>
                        <select name="id_kelurahan" class="form-control" required>
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
                                @endforeach
                            </select>                 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Rw</label>
                        <input type="text" name="nama_rw" value="{{@old('nama_rw')}}" class="form-control" id="exampleInputPassword1"  >
                        @error('nama_rw')
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
