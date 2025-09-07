<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Polesin - Polishing in Bali</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">


    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/why-us.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-us-banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/galerry.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>


    <div id="service-modal" class="modal-overlay hidden">
        <div class="modal-content">
            <button class="modal-close-btn">&times;</button>
            <img src="" alt="Service Image" class="modal-img">
            <h2 class="modal-title"></h2>
            <p class="modal-description"></p>
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="btn-book-now modal-wa-button" target="_blank">Contact via WhatsApp</a>
        </div>
    </div>



    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('service-modal');

        if (modal) {
            const openModalButtons = document.querySelectorAll('.service-modal-trigger');
            const closeModalButton = modal.querySelector('.modal-close-btn');

            function openModal(event) {
                event.preventDefault();

                const link = event.currentTarget;

                const title = link.dataset.title;
                const imgSrc = link.dataset.img;
                const description = link.dataset.description;

                modal.querySelector('.modal-title').textContent = title;
                modal.querySelector('.modal-img').src = imgSrc;
                modal.querySelector('.modal-description').textContent = description;

                modal.classList.remove('hidden');
            }

            function closeModal() {
                modal.classList.add('hidden');
            }
            openModalButtons.forEach(button => {
                button.addEventListener('click', openModal);
            });


            if (closeModalButton) {
                closeModalButton.addEventListener('click', closeModal);
            }

            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
            else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, {
        threshold: 0.4
    });

    const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
    elementsToAnimate.forEach((el) => observer.observe(el));
});
    </script>

</body>
</html>

