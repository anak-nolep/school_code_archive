public class Main {

    public static void main(String[] args) {
        Client linux = new Client();
        JenisLaundry barang = new JenisLaundry();
        Transaksi transaksi = new Transaksi();
        Laporan log = new Laporan();
        log.laporan(barang);
        log.laporan(linux);
        log.laporan(transaksi, barang);
        transaksi.prosesTransaksi(linux, transaksi, barang, log);
        log.laporan(transaksi, barang);
        log.laporan(barang);
        log.laporan(linux);
        /*
        A, Catatan Lengkap Transaksi, Member, Paket laundry
        B, Diagram.png
        C, Class diagram Client, Petugas, Transaksi, Jenis_Laundry
        D, Enkapsulasi ada di Client, Petugas, Transaksi, Jenis_Laundry 
        E, Polimorphisme Interface ada di class User
        F, Inheritance
        */
    }
}
