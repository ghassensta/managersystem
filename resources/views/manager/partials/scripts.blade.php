<script>
    // Fonction pour calculer le total
    function calculateTotal() {
        // Récupérez les valeurs des champs
        const price = parseFloat(document.getElementById('price').value) || 0;
        const taxes = parseFloat(document.getElementById('taxes').value) || 0;
        const ads = parseFloat(document.getElementById('ads').value) || 0;
        const discount = parseFloat(document.getElementById('discount').value) || 0;

        // Calculez le total
        const total = (price + taxes + ads) - discount;

        // Récupérez l'élément total
        const totalElement = document.getElementById('total');

        // Mettez à jour le texte du total
        totalElement.textContent = total;

        // Changez la couleur de fond en vert si le total est supérieur à 0, sinon en rouge
        if (total > 0) {
            totalElement.style.backgroundColor = 'green';
        } else {
            totalElement.style.backgroundColor = '#a00d02';
        }
    }

    // Ajoutez des écouteurs d'événements pour les champs pertinents
    document.getElementById('price').addEventListener('input', calculateTotal);
    document.getElementById('taxes').addEventListener('input', calculateTotal);
    document.getElementById('ads').addEventListener('input', calculateTotal);
    document.getElementById('discount').addEventListener('input', calculateTotal);

    // Appelez calculateTotal() pour afficher la valeur initiale du total
    calculateTotal();
</script>



{{-- serach--}}

 <script>
    function searchData(value) {
        // Réinitialisez les résultats de la recherche lorsque l'utilisateur modifie la requête.
        document.getElementById('tableBody').innerHTML = '';
    }

    function searchByTitle() {
        var searchTerm = document.getElementById('searchTerm').value;
        var rows = document.querySelectorAll('#tableBody tr');

        rows.forEach(function(row) {
            var title = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
            if (title.includes(searchTerm.toLowerCase())) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
                            }
        });
    }

    function searchByCategory() {
        var searchTerm = document.getElementById('searchTerm').value;
        var rows = document.querySelectorAll('#tableBody tr');

        rows.forEach(function(row) {
            var category = row.querySelector('td:nth-child(8)').textContent.toLowerCase();
            if (category.includes(searchTerm.toLowerCase())) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';


            }
        });
    }

    function displayAll() {
        var rows = document.querySelectorAll('#tableBody tr');
        rows.forEach(function(row) {
            row.style.display = 'table-row';
        });
    }
</script>
