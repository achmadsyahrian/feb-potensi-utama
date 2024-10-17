@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Ekonomi Syariah - '. env('APP_NAME'))
@section('meta_description', 'Program Studi Ekonomi Syariah - '. env('APP_NAME'))
@section('meta_keywords', 'eks upu, ekonomi syariah potensi utama, visi misi ekonomi syariah upu, berita ekonomi syariah potensi utama')
@section('canonical', env('APP_URL').'/program-studi/ekonomi-syariah')
@section('json-ld')
<script type="application/ld+json">{"@context": "https://schema.org","@type": "EducationalOrganization","name": "Ekonomi Syariah","url": "https://feb.potensi-utama.ac.id/program-studi/ekonomi-syariah","address": {"@type": "PostalAddress","addressLocality": "Medan","addressRegion": "Sumatera Utara","postalCode": "20241","streetAddress": "Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli" },"department": {"@type": "EducationalOrganization","name": "Fakultas Ekonomi & Bisnis","url": "https://feb.potensi-utama.ac.id"}}</script>
@endsection
@section('content')

   @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-b.jpg') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Program Studi</span></p>
                        <p class="post-title">Ekonomi Syariah</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Visi, Misi & Tujuan</h1>
                        <h4 class="mb-30">Visi</h4>
                        <p class="mb-0">Visi Program Studi Ekonomi Syariah merupakan pernyataan yang berorientasi ke masa
                            depan tentang apa yang diharapkan oleh Program Studi Ekonomi Syariah yang dapat dipaparkan
                            secara jelas.</p>
                        <p>
                            “Menjadi pusat kajian Ekonomi Syariah dan kewirausahaan syariah yang unggul di tingkat Nasional
                            dan mampu berperan aktif ditingkat Internasional pada Tahun 2035”.
                        </p>

                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Menjalankan aktivitas belajar mengajar yang bermutu di dunia Ekonomi Syariah yang
                                    selaras dengan perubahan sains dan teknologi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Menyelenggarakan riset dalam bidang Ekonomi Syariah yang mampu diterbitkan pada tingkat
                                    Nasional dan Internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Menyelenggarakan pengabdian yang berguna untuk khalayak umum dalam bidang Ekonomi
                                    Syariah.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Memperluas kemitraan dengan dunia usaha dan industri yang selaras untuk pengembangan
                                    sains bidang Ekonomi Syariah.</td>
                            </tr>
                        </table>

                        <h4 class="mb-30">Tujuan</h4>
                        <p>Tujuan Program Studi Ekonomi Syariah merupakan rumusan tentang profil kompetensi yang diharapkan
                            dari lulusan sesuai dengan kebutuhan pemangku kepentingan.</p>
                        <table class="text-secondary" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Menghasilkan lulusan yang dapat memiliki jiwa kompetisi, berpengetahuan dan memiliki
                                    jiwa wirausaha dalam bidang Ekonomi Syariah dengan menyesuaikan kemajuan sains dan
                                    Teknologi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Menerbitkan riset dan hasil riset lainnya dalam bidang Ekonomi Syariah yang diterbitkan
                                    pada level Nasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Menghasilkan hasil dan capaian pada pengabdian masyarakat di bidang Ekonomi Syariah yang
                                    diterbitkan pada level Nasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Menjalin kemitraan dengan masyarakat, dunia usaha dan industri yang bersifat pemerintah
                                    maupun swasta pada level Internasional.</td>
                            </tr>
                        </table>
                    </div>

                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Kurikulum Ekonomi Syariah</h1>
                        <div class="col-12 col-lg-12">
                            <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- Semester 1 -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Semester 1
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseOne" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Pancasila</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Indonesia</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar EkonomiMikro</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar EkonomiMikro</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Manajemen dan Bisnis</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Arab Ekonomi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">English I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Aplikasi Komputer</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">9</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Ekonomi Islam
                                                   </td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 1</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Semester 2 -->
                                <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          Semester 2
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Kewarganegaraan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Etika Bisnis Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Qawaid Fiqhiyyah fil Muamalah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">English II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Fiqh Muamalah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ayat dan Hadis Ekonomi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ulumul Qur'an dan Hadis</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matematika Ekonomi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">9</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ushul Fiqh fil Muamalah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 2</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                </div>

                                 <!-- Semester 3 -->
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          Semester 3
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseThree" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Mikro Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Bank dan Lembaga Keuangan Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Statistika I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sejarah Pemikiran Ekonomi Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Teori dan Perilaku Organisasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kewirausahaan dan Bisnis Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Fiqh Muamalah Kontemporer</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 3</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 {{-- Semester 4 --}}
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                          Semester 4
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseFour" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen ZISWAF</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Makro Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sosiologi Ekonomi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Pembangunan Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Statistika II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen SDI</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Praktik Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 4</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 {{-- Semester 5 --}}
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                          Semester 5
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseFive" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonometrika</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Pemasaran Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Studi Kelayakan Bisnis Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perekonomian Indonesia</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Moneter Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Keuangan Publik Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Inovasi Produk Lembaga Keuangan Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 5</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 {{-- Semester 6 --}}
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                          Semester 6
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseSix" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Penganggaran</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Metodelogi Penelitian Ekonomi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Regional</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Informasi Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Internasional</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pasar Keuangan Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Mata kuliah Peminatan 1</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Mata kuliah Peminatan 2</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">9</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Mata kuliah Pilhan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 6</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">20</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 
                                 {{-- Semester 7 --}}
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                          Semester 7
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseSeven" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perpajakan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Praktik Bank Mini Syariah</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Politik Islam</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perilaku Konsumen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 7</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">10</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>

                                 {{-- Semester 8 --}}
                                 <div class="panel single-accordion">
                                    <h6>
                                       <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                          data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                          Semester 8
                                          <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                          <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                       </a>
                                    </h6>
                                    <div id="collapseEight" class="accordion-content collapse ">
                                       <table style="width: 100%; border-collapse: collapse;">
                                          <thead>
                                                <tr>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                   <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                   <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">SKS</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Skripsi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 8</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">6</span></td>
                                                </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                            </div>
                            <table style="width: 100%; border-collapse: collapse;">
                              <thead>
                                  <tr>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: right;">Total Seluruh SKS:</th>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: center;">136</th>
                                  </tr>
                              </thead>
                           </table>
                        </div>
                    </div>

                    {{-- Berita Prodi --}}
                    <x-academic-news :latestPosts="$latestPosts"></x-academic-news>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
