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
 * Latihan_1
 */
public class Latihan_1 {

    public static Scanner masukan = new Scanner(System.in); 
      
    public static void inputData(formatBiodata biodataMahasiswa[], int N) {
        int bacaTombol=0;
        for (int i=0; i<=N-1; i++){ 
            System.out.print("Silakan masukkan nama anda : ");
            biodataMahasiswa[i].nama = masukan.next();
            System.out.print("Silakan masukkan alamat anda : ");
            biodataMahasiswa[i].alamat = masukan.next();
            System.out.print("Silakan masukkan umur anda : ");
            biodataMahasiswa[i].umur = masukan.nextInt();
            System.out.print("Silakan masukkan Jenis Kelamin anda : ");
            try
            { bacaTombol = System.in.read();
            }
            catch(java.io.IOException e)
            {
            }
            biodataMahasiswa[i].jekel = (char)bacaTombol;
            System.out.println("Silakan masukkan hobi (maks 3) : ");
            System.out.print("hobi ke-0 : ");
            biodataMahasiswa[i].hobi[0] = masukan.next();
            System.out.print("hobi ke-1 : ");
            biodataMahasiswa[i].hobi[1] = masukan.next();
            System.out.print("hobi ke-2 : ");
            biodataMahasiswa[i].hobi[2] = masukan.next();
            System.out.print("Silakan masukkan IPK anda : ");
            biodataMahasiswa[i].ipk = masukan.nextFloat();
            System.out.println("");
        }
    }

    public static void tampilData(formatBiodata biodataMahasiswa[], int N) {
        System.out.println("-------------------------------------------");
        System.out.println("NAMA ALAMAT UMUR JEKEL HOBI1 HOBI2 HOBI3 IPK");
        System.out.println("-------------------------------------------");
        for (int i=0; i<=N-1; i++) { 
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
 
    public static void main(String[] arg) {
        int N=15;
        int totalData;
        System.out.print("Berapa data yang ingin dimasukkan (max 15) : ");
        totalData = masukan.nextInt();
        if(totalData > N){
            do {
            System.out.print(""+
                "Maaf data maksimal yang boleh di inputkan adalah 15. \n"+
                "Silahkan masukkan jumlah data kembali : ");            
                totalData = masukan.nextInt();
            } while (totalData > N);
        }
        

    //bagian deklarasi record berbasis LARIK -----------------------
    formatBiodata biodataMahasiswa[] = new formatBiodata[totalData];
    for (int i = 0; i < totalData; i++) {
        biodataMahasiswa[i] = new formatBiodata();
    }
    
    //bagian entri data ke dalam struktur larik -----------------------
    inputData(biodataMahasiswa, totalData);
    tampilData(biodataMahasiswa, totalData);
    //bagian menampilkan isi struktur Larik -------------------------
    }
}