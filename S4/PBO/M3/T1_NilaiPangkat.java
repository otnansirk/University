/**
 * P3-LuasSegitiga
 */
public class T1_NilaiPangkat {

    int bil, pangkat;
    int hasil;

    public int hitung(int bil, int pangkat) {
        hasil = bil;
        for (int i = 1; i < pangkat; i++) {
            hasil *= bil;
        }
        
        return hasil;
    }

    public static void main(String[] args) {
        T1_NilaiPangkat rumus = new T1_NilaiPangkat();
        int hasil = rumus.hitung(2, 4);

        System.out.println(hasil);

    }
}