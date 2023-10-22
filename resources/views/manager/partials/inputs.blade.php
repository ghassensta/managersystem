<div class="inputs">
    <form action="{{ route('manager.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title" id="title">
        <div class="price">
            <input type="number" name="price" placeholder="price" id="price">
            <input type="number" name="taxes" placeholder="taxes" id="taxes">
            <input type="number" name="ads" placeholder="ads" id="ads">
            <input type="number" name="discount" placeholder="discount" id="discount">
            <small id="total" name="total"></small> <!-- Champ vide pour total -->
        </div>
        <input type="number" name="count" placeholder="count" id="count">
        <input type="text" name="category" placeholder="category" id="category">
        <button id="submit" type="submit">Create</button>
    </form>
</div>

<script>
    // Fonction pour calculer le total
    function calculateTotal() {
        // Récupérez les valeurs des champs
        const price = parseFloat(document.getElementById('price').value) || 0;
        const taxes = parseFloat(document.getElementById('taxes').value) || 0;
        const ads = parseFloat(document.getElementById('ads').value) || 0;
        const discount = parseFloat(document.getElementById('discount').value) || 0;

        // Calculez le total
        const total = price + taxes + ads - discount;

        // Affichez le total
        document.getElementById('total').textContent = total;
    }

    // Ajoutez des écouteurs d'événements pour les champs pertinents
    document.getElementById('price').addEventListener('input', calculateTotal);
    document.getElementById('taxes').addEventListener('input', calculateTotal);
    document.getElementById('ads').addEventListener('input', calculateTotal);
    document.getElementById('discount').addEventListener('input', calculateTotal);

    // Appelez calculateTotal() pour afficher la valeur initiale du total
    calculateTotal();
</script>
