class Induk {
    int x = 5;

    public void Info() {
        System.out.println("Ini class Induk");
    }
}

class Anak extends Induk {
    int x = 10;

    public void Info() {
        System.out.println("Ini class Anak");
    }
}

public class Test2 {
    public static void main(String args[]) {
        Induk tes = new Anak();
        System.out.println("Nilai x = " + tes.x);
        tes.Info();
    }
}