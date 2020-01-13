import java.util.Scanner;
class tipePointer
{ 
    int angka;
    String teks;
}
class Praktik_2_mod
{ 
    public static void main(String[] args) {
        tipePointer P;
        P = new tipePointer();
        P.angka = 100;
        P.teks = "Halo";
        tipePointer Q = new tipePointer();
        Q.angka = 200;
        Q.teks = "Akakom";
        System.out.println("Nilai elemen P dan Q adalah :");
        System.out.println("-----------------------------");
        System.out.println("Nilai P.angka adalah = " + P.angka);
        System.out.println("Nilai P.teks adalah = " + P.teks);
        System.out.println("Nilai Q.angka adalah = " + Q.angka);
        System.out.println("Nilai Q.teks adalah = " + Q.teks);
        tipePointer R;
        R = P;
        System.out.println("Nilai elemen R adalah :");
        System.out.println("------------------------");
        System.out.println("Nilai R.angka adalah = " + R.angka);
        System.out.println("Nilai R.teks adalah = " + R.teks);
        R = Q;
        System.out.println("Nilai elemen R saat ini adalah :");
        System.out.println("--------------------------------");
        System.out.println("Nilai R.angka adalah = " + R.angka);
        System.out.println("Nilai R.teks adalah = " + R.teks);
    }
}