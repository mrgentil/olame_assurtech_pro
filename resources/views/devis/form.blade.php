<form action="{{ isset($action) && $action ===  'POST' ?  route('devis.store') :  route('devis.update', $devis) }}"
      enctype="multipart/form-data" method="POST">
    @csrf
    @if(isset($action) && $action ===  'PUT')
        <input type="hidden" name="_method" value="PUT">
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="assurance" class="col-form-label">Nom d'Assurance</label>
            <input type="text" name="assurance" value="{{ (old('name')) ? old('assurance') : ((isset($devis) ? $devis->assurance : '')) }}"  class="form-control @error('assurance') is-invalid @enderror" id="assurance" placeholder="Nom d'Assurance" required="required">
            @error('assurance')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">{{ isset($action) && $action ===  'POST' ? 'Enregistrer' : 'Modiier' }}</button>
</form>
