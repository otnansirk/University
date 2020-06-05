class Jumlah {
    public int tambah(int x, int y) {
        return x + y;
    }

    public int tambah(int x, int y, int z) {
        return x + y + z;
    }

    public int tambah(double pi, int x) {
        return (int) pi + x;
    }
}

public class Penjumlahan {
    public static void main(String[] args) {
        Jumlah obj = new Jumlah();
        System.out.println(obj.tambah(2, 5)); // int, int
        System.out.println(obj.tambah(2, 5, 9)); // int, int, int
        System.out.println(obj.tambah(3.14159, 10)); // double, int
    }
}