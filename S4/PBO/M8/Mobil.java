public class Mobil {
    protected int kecmaks;
    protected String namaken;

    public Mobil() {
        System.out.println("konstruktor mobil");
    }

    public Mobil(int kecmaks) {
        this.kecmaks = kecmaks;
        System.out.println("Kecepatan Maksimal Mobil = " + kecmaks);
    }

    Mobil(int kecmaks, String namaken) {
        this.kecmaks = kecmaks;
        this.namaken = namaken;
    }

    public void PrintInfoMobil() {
        System.out.println("kecepatan maksimal:" + kecmaks);
        System.out.println("Nama Kendaraan:" + namaken);
    }
}