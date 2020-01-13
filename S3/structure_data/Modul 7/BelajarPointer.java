import java.util.Scanner;

class tipePointer
{ 
    String namaKota;
    tipePointer kanan;
}

class BelajarPointer { 
    public static void main(String[] args)
    {
        tipePointer P;
        P = new tipePointer();
        P.namaKota = "Yogyakarta";
        tipePointer Q;
        Q = new tipePointer();
        Q.namaKota = "Klaten";
        tipePointer R;
        R = new tipePointer();
        R.namaKota = "Solo";
        P.kanan = Q;
        Q.kanan = R;
        R.kanan = null;
        System.out.println("Nilai elemen namaKota pointer P,Q dan R adalah :");
        System.out.println("------------------------------------------------");
        System.out.println("Nilai P.namaKota adalah = " + P.namaKota);
        System.out.println("Nilai Q.namaKota adalah = " + Q.namaKota);
        System.out.println("Nilai R.namaKota adalah = " + R.namaKota);
        P.kanan.kanan.namaKota = "Surakarta"; 
        // <--mengakses R.namaKota dari pointer P
        System.out.println("Nilai elemen namaKota pointer P,Q dan R adalah :");
        System.out.println("------------------------------------------------");
        System.out.println("Nilai P.namaKota adalah = " + P.namaKota);
        System.out.println("Nilai Q.namaKota adalah = " + Q.namaKota);
        System.out.println("Nilai R.namaKota adalah = " + R.namaKota);
    }
}