class Pegawai {
    String nama;
    String alamat;
    int gaji;

    public void setPegawai(String nama, String alamat, int gaji) {
        this.nama = nama;
        this.alamat = alamat;
        this.gaji = gaji;
    }

    public void tampil() {
        System.out.println("Nama Pegawai :" + nama);
        System.out.println("Alamat Pegawai : " + alamat);
        System.out.println("Gaji Pegawai : " + gaji);
        System.out.println("\n");
    }
}