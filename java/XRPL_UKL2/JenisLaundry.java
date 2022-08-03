import java.util.ArrayList;

public class JenisLaundry {

    private ArrayList<String> namaBarang = new ArrayList<String>();
    private ArrayList<Integer> antrian = new ArrayList<Integer>();
    private ArrayList<Integer> harga = new ArrayList<Integer>();

    public JenisLaundry() {
        this.namaBarang.add("Cuci bahan kain");
        this.antrian.add(0);
        this.harga.add(10000);
        this.namaBarang.add("Cuci sepatu");
        this.antrian.add(0);
        this.harga.add(5000);
        this.namaBarang.add("Cuci Uang");
        this.antrian.add(0);
        this.harga.add(15000);
    }

    public int getJmlBarang() {
        return this.namaBarang.size();
    }

    public void setNamaBarang(String namaBarang) {
        this.namaBarang.add(namaBarang);
    }

    public String getNamaBarang(int idBarang) {
        return this.namaBarang.get(idBarang);
    }

    public void setAntrian(int antrian) {
        this.antrian.add(antrian);
    }

    public int getAntrian(int idBarang) {
        return this.antrian.get(idBarang);
    }

    public void editAntrian(int idBarang, int antrian) {
        this.antrian.set(idBarang, antrian);;
    }

    public void setHarga(int harga) {
        this.harga.add(harga);
    }

    public int getHarga(int idBarang) {
        return this.harga.get(idBarang);
    }
}
