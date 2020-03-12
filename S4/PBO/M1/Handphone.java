/**
 * Handphone
 */
public class Handphone {

    String merk;
    int harga;

    public void setHP(String merk, int harga) {
        this.merk = merk;
        this.harga = harga;
    }

    public void tampil() { 
        System.out.println("\n");
        System.out.println("Merek Hp : " + merk);
        System.out.println("Harga Hp : " + harga);
    }
}