// program_tumpukan
public class Praktik_1 {
    public static int N = 5;
    public static int atas = -1;

    public static void PUSH(String tumpukan[], String data) {
     if (atas == N - 1) //jika tumpukan penuh
     {
      System.out.println("maap, tumpukan penuh, PUSH " + data +
       " tidak dapat dilakukan");
     } else //jika tumpukan tidak penuh
     {
      atas = atas + 1;
      tumpukan[atas] = data;
      System.out.println("PUSH " + data + " berhasil..");
     }
    }

    public static String POP(String tumpukan[]) {
     String hasil;
     if (atas < 0) //jika tumpukan kosong
     {
      hasil = "TUMPUKAN KOSONG, POP GAGAL DILAKUKAN";
     } else //jika tumpukan tidak kosong
     {
      hasil = tumpukan[atas];
      atas = atas - 1;
     }
     return (hasil);
    }

    public static void lihatTumpukan(String tumpukan[]) {
     System.out.println("");
     System.out.println("--TUMPUKAN:-");
     for (int i = atas; i >= 0; i--) {
      System.out.println(tumpukan[i]);
     }
     System.out.println("--akhir tumpukan-");
     System.out.println("");
    }
    public static void main(String[] args) {
     String tumpukan[] = new String[10];
        push (tumpukan, "Buku A");
        push (tumpukan, "Buku B");
        push (tumpukan, "Buku C");
        push (tumpukan, "Buku D");
        bacaTumpukan(tumpukan);
    }
   }