class Kendaraan {
    public void info() {
        System.out.println("Info pada kendaraan : ");
    }
}

class Roda2 extends Kendaraan {
    public void info() {
        System.out.println("Info pada Roda2");
    }
}

class Motor extends Roda2 {
    public void info() {
        System.out.println("Info pada Motor");
    }
}

public class Test {
    public static void main(String[] args) {
        Roda2 roda2ku;
        Motor motorku;
        Kendaraan k = new Kendaraan();
        roda2ku = new Roda2();
        motorku = new Motor();
        k.info();
        k = roda2ku;
        k.info();
        k = motorku;
        k.info();
    }
}