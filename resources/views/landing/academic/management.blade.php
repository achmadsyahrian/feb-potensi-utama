@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Manajemen - '. env('APP_NAME'))
@section('meta_description', 'Program Studi Manajemen - '. env('APP_NAME'))
@section('meta_keywords', 'manajemen upu, manajemen potensi utama, visi misi manajemen upu, berita manajemen potensi utama')
@section('canonical', env('APP_URL').'/program-studi/manajemen')

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
                        <p class="post-title">Manajemen</p>
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
                        <p>Pada Tahun 2035 Menjadi Program Studi Manajemen yang Unggul dalam Bidang Manajemen Berbasis IT di Tingkat Nasional dan Berperan Aktif dalam Penelitian di Tingkat Internasional.</p>

                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Melaksanakan Tri Dharma Perguruan Tinggi di Bidang Ilmu Manajemen.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Melaksanakan dan memajukan Program Studi Manajemen berbassis Teknologi, Informasi dan Komunikasi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Melaksanakan pelatihan dan pengembangan Manajemen, softskill dan kewirausahaan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Melaksanakan dan mengembangkan layanan akademik dan meningkatkan kualitas tata kelola yang baik (good governance).</td>
                            </tr>
                            <tr>
                              <td style="vertical-align: top;">4.</td>
                              <td>Menjalin kerjasama tingkat Nasional dan Internasional yang produktif, inovatif dan berkelanjutan.</td>
                            </tr>
                        </table>

                        <h4 class="mb-30">Tujuan</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Menghasilkan lulusan yang memiliki daya saing di tingkat Nasional dan Internasional sesuai dengan perkembangan ilmu Manajemen.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Menghasilkan penelitian dan karya ilmiah dosen Manajemen yang di publikasikan pada tingkat Nasional dan Internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Menghasilkan PkM dosen yang di publikasikan pada tingkat Nasional dan Internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Menghasilkan Pendidikan, Penelitian dan Pengabdian kepada Masyarakat yang berkualitas dan bermutu dengan menerapkan Teknologi Informasi.</td>
                            </tr>
                            <tr>
                              <td style="vertical-align: top;">5.</td>
                              <td>Menghasilkan kegiatan manajemen yang memiliki muatan softskill dan entrepreneurship dibidang IT pada tingkat Nasional dan Internasional.</td>
                            </tr>
                            <tr>
                              <td style="vertical-align: top;">6.</td>
                              <td>Menghasilkan layanan berkualitas dan tata kelola yang baik (good governance) guna peningkatan penyelenggaraan tridharma perguruan tinggi.</td>
                            </tr>
                            <tr>
                              <td style="vertical-align: top;">7.</td>
                              <td>Menghasilkan sistem Penjamin Mutu Internal yang menjamin penyelenggaraan perguruan tinggi secara bermutu dan berkelanjutan.</td>
                            </tr>
                            <tr>
                              <td style="vertical-align: top;">8.</td>
                              <td>Meningkatkan jumlah kerjasama tingkat Nasional dan Internasional yang produktif, inovatif, dan berkelanjutan.</td>
                            </tr>
                        </table>
                    </div>

                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Kurikulum Manajemen</h1>
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
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Agama I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pancasila</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Inggris I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Manajemen</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Akuntansi I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Bisnis</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Ekonomi Mikro</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Matematika Ekonomi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
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
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Agama II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kewirausahaan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Makro</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">ArabStatistik Ekonomi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Akuntansi II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Praktek Akuntansi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Aplikasi Komputer</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Inggris II</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 2</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">21</span></td>
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
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Kewarnegaraan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Keuangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Operasional</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Pemasaran</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Keuangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Sumber Daya Manusia</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Bank dan Lembaga Keuangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">English for Business I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
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
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Manajerial</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Penganggaran</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Studi Kelayakan Bisnis</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Portofolio dan Analisis Investasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Praktik Statistik</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perpajakan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">English for Business I</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1</td>
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
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Strategi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Biaya</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Informasi Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Teori Perilaku Organisasi</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Metodelogi Peneleitian</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Biaya</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Sistem Pengendalian Manajemen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">8</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">E-Commerce</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 5</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">22</span></td>
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
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Resiko</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perilaku Konsumen</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Manajemen dan Kepemimpinan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">E-Marketing</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Analisa Laporan Keuangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matakuliah Pilihan Peminatan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matakuliah Pilihan Peminatan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
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
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Hukum Bisnis</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Komunikasi Bisnis</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Indonesia</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Internasional</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Perekonomian Indonesia</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Matakuliah Pilihan Peminatan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7</td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;">Praktek Kerja Lapangan</td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">Total SKS Semester 7</span></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><span style="font-weight: bold;">19</span></td>
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
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: center;">148</th>
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
