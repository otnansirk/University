/**
 * Mobil
 */
public class Mobil {

    String plat;
    String warna;
    String manufaktur;
    int kecepatan;

    public void setMoil(String plat, String warna, String manufaktur, int kecepatan) {
        this.plat = plat;
        this.warna = warna;
        this.manufaktur = manufaktur;
        this.kecepatan = kecepatan;
    }

    public void tampil() {
        System.out.println("\n");
        System.out.println("Nomor Plat : " + plat);
        System.out.println("Warna : " + warna);
        System.out.println("Manufaktur : " + manufaktur);
        System.out.println("Kecepatan : " + kecepatan);
    }

    public void akselerasi() {
        System.out.println("ini method akselerasi");
    }

    public void belok() {
        System.out.println("Belok luurr");
    }

    public void rem() {
        System.out.println("Reem gaaannn");
    }
}