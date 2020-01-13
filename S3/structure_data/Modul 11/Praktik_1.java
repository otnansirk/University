/**
 * Praktik_1
 */
public class Praktik_1 {

    public static void tukarNilai( simpul X, simpul Y)
{ 
    simpul sementara = new simpul();
    sementara.nama = X.nama;
    sementara.alamat = X.alamat;
    sementara.umur = X.umur;
    sementara.jekel = X.jekel;
    sementara.ipk = X.ipk;

    X.nama = Y.nama;
    X.alamat = Y.alamat;
    X.umur = Y.umur;
    X.jekel = Y.jekel;
    X.ipk = Y.ipk;

    Y.nama = sementara.nama;
    Y.alamat = sementara.alamat;
    Y.umur = sementara.umur;
    Y.jekel = sementara.jekel;
    Y.ipk = sementara.ipk;
}

//-------------------------------------------------
// bisa untuk single LL dan double LL
//-------------------------------------------------
public static void mengurutkanDataBubble_TeknikTukarNilai()
{
        
    int N = hitungJumlahSimpul();
    simpul A=null;
    simpul B=null;
    simpul berhenti = akhir.kanan;
    System.out.println ("Banyaknya simpul = " + hitungJumlahSimpul());
    for (int i=1; i<= hitungJumlahSimpul()-1; i++)
    {
        A = awal;
        B = awal.kanan;
        int nomor = 1;
        while (B != berhenti)
        { 
            if (A.nama.compareTo(B.nama)>0)
            {
                //tukarkan elemen dari simpul A dan elemen dari simpul B
                tukarNilai(A,B);
            }
            A = A.kanan;
            B = B.kanan;
            nomor++;
        }
        berhenti = A;
    }
    System.out.println("===PROSES PENGURUTAN BUBBLE SELESAI======");
}
}