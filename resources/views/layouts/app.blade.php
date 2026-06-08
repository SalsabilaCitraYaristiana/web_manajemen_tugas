<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
      /* fonts */
      @font-face {
        font-family: 'Nexa_Heavy';
        src: url('/fonts/Nexa_Heavy.ttf') format('truetype');
      }
      @font-face {
        font-family: 'Nexa_light';
        src: url('/fonts/Nexa_light.ttf') format('truetype');
      }
      html, body {
        max-width: 100%;
        overflow-x: hidden !important;
    }
        AOS.init({
        duration: 1000, // Durasi animasi (1 detik) agar smooth seperti Webflow
        once: true,     // Animasi hanya berjalan sekali saat di-scroll kebawah
        offset: 100     // Animasi dimulai 100px sebelum elemen terlihat di layar
    });
    </style>
  </head>
  <body>

    @include('componen.navbar')

    <main>
        @yield('content')
    </main>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });

        document.addEventListener("touchstart", function() {}, true);
    </script>

    @include('componen.footer')
  </body>
</html>

