public class AbstractDemo {
    public static void main(String[] args) {
        Karyawan e = new Karyawan("George W.", "Houston, TX", 43);
        System.out.println("\n Panggil mailCheck pakai Karyawan");
        e.mailCheck();
    }
}