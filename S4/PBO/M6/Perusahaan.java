public class Perusahaan {
    private String nmPerush;
    private String alamat;
    private Pegawai peg; // komposisi dengan relasi has-a

    public Perusahaan() {
        this.nmPerush = "PT. Lancar Jaya";
        this.alamat = "Yogyakarta";
        this.peg = new Pegawai();
        peg.setNama("David");
        peg.setJabatan("Manager");
        peg.setGaji(5000000);
    }

    public void cetakPerush() {
        System.out.println("Nama Perusahaan:" + this.nmPerush);
        System.out.println("Alamat :" + this.alamat);
        peg.cetakPegawai();
    }
}