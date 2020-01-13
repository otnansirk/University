import java.util.Scanner;
class tipePointer
{ 
    int angka;
    String teks;
}
class Praktik_1
{ 
    public static void main(String[] args) {
        tipePointer P;
        P = null;
        System.out.println("Nilai P adalah = " + P);

        // Modifikasi
        if (P == null)
            System.out.println("Pointer P menunjuk ke Null");
        // else
        //     System.out.println("Pointer P mengarah ke tempat lain");
    }
}

// Penjelasan 
// Pointer tidak muncul karena dia menunjuk ke null .
// P = null yang membuat pointer menunjuk ke null