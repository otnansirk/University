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
public class Praktek_1_2
{ 
    public static void main(String[] args) { 
        //bagian deklarasi record --------------------------------------
        formatBiodata biodataMahasiswa = new formatBiodata();
        //bagian entri data melalui keyboard ---------------------------
        Scanner masukan = new Scanner(System.in);
        int bacaTombol=0;
        System.out.print("Silakan masukkan nama anda : ");
        biodataMahasiswa.nama = masukan.next();
        System.out.print("Silakan masukkan alamat anda : ");
        biodataMahasiswa.alamat = masukan.next();
        System.out.print("Silakan masukkan umur anda : ");
        biodataMahasiswa.umur = masukan.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        { bacaTombol = System.in.read();
        }
        catch(java.io.IOException e)
        { }
        biodataMahasiswa.jekel = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0 : ");
        biodataMahasiswa.hobi[0] = masukan.next();
        System.out.print("hobi ke-1 : ");
        biodataMahasiswa.hobi[1] = masukan.next();
        System.out.print("hobi ke-2 : ");
        biodataMahasiswa.hobi[2] = masukan.next();
        System.out.print("Silakan masukkan IPK anda : ");
        biodataMahasiswa.ipk = masukan.nextFloat();
        System.out.println("Nama anda adalah " + biodataMahasiswa.nama);
        System.out.println("Nama alamat adalah "+ biodataMahasiswa.alamat);
        System.out.println("Umur anda adalah " + biodataMahasiswa.umur);
        System.out.println("Jenis Kelamin anda " + biodataMahasiswa.jekel);
        System.out.println("Hobi ke-0 anda " + biodataMahasiswa.hobi[0]);
        System.out.println("Hobi ke-1 anda " + biodataMahasiswa.hobi[1]);
        System.out.println("Hobi ke-2 anda " + biodataMahasiswa.hobi[2]);
        System.out.println("IPK anda adalah " + biodataMahasiswa.ipk);
    }
}