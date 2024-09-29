<div class="inputs">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="store">
        <input type="text" wire:model="title" name="title" placeholder="Title" required>
        <div class="price">
            <input type="number" wire:model="price" name="price" placeholder="Price" required>
            <input type="number" wire:model="taxes" name="taxes" placeholder="Taxes" required>
            <input type="number" wire:model="ads" name="ads" placeholder="Ads" required>
            <input type="number" wire:model="discount" name="discount" placeholder="Discount" required>
            <small>Total: {{ $total }}</small> <!-- Calcul automatique du total -->
        </div>
        <input type="number" wire:model="count" name="count" placeholder="Count" required>
        <input type="text" wire:model="category" name="category" placeholder="Category" required>
        <button id="submit" type="submit">Create</button>
    </form>
</div>
