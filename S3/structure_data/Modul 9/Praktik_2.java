import java.util.Scanner;
class simpul
{ //bagian deklarasi struktur record ----------------------------------
    String nama;
    String alamat;
    int umur;
    char jekel;
    String hobi[] = new String[3];
    float ipk;
    simpul kanan;
}

class singleLinkedList
{
    public static simpul awal;
    public static simpul akhir;
    public static void inisialisasiSenaraiKosong()
    { 
        // .......
    }
    public static void tambahDepan()
    {
        // .........
    }
    public static void tambahBelakang()
    {
        // ........
    }
    public static void cetakSenarai()
    {
        // .........
    }
    public static void hitungJumlahSimpul()
    { 
        // ...........
    }
    public static void tambahTengah()
    {
        // ............
    }

    public static void hapus()
    {
        if (awal == null) // jika senarai masih kosong
        { 
            System.out.println("senarai kosong, menghapus tidak dapat dilakukan");
        }
        else
        // jika senarai tidak kosong
        {
            Scanner masukan = new Scanner(System.in);
            System.out.print("Silakan masukkan nama yang ingin dihapus : ");
            String NAMACARI = masukan.nextLine();
            if (awal == akhir) //jika hanya ada sebuah simpul
            { 
                if (awal.nama.equals(NAMACARI)) { 
                    System.out.println("menghapus "+NAMACARI+" dilakukan..");
                   inisialisasiSenaraiKosong();
                }
                else
                    System.out.println("data " +NAMACARI+" tidak ditemukan");
            }
            else if (awal.nama.equals(NAMACARI))//jika nama ditemukan di awal
            { 
                System.out.println("menghapus "+NAMACARI+" dilakukan..");
                awal = awal.kanan;
            }
            else
            { 
                simpul bantu;
                bantu = awal;
                while (bantu.kanan.nama.equals(NAMACARI)==false)
                { 
                    bantu = bantu.kanan;
                    if (bantu.kanan == null) break;
                }

                if ((bantu== akhir) && (akhir.nama.equals(NAMACARI)==false))
                { 
                    System.out.println("data " +NAMACARI+" tidak ditemukan");
                }
                else if (akhir.nama.equals(NAMACARI))//jika nama ditemukan di akhir
                { 
                    bantu.kanan = null;
                    akhir = bantu;
                }
                else
                { 
                    System.out.println("menghapus "+NAMACARI+" dilakukan..");
                    bantu.kanan = bantu.kanan.kanan;
                }
            }
        }
    }
//---------bagian program utama-----------
public static void main(String[] args)
{
inisialisasiSenaraiKosong();
tambahDepan();
tambahDepan();
tambahDepan();
tambahDepan();
tambahBelakang();
tambahBelakang();
tambahBelakang();
tambahBelakang();
tambahTengah();
hapus();
cetakSenarai();
}
}