@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 style="font-size: 28px;" class="mb-3">Tentang ASA KITA</h2>
                <div class="list-group" id="sidebar-menu">
                    <a href="#" class="list-group-item list-group-item-action active" data-content="mengapa">Mengapa Harus ASA KITA?</a>
                    <a href="#" class="list-group-item list-group-item-action" data-content="sasaran">Sasaran dan Tujuan</a>
                    <a href="#" class="list-group-item list-group-item-action" data-content="strategi">Strategi</a>
                    <a href="#" class="list-group-item list-group-item-action" data-content="hasil">Hasil yang Diharapkan</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="mengapa" class="content-section" style="text-align: justify;">
                    <h3 style="font-size: 23px;" class="mb-3">Mengapa harus ASA KITA?</h3>
                    <p><strong>PEMBIN<span style="color:red;font-weight:bold">A</span>AN <span style="color:red;font-weight:bold">S</span>TATISTIK SEKTOR<span style="color:red;font-weight:bold">A</span>L BER<span style="color:red;font-weight:bold">K</span>UAL<span style="color:red;font-weight:bold">I</span>TAS DAN BERKELANJU<span style="color:red;font-weight:bold">TA</span>N </strong></p>
                    <p>Badan Pusat Statistik (BPS) memiliki peran penting sebagai Pembina Data, namun sayangnya, 
                        pembinaan statistik sektoral belum dilakukan secara rutin. Selain itu, Organisasi Perangkat Daerah (OPD) yang menyelenggarakan kegiatan statistik masih belum sepenuhnya mengajukan rekomendasi statistik dan menyampaikan metadata ke BPS Kabupaten Tuban. 
                        Kondisi ini tercermin dalam rendahnya nilai hasil Evaluasi Pengelolaan Statistik Sektoral (EPSS) Pemkab Tuban tahun 2023, yang hanya mencapai nilai IPS sebesar 2,05. Tantangan lain yang dihadapi adalah terbatasnya jumlah statistisi serta adanya mutasi 
                        penanggung jawab data dan statistik yang cepat di OPD, yang turut mempengaruhi kualitas pengelolaan data statistik.</p>
                    <p>Untuk itu, Pembinaan statistik sektoral yang berkualitas dan berkelanjutan sangat penting untuk memastikan akurasi dan integritas data.</p>
                </div>
                <div id="sasaran" class="content-section" style="display:none;">
                    <h3 style="font-size: 23px;" class="mb-3">Sasaran dan Tujuan</h3>
                    <ol>
                        <li>Terselenggaranya pembinaan statistik sektoral secara rutin 1x/bulan dengan materi yang telah disusun berdasarkan indikator kematangan EPSS</li>
                        <li>Meningkatnya pemahaman statistik perangkat OPD</li>
                        <li>Tingkat partisipasi OPD dalam kegiatan pembinaan rutin sebesar 100 persen</li>
                        <li>OPD yang menyelenggarakan kegiatan statistik telah mengajukan rekomendasi dan metadata statistik sebesar 100 persen pada tahun 2025</li>
                        <li>Meningkatnya nilai Indeks Pembangunan Statistik Pemkab Tuban pada tahun 2025</li>
                    </ol>
                </div>
                <div id="strategi" class="content-section" style="display:none;">
                    <h3 style="font-size: 23px;" class="mb-3">Strategi</h3>
                    <div>

                        <ol>
                            <li>Menyusun matriks alokasi statistisi sebagai pendamping statistik pada setiap OPD</li>
                            <li>Menyusun materi pembinaan statistik berdasarkan indikator kematangan EPSS</li>
                            <li>Kolaborasi dengan Dinas Kominfo SP Kab Tuban dan Bappeda dalam pelaksanaan ASA KITA</li>
                            <li>Mendokumentasikan seluruh kegiatan dan materi pembinaan statistik sektoral untuk manfaat yang lebih luas</li>
                            <ol>
                    </div>
                    
                    <div>
                    
                    <p>Selanjutnya, untuk terus mengembangkan program ASA KITA, dilakukan evaluasi berdasarkan feedback yang diterima. Cara kami mendapatkan feedback adalah sebagai berikut:</p>
                    <ol>
                        <li>Memberikan pretest dan postest pada saat melakukan pembinaan statistik sektoral</li>
                        <li>Memberikan angket evaluasi di setiap akhir pelaksanaan pembinaan statistik sektoral</li>
                        <li>Berkoordinasi dengan Dinas Kominfo SP dan Bappeda Litbang terkait kebutuhan pembinaan statistik yang dibutuhkan oleh OPD</li>
                    <ol>
                </div>
                <div>            
                </div>         
                </div>
                <div id="hasil" class="content-section" style="display:none;">
                    <h3 style="font-size: 23px;" class="mb-3">Hasil yang Diharapkan</h3>
                    <ol>
                        <li>Meningkatkan pengetahuan dan pemahaman statistik perangkat OPD</li>
                        <li>Terselenggaranya kegiatan statistik sektoral sesuai dengan prinsip SDI</li>
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
