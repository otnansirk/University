import java.util.Scanner;
class formatData
{ 
    //bagian deklarasi struktur record ----------------------------------
    String nama;
    int jumlah;
    int harga;
}

class TugasTambahan1
{

    public static int N = 20;

    public static void inputData(formatData dataBarang[]) {
        Scanner masukan = new Scanner(System.in);
        int i = 0, stopTombol = 0;
        char stop;
        
        do{ 
            System.out.print("Masukkan barang : ");
            dataBarang[i].nama = masukan.next();
            System.out.print("Masukkan jumlah : ");
            dataBarang[i].jumlah = masukan.nextInt();
            System.out.print("Masukkan harga : ");
            dataBarang[i].harga = masukan.nextInt();
            
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
        tampilData(dataBarang, i);
        masukan.close();

    }

    public static void tampilData(formatData dataBarang[], int a) {
        System.out.println("-------------------------------------------");
        System.out.println("DATA bERHASIL DIMASUKKAN");
        System.out.println("-------------------------------------------");
        System.out.println("BARANG     JUMLAH     HARGA      SUB-TOTAL");
        System.out.println("-------------------------------------------");
        for (int i=0; i<a; i++) { 
            System.out.print (dataBarang[i].nama + "        ");
            System.out.print (dataBarang[i].jumlah + "        ");
            System.out.print (dataBarang[i].harga + "           ");
            System.out.println (dataBarang[i].harga * dataBarang[i].jumlah + " ");
        }
        System.out.println("-------------------------------------------");
    }
 
    public static void main(String[] args) {

    //bagian deklarasi record berbasis LARIK -----------------------
    formatData dataBarang[] = new formatData[N];
    for (int i = 0; i < N; i++) {
        dataBarang[i] = new formatData();
    }
    
    inputData(dataBarang);
    }
}