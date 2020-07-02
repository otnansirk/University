abstract class Kendaraan {

    /**
     * Jenis : obil, Motor dll
     */
    private String jenis;

    Kendaraan(String jenis) {
        this.jenis = jenis;
    }

    public String getJenis() {
        return this.jenis;
    }

    public abstract void bergerak();
}