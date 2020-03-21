class Manusia {
    protected String nama;
    protected int umur;

    public Manusia() {
        this.nama = "Sastro Wardoyo";
        this.umur = 50;
    }

    public void cetak() {
        System.out.println("======DATA PERSONAL====");
        System.out.println("Nama:" + nama);
        System.out.println("Umur:" + umur);
    }
}