<form action="{{ isset($action) && $action ===  'POST' ?  route('admin_regulateurs.store') :  route('admin_regulateurs.update', $admin) }}"
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
            <input type="text" name="name" value="{{ (old('name')) ? old('name') : ((isset($admin) ? $admin->name : '')) }}"  class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nom" required="required">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="firstName" class="col-form-label">Post Nom</label>
            <input type="text" value="{{ (old('firstName')) ? old('firstName') : ((isset($admin) ? $admin->firstName : '')) }}" name="firstName" class="form-control @error('firstName') is-invalid @enderror" id="firstName" placeholder="Post nom" required="required">
            @error('firstName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="lastName" class="col-form-label">Prénom</label>
            <input type="text" value="{{ (old('lastName')) ? old('lastName') : ((isset($admin) ? $admin->lastName : '')) }}" name="lastName" class="form-control @error('lastName') is-invalid @enderror" id="lastName" placeholder="Prénom" required="required">
            @error('lastName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="adress" class="col-form-label">Adresse</label>
            <input type="text" value="{{ (old('adress')) ? old('adress') : ((isset($admin) ? $admin->adress : '')) }}" name="adress" class="form-control @error('adress') is-invalid @enderror" id="adress" placeholder="Adresse">
            @error('adress')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="phone" class="col-form-label">Téléphone</label>
            <input type="tel" value="{{ (old('phone')) ? old('phone') : ((isset($admin) ? $admin->phoneNumber : '')) }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Téléphone" required="required">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="genre" class="col-form-label">Genre</label>
            <input type="text" value="{{ (old('genre')) ? old('genre') : ((isset($admin) ? $admin->genre : '')) }}" name="genre" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="Genre" required="required">
            @error('genre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" value="{{ (old('email')) ? old('email') : ((isset($admin) ? $admin->email : '')) }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required="required">
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
    <div class="form-row">
        <div class="form-group col-md-6">
            @if(isset($admins))
                <p>
                    <img src="{{ $admin->smImage }}" alt="{{ $admin->name }}" class="img-fluid img-thumbnail">
                </p>
            @endif
            <label for="image" class="col-form-label">Avatar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group col-md-6">
            <label for="permission_id" class="col-form-label">Role</label>
            <select id="permission_id" value="{{ (old('permission_id')) ? old('permission_id') : ((isset($admin) ? $admin->permission_id : '')) }}" name="permission_id" class="form-control @error('permission_id') is-invalid @enderror">
                @foreach ($permissions as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group col-md-12">
        <label for="regulateur_entreprise_id" class="col-form-label">Entreprise</label>
        <select id="regulateur_entreprise_id"  value="{{ (old('regulateur_entreprise_id')) ? old('regulateur_entreprise_id') : ((isset($admin) ? $admin->regulateur_entreprise_id : '')) }}" name="regulateur_entreprise_id" class="form-control select2-results__option @error('regulateur_entreprise_id') is-invalid @enderror">
            @foreach ($entreprises as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">{{ isset($action) && $action ===  'POST' ? 'Enregistrer' : 'Modiier' }}</button>
</form>
