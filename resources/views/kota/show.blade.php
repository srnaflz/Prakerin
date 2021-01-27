@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body" >
                  
                    @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Provinsi</label>
                        <input type="text" name="id_provinsi" value="{{$kota->provinsi->nama_provinsi}}" class="form-control" readonly >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Kota</label>
                        <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" readonly >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Provinsi</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly >
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a></button>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

