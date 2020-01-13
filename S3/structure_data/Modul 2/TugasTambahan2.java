import java.util.Scanner;
class formatData
{ 
    //bagian deklarasi struktur record ----------------------------------
    String nama;
    int uts;
    int uas;
}

class TugasTambahan2
{

    public static int N = 20;

    public static void inputData(formatData daftarNilai[]) {
        Scanner masukan = new Scanner(System.in);
        int i = 0, stopTombol = 0;
        char stop;
        
        do{ 
            System.out.print("Masukkan Nama : ");
            daftarNilai[i].nama = masukan.next();
            System.out.print("Masukkan Nilai UTS : ");
            daftarNilai[i].uts = masukan.nextInt();
            System.out.print("Masukkan Nilai UAS : ");
            daftarNilai[i].uas = masukan.nextInt();
            
            System.out.println("Mau Masukkan Data Lagi ? (Y/N)");
            try
            { 
                stopTombol = System.in.read();
            }
            catch(java.io.IOException e)
            {
            }
            stop = (char)stopTombol;
            i++;
            
            if(i >= N){
                System.out.println("Maaf, Data Max Yang Bisa Di Masukkan Adalah "+N);
                break;
            }
        }while(stop == 'Y' || stop == 'y');
        tampilData(daftarNilai, i);
        masukan.close();

    }

    public static void tampilData(formatData daftarNilai[], int a) {
        System.out.println("-------------------------------------------");
        System.out.println("DATA bERHASIL DIMASUKKAN");
        System.out.println("-------------------------------------------");
        System.out.println("NAMA     UTS     UAS     SCORE");
        System.out.println("-------------------------------------------");
        for (int i=0; i<a; i++) { 
            System.out.print (daftarNilai[i].nama + "     ");
            System.out.print (daftarNilai[i].uts + "      ");
            System.out.print (daftarNilai[i].uas + "      ");
            System.out.println ((daftarNilai[i].uts + daftarNilai[i].uas) / 2 + " ");
        }
        System.out.println("-------------------------------------------");
    }
 
    public static void main(String[] args) {

    //bagian deklarasi record berbasis LARIK -----------------------
    formatData daftarNilai[] = new formatData[N];
    for (int i = 0; i < N; i++) {
        daftarNilai[i] = new formatData();
    }
    
    inputData(daftarNilai);
    }
}