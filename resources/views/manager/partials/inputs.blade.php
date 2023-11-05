<div class="inputs">
    <form action="{{ route('manager.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" id="title" required>
        <div class="price">
            <input type="number" name="price" placeholder="Price" id="price" required>
            <input type="number" name="taxes" placeholder="Taxes" id="taxes"required>
            <input type="number" name="ads" placeholder="Ads" id="ads"required>
            <input type="number" name="discount" placeholder="Discount" id="discount"required>
            <small id="total" name="total"></small> <!-- Champ vide pour total -->
        </div>
        <input type="number" name="count" placeholder="Count" id="count"required>
        <input type="text" name="category" placeholder="Category" id="category"required>
        <button id="submit" type="submit">Create</button>
    </form>
</div>


