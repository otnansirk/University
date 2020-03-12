public class Mobil {
    private Integer jumlah_roda;
    private String warna_body;
    private String kapasitas_penumpang;
    private String merk;
    private String harga;

    public void setJumlahRoda(Integer data) {
        this.jumlah_roda = data;
    }
    public void setWarnaBody(String data) {
        this.warna_body = data;
    }
    public void setKapasitasPenumpang(String data) {
        this.kapasitas_penumpang = data;
    }
    public void setMerk(String data) {
        this.merk = data;
    }
    public void setHarga(String data) {
        this.harga = data;
    }

    public void get_data() {
        System.out.println("Merk = " + this.merk);
        System.out.println("Jumlah roda = " + this.jumlah_roda);
        System.out.println("Warna body = " + this.warna_body);
        System.out.println("Kapasitas penumpang = " + this.kapasitas_penumpang);
        System.out.println("Harga = " + this.harga);
    }
    
}
