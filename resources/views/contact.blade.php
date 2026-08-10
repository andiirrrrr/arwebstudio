@extends('layouts.app')

@section('title', 'Kontak ARWebStudio - Jasa Pembuatan Website Makassar')
@section('meta_description', 'Hubungi ARWebStudio untuk konsultasi pembuatan website profesional di Makassar. Tersedia layanan WhatsApp dan email untuk UMKM di Makassar.')

@section('content')
    <!-- ===== HERO SECTION ===== -->
    <section class="relative px-5 lg:px-16 py-[80px] overflow-hidden">
        <!-- Decorative orbs -->
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-[#114784]/10 rounded-full blur-[120px] pointer-events-none -z-0"></div>
        <div class="absolute top-10 right-1/4 w-[300px] h-[300px] bg-[#F5A623]/5 rounded-full blur-[100px] pointer-events-none -z-0"></div>
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col items-center text-center gap-6 relative z-10">
                <div class="flex flex-col gap-4">
                    <span class="contact-hero-badge text-sm font-semibold text-[#F5A623] uppercase tracking-[0.2em]">
                        Hubungi Kami
                    </span>
                    <h1 class="contact-hero-title font-['Sora'] text-[40px] lg:text-[72px] font-bold leading-[48px] lg:leading-[80px] tracking-[-0.02em] text-[#e0e3e5]">
                        Mari Wujudkan<br/>
                        <span class="text-[#a8c8ff]">Website Impian</span> Anda
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="contact-section px-5 lg:px-16 py-[5px]">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-4">
                        <span class="contact-info-badge text-sm font-semibold text-[#a8c8ff] uppercase tracking-widest">Informasi Kontak</span>
                        <h2 class="contact-info-title font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] tracking-[-0.01em] text-[#e0e3e5]">
                            Jangan ragu untuk menghubungi kami
                        </h2>
                        <p class="contact-info-desc text-[16px] text-[#c5c6ce]">
                            Kami siap memberikan solusi terbaik untuk kebutuhan digital bisnis Anda.
                        </p>
                    </div>

                    <div class="flex flex-col gap-5">
                        <!-- Lokasi -->
                        <div class="contact-info-item group flex items-start gap-4 p-4 rounded-xl border border-transparent hover:border-[rgba(74,127,199,0.2)] hover:bg-[#1d2022] transition-all duration-300">
                            <div class="contact-icon-wrap w-14 h-14 bg-[#114784]/30 rounded-xl flex items-center justify-center text-[#a8c8ff] flex-shrink-0 group-hover:bg-[#114784]/50 group-hover:scale-110 transition-all duration-300 shadow-lg shadow-[#114784]/10">
                                <span class="material-symbols-outlined text-2xl">location_on</span>
                            </div>
                            <div class="pt-1">
                                <p class="text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.15em] mb-1">Lokasi</p>
                                <p class="text-[15px] text-[#e0e3e5] leading-relaxed">{{ site_setting('address', 'Makassar, Sulawesi Selatan, Indonesia') }}</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-info-item group flex items-start gap-4 p-4 rounded-xl border border-transparent hover:border-[rgba(74,127,199,0.2)] hover:bg-[#1d2022] transition-all duration-300">
                            <div class="contact-icon-wrap w-14 h-14 bg-[#114784]/30 rounded-xl flex items-center justify-center text-[#a8c8ff] flex-shrink-0 group-hover:bg-[#114784]/50 group-hover:scale-110 transition-all duration-300 shadow-lg shadow-[#114784]/10">
                                <span class="material-symbols-outlined text-2xl">email</span>
                            </div>
                            <div class="pt-1">
                                <p class="text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.15em] mb-1">Email</p>
                                <a href="mailto:{{ site_setting('email') }}" class="text-[15px] text-[#ffffff] hover:text-[#a8c8ff] transition-colors font-medium">
                                    {{ site_setting('email') }}
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-info-item group flex items-start gap-4 p-4 rounded-xl border border-transparent hover:border-[rgba(74,127,199,0.2)] hover:bg-[#1d2022] transition-all duration-300">
                            <div class="contact-icon-wrap w-14 h-14 bg-[#114784]/30 rounded-xl flex items-center justify-center text-[#a8c8ff] flex-shrink-0 group-hover:bg-[#114784]/50 group-hover:scale-110 transition-all duration-300 shadow-lg shadow-[#114784]/10">
                                <span class="material-symbols-outlined text-2xl">phone</span>
                            </div>
                            <div class="pt-1">
                                <p class="text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.15em] mb-1">Telepon / WhatsApp</p>
                                <a href="{{ whatsapp_link() }}" target="_blank" class="text-[15px] text-[#ffffff] hover:text-[#a8c8ff] transition-colors font-medium">
                                    {{ site_setting('whatsapp_display', 'WhatsApp') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="contact-divider w-full h-px bg-gradient-to-r from-transparent via-[rgba(74,127,199,0.3)] to-transparent"></div>

                    <div class="contact-wa-btn">
                        <a href="{{ whatsapp_link() }}" target="_blank" class="glow-pulse-green inline-flex items-center gap-3 bg-[#25D366] text-[#fff] px-8 py-4 rounded-full font-semibold text-sm hover:bg-[#128C7E] hover:scale-105 transition-all shadow-lg shadow-[#25D366]/20">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Chat via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper relative p-8 bg-[#1d2022] rounded-2xl border border-[rgba(74,127,199,0.2)] shadow-xl overflow-hidden">
                    <!-- Shimmer glow top -->
                    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#a8c8ff]/40 to-transparent"></div>
                    <!-- Orb decoration -->
                    <div class="absolute -top-16 -right-16 w-48 h-48 bg-[#114784]/15 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-12 -left-12 w-36 h-36 bg-[#F5A623]/8 rounded-full blur-2xl pointer-events-none"></div>

                    <!-- Form title -->
                    <div class="form-header mb-6 relative z-10">
                        <p class="text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.15em] mb-1">Formulir Pesan</p>
                        <h3 class="font-['Sora'] text-[20px] font-semibold text-[#e0e3e5]">Kirimkan pesan Anda</h3>
                    </div>

                    <!-- ===== SESSION SUCCESS ===== -->
                    @if(session('success'))
                        <div class="bg-green-500/20 border border-green-500/50 text-green-400 px-6 py-4 rounded-xl mb-6 flex items-center gap-3">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- ===== VALIDATION ERRORS ===== -->
                    @if($errors->any())
                        <div class="bg-red-500/20 border border-red-500/50 text-red-400 px-6 py-4 rounded-xl mb-6 flex items-center gap-3">
                            <span class="material-symbols-outlined">error</span>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <form id="contactForm" class="flex flex-col gap-5 relative z-10" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="block text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.12em] mb-2">Nama Lengkap <span class="text-[#F5A623]">*</span></label>
                            <input type="text" id="name" name="name"
                                class="w-full px-5 py-3 bg-[#0b0f10] border border-[rgba(74,127,199,0.2)] rounded-lg text-[#e0e3e5] placeholder-[#6b7280] focus:outline-none focus:border-[#F5A623] focus:ring-1 focus:ring-[#F5A623]/40 transition-all duration-200"
                                placeholder="Masukkan nama lengkap"
                                value="{{ old('name') }}"
                                required>
                            <div id="nameError" class="mt-1 text-xs text-[#ef4444] hidden"></div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="block text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.12em] mb-2">Email <span class="text-[#F5A623]">*</span></label>
                            <input type="email" id="email" name="email"
                                class="w-full px-5 py-3 bg-[#0b0f10] border border-[rgba(74,127,199,0.2)] rounded-lg text-[#e0e3e5] placeholder-[#6b7280] focus:outline-none focus:border-[#F5A623] focus:ring-1 focus:ring-[#F5A623]/40 transition-all duration-200"
                                placeholder="Masukkan email aktif"
                                value="{{ old('email') }}"
                                required>
                            <div id="emailError" class="mt-1 text-xs text-[#ef4444] hidden"></div>
                        </div>

                        <!-- Row: Phone + Subject -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="form-group">
                                <label for="phone" class="block text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.12em] mb-2">No. WhatsApp <span class="text-[#F5A623]">*</span></label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-5 py-3 bg-[#0b0f10] border border-[rgba(74,127,199,0.2)] rounded-lg text-[#e0e3e5] placeholder-[#6b7280] focus:outline-none focus:border-[#F5A623] focus:ring-1 focus:ring-[#F5A623]/40 transition-all duration-200"
                                    placeholder="08xx-xxxx-xxxx"
                                    value="{{ old('phone') }}"
                                    required>
                                <div id="phoneError" class="mt-1 text-xs text-[#ef4444] hidden"></div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="block text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.12em] mb-2">Subjek <span class="text-[#F5A623]">*</span></label>
                                <input type="text" id="subject" name="subject"
                                    class="w-full px-5 py-3 bg-[#0b0f10] border border-[rgba(74,127,199,0.2)] rounded-lg text-[#e0e3e5] placeholder-[#6b7280] focus:outline-none focus:border-[#F5A623] focus:ring-1 focus:ring-[#F5A623]/40 transition-all duration-200"
                                    placeholder="Subjek pesan"
                                    value="{{ old('subject') }}"
                                    required>
                                <div id="subjectError" class="mt-1 text-xs text-[#ef4444] hidden"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="block text-xs font-bold text-[#a8c8ff] uppercase tracking-[0.12em] mb-2">Pesan <span class="text-[#F5A623]">*</span></label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-5 py-3 bg-[#0b0f10] border border-[rgba(74,127,199,0.2)] rounded-lg text-[#e0e3e5] placeholder-[#6b7280] focus:outline-none focus:border-[#F5A623] focus:ring-1 focus:ring-[#F5A623]/40 transition-all duration-200 resize-none"
                                placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
                            <div id="messageError" class="mt-1 text-xs text-[#ef4444] hidden"></div>
                        </div>

                        <button type="submit" id="contactSubmitBtn"
                            class="contact-submit-btn w-full relative overflow-hidden bg-[#F5A623] text-[#0d1b35] py-4 rounded-xl font-bold text-sm hover:scale-[1.02] active:scale-[0.98] transition-all shadow-xl shadow-[#F5A623]/20 group">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">send</span>
                                Kirim Pesan
                            </span>
                            <!-- Shimmer overlay on hover -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GOOGLE MAPS ===== -->
    <section class="px-5 lg:px-16 py-8">
        <div class="max-w-[1280px] mx-auto">
            <div class="contact-map-card w-full h-[400px] lg:h-[500px] rounded-2xl overflow-hidden border border-[rgba(74,127,199,0.2)] shadow-xl">
                <iframe
                    src="{{ site_setting('maps_url') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127194.19700467725!2d119.35074481696039!3d-5.16609164923734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32cee0a2b26386bd%3A0x1d60c73e7173d%212sMakassar%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1720000000000!5m2!1sid!2sid' }}"
                    width="100%"
                    height="100%"
                    style="border:0; display:block;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi ARWebStudio">
                </iframe>
            </div>
        </div>
    </section>
@endsection
