public class Gaji extends Karyawan {
    private double Gaji; // Annual Gaji

    public Gaji(String name, String address, int number, double Gaji) {
        super(name, address, number);
        setGaji(Gaji);
    }

    public void mailCheck() {
        System.out.println("Within mailCheck Gaji");

        System.out.println("Mailing check to " + getName() + " with Gaji " + Gaji);
    }

    public double getGaji() {
        return Gaji;
    }

    public void setGaji(double newGaji) {
        if (newGaji >= 0.0) {
            Gaji = newGaji;
        }
    }

    public double computePay() {
        System.out.println("Computing Gaji pay for " + getName());
        return Gaji / 52;
    }
}