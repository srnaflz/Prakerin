@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Kasus') }} 
                </div>
                <div class="card">
                <div class="card-body" >
                <form  action="{{route('kasuse.update',$kasuse->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                        <div class="row">
                              <div class="col">
                              @livewireStyles
                                  @livewireScripts
                                  @method('PUT')
                                  <div>
                                  @livewire('select',['selectedRw'=> $kasuse->id_rw,
                                  'selectedState4'=> $kasuse->r_w_->kelurahan->id_kelurahan,
                                  'selectedState3'=> $kasuse->r_w_->kelurahan->kecamatan->id_kecamatan,
                                  'selectedState2'=> $kasuse->r_w_->kelurahan->kecamatan->kota->id_kota,
                                  'selectedState'=> $kasuse->r_w_->kelurahan->kecamatan->kota->provinsi->id_provinsi])
                                  </div>
                                  </div>
                        <div class="col">
                      <div class="form-group">
                        <label for="" class="form-label">Positif</label>
                        <input  class="form-control"  name="positif" value="{{$kasuse->positif}}"required>
                    </div>
                     <div class="form-group">
                        <label for="" class="form-label">Sembuh</label>
                        <input  class="form-control"  name="sembuh" value="{{$kasuse->sembuh}}"required>
                    </div>
                     <div class="form-group">
                        <label for="" class="form-label">Meninggal</label>
                        <input  class="form-control"  name="meninggal" value="{{$kasuse->meninggal}}"required>
                    </div>
                     <div class="form-group">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" class="form-control"  name="tanggal" value="{{$kasuse->tanggal}}"required>
                    </div>          
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection