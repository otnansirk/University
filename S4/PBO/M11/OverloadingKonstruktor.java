class Penggajian {
    double gapok;
    double masa_kerja;

    Penggajian(double g, double mk) {
        gapok = g;
        masa_kerja = mk;
    }

    Penggajian() {
        gapok = 0;
        masa_kerja = 0;
    }

    Penggajian(double lembur) {
        gapok = masa_kerja = lembur;
    }

    double hitung_gaji()
    {
        return gapok*masa_kerja;
    }
}

class OverloadingKonstruktor {
    public static void main(String args[]) {
        Penggajian Karyawan1 = new Penggajian(10, 15);
        Penggajian Karyawan2 = new Penggajian();
        Penggajian Karyawan3 = new Penggajian(5);
        double gaji;
        gaji = Karyawan1.hitung_gaji();
        System.out.println("Gaji Karyawan 1= " + gaji);
        gaji = Karyawan2.hitung_gaji();
        System.out.println("Gaji Karyawan 2= " + gaji);
        gaji = Karyawan3.hitung_gaji();
        System.out.println("Gaji Karyawan 3= " + gaji);
    }
}