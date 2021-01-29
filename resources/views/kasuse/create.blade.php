@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kasus') }} 
                </div>
                
                <div class="card">

                <div class="card-body" >
                  
                <form  action="{{route('kasuse.store')}}" method="post">
                <div>
                @csrf
                @livewireStyles
                        @livewire('select')
                @livewireScripts

            
                  <p><b><center>Status Kasus</center></b></p>
                        <br>
                    
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input   value="{{@old('positif')}}" class="form-control" id="exampleInputPassword1" name="positif"
                        required>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input   value="{{@old('sembuh')}}" class="form-control" id="exampleInputPassword1" name="sembuh"
                        required>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                        <input   value="{{@old('meninggal')}}" class="form-control" id="exampleInputPassword1" name="meninggal"
                        required>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date"  value="{{@old('tanggal')}}" class="form-control" id="exampleInputPassword1" name="tanggal"
                        required>
                    </div>
                     </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
