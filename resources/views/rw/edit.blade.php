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
                <form action="{{route('rw.update',$r_w_->id)}}" method="post">
                    @csrf <!-- untuk mengamankan data yang kita tambahkan -->
                    @method('PUT')
                    <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kelurahan</label>
                        <select name="id_kelurahan" class="form-control" required>
                        @foreach($kelurahan as $data)
                                <option value="{{$data->id}}"
                                    {{ $data->id == $r_w_->id_kota ? "selected" : "" }}>
                                    {{$data->nama_kelurahan}}
                                </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Rw</label>
                        <input type="text" name="nama_rw" value="{{$r_w_->nama_rw}}" class="form-control" required >
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

