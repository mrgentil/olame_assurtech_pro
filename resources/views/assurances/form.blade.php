<form action="{{ isset($action) && $action ===  'POST' ?  route('entreprise-assurances.store') :  route('entreprise-assurances.update', $assurance) }}"
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
        <div class="form-group col-md-6">
            <label for="name" class="col-form-label">Nom</label>
            <input type="text" name="name" value="{{ (old('name')) ? old('name') : ((isset($assurance) ? $assurance->name : '')) }}"  class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nom" required="required">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="rccm" class="col-form-label">RCCM</label>
            <input type="text" value="{{ (old('rccm')) ? old('rccm') : ((isset($assurance) ? $assurance->rccm : '')) }}" name="rccm" class="form-control @error('rccm') is-invalid @enderror" id="rccm" placeholder="RCCM" required="required">
            @error('rccm')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="adresse" class="col-form-label">Adresse</label>
            <input type="text" value="{{ (old('adresse')) ? old('adresse') : ((isset($assurance) ? $assurance->adresse : '')) }}" name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" placeholder="Adresse" required="required">
            @error('adresse')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group col-md-6">
            @if(isset($assurance))
                <p>
                    <img src="{{ $assurance->smImage }}" alt="{{ $assurance->name }}" class="img-fluid img-thumbnail">
                </p>
            @endif
            <label for="image" class="col-form-label">Logo</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="abonnement_id" class="col-form-label">Type Abonnement</label>
            <select id="abonnement_id" value="{{ (old('abonnement_id')) ? old('abonnement_id') : ((isset($assurance) ? $assurance->abonnement_id : '')) }}" name="abonnement_id" class="form-control @error('abonnement_id') is-invalid @enderror">
                @foreach ($abonnements as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">{{ isset($action) && $action ===  'POST' ? 'Enregistrer' : 'Modiier' }}</button>
</form>
