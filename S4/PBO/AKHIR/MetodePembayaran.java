import java.util.Scanner;

public class MetodePembayaran {
    // tampil data
    public static void tampilData(Barang barang[]) {
        System.out.println("LIST BARANG");
        System.out.println("-------------------------------------------");
        System.out.println("NO NAMA HARGA");
        System.out.println("-------------------------------------------");

        for (int i=0; i< barang.length; i++) { 
            System.out.print (i+1 + " ");
            System.out.print (barang[i].nama + " ");
            System.out.println (barang[i].harga + " ");
        }
        System.out.println("-------------------------------------------");
    }

    public static void proses(Barang barang[]) {
        
        Scanner keyboard = new Scanner(System.in);
        System.out.println("PILIHAN");
        System.out.println("1. Beli");
        System.out.println("2. Cek stok");
        System.out.println("MASUKKAN PILIHAN");
        int pilihan = keyboard.nextInt();
        tampilData(barang);
        if (pilihan == 1) {
            System.out.println("BELI BARANG");
            System.out.println("PILIH BARANG SESUAI NOMOR URUT");
            int harga = barang[keyboard.nextInt()-1].harga;
            System.out.println("HARGA BARANG ADALAH "+ harga);

            System.out.println("MASUKKAN NOMINAL PEMBAYARAN");
            int bayar = keyboard.nextInt();
            
            int sisa = bayar - harga;
            if (sisa < 0) {
                System.out.println();
                System.out.println("PEMBAYARAN KURANG. ULANGI");
                proses(barang);
            } else {
                System.out.println();
                System.out.println("TERIMAKASIH SUDAH MEMBELI");
                System.out.println("SISA UANG "+ sisa);
            }

        } 

        if (pilihan == 2) {
            System.out.println("CHECK STOK BARANG");
            System.out.println("PILIH BARANG SESUAI NOMOR URUT");
    
            int stok = barang[keyboard.nextInt()-1].stok;
            System.out.print("STOK BARANG ADALAH "+ stok);
            System.out.println();            
        }

    }
    
    public static void main(String[] args) {
        Barang
        barang[] = new Barang[2];

        barang[0] = new Barang();
        barang[0].nama = "Baju";
        barang[0].stok = 12;
        barang[0].harga = 60000;

        barang[1] = new Barang();
        barang[1].nama = "Celana";
        barang[1].stok = 3;
        barang[1].harga = 89000;

        proses(barang);

    }
}