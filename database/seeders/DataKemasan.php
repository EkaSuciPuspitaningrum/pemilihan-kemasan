<?php

namespace Database\Seeders;

use App\Models\JenisKemasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKemasan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKemasan::insert([
            ['id'=> 1 , 'jenis_kemasan' => 'Plastik PET/PETE', 'keterangan_kemasan' => 'Plastik PET memiliki sifat yang ringan, mudah dibentuk, tidak gampang pecah. Selain itu PET juga didesain untuk sekali pakai, sehingga bisa didaur puluhan kali dan bernilai ekonomi yang tinggi. Botol PET yang berwarna jernih itu dikumpulkan, lalu didaur ulang dengan baik dan dapat dikonversi berulang kali menjadi botol PET (recycled PET) yang berkualitas tinggi.', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 2 , 'jenis_kemasan' => 'Plastik HDPE', 'keterangan_kemasan' => 'HDPE (High-density polyethylene) adalah polimer termoplastik jenis polietilena yang terbuat dari proses pemanasan minyak bumi. Sifatnya keras, tahan terhadap suhu tinggi, dan dapat dibentuk menjadi beragam benda tanpa kehilangan kekuatannya. Lapisan HDPE cenderung terlihat buram setelah diproses, dan dapat didaur ulang. Ketangguhan HDPE plastik datang dari susunan molekulnya. Percabangan molekulnya cukup jarang dan berjauhan, menciptakan kekuatan tensil yang tangguh. Hal ini memberi plastik HDPE kelenturan serta daya tahan tinggi.', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 3 , 'jenis_kemasan' => 'Plastik PVC', 'keterangan_kemasan' => 'PVC (Polyvinyl Chlorida) merupakan jenis plastik dengan sifat lembut, fleksibel, dan dapat didaur ulang. Plastik jenis ini sering kali digunakan untuk membuat pembungkus makanan, botol minyak sayur, pipa plastik, komponen kabel komputer dan IT, serta mainan anak-anak seperti pelampung renang.', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 4 , 'jenis_kemasan' => 'Plastik LDPE', 'keterangan_kemasan' => ' Low Density Polyethylene (LDPE) memiliki sifat mekanis yang tembus pandang, kuat, fleksibel, dan memiliki daya tahan yang baik terhadap pelarut kimia. Karena sifat-sifatnya tadi, yang kuat, fleksibel, dan tahan terhadap pelarut kimia, bahan polimer LDPE ini termasuk aman untuk digunakan sebagai wadah makanan', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 5 , 'jenis_kemasan' => 'Plastik PP', 
            'keterangan_kemasan' => 'Plastik PP (PolyPropylene) adalah salah satu jenis plastik yang berwarna bening atau transparan. Plastik ini dibuat dari monomer propylene yang banyak diproduksi di seluruh dunia yang umumnya banyak digunakan untuk pengemasan makanan. 
            Kepopuleran plastik ini dikarenakan bahannya yang tidak beracun sehingga aman dimanfaatkan untuk pengemasan produk konsumsi. Selain itu, plastik PP juga memiliki fleksibilitas yang membuatnya mudah diolah menjadi berbagai macam bentuk sesuai dengan kebutuhan.  ', 
            'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 6 , 'jenis_kemasan' => 'Plastik PS', 'keterangan_kemasan' => 'Polistiren adalah jenis polimer dengan yang termasuk kategori termoplastik. Dengan berbagai bentuk dan karakteristiknya, plastik yang satu ini dapat digunakan dalam berbagai aplikasi mulai dari pengemasan hingga insulasi bangunan.', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=> 7 , 'jenis_kemasan' => 'Plastik NYLON', 'keterangan_kemasan' => 'Plastik nylon terbuat dari gabungan dua material yaitu nylon dan PE. Kedua gabungan jenis plastik ini membuat sebuah plastik nylon yang punya kekuatan lebih untuk beberapa hal terkait pengemasan. Bahan yang satu ini sering juga disebut sebagai plastik vacuum', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],

        ]);
    }
}
