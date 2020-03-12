public class P2 {
    private String nim, nama;

    // method mutator
    public void setNim(String nim) {
        this.nim = nim;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    // method acessor
    public String getNim() {
        return nim;
    }

    public String getNama() {
        return nama;
    }

    public void TampilkanData() {
        System.out.println(this.getNim());
        System.out.println(this.getNama());
    }

    public static void main(String args[]) {
        P2 obj = new P2();
        obj.setNim("175410001");
        obj.setNama("Azkiya");
        System.out.println("==Data==");
        System.out.println("Nim : " + obj.getNim());
        System.out.println("Nama : " + obj.getNama());

        System.out.println("DATANYA ADALAH");
        obj.TampilkanData();
    }
}