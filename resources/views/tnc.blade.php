@extends('layouts.guest')
@section('title', 'Syarat dan Ketentuan - PT Safari Karya Maju')
@section('description', 'Syarat dan ketentuan penggunaan layanan PT Safari Karya Maju. Mohon baca dengan seksama sebelum menggunakan situs web dan layanan kami.')
@section('content')
    <!--SECTION 1-->
    <section class="relative h-[720px] flex items-center justify-start overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <img class="absolute top-1/2 left-1/2 w-full h-full min-w-full min-h-full object-cover -translate-x-1/2 -translate-y-1/2" src="{{ asset('images/tnc-hero.png') }}" alt="Latar Belakang Syarat dan Ketentuan">
        </div>
        <div class="absolute top-0 left-0 w-full h-full z-10 bg-gradient-to-r from-[#f96628]/90 to-[#f96628]/40"></div>
        <div class="container mx-auto px-6">
            <div class="relative z-20 text-white max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-normal">
                    Syarat dan Ketentuan
                </h1>
                <p class="mt-4 text-xl md:text-2xl leading-normal text-gray-200">
                    PT SAFARI KARYA MAJU
                </p>
            </div>
        </div>
    </section>
    
    <!--SECTION 2-->
    <section class="bg-white py-20 md:py-16" x-data="{ inView: false }" x-intersect:enter="inView = true">
        <div class="container mx-auto px-6">
        
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold text-[#f96628] uppercase tracking-wider">SYARAT DAN KETENTUAN</h3>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-2">Penggunaan Layanan Kami</h2>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-12">
                    <p class="text-base text-gray-600 text-justify">
                        Syarat dan Ketentuan ini mengatur penggunaan situs web dan layanan PT Safari Karya Maju. Dengan mengakses atau menggunakan layanan kami, Anda menyetujui untuk terikat oleh semua ketentuan yang tercantum di sini.
                    </p>
                </div>
            </div>
            
            <div class="bg-youngorange rounded-xl shadow-sm p-6 mb-12">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-200 p-3 rounded-full mr-4">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Terms and Conditions</h1>
                        <p class="text-gray-600 font-medium">Last updated: August 06, 2025</p>
                    </div>
                </div>
                
                <p class="text-gray-700 mb-4">Please read these terms and conditions carefully before using Our Service.</p>
            </div>
            
            <!-- Terms and Conditions Sections -->
            <div class="space-y-12">
                <!-- Section 1 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 100 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Interpretation and Definitions</h2>
                        </div>
                        
                        <div class="ml-11 space-y-6">
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Interpretation</h3>
                                <p class="text-gray-700">The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Definitions</h3>
                                <p class="text-gray-700 mb-4">For the purposes of these Terms and Conditions:</p>
                                
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                        <div>
                                            <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">2</span>
                                        <div>
                                            <p><strong>Country</strong> refers to: Indonesia</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">3</span>
                                        <div>
                                            <p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to PT SAFARI KARYA MAJU, Dsn. Bakalan RT 001 RW 002, Durensewu, Kec. Pandaan, Pasuruan, Jawa Timur 67156.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">4</span>
                                        <div>
                                            <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">5</span>
                                        <div>
                                            <p><strong>Service</strong> refers to the Website.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">6</span>
                                        <div>
                                            <p><strong>Terms and Conditions</strong> (also referred as "Terms") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the <a href="https://www.termsfeed.com/terms-conditions-generator/" target="_blank" class="text-gray-800 font-medium hover:underline">Terms and Conditions Generator</a>.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">7</span>
                                        <div>
                                            <p><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">8</span>
                                        <div>
                                            <p><strong>Website</strong> refers to PT SAFARI KARYA MAJU, accessible from <a href="https://safarikaryamaju.id" rel="external nofollow noopener" target="_blank" class="text-gray-800 font-medium hover:underline">https://safarikaryamaju.id</a></p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">9</span>
                                        <div>
                                            <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 200 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Acknowledgment</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
                            <p class="text-gray-700 mb-4">Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
                            <p class="text-gray-700 mb-4">By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
                            <p class="text-gray-700 mb-4">You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>
                            <p class="text-gray-700">Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 3 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 300 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Links to Other Websites</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p>
                            <p class="text-gray-700 mb-4">The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
                            <p class="text-gray-700">We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 4 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 400 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Termination</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p>
                            <p class="text-gray-700">Upon termination, Your right to use the Service will cease immediately.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 5 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 500 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Limitation of Liability</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>
                            <p class="text-gray-700 mb-4">To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p>
                            <p class="text-gray-700">Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 6 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 600 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">"AS IS" and "AS AVAILABLE" Disclaimer</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">The Service is provided to You "AS IS" and "AS AVAILABLE" and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p>
                            <p class="text-gray-700 mb-4">Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p>
                            <p class="text-gray-700">Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 7 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 700 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Governing Law</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 8 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 800 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Disputes Resolution</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 9 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 900 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">For European Union (EU) Users</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which You are resident.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 10 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1000 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">United States Legal Compliance</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a "terrorist supporting" country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 11 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1100 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Severability and Waiver</h2>
                        </div>
                        
                        <div class="ml-11 space-y-6">
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Severability</h3>
                                <p class="text-gray-700">If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Waiver</h3>
                                <p class="text-gray-700">Except as provided herein, the failure to exercise a right or to require performance of an obligation under these Terms shall not affect a party's ability to exercise such right or require such performance at any time thereafter nor shall the waiver of a breach constitute a waiver of any subsequent breach.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 12 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1200 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Translation Interpretation</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">These Terms and Conditions may have been translated if We have made them available to You on our Service. You agree that the original English text shall prevail in the case of a dispute.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 13 -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1300 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Changes to These Terms and Conditions</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>
                            <p class="text-gray-700">By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1400 ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Contact Us</h2>
                        </div>
                        
                        <div class="ml-11 bg-gray-100 p-5 rounded-lg border border-gray-200">
                            <p class="text-gray-700 mb-4">If you have any questions about these Terms and Conditions, You can contact us:</p>
                            
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                    <div>
                                        <p>By visiting this page on our website: <a href="https://www.safarikaryamaju.id/hubungi-kami" rel="external nofollow noopener" target="_blank" class="text-gray-800 font-medium hover:underline">https://www.safarikaryamaju.id/hubungi-kami</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection