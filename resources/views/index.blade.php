@extends('layouts.app')

@section('content')

<div class="w-full h-full">
    <div class="grid grid-cols-1 md:grid-cols-5 text-white h-full">

        <!-- Left Content Area (Text and Links) -->
        <div class="col-span-3 p-4 md:p-8">

            <div class="flex flex-col justify-between h-full">

                <div class="mt-6 md:mt-10 mb-10">
                    <div class="mb-3">
                        <div class="inline-block mr-3">
                            <img class="inline hand-icon" src="{{ asset('storage/icons/hand.png') }}" style="width: 40px;" alt="👋"> 
                        </div>
                        Hi There!
                    </div>
                    <h1 class="text-2xl md:text-4xl font-bold text-white">{{ $info['title'] }}</h1>
                    
                    <p class="text-xs md:text-sm font-light text-typewriter-effect mt-2" style="min-height: 70px;">
                        {{ $info['description'] }}
                    </p>

                    <div class="mt-4 md:mt-6">
                        <a class="p-3 md:p-4 bg-slate-950 rounded-md text-xs md:text-sm" href="{{ route('project') }}">See My Projects ➥</a>
                    </div>
                </div>
    
                <div class="mb-6 md:mb-10">
                    <span class="text-sm md:text-lg font-semibold text-white mr-3 md:mr-5">Get in touch:</span>
                
                    @if (isset($info['instagram']) && $info['instagram'] != null)
                        <a href="{{ $info['instagram'] }}" class="mr-2 md:mr-3" target="_blank">
                            <img class="inline" src="https://skillicons.dev/icons?i=instagram" style="width: 25px; md:width: 30px;" alt="Instagram">
                        </a>
                    @endif
                
                    @if (isset($info['linkedin']) && $info['linkedin'] != null)
                        <a href="{{ $info['linkedin'] }}" class="mr-2 md:mr-3" target="_blank">
                            <img class="inline" src="https://skillicons.dev/icons?i=linkedin" style="width: 25px; md:width: 30px;" alt="LinkedIn">
                        </a>
                    @endif
                
                    @if (isset($info['github']) && $info['github'] != null)
                        <a href="{{ $info['github'] }}" class="mr-2 md:mr-3" target="_blank">
                            <img class="inline" src="https://skillicons.dev/icons?i=github" style="width: 25px; md:width: 30px;" alt="GitHub">
                        </a>
                    @endif
                
                    @if (isset($info['email']) && $info['email'] != null)
                        <a href="mailto:{{ $info['email'] }}" class="mr-2 md:mr-3" target="_blank">
                            <img class="inline" src="https://skillicons.dev/icons?i=gmail" style="width: 25px; md:width: 30px;" alt="Email">
                        </a>
                    @endif
                </div>
                
            
            </div>

        </div>

        <!-- Right Content Area (Image) -->
        <div class="col-span-2 p-6 w-full h-full relative overflow-hidden" style="min-height: 50vh;">
            <div class="flex w-full h-full items-center justify-center relative" style="animation: grow-opacity-animation 0.5s ease;">
                <img class="image-hover" src="{{ asset('storage/images/'.$info['image']) }}" alt="My Image">
                <div class="back-1 bg-cyan-600"></div>
                <div class="back-2 bg-cyan-600"></div>
            </div>
        </div>
        
    </div>
</div>


<style>

    /* Hand icon animation */
    .hand-icon {
        transform: rotate(0deg);
        transform-origin: bottom center;
        animation: hand-animation 5s ease infinite;
    }

    /* Circular background animation */
    .back-1, .back-2 {
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        z-index: 1;
        animation: live 2s linear infinite;
    }

    .back-2 {
        animation-delay: -1s;
    }

    /* Image hover effect */
    .image-hover {
        width: 200px;
        border-radius: 50%;
        z-index: 10;
        transition: transform 0.5s ease, border-radius 0.5s ease;
    }

    .image-hover:hover {
        border-radius: 5%;
        transform: scale(150%);
    }

    /* Keyframes for animation */
    @keyframes live {
        0% {
            transform: scale(100%);
            opacity: 1;
        }
        100% {
            transform: scale(140%);
            opacity: 0;
        }
    }

    @keyframes hand-animation {
        0% {
            transform: rotate(0deg);
        }
        5% {
            transform: rotate(-25deg);
        }
        15% {
            transform: rotate(25deg);
        }
        20% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }


    @keyframes grow-opacity-animation {
        0%   {
        opacity: 0;
        transform: scale(80%);
        }
        100% {
        transform: scale(100%);
        opacity: 1;
        }
    }

</style>

@endsection
