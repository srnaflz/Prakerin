@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body" >
                  
                    @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" readonly >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" readonly >
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a></button>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

