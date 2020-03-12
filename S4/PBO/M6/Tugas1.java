/**
 * Tugas1
 */
public class Tugas1 {
    private String judul;
    private int harga;
    private int halaman;
    private String penulis;
    private String penerbit;

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