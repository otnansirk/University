public class AbstractDemoGaji {
    public static void main(String[] args) {
        Gaji s = new Gaji("Mohd Mohtashim", "Ambehta, UP", 3, 3600.00);
        Karyawan e = new Gaji("John Adams", "Boston, MA", 2, 2400.00);
        System.out.println("Panggil mailCheck pakai Gaji");
        s.mailCheck();
        System.out.println("\n Panggil mailCheck pakai Karyawan");
        e.mailCheck();
    }
}