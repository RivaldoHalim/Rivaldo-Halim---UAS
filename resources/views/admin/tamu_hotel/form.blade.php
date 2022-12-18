<div class="form-group {{ $errors->has('id_tamu') ? 'has-error' : ''}}">
    <label for="id_tamu" class="control-label">{{ 'Id Tamu' }}</label>
    <input class="form-control" name="id_tamu" type="number" id="id_tamu" value="{{ isset($tamu_hotel->id_tamu) ? $tamu_hotel->id_tamu : ''}}" >
    {!! $errors->first('id_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_tamu') ? 'has-error' : ''}}">
    <label for="nama_tamu" class="control-label">{{ 'Nama Tamu' }}</label>
    <input class="form-control" name="nama_tamu" type="text" id="nama_tamu" value="{{ isset($tamu_hotel->nama_tamu) ? $tamu_hotel->nama_tamu : ''}}" >
    {!! $errors->first('nama_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat_tamu') ? 'has-error' : ''}}">
    <label for="alamat_tamu" class="control-label">{{ 'Alamat Tamu' }}</label>
    <input class="form-control" name="alamat_tamu" type="text" id="alamat_tamu" value="{{ isset($tamu_hotel->alamat_tamu) ? $tamu_hotel->alamat_tamu : ''}}" >
    {!! $errors->first('alamat_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tempat_tinggal_tamu') ? 'has-error' : ''}}">
    <label for="tempat_tinggal_tamu" class="control-label">{{ 'Tempat Tinggal Tamu' }}</label>
    <input class="form-control" name="tempat_tinggal_tamu" type="text" id="tempat_tinggal_tamu" value="{{ isset($tamu_hotel->tempat_tinggal_tamu) ? $tamu_hotel->tempat_tinggal_tamu : ''}}" >
    {!! $errors->first('tempat_tinggal_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : ''}}">
    <label for="no_telp" class="control-label">{{ 'No Telp' }}</label>
    <input class="form-control" name="no_telp" type="text" id="no_telp" value="{{ isset($tamu_hotel->no_telp) ? $tamu_hotel->no_telp : ''}}" >
    {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('no_identitas_tamu') ? 'has-error' : ''}}">
    <label for="no_identitas_tamu" class="control-label">{{ 'No Identitas Tamu' }}</label>
    <input class="form-control" name="no_identitas_tamu" type="text" id="no_identitas_tamu" value="{{ isset($tamu_hotel->no_identitas_tamu) ? $tamu_hotel->no_identitas_tamu : ''}}" >
    {!! $errors->first('no_identitas_tamu', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
