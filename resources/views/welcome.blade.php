@extends( 'layouts.app')

@section('title', 'SMA Hogwarts')
@section('content')
<!-- ========== HERO SECTION ========== -->
<div class="relative overflow-hidden">
  <!-- Enhanced gradient overlay with more pronounced blue tones -->
  <div class="absolute inset-0 bg-gradient-to-b from-blue-950/90 via-blue-800/80 to-blue-600/60 z-10"></div>
  
  <div class="w-full">
    <!-- Added more blur for enhanced effect -->
    <div class="w-full h-[400px] md:h-[500px] lg:h-[500px] bg-cover bg-center backdrop-blur-md" style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
</div>
<!-- ========== END HERO SECTION ========== -->

<!-- ========== PROFILE SECTION ========== -->
<section id="about" class="py-12 md:py-20 bg-gradient-to-b from-white via-blue-50/50 to-blue-100/80 dark:from-neutral-900 dark:via-blue-950/30 dark:to-blue-900/20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row items-stretch gap-8 lg:gap-12">
      <div class="md:w-1/2 h-full">
        <div class="h-full">
          <img 
            src="{{ asset('images/sekolah-hogwarts.jpg') }}" 
            alt="School building" 
            class="rounded-xl shadow-lg w-full h-full object-cover transition-transform duration-300 hover:scale-[1.02]"
          >
        </div>
      </div>
      
      <div class="md:w-1/2 flex flex-col justify-center h-full">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-gray-800 dark:text-white mb-6">SMA Hogwarts</h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Founded in 1985, SMA Hogwarts has been dedicated to providing an exceptional educational experience that balances academic excellence with character development.</p>
        <p class="text-gray-700 dark:text-gray-300 mb-8">Our experienced faculty members are committed to nurturing each student's unique talents while instilling core values of integrity, respect, and perseverance.</p>
        
        <div class="mt-8">
          <button type="button" class="inline-block py-3 px-6 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 hover:bg-blue focus:outline-hidden focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
            Selengkapnya
          </button>
        </div>
      </div>
    </div>
    
    <div class="mt-12 lg:mt-16">
      <div class="flex flex-col bg-gradient-to-r from-white to-blue-100 border border-gray-200 border-t-4 border-t-blue-600 shadow-sm rounded-xl">
        <div class="p-6 md:p-8">
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Stat 1: Peserta Didik -->
            <div class="flex items-center gap-4">
              <div class="flex-shrink-0 size-14 flex items-center justify-center bg-blue-100 rounded-full">
                <svg class="size-7 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <div>
                <p class="text-3xl font-bold text-gray-800">555+</p>
                <p class="text-gray-600">Peserta Didik</p>
              </div>
            </div>
            
            <!-- Stat 2: Guru Tendik -->
            <div class="flex items-center gap-4">
              <div class="flex-shrink-0 size-14 flex items-center justify-center bg-green-100 rounded-full">
                <svg class="size-7 text-green-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <div>
                <p class="text-3xl font-bold text-gray-800">40+</p>
                <p class="text-gray-600">Guru Tendik</p>
              </div>
            </div>
            
            <!-- Stat 3: Kelas -->
            <div class="flex items-center gap-4">
              <div class="flex-shrink-0 size-14 flex items-center justify-center bg-yellow-100 rounded-full">
                <svg class="size-7 text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                  <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
              </div>
              <div>
                <p class="text-3xl font-bold text-gray-800">25+</p>
                <p class="text-gray-600">Kelas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row items-stretch gap-8 lg:gap-12">
      
      <div class="md:w-1/2 flex flex-col justify-center h-full">
        <h1 class="text-4xl md:text-5xl lg:text-5.5xl font-semibold text-gray-800 mb-6">PPDB 2025 Telah Dibuka!!!</h1>
        <p class="text-gray-700 mb-6">Segera daftarkan diri Anda untuk menjadi bagian dari keluarga besar SMA Hogwarts. Yuk Simak syarat dan alur pendaftarannya!</p>
        
        <div>
          <button type="button" class="inline-block py-3 px-6 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 hover:bg-blue focus:outline-hidden focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none">
            Lihat Mekanisme Pendaftaran
          </button>
        </div>
      </div>

      <div class="md:w-2/5 h-full">
        <div class="h-full">
          <img 
            src="{{ asset('images/ppdb-2025.jpg') }}" 
            alt="School building" 
            class="rounded-xl shadow-lg w-full h-full object-cover transition-transform duration-300 hover:scale-[1.02]"
          >
        </div>
      </div>
    </div>
</section>
<!-- ========== END PROFILE SECTION ========== -->

<!-- ========== PHOTOS SECTION ========== -->
<!-- Prestasi Section -->
<section class="py-12 md:py-16 bg-gradient-to-b from-blue-100 via-blue-50 to-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Prestasi Kami</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Prestasi 1 -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700 transition duration-300 hover:shadow-lg">
        <div class="relative h-64">
          <img src="{{ asset('images/prestasi-1.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Academic Competition">
        </div>
        
      </div>
      
      <!-- Prestasi 2 -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700 transition duration-300 hover:shadow-lg">
        <div class="relative h-64">
          <img src="{{ asset('images/prestasi-2.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Science Competition">
        </div>
        
      </div>
      
      <!-- Prestasi 3 -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700 transition duration-300 hover:shadow-lg">
        <div class="relative h-64">
          <img src="{{ asset('images/prestasi-3.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Sports Achievement">
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- Berita & Artikel Section -->
<section class="py-12 md:py-16 bg-gradient-to-b from-white via-blue-50/50 to-blue-100/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Berita & Artikel</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Berita 1 -->
      <div class="bg-white rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 transition duration-300 hover:shadow-lg">
        <div class="relative h-64">
          <img src="{{ asset('images/ba-1.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="School Event">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          
        </div>
      </div>
      
      <!-- Berita 2 -->
      <div class="bg-white rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 transition duration-300 hover:shadow-lg">
        <div class="relative h-64">
          <img src="{{ asset('images/ba-2.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Graduation">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          
        </div>
      </div>
      
      <!-- Berita 3 -->
      <div class="bg-white rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 transition duration-300 hover:shadow-lg">
        <div class="relative h-64">
          <img src="{{ asset('images/ba-3.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="School Activity">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Dokumentasi Kegiatan Section -->
<section class="py-12 md:py-16 bg-gradient-to-b from-blue-100 via-blue-50 to-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Dokumentasi Kegiatan</h2>
    </div>
    
    <div class="space-y-6">
      <!-- Foto Utama (Panjang) -->
      <div class="relative h-96 rounded-xl overflow-hidden shadow-sm">
        <img src="{{ asset('images/dk-1.jpg') }}" 
             class="absolute inset-0 h-full w-full object-cover" alt="School Activities">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
      </div>
      
      <!-- 3 Foto Kecil di Bawahnya -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Foto Kecil 1 -->
        <div class="relative h-64 rounded-xl overflow-hidden shadow-sm transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/dk-2.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Extracurricular">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        </div>
        
        <!-- Foto Kecil 2 -->
        <div class="relative h-64 rounded-xl overflow-hidden shadow-sm transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/dk-3.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Laboratory">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        </div>
        
        <!-- Foto Kecil 3 -->
        <div class="relative h-64 rounded-xl overflow-hidden shadow-sm transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/dk-4.jpg') }}" 
               class="absolute inset-0 h-full w-full object-cover" alt="Student Council">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        </div>
      </div>
      <div class="text-center mt-8">
        <button type="button" class="inline-block py-3 px-6 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 hover:bg-blue focus:outline-hidden focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
          Selengkapnya
        </button>
      </div>
    </div>
  </div>
</section>
<!-- ========== END PHOTOS SECTION ========== -->
@endsection