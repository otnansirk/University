class Produk {
    private String nama;

    public Produk(){
        setNama("PRODUK");
    }
    public void setNama(String nama){
        this.nama = nama;
    }
    public String getNama(){
        return this.nama;
    }
    public void cetak(){
        System.out.println(getNama());
    }
}

class Elektronik extends Produk {
    private String dayaDalamWatt;
}

class Buku extends Produk {
    public void cetak(){
        setNama("BUKU");
        System.out.println(getNama());
    }
}

public class Test{
    public static void main(String args[]){
        Buku b = new Buku();
        b.cetak();

        Produk p = new Produk();
        p.cetak();
        
        Produk pb = new Buku();
        pb.cetak();
    }
}