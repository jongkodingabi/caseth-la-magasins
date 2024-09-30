const searchInput = document.getElementById('search-input');
const searchResults = document.getElementById('search-results');

searchInput.addEventListener('input', function() {
    const query = searchInput.value.trim(); // Menghapus spasi yang tidak perlu

    if (query) {
        fetch(`search.php?search_query=${encodeURIComponent(query)}`)
            .then(response => response.text())
            .then(data => {
                searchResults.innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
    } else {
        searchResults.innerHTML = ''; // Kosongkan hasil pencarian jika input kosong
    }
});
