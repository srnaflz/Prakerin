@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Negara') }} 
                </div>
                <?php
                    $data = file_get_contents('https://api.kawalcorona.com/');
                    $negara = json_decode($data, true);

?>
               
                <div class="card">


                <div class="card-body" >
                <div class="table-responsive">
             
                    <table class="table table-bordered" id="e">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Lat</th>
                                    <th scope="col">Long</th>
                                    <th scope="col">Confirmed</th>
                                    <th scope="col">Deaths</th>
                                    <th scope="col">Recovered</th>
                                    <th scope="col">Active</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($negara as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td  scope="row">{{$data['attributes']['Country_Region']}}</td>
                                    <td  scope="row">{{$data['attributes']['Lat']}}</td>
                                    <td  scope="row">{{$data['attributes']['Long_']}} </td>
                                    <td  scope="row">{{$data['attributes']['Confirmed']}} </td>
                                    <td  scope="row">{{$data['attributes']['Deaths']}} </td>
                                    <td  scope="row">{{$data['attributes']['Recovered']}} </td>
                                    <td  scope="row">{{$data['attributes']['Active']}} </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
