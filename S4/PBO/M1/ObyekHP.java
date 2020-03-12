/**
 * ObyekHP
 */
public class ObyekHP {

    public static void main(String[] args) {
        Handphone nokia = new Handphone();
        nokia.setHP("Samsung", 100000);
        nokia.tampil();

        Handphone sony = new Handphone();
        sony.setHP("Xiomi", 200000);
        sony.tampil();
    }
}