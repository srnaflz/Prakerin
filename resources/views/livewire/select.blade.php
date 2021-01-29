<div>
    <div class="form-group">
        <label for="state" >Provinsi</label>

            <select wire:model="selectedState" class="form-control">
                <option value="" selected>--- Pilih Provinsi ---</option>
                @foreach($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_provinsi }}</option>
                @endforeach
            </select>
        
    </div>

    @if (!is_null($selectedState))
        <div class="form-group">
            <label for="city">Kota</label>
                <select wire:model="selectedState2" class="form-control" name="id_kota">
                    <option value="" selected>--- Pilih Kota ---</option>
                    @foreach($kota as $data2)
                        <option value="{{ $data2->id }}">{{ $data2->nama_kota }}</option>
                    @endforeach
                </select>
        </div>
    @endif

    @if (!is_null($selectedState2))
        <div class="form-group">
            <label for="">Kecamatan</label>
                <select  wire:model="selectedState3" class="form-control" name="id_kecamatan">
                    <option value="" selected>--- Pilih Kecamatan ---</option>
                    @foreach($kecamatan as $data3)
                        <option value="{{ $data3->id }}">{{ $data3->nama_kecamatan }}</option>
                    @endforeach
                </select>
        </div>
    @endif
    @if (!is_null($selectedState3))
        <div class="form-group">
            <label for="">Kelurahan</label>
                <select  wire:model="selectedState4" class="form-control" name="id_kelurahan">
                    <option value="" selected>--- Pilih Kelurahan ---</option>
                    @foreach($kelurahan as $data4)
                        <option value="{{ $data4->id }}">{{ $data4->nama_kelurahan }}</option>
                    @endforeach
                </select>
        </div>
    @endif
    @if (!is_null($selectedState4))
        <div class="form-group">
            <label for="">Rw</label>
                <select wire:model="selectedRw" class="form-control" name="id_rw">
                    <option value="" selected>--- Pilih RW ---</option>
                    @foreach($r_w_ as $data5)
                        <option value="{{ $data5->id }}">{{ $data5->nama_rw }}</option>
                    @endforeach
                </select>
        </div>
    @endif

</div>

