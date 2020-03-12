/**
 * ObyekMobil
 */
public class ObyekMobil {

    public static void main(String[] args) {
        Mobil A = new Mobil();
        A.setMoil("AB 3313 SY", "Biru", "Mitsubishi", 50);
        A.tampil();
        A.rem();
        A.akselerasi();
        A.belok();

        Mobil B = new Mobil();
        B.setMoil("AB 1234 AT", "Merah", "Toyota", 100);
        B.tampil();
        B.akselerasi();
        B.belok();
        B.rem();
    }
}