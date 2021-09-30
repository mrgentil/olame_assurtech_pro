<form action="{{ isset($action) && $action ===  'POST' ?  route('entreprise-regulateurs.store') :  route('entreprise-regulateurs.update', $regular) }}"
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
            <input type="text" name="name" value="{{ (old('name')) ? old('name') : ((isset($regular) ? $regular->name : '')) }}"  class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nom" required="required">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            @if(isset($regulars))
                <p>
                    <img src="{{ $regular->smImage }}" alt="{{ $regular->name }}" class="img-fluid img-thumbnail">
                </p>
            @endif
            <label for="image" class="col-form-label">Logo</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">{{ isset($action) && $action ===  'POST' ? 'Enregistrer' : 'Modiier' }}</button>
</form>
