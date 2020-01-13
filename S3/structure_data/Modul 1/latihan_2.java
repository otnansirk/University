import java.util.Scanner;
public class latihan_2
{

    public static void list(Scanner scanner) {
        String nama;
        String alamat;
        int umur;
        char jekel; //jenis kelamin
        String hobi[] = new String[3];
        float ipk;

        int bacaTombol=0;
        System.out.print("Silakan masukkan nama anda : ");
        nama = scanner.next();
        System.out.print("Silakan masukkan alamat anda : ");
        alamat = scanner.next();
        System.out.print("Silakan masukkan umur anda : ");
        umur = scanner.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        {
            bacaTombol = System.in.read();
        }
            catch(java.io.IOException e)
        {
        }
        jekel = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0: "); 
        hobi[0] = scanner.next();
        System.out.print("hobi ke-1: "); 
        hobi[1] = scanner.next();
        System.out.print("hobi ke-2: "); 
        hobi[2] = scanner.next();
        System.out.print("Silakan masukkan IPK anda : ");
        ipk = scanner.nextFloat();

        System.out.println("Nama anda adalah " + nama);
        System.out.println("Nama alamat adalah " + alamat);
        System.out.println("Umur anda adalah " + umur);
        System.out.println("Jenis Kelamin anda adalah " + jekel);
        System.out.println("Hobi ke-0 anda adalah " + hobi[0]);
        System.out.println("Hobi ke-1 anda adalah " + hobi[1]);
        System.out.println("Hobi ke-2 anda adalah " + hobi[2]);
        System.out.println("IPK anda adalah " + ipk);
    }

    public static void main(String[] args)
    {
        Scanner scanners = new Scanner(System.in);
        System.out.print("Masukkan jumlah mahasiswa : ");
        int mahasiswa = scanners.nextInt();
        System.out.println();
        for (int i = 1; i <= mahasiswa; i++) {
            System.out.println("DATA KE " + i);
            list(scanners);
        }
    }
}