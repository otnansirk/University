import java.util.Scanner;
class Praktik_1
{ //bagian deklarasi struktur record ----------------------------------
    String nama;
    String alamat;
    int umur;
    char jekel;
    String hobi[] = new String[3];
    float ipk;
    simpul kanan;
}


class singleLinkedList
{
public static simpul awal;
public static simpul akhir;
public static void inisialisasiSenaraiKosong()
{ 
    // .......
}
public static void tambahDepan()
{
    // .........
}
public static void tambahBelakang()
{
    // ........
}
public static void cetakSenarai()
{
    // .........
}

public static int hitungJumlahSimpul() { 
 
    int N = 0;
    simpul bantu;
    bantu = awal;
    
    while (bantu!=null)
    { 
        N++;
        bantu = bantu.kanan;
    }

    return(N);
}

public static void tambahTengah()
{
    Scanner masukan = new Scanner(System.in);
    System.out.println("Tentukan Lokasi Penambahan Data");
    int LOKASI = masukan.nextInt();
    int jumlahSimpulYangAda = hitungJumlahSimpul();
    
    if (LOKASI==1)
        System.out.println("Lakukan penambahan di depan");
    else if (LOKASI > jumlahSimpulYangAda)
        System.out.println("Lakukan penambahan di belakang");
    else
    {
        //------------bagian entri data dari keyboard--------------
        String NAMA;
        String ALAMAT;
        int UMUR;
        char JEKEL;
        String HOBI[] = new String[3];
        float IPK;
        //Scanner masukan = new Scanner(System.in);
        int bacaTombol=0;
        System.out.println("TAMBAH TENGAH : ");
        System.out.print("Silakan masukkan nama anda : ");
        NAMA = masukan.nextLine();
        System.out.print("Silakan masukkan alamat anda : ");
        ALAMAT = masukan.nextLine();
        System.out.print("Silakan masukkan umur anda : ");
        UMUR = masukan.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        { 
            bacaTombol = System.in.read();
        }
        catch(java.io.IOException e)
        {
        }

        JEKEL = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0 : ");
        HOBI[0] = masukan.next();
        System.out.print("hobi ke-1 : ");
        HOBI[1] = masukan.next();
        System.out.print("hobi ke-2 : ");
        HOBI[2] = masukan.next();
        System.out.print("Silakan masukkan IPK anda : ");
        IPK = masukan.nextFloat();
        //------------bagian menemukan posisi yang dikehendaki--------------
        simpul bantu;
        bantu = awal;
        int N = 1;
        while ((N<LOKASI-1) && (bantu!=akhir))
        { 
            bantu = bantu.kanan;
            N++;
        }
        //------------bagian menciptakan & mengisi simpul baru--------------
        simpul baru = new simpul();
        baru.nama = NAMA;
        baru.alamat = ALAMAT;
        baru.umur = UMUR;
        baru.jekel = JEKEL;
        baru.hobi[0] = HOBI[0];
        baru.hobi[1] = HOBI[1];
        baru.hobi[2] = HOBI[2];
        baru.ipk = IPK;
        //--------bagian mencangkokkan simpul baru ke dalam linkedlist lama------
        bantu.kanan = baru;
        baru.kanan = bantu.kanan;
        }
    }

    //---------bagian program utama-----------
public static void main(String[] args)
{
    inisialisasiSenaraiKosong();
    tambahDepan();
    tambahDepan();
    tambahDepan();
    tambahDepan();
    tambahBelakang();
    tambahBelakang();
    tambahBelakang();
    tambahBelakang();
    tambahTengah();
    cetakSenarai();
}
}