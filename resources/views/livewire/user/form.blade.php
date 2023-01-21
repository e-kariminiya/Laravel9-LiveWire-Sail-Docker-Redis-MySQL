<form wire:submit.prevent="save" class="col-3 p-3">
    <input type="text" class="form-control" wire:model="name" placeholder="name">
    @error('name') <span class="">{{ $message }}</span> @enderror
    <br>
    <input type="text" class="form-control" wire:model="email" placeholder="email">
    @error('email') <span class="is-invalid">{{ $message }}</span> @enderror
    <br>
    <input type="password" class="form-control" wire:model="password" placeholder="password">
    @error('password') <span class="is-invalid">{{ $message }}</span> @enderror<br>
    <div wire:loading.delay.shorter>Loading...</div>
    <br>
    <button type="submit" class="btn btn-outline-success" wire:loading.attr="disabled">Save</button>
</form>
