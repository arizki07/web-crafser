<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('product.utama.layanan.semua-layanan', [
            'judul' => 'semua-layanan',
            'active' => 'Layanan'
        ]);
    }

    public function jasaWebsite()
    {
        $data = [
            'judul' => 'Jasa Pembuatan Website',
            'deskripsi' => 'Melayani Pembuatan Website Sesuai Keinginan Anda.',
            'active' => 'jasa-website',
            'paragraf1' => 'Web Crafter Service adalah solusi terbaik untuk memenuhi kebutuhan pembuatan website bisnis Anda. Dengan tim ahli yang berpengalaman dan kreatif, Web Crafter Service menawarkan layanan pembuatan website yang sesuai dengan visi dan misi bisnis Anda. Kami mengutamakan desain yang responsif, fungsionalitas yang optimal, dan pengalaman pengguna yang memikat, sehingga website Anda tidak hanya menarik perhatian tetapi juga memberikan nilai tambah bagi pengunjung.',
            'paragraf2' => 'Keunggulan Web Crafter Service tidak hanya terletak pada hasil akhir yang estetis, tetapi juga pada pendekatan kami yang berfokus pada kepuasan pelanggan. Tim Web Crafter Service selalu siap berkolaborasi dengan Anda untuk memahami kebutuhan bisnis Anda secara mendalam dan menghasilkan website yang tidak hanya mencerminkan identitas brand Anda tetapi juga meningkatkan online presence bisnis Anda. Dengan layanan Web Crafter Service, Anda dapat yakin bahwa website bisnis Anda akan menjadi alat yang efektif untuk menarik pelanggan dan mengembangkan bisnis Anda secara online.',
            'title' => 'Apa Mempunyai Website Sendiri Itu Penting Bagi Bisnis?',
            'paragraf3' => 'Ya tentu saja, Dalam era digital yang terus berkembang, keberadaan website menjadi suatu keharusan tak terhindarkan untuk keberlangsungan bisnis. Website bukan hanya menjadi etalase daring yang memperkenalkan produk atau jasa, tetapi juga merupakan jembatan langsung antara perusahaan dan pelanggan. Dengan website, bisnis dapat mencapai audiens yang lebih luas, memberikan informasi yang terkini, dan membangun hubungan yang lebih erat dengan konsumen. Selain itu, keberadaan website memberikan legitimasi dan kepercayaan dari calon pelanggan, mengukuhkan kehadiran bisnis dalam ranah digital yang semakin dominan. Oleh karena itu, memiliki website bukan lagi pilihan, melainkan suatu langkah strategis yang mendasar untuk menjaga daya saing dan kesuksesan bisnis di era modern ini.',
            'quotes' => 'Tidak ada batasan untuk mencipta. Dengan Web Crafser, kami hadir untuk merangkul setiap ide dan mewujudkannya dalam bentuk website yang memukau. Bersama, kita bangun karya yang tak terlupakan di dunia digital.',
        ];

        return view('product.utama.layanan.jasa-website', $data);
    }

    public function jasaSeo()
    {
        $data = [
            'judul' => 'Jasa SEO',
            'deskripsi' => 'Jadikan Websitemu Menjadi #1 Di Mesin Pencarian Browser.',
            'active' => 'jasa-seo',
            'paragraf1' => 'Web Crafter Service adalah sebuah perusahaan yang menawarkan layanan jasa SEO yang terdepan untuk membantu bisnis online Anda mencapai visibilitas yang optimal di dunia digital. Dengan fokus pada strategi SEO yang inovatif dan berkelanjutan, Web Crafter Service memahami betul betapa pentingnya peringkat tinggi dalam mesin pencari untuk meningkatkan lalu lintas dan meningkatkan kehadiran online Anda. Tim ahli SEO kami memiliki pengetahuan mendalam tentang algoritma mesin pencari terkini dan terus memperbarui pendekatan mereka agar sesuai dengan perubahan yang terjadi dalam lingkungan digital. Dengan layanan jasa SEO dari Web Crafter Service, Anda dapat yakin bahwa bisnis online Anda akan mendapatkan keunggulan yang dibutuhkan untuk bersaing di pasar yang semakin kompetitif.',
            'paragraf2' => 'Web Crafter Service tidak hanya menawarkan peningkatan peringkat mesin pencari, tetapi juga menyediakan pendekatan holistik untuk meningkatkan keseluruhan kualitas situs web Anda. Tim kami tidak hanya fokus pada pengoptimalan kata kunci, tetapi juga pada aspek-aspek lain seperti desain responsif, pengalaman pengguna yang optimal, dan konten berkualitas tinggi. Dengan kombinasi ini, Web Crafter Service bertujuan untuk memberikan solusi SEO yang komprehensif dan memberdayakan bisnis online Anda untuk mencapai kesuksesan jangka panjang. Dengan layanan jasa SEO yang disesuaikan dan inovatif, Web Crafter Service siap membantu Anda mengukir jejak digital yang kuat dan meningkatkan daya saing bisnis Anda di pasar online.',
            'title' => 'Mengapa SEO Penting?',
            'paragraf3' => 'SEO (Search Engine Optimization) memiliki peran yang sangat penting dalam dunia digital karena menjadi fondasi utama bagi kesuksesan visibilitas dan pertumbuhan bisnis online. Dengan menggunakan strategi SEO yang tepat, sebuah situs web dapat muncul lebih tinggi dalam hasil mesin pencari, meningkatkan eksposur terhadap target audiensnya. Dengan begitu, bisnis dapat menarik lebih banyak lalu lintas organik, meningkatkan peluang konversi, dan memperluas jangkauan pasar mereka. Selain itu, SEO juga membantu membangun kepercayaan pengguna dengan memastikan bahwa kontennya relevan, berkualitas, dan mudah diakses. Dengan persaingan yang semakin ketat di dunia online, keberadaan yang kuat di mesin pencari melalui praktik SEO yang efektif menjadi kunci untuk membedakan diri dan mencapai kesuksesan bisnis jangka panjang.',
            'quotes' => 'SEO bukan sekadar mengoptimalkan mesin pencari; itu adalah seni membangun jembatan antara bisnis dan dunia digital, menciptakan jalur yang terang bagi kesuksesan online. Dengan SEO yang efektif, bukan hanya tentang mendominasi mesin pencari, melainkan menjadikan websitemu sebagai yang pertama ditemukan, memberikan impak nyata pada peringkat dan memastikan kehadiran yang tak terbantahkan di dunia maya.',
        ];

        return view('product.utama.layanan.jasa-seo', $data);
    }

    public function jasaSkripsi()
    {
        $data = [
            'judul' => 'Jasa Konsultasi & Pembuatan Skripsi',
            'deskripsi' => 'Lulus Cepat Dengan Berjasama Dengan Web Crafser',
            'active' => 'jasa-skripsi',
            'paragraf1' => 'Web Crafter Service, atau yang akrab disebut sebagai Web Crafser, adalah destinasi terpercaya untuk layanan konsultasi dan pembuatan skripsi yang memberikan bantuan kepada mahasiswa dalam menyelesaikan tugas akhir mereka dengan kualitas dan profesionalisme tinggi. Tim ahli kami terdiri dari para akademisi dan praktisi industri yang berdedikasi untuk membimbing mahasiswa melalui setiap tahap penyusunan skripsi mereka. Kami mengerti betapa pentingnya skripsi sebagai langkah terakhir dalam menyelesaikan pendidikan tinggi, dan oleh karena itu, Web Crafser menawarkan layanan konsultasi yang personal dan pembuatan skripsi yang disesuaikan dengan kebutuhan unik setiap mahasiswa.',
            'paragraf2' => 'Web Crafser tidak hanya menawarkan bantuan dalam menyusun isi skripsi, tetapi juga memberikan panduan komprehensif mengenai metodologi penelitian, analisis data, dan format penulisan yang benar. Layanan konsultasi kami mencakup berbagai disiplin ilmu, sehingga mahasiswa dari berbagai jurusan dapat memanfaatkan pengalaman dan pengetahuan luas tim kami. Dengan dukungan Web Crafser, mahasiswa dapat merasa yakin dan siap menghadapi tantangan akhir mereka, menjadikan perjalanan akademis mereka lebih bermakna dan sukses.',
            'title' => 'Apa keunggulan utama layanan konsultasi dan pembuatan skripsi yang ditawarkan oleh Web Crafser?',
            'paragraf3' => 'Keunggulan utama layanan konsultasi dan pembuatan skripsi Web Crafser terletak pada pendekatan personal, bimbingan ahli, dan kemampuan untuk menyediakan solusi yang sesuai dengan kebutuhan unik setiap mahasiswa. Dengan fokus pada kualitas dan profesionalisme, Web Crafser membantu mahasiswa meraih kesuksesan dalam menyelesaikan tugas akhir mereka dengan percaya diri.',
            'quotes' => 'Skripsi adalah perjalanan akademis yang penuh tantangan, namun dengan bimbingan yang tepat, setiap halaman yang ditulis menjadi langkah yang membangun jalan menuju kesuksesan. Web Crafser, melalui jasa konsultasi dan pembuatan skripsi, bukan hanya menuntun langkah, tetapi juga membantu mahasiswa menandai jejak pengetahuan mereka dalam dunia akademis.',
        ];

        return view('product.utama.layanan.jasa-skripsi', $data);
    }

    public function jasaUI()
    {
        $data = [
            'judul' => 'Layanan UI/UX Web Crafser',
            'deskripsi' => 'Butuh Design Untuk Websitemu? Kami Siap Membantu Anda.',
            'active' => 'jasa-ui-ux',
            'paragraf1' => 'Web Crafter Service, yang dikenal dengan nama singkat Web Crafser, menawarkan layanan jasa UI/UX yang mendefinisikan kembali pengalaman pengguna online. Tim ahli desain UI/UX kami memiliki dedikasi untuk menciptakan antarmuka yang menarik dan fungsional, menggabungkan estetika kreatif dengan kegunaan yang maksimal. Kami memahami bahwa desain yang efektif tidak hanya tentang penampilan visual, tetapi juga mengenai bagaimana pengguna berinteraksi dengan sebuah situs web atau aplikasi. Dengan pendekatan holistik, Web Crafter Service berkomitmen untuk memberikan pengalaman pengguna yang intuitif, memastikan bahwa setiap langkah navigasi menjadi pengalaman yang menyenangkan bagi pengguna, sekaligus meningkatkan nilai dan kepercayaan merek Anda.',
            'paragraf2' => 'Layanan jasa UI/UX dari Web Crafser tidak hanya sebatas pada desain awal, melainkan juga melibatkan pemahaman mendalam tentang perilaku pengguna dan tren desain terkini. Kami menyediakan penyesuaian berkelanjutan untuk memastikan bahwa antarmuka Anda tetap relevan dan efektif seiring berjalannya waktu. Dengan fokus pada responsif dan mobile-friendly, Web Crafter Service memastikan bahwa setiap elemen desain tidak hanya memukau di layar besar, tetapi juga memberikan pengalaman yang optimal di berbagai perangkat. Dengan layanan jasa UI/UX kami, Web Crafter Service berusaha menciptakan situs web dan aplikasi yang tidak hanya memikat mata, tetapi juga memberikan kepuasan pengguna yang mendalam.',
            'title' => 'Bagaimana layanan jasa UI/UX dari Web Crafser dapat meningkatkan nilai tambah bagi bisnis online dalam meningkatkan kepuasan pengguna?',
            'paragraf3' => 'Layanan jasa UI/UX dari Web Crafser memberikan nilai tambah bagi bisnis online dengan mendesain antarmuka yang tidak hanya estetis, tetapi juga berfokus pada kepuasan pengguna. Tim desain kami mengintegrasikan elemen-elemen yang memastikan navigasi yang intuitif, tata letak yang bersih, dan interaksi yang mudah. Dengan pemahaman mendalam tentang perilaku pengguna, kami menciptakan desain yang membangun konektivitas emosional dengan audiens, menciptakan pengalaman yang positif dan berkesan. Dengan begitu, bisnis dapat meningkatkan retensi pengguna, membangun loyalitas pelanggan, dan, pada akhirnya, meningkatkan konversi dan kesuksesan bisnis secara keseluruhan.',
            'quotes' => 'Desain bukan sekadar tampilan, melainkan sebuah kisah yang dibangun melalui setiap interaksi. Bersama Web Crafser, kami bukan hanya mendesain antarmuka yang indah, tetapi juga menciptakan pengalaman yang memikat hati pengguna, mewujudkan cerita tak terlupakan di dunia digital.',
        ];

        return view('product.utama.layanan.jasa-ui-ux', $data);
    }

    public function jasaDesignGrafis()
    {
        $data = [
            'judul' => 'Layanan Jasa Design Grafis',
            'deskripsi' => 'Layanan Pembuatan Desaign Logo, Banner, Poster Dan Lain-lain.',
            'active' => 'jasa-design-grafis',
            'paragraf1' => 'Web Crafter Service, atau yang dikenal dengan sebutan Web Crafser, menawarkan layanan jasa desain grafis yang mencakup berbagai aspek kreatif, seperti pembuatan poster, banner, logo, dan banyak lagi. Tim desain grafis kami terdiri dari para ahli kreatif yang memiliki keahlian dalam menghasilkan desain yang memikat perhatian dan mencerminkan identitas merek dengan sempurna. Dari konsep hingga implementasi, Web Crafter Service berkomitmen untuk memberikan desain grafis yang unik, relevan, dan dapat memberikan dampak positif bagi target audiens Anda.',
            'paragraf2' => 'Layanan desain grafis dari Web Crafser tidak hanya terbatas pada keindahan visual, tetapi juga berfokus pada tujuan bisnis dan pesan yang ingin disampaikan. Apakah itu merancang identitas merek yang kuat melalui pembuatan logo, atau menciptakan materi pemasaran yang menarik dan efektif, tim desain kami berusaha menciptakan karya yang tidak hanya estetis, tetapi juga berdaya guna. Dengan kombinasi inovasi desain dan pemahaman mendalam tentang kebutuhan bisnis Anda, Web Crafter Service siap menjadi mitra kreatif yang membantu memperkuat citra merek dan meningkatkan kehadiran visual Anda di dunia digital.',
            'judul' => 'Apa keunggulan utama layanan desain grafis yang ditawarkan oleh Web Crafser?',
            'paragraf3' => 'Keunggulan utama layanan desain grafis Web Crafser terletak pada kombinasi antara kreativitas yang inovatif dan paham mendalam terhadap kebutuhan merek klien. Dengan fokus pada identitas merek yang unik, tim desain kami menciptakan karya yang mencerminkan karakteristik dan pesan khusus setiap klien, menghasilkan desain yang tidak hanya menarik perhatian tetapi juga membangun daya tarik yang berkelanjutan.',
            'quotes' => 'Web Crafser, di setiap desainnya, menciptakan lebih dari sekadar visual menarik. Kami membentuk identitas, merayakan kreativitas, dan memikat hati, menjadikan setiap karya sebagai cerminan eksklusif dari cerita unik setiap merek.',
        ];

        return view('product.utama.layanan.jasa-design-grafis', $data);
    }

    public function jasaMaintanance()
    {
        $data = [
            'judul' => 'Jasa Maintanance Website',
            'deskripsi' => 'Kami Siap Membantu Untuk Mengembangkan Website Anda.',
            'active' => 'jasa-maintanance-it',
            'paragraf1' => 'Web Crafter Service, atau yang lebih akrab disebut Web Crafser, menawarkan layanan jasa maintenance website yang komprehensif untuk memastikan situs web Anda tetap berjalan optimal dan terhindar dari masalah teknis. Tim maintenance kami terdiri dari para ahli teknologi web yang berdedikasi untuk memonitor, memperbarui, dan mengatasi setiap aspek teknis yang mungkin timbul dalam operasional situs Anda. Kami tidak hanya menyediakan perbaikan cepat untuk masalah teknis, tetapi juga mengimplementasikan pembaruan rutin, back-up data, dan optimalisasi performa untuk memastikan keamanan dan kinerja yang konsisten.',
            'paragraf2' => 'Layanan maintenance website dari Web Crafser dirancang untuk memberikan kebebasan kepada pemilik bisnis dan pengelola situs web, memungkinkan mereka fokus pada pengembangan bisnis tanpa harus khawatir tentang aspek teknis yang kompleks. Dengan paket maintenance yang fleksibel, kami memastikan bahwa setiap situs web, baik itu situs bisnis kecil atau platform e-commerce yang kompleks, mendapatkan perhatian khusus sesuai dengan kebutuhan dan tingkat kompleksitasnya. Web Crafter Service hadir sebagai mitra terpercaya untuk memastikan kelancaran dan kehandalan situs web Anda, sehingga Anda dapat meraih potensi penuh dari presensi online Anda.',
            'title' => 'Bagaimana Web Crafter Service memastikan bahwa layanan maintenance website mereka dapat mengakomodasi berbagai kebutuhan dan kompleksitas situs web?',
            'paragraf3' => 'Web Crafter Service memastikan fleksibilitas layanan maintenance website mereka dengan menyediakan paket yang dapat disesuaikan sesuai dengan kebutuhan dan tingkat kompleksitas setiap situs web. Dengan tim ahli teknologi web yang berkualitas, kami dapat memberikan perhatian khusus kepada setiap situs, mulai dari situs bisnis kecil hingga platform e-commerce yang kompleks, memastikan bahwa setiap situs mendapatkan perawatan yang optimal sesuai dengan karakteristiknya.',
            'quotes' => 'Di dunia digital yang terus berubah, keberlanjutan situs web bukan hanya keharusan, melainkan investasi dalam kesuksesan online. Web Crafter Service hadir untuk merawat setiap detil teknis, memberikan fondasi kokoh untuk pertumbuhan dan eksplorasi tak terbatas.',
        ];

        return view('product.utama.layanan.jasa-maintanance', $data);
    }
}
