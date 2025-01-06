<form wire:submit.prevent="submit">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label class="text-black" for="fname">First name</label>
                <input type="text" class="form-control" id="fname" wire:model="first_name">
                @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label class="text-black" for="lname">Last name</label>
                <input type="text" class="form-control" id="lname" wire:model="last_name">
                @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="text-black" for="email">Email address</label>
        <input type="email" class="form-control" id="email" wire:model="email">
        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-5">
        <label class="text-black" for="message">Message</label>
        <textarea class="form-control" id="message" wire:model="message" cols="30" rows="5"></textarea>
        @error('message') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>

@if(session()->has('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
