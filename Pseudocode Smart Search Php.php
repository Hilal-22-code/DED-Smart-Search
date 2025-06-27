<?php
function searchProducts($keyword, $category = null, $minPrice = null, $maxPrice = null) {
    // Persiapan awal query
    $query = "SELECT * FROM produk WHERE nama_produk LIKE '%" . addslashes($keyword) . "%'";
    
    // Filter berdasarkan kategori jika diberikan
    if (!empty($category)) {
        $query .= " AND kategori_id = '" . addslashes($category) . "'";
    }
    
    // Filter berdasarkan rentang harga jika diberikan
    if (!empty($minPrice) && !empty($maxPrice)) {
        $query .= " AND harga BETWEEN " . floatval($minPrice) . " AND " . floatval($maxPrice);
    }
    
    // Contoh: Jalankan query dan ambil hasil (menggunakan PDO/MySQLi misalnya)
    // $results = executeQuery($query);
    // return $results;
    
    // Untuk contoh, kembalikan query yang dibangun
    return $query;
}

// Contoh penggunaan
echo searchProducts("laptop", "Elektronik", 3000000, 10000000);
?>

