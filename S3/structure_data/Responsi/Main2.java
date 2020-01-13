/**
 * Main
 */

class format_barang
{ 
    //bagian deklarasi struktur record ----------------------------------
    String nama;
    int harga;
    int stok;
    int subTotal;
}
 
public class Main2 {

    public static int JUMLAH_BARANG = 9;

    public static void main(String[] args) {
        fungsi_utama();
    }


    /** */
    public static void fungsi_utama() {
        
        format_barang
        barang[] = new format_barang[JUMLAH_BARANG];
        barang[0] = new format_barang();
        barang[1] = new format_barang();
        barang[2] = new format_barang();
        barang[3] = new format_barang();
        barang[4] = new format_barang();
        barang[5] = new format_barang();
        barang[6] = new format_barang();
        barang[7] = new format_barang();
        barang[8] = new format_barang();

        // data awal
        barang[0].nama = "Amplop Folio Coklat";
        barang[0].stok = 3;
        barang[0].harga = 1000;
        barang[0].subTotal = 0;

        barang[1].nama = "Ballpoint 4 warna";
        barang[1].stok = 3;
        barang[1].harga = 2500;
        barang[1].subTotal = 0;
        
        barang[2].nama = "Ballpoint faster C-600";
        barang[2].stok = 4;
        barang[2].harga = 2500;
        barang[2].subTotal = 0;
        
        barang[3].nama = "Batu Baterai - A2 - Alkaline";
        barang[3].stok = 7;
        barang[3].harga = 10600;
        barang[3].subTotal = 0;

        barang[4].nama = "Binder Clip - 107";
        barang[4].stok = 1;
        barang[4].harga = 2500;
        barang[4].subTotal = 0;
        
        barang[5].nama = "Buku Tulis Isi 42 Big Boss";
        barang[5].stok = 3;
        barang[5].harga = 3000;
        barang[5].subTotal = 0;
        
        barang[6].nama = "CD-R Blank - BenQ";
        barang[6].stok = 7;
        barang[6].harga = 2000;
        barang[6].subTotal = 0;
        
        barang[7].nama = "Cutter Besar L-500";
        barang[7].stok = 1;
        barang[7].harga = 11500;
        barang[7].subTotal = 0;
        
        barang[8].nama = "Cutter Kecil K-200";
        barang[8].stok = 3;
        barang[8].harga = 3700;
        barang[8].subTotal = 0;

        fungsi_1(barang);
        fungsi_2(barang);
    }

    /**
     * 
     * @param barang
     * @return format_barang[]
     */
    public static format_barang[] fungsi_1(format_barang barang[]) {
        System.out.println("DATA FUNGSI 1");

        System.out.println("===============================================================================");
        System.out.println("No  Nama Barang                       Banyaknya    Harga Eceran    Sub Total");
        System.out.println("===============================================================================");
        
        for (int i = 0; i < barang.length; i++) {
            // System.out.print(i+1 + "   ");
            System.out.printlf("%s", 11);
            // System.out.print(barang[i].nama + "             ");
            // System.out.print(barang[i].stok + "               ");
            // System.out.print(barang[i].harga + "               ");
            // System.out.print(barang[i].subTotal);
            System.out.println();

            int Total = barang[i].harga * barang[i].stok; 
            barang[i].subTotal = Total;
        }
        return barang;
        
    }

    /**
     * @param barang
     * return void
     */
    public static void fungsi_2(format_barang barang[]) {

        System.out.println("");
        System.out.println("DATA FUNGSI 2");

        System.out.println("===============================================================================");
        System.out.println("No  Nama Barang                      Banyaknya   Harga Eceran  Sub Total");
        System.out.println("===============================================================================");

        for (int i = 0; i < barang.length; i++) {
            if (barang[i].subTotal >= 15000) {
                System.out.print(i+1 + "   ");
                System.out.print(barang[i].nama + "       ");
                System.out.print(barang[i].stok + "          ");
                System.out.print(barang[i].harga + "          ");
                System.out.print(barang[i].subTotal);
                System.out.println();
            }
        }
    }
}