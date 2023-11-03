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


{{-- serach
 --}}
 <script>
    function searchData(value) {
        // Réinitialisez les résultats de la recherche lorsque l'utilisateur modifie la requête.
        document.getElementById('searchResults').innerHTML = '';
    }

    function searchByTitle() {
        var searchTerm = document.getElementById('searchTerm').value;
        var users = @json($manager);

        var filteredUsers = users.filter(function(user) {
            return user.title.toLowerCase().includes(searchTerm.toLowerCase());
        });

        displayResults(filteredUsers);
    }

    function searchByCategory() {
        var searchTerm = document.getElementById('searchTerm').value;
        var users = @json($manager);

        var filteredUsers = users.filter(function(user) {
            return user.category.toLowerCase().includes(searchTerm.toLowerCase());
        });

        displayResults(filteredUsers);
    }

    function displayResults(users) {
        var tableBody = document.getElementById('tableBody');
        var result = '';
        if (users.length === 0) {
            result = 'Aucun utilisateur trouvé.';
        } else {
            users.forEach(function(user) {
                result += '<tr>';
                result += `<td>${user.id}</td>`;
                result += `<td>${user.title}</td>`;
                result += `<td>${user.price}</td>`;
                result += `<td>${user.taxes}</td>`;
                result += `<td>${user.ads}</td>`;
                result += `<td>${user.discount}</td>`;
                result += `<td>${user.total}</td>`;
                result += `<td>${user.category}</td>`;
                result += `<td><button class="update" data-id="${user.id}">Update</button></td>`;
                result += '<td>';
                result += `<form action="" method="POST">`;
                result += '@csrf';
                result += '@method('DELETE')';
                result += '<button type="submit">Delete</button>';
                result += '</form>';
                result += '</td>';
                result += '</tr>';
            });
        }

        tableBody.innerHTML = result;
    }
</script>
