public class Luar {
    private int angkaLuar;

    public Luar(int angkaLuar) {
        this.angkaLuar = angkaLuar;
    }

    int getAngkaLuar() {
        return angkaLuar;
    }

    // inner class
    class Dalam {
        private int angkaDalam;

        public Dalam(){
   angkaDalam=9;
   }

        public void cetakDalam() {
            System.out.println("Ini angka luar:" + angkaLuar);
            System.out.println("Ini angka dalam:" + angkaDalam);
        }
    }// batas inner class

    public void cetakLuar() {
        Dalam dl = new Dalam();
        dl.cetakDalam();
    }

    public static void main(String args[]) {
        Luar lu = new Luar(5);
        lu.cetakLuar();
    }
}// oec out