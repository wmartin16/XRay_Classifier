@extends('layouts.app')

@section('css')
    <style>
        .accordion-button {
            font-weight: bold;
            font-size: 20px;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="pt-3">
                Frequently Asked Questions
                <small class="text-muted">World Health Organization</small>
            </h3>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apa itu coronavirus?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia.
                            Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari
                            batuk pilek hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe
                            Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan menyebabkan penyakit
                            COVID-19.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apa itu COVID-19?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.
                            Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan,
                            Tiongkok, bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di
                            banyak negara di seluruh dunia.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Apa saja gejala COVID-19?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Gejala-gejala COVID-19 yang paling umum adalah demam, batuk kering, dan rasa lelah. Gejala
                            lainnya yang lebih jarang dan mungkin dialami beberapa pasien meliputi rasa nyeri dan sakit,
                            hidung tersumbat, sakit kepala, konjungtivitis, sakit tenggorokan, diare, kehilangan indera rasa
                            atau penciuman, ruam pada kulit, atau perubahan warna jari tangan atau kaki. Gejala-gejala yang
                            dialami biasanya bersifat ringan dan muncul secara bertahap. Beberapa orang menjadi terinfeksi
                            tetapi hanya memiliki gejala ringan.
                            <br></br>
                            Sebagian besar (sekitar 80%) orang yang terinfeksi berhasil pulih tanpa perlu perawatan khusus.
                            Sekitar 1 dari 5 orang yang terinfeksi COVID-19 menderita sakit parah dan kesulitan bernapas.
                            Orang-orang lanjut usia (lansia) dan orang-orang dengan kondisi medis penyerta seperti tekanan
                            darah tinggi, gangguan jantung dan paru-paru, diabetes, atau kanker memiliki kemungkinan lebih
                            besar mengalami sakit lebih serius. Namun, siapa pun dapat terinfeksi COVID-19 dan mengalami
                            sakit yang serius. Orang dari segala usia yang mengalami demam dan/atau batuk disertai dengan
                            kesulitan bernapas/sesak napas, nyeri/tekanan dada, atau kehilangan kemampuan berbicara atau
                            bergerak harus segera mencari pertolongan medis. Jika memungkinkan, disarankan untuk menghubungi
                            penyedia layanan kesehatan atau fasilitas kesehatan terlebih dahulu, sehingga pasien dapat
                            diarahkan ke fasilitas kesehatan yang tepat.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apa yang harus saya lakukan jika saya memiliki gejala COVID-19 dan kapan saya harus mencari
                            pertolongan medis?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Jika Anda mengalami gejala ringan, seperti batuk ringan atau demam ringan, secara umum tidak
                            perlu mencari pertolongan medis. Tetap di rumah, isolasi diri, dan pantau gejala Anda. Ikuti
                            panduan nasional tentang isolasi mandiri.
                            <br></br>
                            Namun, jika Anda tinggal di daerah dengan malaria atau demam berdarah, Anda tidak boleh
                            mengabaikan gejala demam. Segera cari pertolongan medis. Saat Anda pergi ke fasilitas kesehatan,
                            kenakan masker jika memungkinkan, jaga jarak setidaknya 1 meter dari orang lain, dan jangan
                            menyentuh permukaan benda dengan tangan Anda. Jika yang sakit adalah anak, bantu anak untuk
                            mematuhi nasihat ini.
                            <br></br>
                            Segera cari perawatan medis jika Anda mengalami kesulitan bernapas atau nyeri/tekanan di dada.
                            Jika memungkinkan, hubungi penyedia layanan kesehatan Anda terlebih dahulu, sehingga Anda dapat
                            diarahkan ke fasilitas kesehatan yang tepat.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Bagaimana cara COVID-19 menyebar?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Orang dapat tertular COVID-19 dari orang lain yang terinfeksi virus ini. COVID-19 dapat menyebar
                            terutama dari orang ke orang melalui percikan-percikan dari hidung atau mulut yang keluar saat
                            orang yang terinfeksi COVID-19 batuk, bersin atau berbicara. Percikan-percikan ini relatif
                            berat, perjalanannya tidak jauh dan jatuh ke tanah dengan cepat. Orang dapat terinfeksi COVID-19
                            jika menghirup percikan orang yang terinfeksi virus ini. Oleh karena itu, penting bagi kita
                            untuk menjaga jarak minimal 1 meter dari orang lain. Percikan-percikan ini dapat menempel di
                            benda dan permukaan lainnya di sekitar orang seperti meja, gagang pintu, dan pegangan tangan.
                            Orang dapat terinfeksi dengan menyentuh benda atau permukaan tersebut, kemudian menyentuh mata,
                            hidung, atau mulut mereka. Inilah sebabnya penting untuk mencuci tangan secara teratur dengan
                            sabun dan air bersih mengalir, atau membersihkannya dengan cairan antiseptik berbahan dasar
                            alkohol. WHO terus mengkaji perkembangan penelitian tentang cara penyebaran COVID-19 dan akan
                            menyampaikan temuan-temuan terbaru.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Apakah COVID-19 dapat menular dari orang yang tidak menunjukkan gejala?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            COVID-19 terutama menyebar melalui percikan saluran pernapasan yang dikeluarkan oleh seseorang
                            yang batuk atau memiliki gejala lain seperti demam atau rasa lelah. Banyak orang yang terinfeksi
                            COVID-19 hanya mengalami gejala ringan terutama pada tahap-tahap awal. Karena itu, COVID-19
                            dapat menular dari orang yang hanya bergejala ringan, seperti batuk ringan, tetapi merasa sehat.
                            <br></br>
                            Beberapa laporan menunjukkan bahwa orang tanpa gejala dapat menularkan virus ini namun belum
                            diketahui seberapa sering penularan dengan cara tersebut terjadi. WHO terus mengkaji
                            perkembangan penelitian tentang cara penyebaran COVID-19 dan akan menyampaikan temuan-temuan
                            terbaru.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Apa yang dapat saya lakukan untuk melindungi diri saya dan orang lain jika tidak mengetahui
                            siapa yang terinfeksi COVID-19?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Mempraktikkan kebersihan tangan dan pernapasan setiap saat sangatlah penting, dan merupakan cara
                            terbaik untuk melindungi orang lain dan diri Anda sendiri.
                            <br></br>
                            Apabila memungkinkan, jaga jarak Anda dengan orang lain minimal 1 meter terutama jika berada di
                            dekat orang yang batuk atau bersin. Karena beberapa orang yang terinfeksi mungkin belum
                            menunjukkan gejala atau gejalanya masih ringan, menjaga jarak fisik dengan semua orang adalah
                            upaya terbaik jika Anda berada di daerah di mana COVID-19 menyebar.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Apa yang sebaiknya saya lakukan jika saya berkontak erat dengan seseorang yang terinfeksi
                            COVID-19?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Jika Anda telah berkontak erat dengan seseorang yang terinfeksi COVID-19 maka Anda kemungkinan
                            akan terinfeksi.
                            <br></br>
                            Kontak erat berarti tinggal atau berada dalam jarak kurang dari 1 meter dari orang yang
                            terinfeksi COVID-19. Jika demikian, sangat disarankan untuk tidak meninggalkan rumah.
                            <br></br>
                            Namun, jika Anda tinggal di daerah di mana terdapat kasus malaria atau demam berdarah, maka
                            penting untuk tidak mengabaikan gejala demam. Segera cari pertolongan medis. Saat Anda pergi ke
                            fasilitas kesehatan, kenakan masker jika memungkinkan, jaga jarak setidaknya 1 meter dari orang
                            lain, dan jangan menyentuh permukaan dengan tangan Anda. Jika yang sakit adalah anak, bantu anak
                            untuk mematuhi nasihat ini.
                            <br></br>
                            Jika Anda tidak tinggal di daerah di mana terdapat kasus malaria atau demam berdarah, lakukanlah
                            hal-hal berikut:
                            <br></br>
                            • Jika Anda sakit, meskipun gejalanya sangat ringan, Anda harus melakukan isolasi mandiri.
                            • Meskipun Anda tidak menyadari telah terpajan COVID-19 dan mengalami gejala, lakukan isolasi
                            mandiri dan pantau diri Anda.
                            • Anda lebih mungkin menginfeksi orang lain pada tahap awal penyakit meskipun gejala Anda
                            ringan; oleh karena itu isolasi mandiri sangatlah penting.
                            • Jika Anda tidak memiliki gejala, tetapi telah terpajan orang yang terinfeksi, lakukan
                            karantina mandiri selama 14 hari.
                            <br></br>
                            Jika Anda terinfeksi COVID-19 (telah dikonfirmasi dengan tes), lakukan isolasi mandiri selama 14
                            hari bahkan setelah gejala menghilang sebagai tindakan pencegahan, meskipun belum diketahui
                            secara pasti berapa lama pasien masih dapat menularkan setelah dinyatakan sembuh. Ikuti pedoman
                            nasional tentang isolasi mandiri.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Apa itu isolasi mandiri?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Isolasi mandiri adalah tindakan penting yang dilakukan oleh orang yang memiliki gejala COVID-19
                            untuk mencegah penularan ke orang lain di masyarakat, termasuk anggota keluarga.
                            <br></br>
                            Isolasi mandiri adalah ketika seseorang yang mengalami demam, batuk, atau gejala COVID-19
                            lainnya tinggal di rumah dan tidak pergi bekerja, sekolah, atau ke tempat-tempat umum. Hal ini
                            dilakukan secara sukarela atau berdasarkan rekomendasi dari penyedia layanan kesehatan. Namun,
                            jika Anda tinggal di daerah dengan kasus malaria atau demam berdarah, Anda tidak boleh
                            mengabaikan gejala demam. Segera cari pertolongan medis. Saat Anda pergi ke fasilitas kesehatan,
                            kenakan masker jika memungkinkan, jaga jarak setidaknya 1 meter dari orang lain dan jangan
                            menyentuh permukaan benda dengan tangan Anda. Jika yang sakit adalah anak, bantu anak mematuhi
                            nasihat ini.
                            <br></br>
                            Jika Anda tidak tinggal di daerah dengan kasus malaria atau demam berdarah, lakukanlah hal-hal
                            berikut:
                            <br></br>
                            • Jika seseorang melakukan isolasi mandiri, artinya orang tersebut sedang sakit namun tidak
                            parah (tidak memerlukan pertolongan medis) • Sediakan kamar sendiri yang besar dengan sirkulasi
                            udara yang baik dan dilengkapi sarana mencuci tangan dan toilet.
                            • Jika tidak memungkinkan, pisahkan tempat tidur dengan orang lain dengan jarak minimal 1 meter.
                            • Tetap jaga jarak minimal 1 meter dengan orang lain, termasuk anggota keluarga.
                            • Pantau gejala yang dialami setiap hari.
                            • Lakukan isolasi mandiri selama 14 hari meskipun Anda merasa sehat.
                            • Jika Anda mengalami kesulitan bernapas, segera hubungi penyedia layanan kesehatan Anda –
                            hubungi terlebih dahulu jika memungkinkan.
                            • Tetap positif dan semangat dengan cara tetap menjaga silahturahmi dengan orang-orang tercinta
                            melalui telepon atau media online dan dengan berolahraga di rumah.
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
