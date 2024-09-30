document.getElementById('search-form').addEventListener('submit', function(event) {
    var searchInput = document.getElementById('search-input').value.trim();
    if (searchInput === '') {
        alert('Please enter a search term.');
        event.preventDefault(); // Mencegah form dikirim jika input kosong
    }
});
