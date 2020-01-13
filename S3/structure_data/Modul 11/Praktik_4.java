/**
 * Praktik_4
 */
public class Praktik_4 {

    public static void cariLinear() {
     if (awal == null) // jika senarai masih kosong
      System.out.print("....MAAF SENARAI KOSONG....");
     else // jika senarai tidak kosong
     {
      Scanner masukan = new Scanner(System.in);
      System.out.print("Silakan masukkan nama yang anda cari : ");
      String NAMACARI = masukan.nextLine();
      boolean statusKetemu = false;
      int i = 0;
      int posisiKetemu = -1;
      simpul bantu;
      bantu = awal;
      while (bantu != null) {
       if (NAMACARI.equals(bantu.nama)) {
        statusKetemu = true;
        posisiKetemu = i;
       }
       bantu = bantu.kanan;
       i++;
      }
      System.out.println("Status Ketemu = " + statusKetemu + " di posisi ke "+posisiKetemu);
      }
     }
    }