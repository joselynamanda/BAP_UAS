<div class="form-group {{ $errors->has('namastatus') ? 'has-error' : ''}}">
    <label for="namastatus" class="control-label">{{ 'Namastatus' }}</label>
    <input class="form-control" name="namastatus" type="text" id="namastatus" value="{{ isset($statustransaksi->namastatus) ? $statustransaksi->namastatus : ''}}" >
    {!! $errors->first('namastatus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idtransaksi') ? 'has-error' : ''}}">
    <label for="idtransaksi" class="control-label">{{ 'Idtransaksi' }}</label>
    <input class="form-control" name="idtransaksi" type="number" id="idtransaksi" value="{{ isset($statustransaksi->idtransaksi) ? $statustransaksi->idtransaksi : ''}}" >
    {!! $errors->first('idtransaksi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
