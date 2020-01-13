import java.util.LinkedList;
public class Praktik_4 {
 LinkedList daftarMhs = new LinkedList();
 Praktik_4() {
  daftarMhs.add("Agungbp");
  daftarMhs.add("Bambang");
  daftarMhs.add("Cucuk");
  daftarMhs.add("Dion");
  daftarMhs.add("Ending");
  daftarMhs.add("Fifin");
  daftarMhs.add("Gesit");
  daftarMhs.add("Heru");
  daftarMhs.add("Irma");
  daftarMhs.add("Janti");
  System.out.println("N = " + daftarMhs.size());
  for (int i = 0; i <= daftarMhs.size() - 1; i++) {
   System.out.println(i + " " + daftarMhs.get(i));
  }
  System.out.println("");
 }
 public static void main(String args[]) {
  new Praktik_4();
 }
}