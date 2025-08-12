@extends('layouts.guest')
@section('title', __('terms.meta_title'))
@section('description', __('terms.meta_description'))
@section('content')
    <section class="relative h-[720px] flex items-center justify-start overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <img class="absolute top-1/2 left-1/2 w-full h-full min-w-full min-h-full object-cover -translate-x-1/2 -translate-y-1/2" src="{{ asset('images/tnc-hero.png') }}" alt="Latar Belakang Syarat dan Ketentuan">
        </div>
        <div class="absolute top-0 left-0 w-full h-full z-10 bg-gradient-to-r from-[#f96628]/90 to-[#f96628]/40"></div>
        <div class="container mx-auto px-6">
            <div class="relative z-20 text-white max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-normal">
                    {{ __('terms.hero_title') }}
                </h1>
                <p class="mt-4 text-xl md:text-2xl leading-normal text-gray-200">
                    {{ __('terms.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>
    
    <section class="bg-white py-20 md:py-16" x-data="{ inView: false }" x-intersect:enter="inView = true">
        <div class="container mx-auto px-6">
        
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold text-[#f96628] uppercase tracking-wider">{{ __('terms.intro_eyebrow') }}</h3>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-2">{{ __('terms.intro_title') }}</h2>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-12">
                    <p class="text-base text-gray-600 text-justify">
                        {{ __('terms.intro_text') }}
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
                        <h1 class="text-3xl font-bold text-gray-900">{{ __('terms.box_title') }}</h1>
                        <p class="text-gray-600 font-medium">{{ __('terms.box_date') }}</p>
                    </div>
                </div>
                
                <p class="text-gray-700 mb-4">{{ __('terms.box_text') }}</p>
            </div>
            
            <div class="space-y-12">
                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 100ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.interpretation_definitions.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 space-y-6">
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ __('terms.interpretation_definitions.interpretation.title') }}</h3>
                                <p class="text-gray-700">{{ __('terms.interpretation_definitions.interpretation.text') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ __('terms.interpretation_definitions.definitions.title') }}</h3>
                                <p class="text-gray-700 mb-4">{{ __('terms.interpretation_definitions.definitions.intro') }}</p>
                                
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.affiliate') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">2</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.country') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">3</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.company') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">4</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.device') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">5</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.service') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">6</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.terms') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">7</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.third_party') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">8</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.website') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">9</span>
                                        <div><p>{!! __('terms.interpretation_definitions.definitions.list.you') !!}</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 200ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.acknowledgment.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ __('terms.acknowledgment.text_1') }}</p>
                            <p class="text-gray-700 mb-4">{{ __('terms.acknowledgment.text_2') }}</p>
                            <p class="text-gray-700 mb-4">{{ __('terms.acknowledgment.text_3') }}</p>
                            <p class="text-gray-700 mb-4">{{ __('terms.acknowledgment.text_4') }}</p>
                            <p class="text-gray-700">{{ __('terms.acknowledgment.text_5') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 300ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.links.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ __('terms.links.text_1') }}</p>
                            <p class="text-gray-700 mb-4">{{ __('terms.links.text_2') }}</p>
                            <p class="text-gray-700">{{ __('terms.links.text_3') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 400ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.termination.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ __('terms.termination.text_1') }}</p>
                            <p class="text-gray-700">{{ __('terms.termination.text_2') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 500ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.liability.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ __('terms.liability.text_1') }}</p>
                            <p class="text-gray-700 mb-4">{{ __('terms.liability.text_2') }}</p>
                            <p class="text-gray-700">{{ __('terms.liability.text_3') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 600ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.disclaimer.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ __('terms.disclaimer.text_1') }}</p>
                            <p class="text-gray-700 mb-4">{{ __('terms.disclaimer.text_2') }}</p>
                            <p class="text-gray-700">{{ __('terms.disclaimer.text_3') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 700ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.governing_law.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('terms.governing_law.text') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 800ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.disputes.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('terms.disputes.text') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 900ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.eu_users.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('terms.eu_users.text') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1000ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.us_compliance.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('terms.us_compliance.text') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1100ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.severability_waiver.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 space-y-6">
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ __('terms.severability_waiver.severability.title') }}</h3>
                                <p class="text-gray-700">{{ __('terms.severability_waiver.severability.text') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ __('terms.severability_waiver.waiver.title') }}</h3>
                                <p class="text-gray-700">{{ __('terms.severability_waiver.waiver.text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1200ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.translation.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('terms.translation.text') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1300ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.changes.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ __('terms.changes.text_1') }}</p>
                            <p class="text-gray-700">{{ __('terms.changes.text_2') }}</p>
                        </div>
                    </div>
                </div>

                <div 
                    x-show="inView"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-8"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="transition-delay: 1400ms"
                >
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center mb-6 pb-2 border-b border-gray-200">
                            <div class="bg-gray-200 p-2 rounded-lg mr-3">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('terms.contact.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-gray-100 p-5 rounded-lg border border-gray-200">
                            <p class="text-gray-700 mb-4">{{ __('terms.contact.intro') }}</p>
                            
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 h-6 w-6 rounded-full bg-gray-700 flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                    <div>
                                        <p>{!! __('terms.contact.method') !!}</p>
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