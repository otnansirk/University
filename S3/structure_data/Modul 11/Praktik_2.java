/**
 * Praktik_2
 */
public class Praktik_2 {

    public static void mengurutkanDataBubble_TeknikTukarHeap() {
     int N = hitungJumlahSimpul();
     simpul A = null;
     simpul B = null;
     simpul bantu = null;
     simpul berhenti = akhir.kanan;
     int nomor;
     System.out.println("Banyaknya simpul = " + hitungJumlahSimpul());
     for (int i = 1; i <= hitungJumlahSimpul() - 1; i++)
     //for (int i=1; i<= 4; i++)
     {
      A = awal;
      B = awal.kanan;
      nomor = 1;
      //proses banding-tukar, khusus simpul pertama dgn sebelahnya
      if (A.nama.compareTo(B.nama) > 0) {
       A.kanan = B.kanan;
       B.kanan = A;
       awal = B;
      }
      //proses banding-tukar, simpul kedua dgn sebelahnya, dst
      nomor++;
      bantu = awal;
      while (bantu.kanan.kanan != berhenti) {
       A = bantu.kanan;
       B = bantu.kanan.kanan;
       if (A.nama.compareTo(B.nama) > 0) {
        //tukarkan simpul A dan simpul B
        A.kanan = B.kanan;
        B.kanan = A;
        bantu.kanan = B;
        if (B == akhir) akhir = A;
       }
       bantu = bantu.kanan;
       nomor++;
      }
      berhenti = bantu.kanan;;
      System.out.println("");
     }
     System.out.println("===PROSES PENGURUTAN BUBBLE SELESAI======");
    }
   }