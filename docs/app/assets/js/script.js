const form = document.getElementById('form');
const message = document.getElementById('message');
const data = document.getElementById('data');

// Charger les données
function loadData() {
    fetch('fetch.php')
        .then(response => response.json())
        .then(rows => {
            data.innerHTML = '';
            rows.forEach(r => {
                data.innerHTML += `
                    <tr>
                        <td>${r.nom}</td>
                        <td>${r.email}</td>
                        <td>${r.telephone}</td>
                        <td>${r.created_at}</td>
                    </tr>
                `;
            });
        })
        .catch(() => {
            message.textContent = "Erreur de chargement des données";
            message.className = "error";
        });
}

// Envoi du formulaire
form.addEventListener('submit', function (e) {
    e.preventDefault();

    const fd = new FormData(form);

    if (fd.get('nom').length < 3) {
        message.textContent = "Nom invalide (min 3 caractères)";
        message.className = "error";
        return;
    }

    fetch('insert.php', {
        method: 'POST',
        body: fd
    })
        .then(response => response.json())
        .then(res => {
            message.textContent = res.message;
            message.className = res.status;

            if (res.status === 'success') {
                form.reset();
                loadData();
            }
        })
        .catch(() => {
            message.textContent = "Erreur serveur";
            message.className = "error";
        });
});

// Chargement initial
loadData();
