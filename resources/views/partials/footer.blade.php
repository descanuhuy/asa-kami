        <!-- Footer -->
        <footer class="py-5" style="background-color: #1E2A5E;">
            <div class="container">
                <div class="row">

                    <!-- Logo and Copyright -->
                    <div class="col-md-4 text-center text-md-start mb-3 mb-md-0 d-flex flex-column gap-2" style="margin-top:2em">
                        <div class="d-flex align-items-center gap-2">
                            <a data-asw-orgfontsize="18" style="font-size: 18px;">
                                <img alt="Badan Pusat Statistik" loading="lazy" width="65" height="50" decoding="async" 
                                class="w-12 h-12 object-contain xl:my-1" style="color:transparent"
                                src="{{ asset('image/logo_bps.png') }}" >
                            <h5 class="italic font-arial uppercase mb-0" data-asw-orgfontsize="20" style="font-size: 20px;">
                                <a data-asw-orgfontsize="20" style="font-size: 18px; color: white; font-style: italic;">BADAN PUSAT STATISTIK KABUPATEN TUBAN</a>
                            </h5>
                            </a>
                        </div>
                        <p class="mt-2 text-white" style="font-size: 14px;">© Alfin & Team 2024</p>
                    </div>

                    <!-- Social Media -->
                    <style>
                        /* Force no underline on default state */
                        a.no-underline {
                            text-decoration: none !important;
                        }

                        /* Underline on hover */
                        a.no-underline:hover {
                            text-decoration: underline !important;
                        }
                    </style>
                    
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <h6 class="mb-3 text-white" style="font-size: 20px;" >Media Sosial</h6>
                        <div class="d-flex align-items-center justify-content-center">

                            <ul class="list-unstyled">
                                <li class="mb-1">
                                    <a href="https://twitter.com/bpstuban" class="text-white no-underline d-flex align-items-center" target="_blank" rel="noopener noreferrer">
                                        <!-- Ikon Twitter (X) -->
                                        <i class="bi bi-twitter-x"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2" style="font-size: 16px;">@BpsTuban</span>
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://www.youtube.com/channel/UCR1a6zvpX8dYGc6COKbjJNg" class="text-white no-underline d-flex align-items-center" target="_blank" rel="noopener noreferrer">
                                        <!-- Ikon YouTube -->
                                        <i class="bi bi-youtube"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2" style="font-size: 16px;">BPS Kabupaten Tuban</span>
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://www.instagram.com/bpstuban" class="text-white no-underline d-flex align-items-center" target="_blank" rel="noopener noreferrer">
                                        <!-- Ikon Instagram -->
                                        <i class="bi bi-instagram"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2" style="font-size: 16px;">@bpstuban</span>
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://www.facebook.com/bpstuban" class="text-white no-underline d-flex align-items-center" target="_blank" rel="noopener noreferrer">
                                        <!-- Ikon Facebook -->
                                        <i class="bi bi-facebook"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2" style="font-size: 16px;">BPS Kabupaten Tuban</span>
                                    </a>
                                </li>
                            </ul>
                        </div>         
            
                    </div>

                    <!-- Contact Info -->
                    <div class="col-md-4 text-center">
                        <h6 class="mb-3 text-white text-center" style="font-size: 20px;">Kontak Kami</h6>
                        
                        <div class="d-flex align-items-center justify-content-center">

                            <ul class="list-unstyled">
                                <li class="mb-1">
                                    <a class="text-white" style="text-decoration: none;">
                                        <!-- Ikon Location -->
                                        <i class="bi bi-geo-alt"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2">Jalan Manunggal 8, Tuban</span>
                                    </a>
                                </li>

                                <li class="mb-1">
                                    <a class="text-white" style="text-decoration: none;">
                                        <!-- Ikon Location -->
                                        <i class="bi bi-telephone-fill"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2">Telepon/Fax: (0356) 321974</span>
                                        {{-- <span class="ms-2">Jalan Manunggal 8, Tuban</span> --}}
                                    </a>
                                </li>
                            
                                <li class="mb-1">
                                    <a href="mailto:bps3523@bps.go.id" class="text-white no-underline d-flex" target="_blank" rel="noopener noreferrer">
                                        <!-- Ikon Mail -->
                                        <i class="bi bi-envelope-fill"></i>
                                        <!-- Teks di sebelah ikon -->
                                        <span class="ms-2">bps3523@bps.go.id</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>  
                        {{-- <div class="d-flex mx-auto flex-column align-items-center justify-content-center"> 
                            <div class="mt-1">
                                <a class="text-white" style="text-decoration: none;">
                                    <!-- Ikon Location -->
                                    <i class="bi bi-geo-alt"></i>
                                    <!-- Teks di sebelah ikon -->
                                    <span class="ms-2">Jalan Manunggal 8, Tuban</span>
                                </a>
                            </div>
                            <div class="mt-1">
                                <a class="text-white" style="text-decoration: none;">
                                    <!-- Ikon Telephone -->
                                    <i class="bi bi-telephone-fill"></i>
                                    <!-- Teks di sebelah ikon -->
                                    <span class="ms-2">Telp/Fax: (0356) 321974</span>
                                </a>
                            </div>
                            <div class="mt-1">
                                <a href="mailto:bps3523@bps.go.id" class="text-white no-underline d-flex" target="_blank" rel="noopener noreferrer">
                                    <!-- Ikon Mail -->
                                    <i class="bi bi-envelope-fill"></i>
                                    <!-- Teks di sebelah ikon -->
                                    <span class="ms-2">bps3523@bps.go.id</span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                    
                </div>
            </div>
        </footer>

