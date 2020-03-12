/**
 * PersegiPanjang
 */
public class PersegiPanjang {

    //keliling = 2 * (l+p)
    // luas = p*l

    int panjang = 12;
    int lebar = 5;

    public int getKeliling() {
        return 2 * (panjang+lebar);
    }

    public int getLuas() {
        return panjang*lebar;
    }

    public static void main(String[] args) {
        PersegiPanjang Ob = new PersegiPanjang();
        System.out.println("Keliling lingkaran = "+Ob.getKeliling());
        System.out.println("Luas lingkaran = "+Ob.getKeliling());
    }
}