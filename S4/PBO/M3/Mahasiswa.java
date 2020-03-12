public class Mahasiswa {
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

    public static void main(String args[]) {
        Mahasiswa obj = new Mahasiswa();
        obj.setNim("175410001");
        obj.setNama("Azkiya");
        System.out.println("==Data==");
        System.out.println("Nim : " + obj.getNim());
        System.out.println("Nama : " + obj.getNama());
    }
}