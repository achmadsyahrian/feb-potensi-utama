@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Manajemen - '. env('APP_NAME'))
@section('meta_description', 'Program Studi Manajemen - '. env('APP_NAME'))
@section('meta_keywords', 'manajemen upu, manajemen potensi utama, visi misi manajemen upu, berita manajemen potensi utama')
@section('canonical', env('APP_URL').'/program-studi/manajemen')
@section('json-ld')
<script type="application/ld+json">{"@context": "https://schema.org","@type": "EducationalOrganization","name": "Manajemen","url": "https://feb.potensi-utama.ac.id/program-studi/manajemen","address": {"@type": "PostalAddress","addressLocality": "Medan","addressRegion": "Sumatera Utara","postalCode": "20241","streetAddress": "Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli" },"department": {"@type": "EducationalOrganization","name": "Fakultas Ekonomi & Bisnis","url": "https://feb.potensi-utama.ac.id"}}</script>
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
                        <p class="tag"><span>{{ __('partials/navbar.navbar.academy') }}</span></p>
                        <p class="post-title">{{ __('partials/navbar.navbar.management') }}</p>
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
                        <h1 class="mb-30">{{ __('academy/management.management.purpose.title') }}</h1>
                        <h4 class="mb-30">{{ __('academy/management.management.purpose.subtitle_vision') }}</h4>
                        <p>{{ __('academy/management.management.purpose.description_vision') }}</p>

                        <h4 class="mb-30">{{ __('academy/management.management.purpose.subtitle_mission') }}</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                           @foreach (trans('academy/management.management.purpose.description_mission') as $key => $mission)
                              <tr>
                                 <td style="width: 3%; vertical-align: top;">{{ $key }}</td>
                                 <td>{{ $mission }}</td>
                              </tr>
                           @endforeach
                        </table>

                        <h4 class="mb-30">{{__('academy/management.management.purpose.subtitle_purpose')}}</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                           @foreach (trans('academy/management.management.purpose.description_purpose') as $key => $mission)
                              <tr>
                                 <td style="width: 3%; vertical-align: top;">{{ $key }}</td>
                                 <td>{{ $mission }}</td>
                              </tr>
                           @endforeach
                        </table>
                    </div>

                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">{{__('academy/management.management.curriculum.title')}}</h1>
                        <div class="col-12 col-lg-12">
                            <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">
                              @foreach (trans('academy/management.management.curriculum.content') as $semester => $courses)
                                 <div class="panel single-accordion">
                                    <h6>
                                          <a role="button" class="" aria-expanded="true" aria-controls="collapse{{ $loop->index }}"
                                             data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->index }}">
                                             {{ $semester }}
                                             <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                             <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                          </a>
                                    </h6>
                                    <div id="collapse{{ $loop->index }}" class="accordion-content collapse">
                                          <table style="width: 100%; border-collapse: collapse;">
                                             <thead>
                                                <tr>
                                                      <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#</th>
                                                      <th style="border: 1px solid #ddd; padding: 8px;">{{__('academy/economy.economy.curriculum.course')}}</th>
                                                      <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">{{__('academy/economy.economy.curriculum.credit')}}</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @php $totalCredits = 0; @endphp
                                                @foreach ($courses as $index => $course)
                                                   <tr>
                                                      <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">{{ $loop->iteration }}</td>
                                                      <td style="border: 1px solid #ddd; padding: 8px;">{{ $course['matkul'] }}</td>
                                                      <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">{{ $course['credits'] }}</td>
                                                   </tr>
                                                   @php $totalCredits += $course['credits']; @endphp
                                                @endforeach
                                                <tr>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"></td>
                                                   <td style="border: 1px solid #ddd; padding: 8px;"><strong>Total</strong></td>
                                                   <td class="text-center" style="border: 1px solid #ddd; padding: 8px;"><strong>{{ $totalCredits }}</strong></td>
                                                </tr>
                                          </tbody>
                                          </table>
                                    </div>
                                 </div>
                              @endforeach
                            </div>
                            <table style="width: 100%; border-collapse: collapse;">
                              <thead>
                                  <tr>
                                    <th style="border: 0 solid #ddd; padding: 8px; text-align: right;">{{__('academy/management.management.curriculum.total_credits')}}:</th>
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
