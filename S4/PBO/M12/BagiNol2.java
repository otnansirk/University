public class BagiNol2 {
    public static void main(String[] args) {
        System.out.print("Sebelum Pembagian");
        try {
            System.out.println(5 / 0);
        } catch (Exception e) {
            System.out.println("Pesan Kesalahan");
            System.out.println(e.getMessage());
        }
        System.out.println("Sesudah pembagian");
    }
}