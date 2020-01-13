import java.util.Scanner;
public class p5_inputDataViaKeyboard
{
    public static void main(String[] args)
    {
        // Aku sarankan deklarasi variabel untuk menyimpan data mahasiswa dijadikan Class
        // dan kita panggil classnya 
        String nama;
        String alamat;
        int umur;
        char jekel; //jenis kelamin
        String hobi[] = new String[3];
        float ipk;

        Scanner masukan = new Scanner(System.in);
        int bacaTombol=0;
        System.out.print("Silakan masukkan nama anda : ");
        nama = masukan.next();
        System.out.print("Silakan masukkan alamat anda : ");
        alamat = masukan.next();
        System.out.print("Silakan masukkan umur anda : ");
        umur = masukan.nextInt();
        System.out.print("Silakan masukkan Jenis Kelamin anda : ");
        try
        {
            bacaTombol = System.in.read();
        }
        catch(java.io.IOException e)
        {
            System.out.println("PREET");
        }
        jekel = (char)bacaTombol;
        System.out.println("Silakan masukkan hobi (maks 3) : ");
        System.out.print("hobi ke-0: "); 
        hobi[0] = masukan.next();
        System.out.print("hobi ke-1: "); 
        hobi[1] = masukan.next();
        System.out.print("hobi ke-2: "); 
        hobi[2] = masukan.next();
        System.out.print("Silakan masukkan IPK anda : ");
        ipk = masukan.nextFloat();
        masukan.close();

        System.out.println("Nama anda adalah " + nama);
        System.out.println("Nama alamat adalah " + alamat);
        System.out.println("Umur anda adalah " + umur);
        System.out.println("Jenis Kelamin anda adalah " + jekel);
        System.out.println("Hobi ke-0 anda adalah " + hobi[0]);
        System.out.println("Hobi ke-1 anda adalah " + hobi[1]);
        System.out.println("Hobi ke-2 anda adalah " + hobi[2]);
        System.out.println("IPK anda adalah " + ipk);
    }
}
