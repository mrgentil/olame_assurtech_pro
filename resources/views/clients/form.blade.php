<form action="{{ isset($action) && $action ===  'POST' ?  route('clients.store') :  route('clients.update', $client) }}"
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
            <input type="text" name="name" value="{{ (old('name')) ? old('name') : ((isset($client) ? $client->name : '')) }}"  class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nom" required="required">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="rccm" class="col-form-label">RCCM</label>
            <input type="text" value="{{ (old('rccm')) ? old('rccm') : ((isset($client) ? $client->rccm : '')) }}" name="rccm" class="form-control @error('rccm') is-invalid @enderror" id="rccm" placeholder="RCCM" required="required">
            @error('rccm')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="secteur_activity" class="col-form-label">Secteur d'Activité</label>
            <input type="text" value="{{ (old('secteur_activity')) ? old('secteur_activity') : ((isset($client) ? $client->secteur_activity : '')) }}" name="secteur_activity" class="form-control @error('secteur_activity') is-invalid @enderror" id="secteur_activity" placeholder="Secteur d'Activité" required="required">
            @error('secteur_activity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="prime" class="col-form-label">Prime</label>
            <input type="text" value="{{ (old('prime')) ? old('prime') : ((isset($client) ? $client->prime : '')) }}" name="prime" class="form-control @error('prime') is-invalid @enderror" id="prime" placeholder="Prime" required="required">
            @error('prime')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="assurance" class="col-form-label">Type Assurance</label>
            <input type="text" value="{{ (old('assurance')) ? old('assurance') : ((isset($client) ? $client->assurance : '')) }}" name="assurance" class="form-control @error('assurance') is-invalid @enderror" id="assurance" placeholder="Assurance" required="required">
            @error('assurance')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="province" class="col-form-label">Province</label>
            <input type="text" value="{{ (old('province')) ? old('province') : ((isset($client) ? $client->province : '')) }}" name="province" class="form-control @error('province') is-invalid @enderror" id="province" placeholder="Province" required="required">
            @error('province')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            @if(isset($client))
                <p>
                    <img src="{{ $client->smImage }}" alt="{{ $client->name }}" class="img-fluid img-thumbnail">
                </p>
            @endif
            <label for="image" class="col-form-label">Logo</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group col-md-6">
            <label for="branche_assurance_id" class="col-form-label">Branche d'Assurance</label>
            <select id="branche_assurance_id" value="{{ (old('branche_assurance_id')) ? old('branche_assurance_id') : ((isset($client) ? $client->branche_assurance_id : '')) }}" name="branche_assurance_id" class="form-control @error('branche_assurance_id') is-invalid @enderror">
                @foreach ($branches as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="adress" class="col-form-label">Adresse</label>
            <input type="text" value="{{ (old('adress')) ? old('adress') : ((isset($client) ? $client->adress : '')) }}" name="adress" class="form-control @error('adress') is-invalid @enderror" id="adress" placeholder="Adresse" required="required">
            @error('adress')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="permission_id" class="col-form-label">Role</label>
            <select id="permission_id" value="{{ (old('permission_id')) ? old('permission_id') : ((isset($client) ? $client->permission_id : '')) }}" name="permission_id" class="form-control @error('permission_id') is-invalid @enderror">
                @foreach ($permissions as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" value="{{ (old('email')) ? old('email') : ((isset($client) ? $client->email : '')) }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required="required">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="password" class="col-form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password" id="password" placeholder="Password" required="required">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">{{ isset($action) && $action ===  'POST' ? 'Enregistrer' : 'Modiier' }}</button>
</form>
