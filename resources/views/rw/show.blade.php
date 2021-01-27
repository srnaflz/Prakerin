@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Rw') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body" >
                  
                    @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                    <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kelurahan</label>
                        <input type="text" name="id_kelurahan" value="{{$r_w_->kelurahan->nama_kelurahan}}" class="form-control" readonly >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Rw</label>
                        <input type="text" name="nama_rw" value="{{$r_w_->nama_rw}}" class="form-control" readonly >
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a></button>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

