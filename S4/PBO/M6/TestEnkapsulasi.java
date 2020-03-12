public class TestEnkapsulasi {
    public static void main(String[] args) {
        Pegawai dataPeg = new Pegawai();
        dataPeg.setNama("Budi");
        dataPeg.setJabatan("Supervisor");
        dataPeg.setGaji(4000000);
        dataPeg.cetakPegawai();
    }
}