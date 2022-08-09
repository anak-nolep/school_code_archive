public class Laporan {

    public void laporan(JenisLaundry barang) {
        int x = barang.getJmlBarang();
        System.out.println();
        System.out.println("Tabel Paket");
        System.out.println();
        System.out.println("ID \tNama Paket \tAntrian \tHarga");
        for (int i = 0; i < x; i++) {
            System.out.println(i+"\t"+barang.getNamaBarang(i) + "\t"
                    + barang.getAntrian(i) + "\t" + barang.getHarga(i));
        }
    }

    public void laporan(Client member) {
        int x = member.getJmlMember();
        System.out.println();
        System.out.println("Tabel Member");
        System.out.println();
        System.out.println("ID \tNama \tAlamat \t\tTelepon \tSaldo");
        for (int i = 0; i < x; i++) {
            System.out.println(i+"\t"+member.getNama(i) + "\t"
                    + member.getAlamat(i) + "\t" + member.getTelepon(i) + "\t"
                    + member.getSaldo(i));
        }
    }

    public void laporan(Transaksi transaksi, JenisLaundry barang) {
        int x = transaksi.getJmlTransaksi();
        System.out.println();
        System.out.println("Laporan Transaksi");
        System.out.println();
        System.out.println("ID\tNama Paket\tAntrian Selesai \tHarga \tJumlah");
        int total = 0;
        for (int i = 0; i < x; i++) {
            int jumlah = transaksi.getBanyaknya(i) * barang.getHarga(transaksi.getIdBarang(i));
            total += jumlah;
            System.out.println(i+"\t"+barang.getNamaBarang(transaksi.getIdBarang(i)) + "\t"
                    + transaksi.getBanyaknya(i) + "\t\t\t" + barang.getHarga(transaksi.getIdBarang(i)) + "\t"
                    + jumlah);
        }
        System.out.println("Total Omset = " + total);
    }
}
