@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Rw') }} 
                </div>
                
                <div class="card">
             

                <div class="card-body" >


                <form  action="{{route('kasuse.update',$kasuse->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                    
                @livewireStyles

                @livewireScripts
                @method('PUT')
                <div>
                @livewire('select',['selectedRw'=> $kasuse->id_rw])
                </div>

                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input  class="form-control" id="exampleInputPassword1" name="positif"
                        value="{{$kasuse->positif}}"required>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input  class="form-control" id="exampleInputPassword1" name="sembuh"
                        value="{{$kasuse->sembuh}}"required>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                        <input  class="form-control" id="exampleInputPassword1" name="meninggal"
                        value="{{$kasuse->meninggal}}"required>
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal"
                        value="{{$kasuse->tanggal}}"required>
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