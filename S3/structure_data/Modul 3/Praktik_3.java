import java.util.Scanner;
class formatBiodata
{ 
    //bagian deklarasi struktur record ----------------------------------
    String nama;

    String alamat;
    int umur;
    char jekel;
    String hobi[] = new String[3];
    float ipk;
}
/**
 * tambahDataDiDepan dan juga penambahan data di tengah
 */
public class Praktik_3 {    

    // size array
    public static int SIZE = 5;

    // panjang data dalam array
    public static int N = 2;

    // Scanner
    public static Scanner masukan = new Scanner(System.in);
 
    //--------------------------------------------------
    //--- Fungsi untuk Menambah Data Di Depan
    //--------------------------------------------------
    public static void tambahDataDiDepan(formatBiodata biodataMahasiswa[]) {
        System.out.println("\nMEMASUKKAN DATA DI DEPAN");
        System.out.println("=======================================");

        //bagian membuat record sementara untuk menampung data baru-------------
        formatBiodata biodataMahasiswaBaru = new formatBiodata();
        int bacaTombol=0;
        
        //bagian entri data baru ke penyimpan sementara-----------------------
        System.out.print("Silakan masukkan nama anda : ");
        biodataMahasiswaBaru.nama = masukan.next();
        System.out.print("Silakan masukkan alamat anda : ");
        biodataMahasiswaBaru.alamat = masukan.next();
        System.out.print("Silakan masukkan umur anda : ");
        biodataMahasiswaBaru.umur = masukan.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        {
            bacaTombol = System.in.read();
        }
        catch(java.io.IOException e)
        {
        }
        biodataMahasiswaBaru.jekel = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0 : ");
        biodataMahasiswaBaru.hobi[0] = masukan.next();
        System.out.print("hobi ke-1 : ");
        biodataMahasiswaBaru.hobi[1] = masukan.next();
        System.out.print("hobi ke-2 : ");
        biodataMahasiswaBaru.hobi[2] = masukan.next();
        System.out.print("Silakan masukkan IPK anda : ");
        biodataMahasiswaBaru.ipk = masukan.nextFloat();
        //bagian menggeser isi larik mulai dari Belakang s/d 0 selangkah ke bawah
        for (int i=N-1; i>= 0; i--) {
            biodataMahasiswa[i+1] = biodataMahasiswa[i];
        }
        //bagian memindahkan data baru ke larik ke-0-----------------------
        biodataMahasiswa[0] = biodataMahasiswaBaru;
        //memperbaharui banyaknya data (N), banyaknya data bertambah satu------
        N++;
    }
 
    //--------------------------------------------------
    //--- Fungsi untuk Menambah Data Di Tengah
    //--------------------------------------------------
    public static void tambahDataDiTengah(formatBiodata biodataMahasiswa[]) {
        System.out.println("\nMEMASUKKAN DATA DI TENGAH (Sesuai Inputan)");
        System.out.println("=======================================");

        //bagian membuat record sementara untuk menampung data baru-------------
        formatBiodata biodataMahasiswaBaru = new formatBiodata();
        int bacaTombol=0;
        
        //bagian entri data baru ke penyimpan sementara-----------------------
        System.out.print("Silakan masukkan nama anda : ");
        biodataMahasiswaBaru.nama = masukan.next();
        System.out.print("Silakan masukkan alamat anda : ");
        biodataMahasiswaBaru.alamat = masukan.next();
        System.out.print("Silakan masukkan umur anda : ");
        biodataMahasiswaBaru.umur = masukan.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        {
            bacaTombol = System.in.read();
        }
        catch(java.io.IOException e)
        {
        }
        biodataMahasiswaBaru.jekel = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0 : ");
        biodataMahasiswaBaru.hobi[0] = masukan.next();
        System.out.print("hobi ke-1 : ");
        biodataMahasiswaBaru.hobi[1] = masukan.next();
        System.out.print("hobi ke-2 : ");
        biodataMahasiswaBaru.hobi[2] = masukan.next();
        System.out.print("Silakan masukkan IPK anda : ");
        biodataMahasiswaBaru.ipk = masukan.nextFloat();
        
        System.out.print("\nAda " + SIZE + " Baris Data");
        System.out.print("\nAnda mau memasukkan data ini ke baris berapa ? ");
        int barisSisipan = masukan.nextInt();
        //bagian menggeser isi larik mulai dari Belakang s/d barisSisipan selangkah ke bawah
        for (int i=N-1; i>= barisSisipan-1; i--) {
            biodataMahasiswa[i+1] = biodataMahasiswa[i];
        }
        //bagian memindahkan data baru ke larik ke-barisSisipan-----------------------
        biodataMahasiswa[barisSisipan-1] = biodataMahasiswaBaru;
        //memperbaharui banyaknya data (N), banyaknya data bertambah satu------
        N++;
    }
 
    //--------------------------------------------------
    //--- Fungsi untuk Menambah Data Di Belakang
    //--------------------------------------------------
    public static void tambahDataDiBelakang(formatBiodata biodataMahasiswa[]) {
        System.out.println("\nMEMASUKKAN DATA DI BELAKANG");
        System.out.println("=======================================");

        //bagian membuat record sementara untuk menampung data baru-------------
        formatBiodata biodataMahasiswaBaru = new formatBiodata();
        int bacaTombol=0;

        //bagian entri data baru ke penyimpan sementara-----------------------
        System.out.print("Silakan masukkan nama anda : ");
        biodataMahasiswaBaru.nama = masukan.next();
        System.out.print("Silakan masukkan alamat anda : ");
        biodataMahasiswaBaru.alamat = masukan.next();
        System.out.print("Silakan masukkan umur anda : ");
        biodataMahasiswaBaru.umur = masukan.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        {
            bacaTombol = System.in.read();
        }
        catch(java.io.IOException e)
        {
        }
        biodataMahasiswaBaru.jekel = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0 : ");
        biodataMahasiswaBaru.hobi[0] = masukan.next();
        System.out.print("hobi ke-1 : ");
        biodataMahasiswaBaru.hobi[1] = masukan.next();
        System.out.print("hobi ke-2 : ");
        biodataMahasiswaBaru.hobi[2] = masukan.next();
        System.out.print("Silakan masukkan IPK anda : ");
        biodataMahasiswaBaru.ipk = masukan.nextFloat();
        
        System.out.print("\nAda " + SIZE + " Baris Data");
        System.out.print("\nAnda mau memasukkan data ini ke baris berapa ? ");

        //bagian menambah data baru ke larik paling belakang
        biodataMahasiswa[SIZE-1] = biodataMahasiswaBaru;
        //memperbaharui banyaknya data (N), banyaknya data bertambah satu------
        N++;
    }

    // tampil data
    public static void tampilData(formatBiodata biodataMahasiswa[], int a) {
        // System.out.println("-------------------------------------------");
        // System.out.println("DATA bERHASIL DIMASUKKAN");
        System.out.println("-------------------------------------------");
        System.out.println("NAMA ALAMAT UMUR JEKEL HOBI1 HOBI2 HOBI3 IPK");
        System.out.println("-------------------------------------------");
        for (int i=0; i<a; i++) { 
            System.out.print (biodataMahasiswa[i].nama + " ");
            System.out.print (biodataMahasiswa[i].alamat + " ");
            System.out.print (biodataMahasiswa[i].umur + " ");
            System.out.print (biodataMahasiswa[i].jekel + " ");
            System.out.print (biodataMahasiswa[i].hobi[0] + " ");
            System.out.print (biodataMahasiswa[i].hobi[1] + " ");
            System.out.print (biodataMahasiswa[i].hobi[2] + " ");
            System.out.println(biodataMahasiswa[i].ipk);
        }
        System.out.println("-------------------------------------------");
    }
 
    public static void main(String[] args) { 
        //bagian deklarasi record berbasis LARIK -----------------------
        formatBiodata
        biodataMahasiswa[] = new formatBiodata[SIZE];
        biodataMahasiswa[0] = new formatBiodata();
        biodataMahasiswa[1] = new formatBiodata();

        // data awal
        biodataMahasiswa[0].nama = "Krisnanto";
        biodataMahasiswa[0].alamat = "Ponorogo";
        biodataMahasiswa[0].umur = 21;
        biodataMahasiswa[0].jekel = 'L';
        biodataMahasiswa[0].hobi[0] = "main";
        biodataMahasiswa[0].hobi[1] = "renang";
        biodataMahasiswa[0].hobi[2] = "baca";
        biodataMahasiswa[0].ipk = 4.0F;

        biodataMahasiswa[1].nama = "Alex_Yuda_";
        biodataMahasiswa[1].alamat = "Ponorogo";
        biodataMahasiswa[1].umur = 20;
        biodataMahasiswa[1].jekel = 'L';
        biodataMahasiswa[1].hobi[0] = "main";
        biodataMahasiswa[1].hobi[1] = "Nulis";
        biodataMahasiswa[1].hobi[2] = "baca";
        biodataMahasiswa[1].ipk = 4.0F;

        System.out.println("DATA AWAL SEBELUM PENAMBAHAN");
        tampilData(biodataMahasiswa, N);
        tambahDataDiDepan(biodataMahasiswa);
        tambahDataDiTengah(biodataMahasiswa);
        tambahDataDiBelakang(biodataMahasiswa);

        System.out.println("\nDATA AWAL SESUDAH PENAMBAHAN \n");
        tampilData(biodataMahasiswa, N);

    }
}