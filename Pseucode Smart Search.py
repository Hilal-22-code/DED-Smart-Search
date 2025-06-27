def search_products(keyword, category=None, min_price=None, max_price=None):
    # Inisialisasi query dasar
    query = f"SELECT * FROM produk WHERE nama_produk LIKE '%{keyword}%'"
    
    # Tambahkan filter kategori jika ada
    if category:
        query += f" AND kategori_id = '{category}'"
    
    # Tambahkan filter harga jika ada
    if min_price is not None and max_price is not None:
        query += f" AND harga BETWEEN {min_price} AND {max_price}"
    
    # Untuk contoh, kembalikan query yang dibangun
    return query

# Contoh penggunaan
print(search_products("smartphone", "Elektronik", 2000000, 8000000))
