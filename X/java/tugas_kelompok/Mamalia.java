package RPL3;

public class Mamalia extends Function {
    private String deskripsi_tambahan="";  //3.) Private mod
    //agar tidak di akses oleh class lain
    public void deskripsi(){
        super.deskripsi(); //4.) Super, 6.) Overriding
        //panggil super class deskripsi dan overiding dari class function
    }
    public void deskripsi(String deskripsi_tambahan){ //1.) Setter, 2.) Getter, 7.) Overloading
        //set variable dan print, overloading deskripsi dalam satu class yang kita buat
        this.deskripsi_tambahan=deskripsi_tambahan; //5.) This
        //set ke variable deskripsi_tambahan class ini
        deskripsi();
        System.out.println(
        "Ciri Ciri Tambahan : \n"+
        deskripsi_tambahan);
    }
}
