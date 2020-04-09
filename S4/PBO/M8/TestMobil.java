public class TestMobil {
    public static void main(String args[]){
    System.out.println("Merupakan pemanggilan object Mobil");
    Mobil avanza = new Mobil(10, "Avanza");
    avanza.PrintInfoMobil();
    System.out.println("");
    System.out.println("Merupakan pemanggilan object Mobil");
    Truck truk = new Truck(7,"Tronton","kapasitas 10 ton");
   truk.PrintInfoMobil();
    truk.PrintInfoTruck();
    }
}