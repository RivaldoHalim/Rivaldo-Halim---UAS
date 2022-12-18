<div class="form-group {{ $errors->has('no_kamar_tamu') ? 'has-error' : ''}}">
    <label for="no_kamar_tamu" class="control-label">{{ 'No Kamar Tamu' }}</label>
    <input class="form-control" name="no_kamar_tamu" type="number" id="no_kamar_tamu" value="{{ isset($kamar_tamu->no_kamar_tamu) ? $kamar_tamu->no_kamar_tamu : ''}}" >
    {!! $errors->first('no_kamar_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jenis_kamar') ? 'has-error' : ''}}">
    <label for="jenis_kamar" class="control-label">{{ 'Jenis Kamar' }}</label>
    <input class="form-control" name="jenis_kamar" type="text" id="jenis_kamar" value="{{ isset($kamar_tamu->jenis_kamar) ? $kamar_tamu->jenis_kamar : ''}}" >
    {!! $errors->first('jenis_kamar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('harga_kamar') ? 'has-error' : ''}}">
    <label for="harga_kamar" class="control-label">{{ 'Harga Kamar' }}</label>
    <input class="form-control" name="harga_kamar" type="number" id="harga_kamar" value="{{ isset($kamar_tamu->harga_kamar) ? $kamar_tamu->harga_kamar : ''}}" >
    {!! $errors->first('harga_kamar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <label for="keterangan" class="control-label">{{ 'Keterangan' }}</label>
    <textarea class="form-control" rows="5" name="keterangan" type="textarea" id="keterangan" >{{ isset($kamar_tamu->keterangan) ? $kamar_tamu->keterangan : ''}}</textarea>
    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
