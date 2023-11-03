<div class="inputs">
    <form action="{{ route('manager.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title" id="title" required>
        <div class="price">
            <input type="number" name="price" placeholder="price" id="price" required>
            <input type="number" name="taxes" placeholder="taxes" id="taxes"required>
            <input type="number" name="ads" placeholder="ads" id="ads"required>
            <input type="number" name="discount" placeholder="discount" id="discount"required>
            <small id="total" name="total"></small> <!-- Champ vide pour total -->
        </div>
        <input type="number" name="count" placeholder="count" id="count"required>
        <input type="text" name="category" placeholder="category" id="category"required>
        <button id="submit" type="submit">Create</button>
    </form>
</div>


