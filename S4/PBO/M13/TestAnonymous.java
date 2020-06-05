class Awal {
    int x = 8;

    void methodAwal() {
        System.out.println("Nilai x= " + x);
    }
}

public class TestAnonymous {
    public static void main(String args[]) {
        Awal noName = new Awal() { // instant anonymous class
            void methodAwal() {
                x += 3;
                System.out.println("x= " + x);
            }
        };
        noName.methodAwal();
    }
}