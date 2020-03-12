class ObyekBuku {
    public static void main(String[] args) {
        Buku buku1 = new Buku();
        buku1.setBuku("PBO", 75000, 200);
        buku1.tampil();

        Buku buku2 = new Buku();
        buku2.setBuku("Masak", 50000, 400);
        buku2.tampil();

        Buku buku3 = new Buku();
        buku3.setBuku("Ayam Ternak", 500000, 500);
        buku3.tampil();

    }
}