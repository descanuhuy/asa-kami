@extends('layouts.guest')

@section('content')
    <div class="container bg-light rounded-custom p-5" style="margin: 100px 0px;">
        <div class="row">
            <div class="col-md-3">
                <h2 style="font-size: 28px;" class="mb-3">Tentang BISA TUNTAS</h2>
                <div class="list-group" id="sidebar-menu">
                    <a href="#" class="list-group-item list-group-item-action active" data-content="mengapa">Latar Belakang</a>
                    <a href="#" class="list-group-item list-group-item-action" data-content="sasaran">Tujuan dan Sasaran</a>
                    <a href="#" class="list-group-item list-group-item-action" data-content="strategi">Strategi</a>
                    <a href="#" class="list-group-item list-group-item-action" data-content="hasil">Hasil yang Diharapkan</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="mengapa" class="content-section" style="text-align: justify;">
                    <h3 style="font-size: 23px;" class="mb-3">Mengapa harus BISA TUNTAS?</h3>
                    <p><strong>PEM<span style="color:red;font-weight:bold">BI</span>NAAN <span style="color:red;font-weight:bold">S</span>T<span style="color:red;font-weight:bold">A</span>TISTIK SEK<span style="color:red;font-weight:bold">T</span>ORAL YANG BERKELANJ<span style="color:red;font-weight:bold">U</span>TA<span style="color:red;font-weight:bold">N </span>DAN BERKUALI<span style="color:red;font-weight:bold">TAS </strong></p>
                    <p>Badan Pusat Statistik (BPS) memiliki peran penting sebagai Pembina Data. Namun sayangnya, 
                        penyelenggaraan pembinaan statistik sektoral di Kabupaten Tuban belum optimal. Hal ini menyebabkan belum semua OPD mendapatkan pembinaan statistik sesuai kebutuhan,
                        pengajuan rekomendasi statistik dan penyampaian metadata masih rendah,
                        nilai Indeks Pembangunan Statistik (IPS) juga masih rendah,
                        belum tersedianya materi pembinaan statistik sektoral yang memuat indikator kematangan EPSS, serta
                        belum ada pendokumentasian kegiatan pembinaan statistik sektoral yang bisa dimanfaatkan oleh pihak eksternal. </p>
                        
                    <p>Untuk itu, implementasi web "BISA TUNTAS" merupakan aksi perubahan untuk mendukung pembinaan statistik sektoral yang berkelanjutan dan berkualitas di Kabupaten Tuban.</p>
                </div>
                <div id="sasaran" class="content-section" style="display:none;">
                    <h3 style="font-size: 23px;" class="mb-3">Tujuan dan Sasaran</h3>
                    <ol>
                        <li>Penyelenggaraan pembinaan statistik sektoral tercapai 100 persen</li>
                        <li>Rekomendasi dan penyampaian metadata Statistik tercapai 100 persen</li>
                        <li>Nilai Indeks Pembangunan Statistik Pemkab Tuban meningkat pada tahun 2025</li>
                    </ol>
                </div>
                <div id="strategi" class="content-section" style="display:none;">
                    <h3 style="font-size: 23px;" class="mb-3">Strategi</h3>
                    <div>

                        <ol>
                            <li>Mengubah perilaku dari minat yang rendah menuju minat yang tinggi untuk meningkatkan pembinaan statistik sektoral yang berkelanjutan dan berkualitas</li>
                            <li>Memperoleh dukungan, baik dari pimpinan, tim kerja, maupun pihak eksternal</li>
                            <li>Menggunakan sumber daya manusia yang berkualitas, peralatan yang mumpuni, dan dukungan finansial yang baik</li>
                            <ol>
                    </div>
                    
                    <div>
                    
                    <p>Selanjutnya, untuk terus mengembangkan program BISA TUNTAS, dilakukan evaluasi berdasarkan feedback yang diterima. Cara kami mendapatkan feedback adalah sebagai berikut:</p>
                    <ol>
                        <li>Menyebarkan angket evaluasi web BISA TUNTAS</li>
                        <li>Memberikan pretest dan postest pada saat melakukan pembinaan statistik sektoral</li>
                        <li>Evaluasi kebutuhan pembinaan statistik</li>
                        <li>Monitoring berkala</li>
                    <ol>
                </div>
                <div>            
                </div>         
                </div>
                <div id="hasil" class="content-section" style="display:none;">
                    <h3 style="font-size: 23px;" class="mb-3">Hasil yang Diharapkan</h3>
                    <ol>
                        <li>Terselenggaranya kegiatan statistik sektoral sesuai dengan prinsip SDI</li>
                        <li>Dampak perubahan dirasakan oleh semua pihak</li>
                        <li>Meningkatnya nilai Indeks Pembangunan Statistik (IPS) Pemkab Tuban</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Style for active and hover state */
        .list-group-item-action.active,
        .list-group-item-action:hover {
            background-color: #55679c;
            color: white;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuItems = document.querySelectorAll("#sidebar-menu .list-group-item");
            const contentSections = document.querySelectorAll(".content-section");

            menuItems.forEach(item => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Remove active class from all menu items
                    menuItems.forEach(item => item.classList.remove("active"));
                    
                    // Add active class to the clicked item
                    item.classList.add("active");

                    // Hide all content sections
                    contentSections.forEach(section => section.style.display = "none");

                    // Show the selected content section
                    const contentId = item.getAttribute("data-content");
                    document.getElementById(contentId).style.display = "block";
                });
            });
        });
    </script>
@endsection
