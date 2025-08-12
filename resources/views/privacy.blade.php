@extends('layouts.guest')
@section('title', __('privacy.meta_title'))
@section('description', __('privacy.meta_description'))
@section('content')
    <section class="relative h-[720px] flex items-center justify-start overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <img class="absolute top-1/2 left-1/2 w-full h-full min-w-full min-h-full object-cover -translate-x-1/2 -translate-y-1/2" src="{{ asset('images/privacy-hero.png') }}" alt="Latar Belakang Kebijakan Privasi">
        </div>
        <div class="absolute top-0 left-0 w-full h-full z-10 bg-gradient-to-r from-[#f96628]/90 to-[#f96628]/40"></div>
        <div class="container mx-auto px-6">
            <div class="relative z-20 text-white max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-normal">
                    {{ __('privacy.hero_title') }}
                </h1>
                <p class="mt-4 text-xl md:text-2xl leading-normal text-gray-200">
                    {{ __('privacy.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>
    
    <section class="bg-white py-20 md:py-16" x-data="{ inView: false }" x-intersect:enter="inView = true">
        <div class="container mx-auto px-6">
        
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold text-[#f96628] uppercase tracking-wider">{{ __('privacy.intro_eyebrow') }}</h3>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-2">{{ __('privacy.intro_title') }}</h2>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-12">
                    <p class="text-base text-gray-600 text-justify">
                        {{ __('privacy.intro_text') }}
                    </p>
                </div>
            </div>
            
            <div class="bg-youngorange rounded-xl shadow-sm p-6 mb-12">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-200 p-3 rounded-full mr-4">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">{{ __('privacy.policy_box_title') }}</h1>
                        <p class="text-gray-600 font-medium">{{ __('privacy.policy_box_date') }}</p>
                    </div>
                </div>
                
                <p class="text-gray-700 mb-4">{{ __('privacy.policy_box_text_1') }}</p>
                <p class="text-gray-700">{!! __('privacy.policy_box_text_2') !!}</p>
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
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('privacy.interpretation_definitions.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 space-y-6">
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ __('privacy.interpretation_definitions.interpretation.title') }}</h3>
                                <p class="text-gray-700">{{ __('privacy.interpretation_definitions.interpretation.text') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ __('privacy.interpretation_definitions.definitions.title') }}</h3>
                                <p class="text-gray-700 mb-4">{{ __('privacy.interpretation_definitions.definitions.intro') }}</p>
                                
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.account') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">2</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.affiliate') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">3</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.company') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">4</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.cookies') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">5</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.country') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">6</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.device') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">7</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.personal_data') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">8</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.service') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">9</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.service_provider') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">10</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.usage_data') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">11</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.website') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">12</span>
                                        <div><p>{!! __('privacy.interpretation_definitions.definitions.list.you') !!}</p></div>
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
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('privacy.collecting_using_data.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 space-y-6">
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.types_of_data.title') }}</h3>
                                
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-800 mb-2">{{ __('privacy.collecting_using_data.types_of_data.personal_data.title') }}</h4>
                                        <p class="text-gray-700 mb-3">{{ __('privacy.collecting_using_data.types_of_data.personal_data.text') }}</p>
                                        
                                        <ul class="ml-5 space-y-2">
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.types_of_data.personal_data.list.phone') }}</p>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.types_of_data.personal_data.list.usage') }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-800 mb-2">{{ __('privacy.collecting_using_data.types_of_data.usage_data.title') }}</h4>
                                        <p class="text-gray-700 mb-3">{{ __('privacy.collecting_using_data.types_of_data.usage_data.text_1') }}</p>
                                        <p class="text-gray-700 mb-3">{{ __('privacy.collecting_using_data.types_of_data.usage_data.text_2') }}</p>
                                        <p class="text-gray-700">{{ __('privacy.collecting_using_data.types_of_data.usage_data.text_3') }}</p>
                                        <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.types_of_data.usage_data.text_4') }}</p>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-800 mb-2">{{ __('privacy.collecting_using_data.types_of_data.tracking_technologies.title') }}</h4>
                                        <p class="text-gray-700 mb-3">{{ __('privacy.collecting_using_data.types_of_data.tracking_technologies.text') }}</p>
                                        
                                        <ul class="ml-5 space-y-3">
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <div><p>{!! __('privacy.collecting_using_data.types_of_data.tracking_technologies.list.cookies') !!}</p></div>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <div><p>{!! __('privacy.collecting_using_data.types_of_data.tracking_technologies.list.web_beacons') !!}</p></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-200 border-l-4 border-gray-600 p-5 rounded-lg">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-800">{{ __('privacy.collecting_using_data.cookie_notice.title') }}</h3>
                                        <div class="mt-2 text-gray-700">
                                            <p>{!! __('privacy.collecting_using_data.cookie_notice.text') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <p class="text-gray-700 mb-4">{{ __('privacy.collecting_using_data.cookie_usage_intro') }}</p>
                                
                                <ul class="space-y-4">
                                    <li class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-700 font-bold mr-3">1</div>
                                            <div>
                                                <p class="font-semibold text-gray-800">{{ __('privacy.collecting_using_data.cookie_types.necessary.title') }}</p>
                                                <p class="text-sm text-gray-600 mt-1">{{ __('privacy.collecting_using_data.cookie_types.necessary.type') }}</p>
                                                <p class="text-sm text-gray-600">{{ __('privacy.collecting_using_data.cookie_types.necessary.admin') }}</p>
                                                <p class="text-gray-700 mt-2">{{ __('privacy.collecting_using_data.cookie_types.necessary.purpose') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-700 font-bold mr-3">2</div>
                                            <div>
                                                <p class="font-semibold text-gray-800">{{ __('privacy.collecting_using_data.cookie_types.policy_acceptance.title') }}</p>
                                                <p class="text-sm text-gray-600 mt-1">{{ __('privacy.collecting_using_data.cookie_types.policy_acceptance.type') }}</p>
                                                <p class="text-sm text-gray-600">{{ __('privacy.collecting_using_data.cookie_types.policy_acceptance.admin') }}</p>
                                                <p class="text-gray-700 mt-2">{{ __('privacy.collecting_using_data.cookie_types.policy_acceptance.purpose') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-700 font-bold mr-3">3</div>
                                            <div>
                                                <p class="font-semibold text-gray-800">{{ __('privacy.collecting_using_data.cookie_types.functionality.title') }}</p>
                                                <p class="text-sm text-gray-600 mt-1">{{ __('privacy.collecting_using_data.cookie_types.functionality.type') }}</p>
                                                <p class="text-sm text-gray-600">{{ __('privacy.collecting_using_data.cookie_types.functionality.admin') }}</p>
                                                <p class="text-gray-700 mt-2">{{ __('privacy.collecting_using_data.cookie_types.functionality.purpose') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                                <p class="text-gray-700 mt-4">{{ __('privacy.collecting_using_data.cookie_more_info') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.use_of_data.title') }}</h3>
                                <p class="text-gray-700 mb-4">{{ __('privacy.collecting_using_data.use_of_data.intro') }}</p>
                                
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.provide_maintain') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">2</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.manage_account') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">3</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.perform_contract') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">4</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.contact_you') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">5</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.provide_news') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">6</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.manage_requests') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">7</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.business_transfers') !!}</p></div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">8</span>
                                        <div><p>{!! __('privacy.collecting_using_data.use_of_data.purposes.other_purposes') !!}</p></div>
                                    </li>
                                </ul>
                                
                                <p class="text-gray-700 mt-4 mb-3">{{ __('privacy.collecting_using_data.sharing_data.intro') }}</p>
                                
                                <ul class="ml-5 space-y-2">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                        <p>{!! __('privacy.collecting_using_data.sharing_data.situations.service_providers') !!}</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                        <p>{!! __('privacy.collecting_using_data.sharing_data.situations.business_transfers') !!}</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                        <p>{!! __('privacy.collecting_using_data.sharing_data.situations.affiliates') !!}</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                        <p>{!! __('privacy.collecting_using_data.sharing_data.situations.business_partners') !!}</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                        <p>{!! __('privacy.collecting_using_data.sharing_data.situations.other_users') !!}</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                        <p>{!! __('privacy.collecting_using_data.sharing_data.situations.with_consent') !!}</p>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.retention.title') }}</h3>
                                <p class="text-gray-700">{{ __('privacy.collecting_using_data.retention.text_1') }}</p>
                                <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.retention.text_2') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.transfer.title') }}</h3>
                                <p class="text-gray-700">{{ __('privacy.collecting_using_data.transfer.text_1') }}</p>
                                <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.transfer.text_2') }}</p>
                                <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.transfer.text_3') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.delete.title') }}</h3>
                                <p class="text-gray-700">{{ __('privacy.collecting_using_data.delete.text_1') }}</p>
                                <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.delete.text_2') }}</p>
                                <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.delete.text_3') }}</p>
                                <p class="text-gray-700 mt-3">{{ __('privacy.collecting_using_data.delete.text_4') }}</p>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.disclosure.title') }}</h3>
                                
                                <div class="space-y-4">
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-800 mb-2">{{ __('privacy.collecting_using_data.disclosure.business_transactions.title') }}</h4>
                                        <p class="text-gray-700">{{ __('privacy.collecting_using_data.disclosure.business_transactions.text') }}</p>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-800 mb-2">{{ __('privacy.collecting_using_data.disclosure.law_enforcement.title') }}</h4>
                                        <p class="text-gray-700">{{ __('privacy.collecting_using_data.disclosure.law_enforcement.text') }}</p>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-800 mb-2">{{ __('privacy.collecting_using_data.disclosure.other_legal.title') }}</h4>
                                        <p class="text-gray-700 mb-3">{{ __('privacy.collecting_using_data.disclosure.other_legal.intro') }}</p>
                                        
                                        <ul class="ml-5 space-y-2">
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.disclosure.other_legal.list.comply') }}</p>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.disclosure.other_legal.list.protect_defend') }}</p>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.disclosure.other_legal.list.prevent_investigate') }}</p>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.disclosure.other_legal.list.protect_safety') }}</p>
                                            </li>
                                            <li class="flex items-start">
                                                <span class="flex-shrink-0 h-5 w-5 text-gray-600 mr-2">•</span>
                                                <p>{{ __('privacy.collecting_using_data.disclosure.other_legal.list.protect_liability') }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-youngorange p-4 rounded-lg">
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ __('privacy.collecting_using_data.security.title') }}</h3>
                                <p class="text-gray-700">{{ __('privacy.collecting_using_data.security.text') }}</p>
                            </div>
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
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('privacy.childrens_privacy.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('privacy.childrens_privacy.text_1') }}</p>
                            <p class="text-gray-700 mt-3">{{ __('privacy.childrens_privacy.text_2') }}</p>
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
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('privacy.links_to_other.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('privacy.links_to_other.text_1') }}</p>
                            <p class="text-gray-700 mt-3">{{ __('privacy.links_to_other.text_2') }}</p>
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
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('privacy.changes.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-youngorange p-4 rounded-lg">
                            <p class="text-gray-700">{{ __('privacy.changes.text_1') }}</p>
                            <p class="text-gray-700 mt-3">{{ __('privacy.changes.text_2') }}</p>
                            <p class="text-gray-700 mt-3">{{ __('privacy.changes.text_3') }}</p>
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
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ __('privacy.contact.title') }}</h2>
                        </div>
                        
                        <div class="ml-11 bg-gray-100 p-5 rounded-lg border border-gray-200">
                            <p class="text-gray-700 mb-4">{{ __('privacy.contact.intro') }}</p>
                            
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">1</span>
                                    <div>
                                        <p>{!! __('privacy.contact.methods.website') !!}</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 h-6 w-6 rounded-full !bg-[#f96628] flex items-center justify-center text-white text-sm font-bold mr-3">2</span>
                                    <div>
                                        <p>{{ __('privacy.contact.methods.phone') }}</p>
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