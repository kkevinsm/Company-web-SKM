<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Halaman Tidak Ditemukan - {{ config('app.name') }}</title>
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .div {
            width: 100%;
            position: relative;
            background-color: #fff0ea;
            height: 100vh;
            overflow: hidden;
            text-align: left;
            font-size: 64px;
            color: #000;
            font-family: 'Inter', sans-serif;
        }

        .pxl-20250530-031618377-1-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }

        .masking-group-icon {
            position: absolute;
            top: 15vh;
            left: 50%;
            transform: translateX(-50%);
            width: 100vw;
            height: 50vh;
            object-fit: contain;
            z-index: 2;
        }

        .laman-tidak-ditemukan {
            position: absolute;
            top: 70vh;
            left: 50%;
            transform: translateX(-50%);
            font-weight: 900;
            text-align: center;
            white-space: nowrap;
            z-index: 3;
        }

        .button {
            position: absolute;
            top: 80vh;
            left: calc(50% - 71px);
            filter: drop-shadow(0px 1px 2px rgba(0, 0, 0, 0.05));
            border-radius: 100px;
            border: 2px solid #000;
            box-sizing: border-box;
            width: 142px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 32px;
            gap: 8px;
            font-size: 16px;
            background-color: transparent;
            text-decoration: none;
            color: #000;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            z-index: 3;
        }

        .button:hover {
            background-color: #f96628;
            border-color: #f96628;
            color: white;
            width: 170px;
            left: calc(50% - 85px);
            text-decoration: none;
        }

        .arrow-up-right-icon {
            width: 24px;
            position: relative;
            height: 24px;
            flex-shrink: 0;
        }

        .beranda {
            position: relative;
            line-height: 150%;
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .div {
                font-size: 32px;
            }

            .masking-group-icon {
                top: 15vh;
                height: 48vh;
                width: 90vw;
                left: 50%;
                transform: translateX(-50%);
                object-fit: contain;
            }

            .laman-tidak-ditemukan {
                top: 68vh;
                font-size: 32px;
                padding: 0 20px;
                white-space: normal;
                line-height: 1.2;
                max-width: 90vw;
            }

            .button {
                top: 78vh;
                font-size: 14px;
                width: 120px;
                height: 44px;
                left: calc(50% - 60px);
                padding: 16px 24px;
            }

            .button:hover {
                width: 140px;
                left: calc(50% - 70px);
            }

            .arrow-up-right-icon {
                width: 20px;
                height: 20px;
            }
        }

        @media (max-width: 480px) {
            .div {
                font-size: 24px;
            }

            .masking-group-icon {
                top: 12vh;
                height: 40vh;
                width: 85vw;
                left: 50%;
                transform: translateX(-50%);
                object-fit: contain;
            }

            .laman-tidak-ditemukan {
                top: 58vh;
                font-size: 24px;
                line-height: 1.3;
                max-width: 85vw;
            }

            .button {
                top: 70vh;
                font-size: 12px;
                width: 100px;
                height: 40px;
                left: calc(50% - 50px);
                padding: 12px 20px;
                gap: 6px;
            }

            .button:hover {
                width: 120px;
                left: calc(50% - 60px);
            }

            .arrow-up-right-icon {
                width: 16px;
                height: 16px;
            }
        }

        @media (max-width: 360px) {
            .div {
                font-size: 20px;
            }

            .masking-group-icon {
                top: 10vh;
                height: 38vh;
                width: 80vw;
                left: 50%;
                transform: translateX(-50%);
                object-fit: contain;
            }

            .laman-tidak-ditemukan {
                top: 54vh;
                font-size: 20px;
                max-width: 80vw;
            }

            .button {
                top: 66vh;
                font-size: 11px;
                width: 90px;
                height: 36px;
                left: calc(50% - 45px);
                padding: 10px 16px;
            }

            .button:hover {
                width: 110px;
                left: calc(50% - 55px);
            }

            .arrow-up-right-icon {
                width: 14px;
                height: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="div">
        <!-- Background Image -->
        <img class="pxl-20250530-031618377-1-icon" 
             src="{{ asset('images/404bg.jpg') }}" 
             alt="404 Background">
        
        <!-- Masking Group -->
        <img class="masking-group-icon" 
             src="{{ asset('images/mask-group404.png') }}" 
             alt="404 Masking">
        
        <div class="laman-tidak-ditemukan">Laman Tidak Ditemukan</div>
        
        <a href="{{ url('/') }}" class="button">
            <svg class="arrow-up-right-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
            </svg>
            <span class="beranda">Beranda</span>
        </a>
    </div>
</body>
</html>