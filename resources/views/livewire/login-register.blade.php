<form action="{{route('login')}}" method="post">

    <div class="form-group mb-3">
        <label for="email">Adresse Email</label>
        <input wire:model="email"  class="form-control" type="email"  required="required" placeholder="Votre Email">
        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <label for="password">Mot de passe</label>
        <input wire:model="password" class="form-control" type="password" required="" id="password" placeholder="Votre mot de passe">
        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group mb-3">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
        </div>
    </div>

    <div class="form-group mb-0 text-center">

        <button class="btn btn-primary btn-block" wire:click.prevent="login"> Se connecter </button>
    </div>

</form>
