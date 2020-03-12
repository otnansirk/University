public class Lingkaran
{
  final double phi = 3.14;
  double jari;
  public void setJari(double jari0)
  {
    this.jari=jari0;
  }
  public double jari()
  {
    return(jari);
  }
  public  double luas()
  {
    double luas0;
    luas0=phi*jari*jari;
    return(luas0);
}
  public void tampil()
  {
System.out.println("jari jari: "+jari);
System.out.println("luas: "+luas()); }
}

// Attribut = jari
// Constant = phi