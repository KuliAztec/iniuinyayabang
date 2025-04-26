<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body>
        <!-- ========== HEADER ========== -->
        <header class="absolute top-0 left-0 right-0 flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-4">
          <nav class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
            <div class="lg:col-span-3 flex items-center">
              <!-- Logo -->
              <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="../templates/creative-agency/index.html" aria-label="Preline">
                <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696ZM37.4197 18.4091C37.4197 19.2524 37.5367 19.9879 37.7706 20.6158C38.0045 21.2436 38.343 21.733 38.7862 22.0838C39.2294 22.4285 39.768 22.6009 40.402 22.6009C41.0421 22.6009 41.5838 22.4254 42.027 22.0746C42.4702 21.7176 42.8056 21.2251 43.0334 20.5973C43.2673 19.9633 43.3842 19.2339 43.3842 18.4091C43.3842 17.5904 43.2704 16.8703 43.0426 16.2486C42.8149 15.6269 42.4794 15.1406 42.0362 14.7898C41.593 14.4389 41.0483 14.2635 40.402 14.2635C39.7618 14.2635 39.2202 14.4328 38.777 14.7713C38.34 15.1098 38.0045 15.59 37.7706 16.2116C37.5367 16.8333 37.4197 17.5658 37.4197 18.4091ZM49.2427 25.5V11.3182H53.0559V13.7926H53.2037C53.4622 12.9124 53.8961 12.2476 54.5055 11.7983C55.1149 11.3428 55.8166 11.1151 56.6106 11.1151C56.8076 11.1151 57.02 11.1274 57.2477 11.152C57.4754 11.1766 57.6755 11.2105 57.8478 11.2536V14.7436C57.6632 14.6882 57.4077 14.639 57.0815 14.5959C56.7553 14.5528 56.4567 14.5312 56.1859 14.5312C55.6073 14.5312 55.0903 14.6574 54.6348 14.9098C54.1854 15.156 53.8284 15.5007 53.5638 15.9439C53.3052 16.3871 53.176 16.898 53.176 17.4766V25.5H49.2427ZM64.9043 25.777C63.4455 25.777 62.1898 25.4815 61.1373 24.8906C60.0909 24.2936 59.2845 23.4503 58.7182 22.3608C58.1519 21.2652 57.8688 19.9695 57.8688 18.4737C57.8688 17.0149 58.1519 15.7346 58.7182 14.6328C59.2845 13.531 60.0816 12.6723 61.1096 12.0568C62.1437 11.4413 63.3563 11.1335 64.7474 11.1335C65.683 11.1335 66.5539 11.2843 67.3603 11.5859C68.1728 11.8814 68.8806 12.3277 69.4839 12.9247C70.0932 13.5218 70.5672 14.2727 70.9057 15.1776C71.2443 16.0762 71.4135 17.1288 71.4135 18.3352V19.4155H59.4384V16.978H67.7111C67.7111 16.4117 67.588 15.91 67.3418 15.473C67.0956 15.036 66.754 14.6944 66.317 14.4482C65.8861 14.1958 65.3844 14.0696 64.812 14.0696C64.2149 14.0696 63.6856 14.2081 63.2239 14.4851C62.7684 14.7559 62.4114 15.1222 62.1529 15.5838C61.8944 16.0393 61.762 16.5471 61.7559 17.1072V19.4247C61.7559 20.1264 61.8851 20.7327 62.1437 21.2436C62.4083 21.7545 62.7807 22.1484 63.2608 22.4254C63.741 22.7024 64.3103 22.8409 64.9689 22.8409C65.406 22.8409 65.8061 22.7794 66.1692 22.6562C66.5324 22.5331 66.8432 22.3485 67.1018 22.1023C67.3603 21.8561 67.5572 21.5545 67.6927 21.1974L71.3304 21.4375C71.1458 22.3116 70.7672 23.0748 70.1948 23.7273C69.6285 24.3736 68.896 24.8783 67.9974 25.2415C67.1048 25.5985 66.0738 25.777 64.9043 25.777ZM77.1335 6.59091V25.5H73.2003V6.59091H77.1335ZM79.5043 25.5V11.3182H83.4375V25.5H79.5043ZM81.4801 9.49006C80.8954 9.49006 80.3937 9.29616 79.9752 8.90838C79.5628 8.51444 79.3566 8.04356 79.3566 7.49574C79.3566 6.95407 79.5628 6.48935 79.9752 6.10156C80.3937 5.70762 80.8954 5.51065 81.4801 5.51065C82.0649 5.51065 82.5635 5.70762 82.9759 6.10156C83.3944 6.48935 83.6037 6.95407 83.6037 7.49574C83.6037 8.04356 83.3944 8.51444 82.9759 8.90838C82.5635 9.29616 82.0649 9.49006 81.4801 9.49006ZM89.7415 17.3011V25.5H85.8083V11.3182H89.5569V13.8203H89.723C90.037 12.9955 90.5632 12.343 91.3019 11.8629C92.0405 11.3767 92.9361 11.1335 93.9887 11.1335C94.9735 11.1335 95.8322 11.349 96.5647 11.7798C97.2971 12.2107 97.8665 12.8262 98.2728 13.6264C98.679 14.4205 98.8821 15.3684 98.8821 16.4702V25.5H94.9489V17.1719C94.9551 16.304 94.7335 15.6269 94.2841 15.1406C93.8348 14.6482 93.2162 14.402 92.4283 14.402C91.8989 14.402 91.4311 14.5159 91.0249 14.7436C90.6248 14.9714 90.3109 15.3037 90.0831 15.7408C89.8615 16.1716 89.7477 16.6918 89.7415 17.3011ZM107.665 25.777C106.206 25.777 104.951 25.4815 103.898 24.8906C102.852 24.2936 102.045 23.4503 101.479 22.3608C100.913 21.2652 100.63 19.9695 100.63 18.4737C100.63 17.0149 100.913 15.7346 101.479 14.6328C102.045 13.531 102.842 12.6723 103.87 12.0568C104.905 11.4413 106.117 11.1335 107.508 11.1335C108.444 11.1335 109.315 11.2843 110.121 11.5859C110.934 11.8814 111.641 12.3277 112.245 12.9247C112.854 13.5218 113.328 14.2727 113.667 15.1776C114.005 16.0762 114.174 17.1288 114.174 18.3352V19.4155H102.199V16.978H110.472C110.472 16.4117 110.349 15.91 110.103 15.473C109.856 15.036 109.515 14.6944 109.078 14.4482C108.647 14.1958 108.145 14.0696 107.573 14.0696C106.976 14.0696 106.446 14.2081 105.985 14.4851C105.529 14.7559 105.172 15.1222 104.914 15.5838C104.655 16.0393 104.523 16.5471 104.517 17.1072V19.4247C104.517 20.1264 104.646 20.7327 104.905 21.2436C105.169 21.7545 105.542 22.1484 106.022 22.4254C106.502 22.7024 107.071 22.8409 107.73 22.8409C108.167 22.8409 108.567 22.7794 108.93 22.6562C109.293 22.5331 109.604 22.3485 109.863 22.1023C110.121 21.8561 110.318 21.5545 110.454 21.1974L114.091 21.4375C113.907 22.3116 113.528 23.0748 112.956 23.7273C112.389 24.3736 111.657 24.8783 110.758 25.2415C109.866 25.5985 108.835 25.777 107.665 25.777Z" class="fill-black dark:fill-white" fill="currentColor"/>
                  <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-black dark:stroke-white" stroke="currentColor" stroke-width="2"/>
                  <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-black dark:stroke-white" stroke="currentColor" stroke-width="2"/>
                  <circle cx="13" cy="16.5214" r="5" class="fill-black dark:fill-white" fill="currentColor"/>
                </svg>
              </a>
              <!-- End Logo -->
    
              <div class="ms-1 sm:ms-2">
    
              </div>
            </div>
    
            <!-- Button Group -->
            <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl bg-white border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white dark:focus:text-white">
                Sign in
              </button>   
    
              <div class="lg:hidden">
                <button type="button" class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
                  <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                  <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
              </div>
            </div>
            <!-- End Button Group -->
    
            <!-- Collapse -->
            <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
              <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                <div>
                  <a class="relative inline-block text-black focus:outline-hidden before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 dark:text-white" href="#" aria-current="page">Beranda</a>
                </div>
                <div>
                  <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Pendaftaran</a>
                </div>
                
                   <!-- Dropdown item -->
              <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                  <button id="pendaftaran-dropdown" type="button" class="hs-dropdown-toggle inline-flex items-center gap-x-2 text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300">
                  SMA Hogwarts
                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                  </button>
    
                  <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] hs-dropdown-open:opacity-100 opacity-0 hidden min-w-48 bg-white shadow-md rounded-xl p-2 dark:bg-neutral-900 dark:border dark:border-neutral-700 dark:divide-neutral-700" aria-labelledby="pendaftaran-dropdown">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Profil Sekolah
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Kalender Akademik
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Struktur Organisasi
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Daftar Guru
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Akademik
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Kesiswaan
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:hover:text-neutral-100 dark:focus:bg-neutral-800" href="#">
                      Fasilitas
                  </a>
                  </div>
              </div>
    
                <div>
                  <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Berita</a>
                </div>
                <div>
                  <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Kontak</a>
                </div>
              </div>
            </div>
            <!-- End Collapse -->
          </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== HERO SECTION ========== -->
<div class="relative overflow-hidden">
  <!-- Updated gradient overlay that covers the entire image with more blue tones -->
  <div class="absolute inset-0 bg-gradient-to-b from-blue-900/90 via-blue-800/70 to-blue-700/50 z-10"></div>
  
  <div class="w-full">
    <!-- Added backdrop-blur-sm class for a subtle blur effect on the image -->
    <div class="w-full h-[600px] md:h-[700px] lg:h-[800px] bg-cover bg-center backdrop-blur-sm" style="background-image: url('{{ asset('images/school-hero.jpg') }}');">
    </div>
  </div>
</div>
<!-- ========== END HERO SECTION ========== -->

<!-- ========== PROFILE SECTION ========== -->
<section id="about" class="py-12 md:py-20 bg-gradient-to-b from-white via-white to-blue-50 dark:from-neutral-900 dark:via-neutral-900 dark:to-blue-950/30">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row items-stretch gap-8 lg:gap-12">
      <div class="md:w-1/2 h-full">
        <div class="h-full">
          <img 
            src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" 
            alt="School building" 
            class="rounded-xl shadow-lg w-full h-full object-cover transition-transform duration-300 hover:scale-[1.02]"
          >
        </div>
      </div>
      
      <div class="md:w-1/2 flex flex-col justify-center h-full">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-gray-800 dark:text-white mb-6">SMA Hogwarts</h1>
        <p class="text-gray-700 dark:text-gray-300 mb-6">Founded in 1985, SMA Hogwarts has been dedicated to providing an exceptional educational experience that balances academic excellence with character development.</p>
        <p class="text-gray-700 dark:text-gray-300 mb-8">Our experienced faculty members are committed to nurturing each student's unique talents while instilling core values of integrity, respect, and perseverance.</p>
        
        <div class="text-center mt-8">
          <button type="button" class="inline-block py-3 px-6 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 hover:bg-blue focus:outline-hidden focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
            Selengkapnya
          </button>
        </div>
      </div>
    </div>
    
    <div class="mt-12 lg:mt-16">
      <div class="flex flex-col bg-gradient-to-r from-white to-blue-50 border border-gray-200 border-t-4 border-t-blue-600 shadow-sm rounded-xl">
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
            src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" 
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
<section class="py-12 md:py-16 bg-gradient-to-b from-blue-50 via-white to-white">
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
<section class="py-12 md:py-16 bg-gradient-to-b from-white via-white to-blue-50">
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
<section class="py-12 md:py-16 bg-gradient-to-b from-blue-50 via-white to-white">
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

<!-- ========== FOOTER SECTION ========== -->    
<footer class="bg-gradient-to-b from-gray-800 to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">      <!-- Left Column: Logo and button -->
        <div class="md:col-span-4 flex flex-col">
          <!-- Logo -->
          <a class="flex-none mb-6" href="#">
            <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M33.5696 30.8182V11.3182H37.4474V13.7003H37.6229C37.7952 13.3187 38.0445 12.9309 38.3707 12.5369C38.7031 12.1368 39.134 11.8045 39.6634 11.5398C40.1989 11.2689 40.8636 11.1335 41.6577 11.1335C42.6918 11.1335 43.6458 11.4044 44.5199 11.946C45.3939 12.4815 46.0926 13.291 46.6158 14.3743C47.139 15.4515 47.4006 16.8026 47.4006 18.4276C47.4006 20.0095 47.1451 21.3452 46.6342 22.4347C46.1295 23.518 45.4401 24.3397 44.5661 24.8999C43.6982 25.4538 42.7256 25.7308 41.6484 25.7308C40.8852 25.7308 40.2358 25.6046 39.7003 25.3523C39.1709 25.0999 38.737 24.7829 38.3984 24.4013C38.0599 24.0135 37.8014 23.6226 37.6229 23.2287H37.5028V30.8182H33.5696Z" class="fill-white" fill="currentColor"/>
              <path d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12" class="stroke-white" stroke="currentColor" stroke-width="2"/>
              <path d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12" class="stroke-white" stroke="currentColor" stroke-width="2"/>
              <circle cx="13" cy="16.5214" r="5" class="fill-white" fill="currentColor"/>
            </svg>
          </a>
          
          <p class="text-gray-400 mb-6">SMA Hogwarts - Membentuk generasi unggul dengan pendidikan berkualitas dan karakter yang kuat.</p>
          
          <!-- CTA Button -->
          <div class="mt-2">
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200">
              Daftar Sekarang
            </a>
          </div>
        </div>
        
        <!-- Right Column: Navigation Links -->
        <div class="md:col-span-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Main Links -->
            <div>
              <h3 class="text-white font-semibold mb-4">Halaman Utama</h3>
              <ul class="space-y-3">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Beranda</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Berita</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Kontak</a></li>
              </ul>
            </div>
            
            <!-- About School -->
            <div>
              <h3 class="text-white font-semibold mb-4">Tentang Sekolah</h3>
              <ul class="space-y-3">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Profil Sekolah</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Kalender Akademik</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Struktur Organisasi</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Daftar Guru</a></li>
              </ul>
            </div>
            
            <!-- School Programs -->
            <div>
              <h3 class="text-white font-semibold mb-4">Program Sekolah</h3>
              <ul class="space-y-3">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Akademik</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Kesiswaan</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Fasilitas</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <hr class="border-gray-800 my-8" />
      
      <div class="flex flex-col md:flex-row md:justify-between md:items-center">
        <p class="text-gray-400 text-sm">&copy; 2024 SMA Hogwarts. All rights reserved.</p>
        <div class="flex space-x-6 mt-4 md:mt-0">
          <a href="#" class="text-gray-400 hover:text-white">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white">
            <span class="sr-only">YouTube</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER SECTION ========== -->
    </body>
</html>
