@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Rw') }} 
                </div>
                
                <div class="card">
                <a href="{{route('rw.create')}}" class="btn btn-primary float-right"> Add Data </a>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    <table class="table table-bordered" id="e">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Kelurahan</th>
                                    <th>No Rw</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($r_w_ as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kelurahan->nama_kelurahan}}</td>
                                    <td>{{$data->nama_rw}}</td>
                                    <td>
                                        <form action="{{route('rw.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('rw.show',$data->id)}}" class="btn btn-sm btn-success">Show</a> |
                                            <a href="{{route('rw.edit',$data->id)}}" class="btn btn-sm btn-warning">Update</a> |
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
