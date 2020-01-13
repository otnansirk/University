/**
 * Praktik_3
 */
public class Praktik_3 {

    public static void mengurutkanDataBubble_TeknikTukarHeap() {
        int N = hitungJumlahSimpul();
        simpul bantu = awal;
        System.out.println("Banyaknya simpul = " + hitungJumlahSimpul());
        for (int i = 1; i <= hitungJumlahSimpul(); i++) {
         //khusus menguji simpul pertama dgn sebelahnya
         if (awal.nama.compareTo(awal.kanan.nama) > 0) {
          bantu = awal.kanan;
          awal.kanan = bantu.kanan;
          bantu.kanan.kiri = awal;
          bantu.kanan = awal;
          bantu.kiri = null;
          awal.kiri = bantu;
          awal = bantu;
         }
         //khusus menguji simpul kedua dgn sebelahnya, simpul ketiga dgn
        //  sebelahnya, dst, bantu = awal;
         while (bantu.kanan != akhir) {
          simpul A = bantu.kanan;
          simpul B = bantu.kanan.kanan;
          if (A.nama.compareTo(B.nama) > 0) {
           //tukarkan simpul A dan simpul B
           A.kanan = B.kanan;
           if (B != akhir) A.kanan.kiri = A;
           B.kanan.kiri = A;
           B.kanan = A;
           A.kiri = B;
           bantu.kanan = B;
           B.kiri = bantu;
           if (B == akhir) akhir = A;
          }
          bantu = bantu.kanan;
         }
         System.out.println("");
        }
        System.out.println("===PROSES PENGURUTAN BUBBLE SELESAI=====");
       }
}