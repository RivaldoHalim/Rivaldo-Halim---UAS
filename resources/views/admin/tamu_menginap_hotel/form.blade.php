<div class="form-group {{ $errors->has('deposit_tamu') ? 'has-error' : ''}}">
    <label for="deposit_tamu" class="control-label">{{ 'Deposit Tamu' }}</label>
    <input class="form-control" name="deposit_tamu" type="text" id="deposit_tamu" value="{{ isset($tamu_menginap_hotel->deposit_tamu) ? $tamu_menginap_hotel->deposit_tamu : ''}}" >
    {!! $errors->first('deposit_tamu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_menginap') ? 'has-error' : ''}}">
    <label for="tanggal_menginap" class="control-label">{{ 'Tanggal Menginap' }}</label>
    <input class="form-control" name="tanggal_menginap" type="datetime-local" id="tanggal_menginap" value="{{ isset($tamu_menginap_hotel->tanggal_menginap) ? $tamu_menginap_hotel->tanggal_menginap : ''}}" >
    {!! $errors->first('tanggal_menginap', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
