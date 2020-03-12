class Buku {
    String judul;
    int harga;
    int halaman;
    String penulis;
    String penerbit;

    public void setBuku(
        String judul, 
        int harga, 
        int halaman,
        String penulis,
        String penerbit
    ) {
        this.judul = judul;
        this.harga = harga;
        this.halaman = halaman;
        this.penulis = penulis;
        this.penerbit = penerbit;
    }

    public void tampil() {
        System.out.println("Judulbuku :" + judul);
        System.out.println("Harga buku : " + harga);
        System.out.println("Jumlah halaman : " + halaman);
        System.out.println("Penulis : " + penulis);
        System.out.println("Penerbit : " + penerbit);
    }
}