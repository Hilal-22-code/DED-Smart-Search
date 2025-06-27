function searchProducts(keyword, category = null, minPrice = null, maxPrice = null) {
    // Inisialisasi query dasar
    let query = `SELECT * FROM produk WHERE nama_produk LIKE '%${keyword}%'`;
    
    // Tambahkan filter kategori jika ada
    if (category) {
        query += ` AND kategori_id = '${category}'`;
    }
    
    // Tambahkan filter harga jika ada
    if (minPrice !== null && maxPrice !== null) {
        query += ` AND harga BETWEEN ${minPrice} AND ${maxPrice}`;
    }
    
    // Untuk contoh, kembalikan query yang dibangun
