public class Mobil extends Kendaraan {
    
    String jenis;

    Mobil(final String jenis) {
        super(jenis);
    }

    public void bergerak() {
        System.out.println("Mobil sedang bergerak.");
    }

    public static void main(String[] args) {
        Mobil mobil = new Mobil("Mobil");
        String jenis_mobil = mobil.getJenis();
        System.out.println(jenis_mobil);
        mobil.bergerak();
    }
}