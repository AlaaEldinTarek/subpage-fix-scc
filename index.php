<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <base href="https://pebblebrookseniorhomecare.com/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>#1 Assisted Living in Temecula CA | Pebble Brook Assisted Living</title>
    <meta name="description" content="Pebble Brook Assisted Living is the best senior living communities in Temecula, including assisted living, and memory care at 33722 Pebble Brook Cir,Temecula CA.">
    <meta name="keywords" content="assisted living in temecula, memory care temecula, assisted living near anza, assisted living near sage, assisted living near me, senior home care temecula, temecula senior center, temecula events, senior living temecula, hospitality associate, assisted living with memory care">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <link rel="icon" type="image/png" href="https://www.pebblebrookseniorhomecare.com/img/icon.png" />
    <link rel="canonical" href="https://www.pebblebrookseniorhomecare.com/" />
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.pebblebrookseniorhomecare.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="#1 Assisted Living in Temecula CA | Pebble Brook Assisted Living" />
    <meta property="og:description" content="Pebble Brook Assisted Living is the best senior living communities in Temecula, including assisted living, and memory care at 33722 Pebble Brook Cir,Temecula CA." />

    <meta property="og:image" content="https://pebblebrookseniorhomecare.com/ogimage.jpg" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://www.pebblebrookseniorhomecare.com/">
    <meta property="twitter:url" content="https://www.pebblebrookseniorhomecare.com/">
    <meta name="twitter:title" content="#1 Assisted Living in Temecula CA | Pebble Brook Assisted Living">
    <meta name="twitter:description" content="Pebble Brook Assisted Living is the best senior living communities in Temecula, including assisted living, and memory care at 33722 Pebble Brook Cir,Temecula CA." />
    <meta name="twitter:image" content="https://pebblebrookseniorhomecare.com/ogimage.jpg" />

    <script type="application/ld+json">
        {
            "@context": {
                "@vocab": "http:\/\/schema.org\/"
            },
            "@graph": [{
                    "@id": "https:\/\/pebblebrookseniorhomecare.com",
                    "@type": "LocalBusiness",
                    "name": "Pebble Brook Assisted Living",
                    "url": "https:\/\/pebblebrookseniorhomecare.com\/",
                    "logo": "https:\/\/pebblebrookseniorhomecare.com\/logo4.svg"
                },
                {
                    "@type": "LocalBusiness",
                    "parentOrganization": {
                        "name": "Pebble Brook Assisted Living"
                    },
                    "name": "Pebble Brook Assisted Living",
                    "telephone": "(951)303-0253",
                    "priceRange": "4500",
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday"

                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Tuesday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Wednesday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Thursday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Friday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Saturday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Sunday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        }
                    ],
                    "address": {
                        "@type": "PostalAddress",
                        "name": "Pebble Brook Assisted Living",
                        "streetAddress": "33722 Pebble Brook Circle",
                        "addressLocality": "Temecula",
                        "addressRegion": "CA",
                        "postalCode": "92592"
                    },
                    "image": "https:\/\/pebblebrookseniorhomecare.com\/logo4.svg"
                }
            ]
        }
    </script>
</head>

<body>
    <?php //navbar here

    include("navbar.php");
    ?>

    <div class="body-wrapper" style="position: relative">
        <div class="section-search" style="display: none">
            <div class="search-bar"><strong>Contact Us</strong>
                <div class="clear hide"></div>
            </div>
        </div>

        <script>
            // document.getElementById('search').keypress(function () {
            //     document.getElementById('search').removeClass('error');
            // });

            // const form = document.getElementById('search_form');
            // form.addEventListener('submit', searcht);

            // function searcht(event) {
            //     event.preventDefault();
            //     var term = document.getElementById('search').value;
            //     term = term.replace(/\s+/g, '-').toLowerCase();

            //     if (term == '') {
            //         document.getElementById('search').focus();
            //         document.getElementById('search').addClass('error');
            //     } else {
            //         window.location.href = "search/" + term + "/";
            //     }
            // }
            let scrollpos = window.scrollY
            const header = document.querySelector(".header-wrapper-fixed")
            const header_height = header.offsetHeight

            const add_class_on_scroll = () => header.classList.add("is-sticky")
            const remove_class_on_scroll = () => header.classList.remove("is-sticky")

            window.addEventListener('scroll', function() {
                scrollpos = window.scrollY;

                if (scrollpos >= header_height) {
                    add_class_on_scroll()
                } else {
                    remove_class_on_scroll()
                }
            })


            let dropCheckboxNew = document.getElementById("drop");
            dropCheckboxNew.addEventListener("change", function() {
                let mainMenu = document.getElementsByClassName("main-ul")[0];
                let menuOverlay = document.getElementsByClassName("menu-overlay")[0];

                if (this.checked) {
                    mainMenu.style.display = "block";
                    menuOverlay.classList.add('menu-is-open')
                } else {
                    mainMenu.style.display = "none";
                    menuOverlay.classList.remove('menu-is-open')
                }
            });
            let dropCheckboxNewMob = document.getElementById("mob-drop");
            dropCheckboxNewMob.addEventListener("change", function() {
                let mainMenu = document.getElementsByClassName("main-ul")[0];
                let menuOverlay = document.getElementsByClassName("menu-overlay")[0];

                if (this.checked) {
                    mainMenu.style.display = "block";
                    menuOverlay.classList.add('menu-is-open')
                } else {
                    mainMenu.style.display = "none";
                    menuOverlay.classList.remove('menu-is-open')
                }
            });

            document.querySelector('.pg_close').addEventListener('click', function() {
                let input = document.querySelector('#check01')
                input.checked = false
            })

            function showSharePopup() {
                var pop = document.getElementById("share-popup");
                pop.classList.remove("hide-popup");
            }

            function hideSharePopup() {
                var pop = document.getElementById("share-popup");
                pop.classList.add("hide-popup");
            }

            function showDownloadPopup() {
                var pop = document.getElementById("download-popup");
                pop.classList.remove("hide-popup");
            }

            function hideDownloadPopup() {
                var pop = document.getElementById("download-popup");
                pop.classList.add("hide-popup");
            }
        </script>
        <div class="section-social-mobile">
					<?php //prices here
							include("pricesMobile.php");
					?>
        </div>
        <div class="display-flex">
            <div class="section-content-nav-index" style="width: 100%">
                <div class="section-desktop">
                        <div class="svg-mid">
                            <svg xmlns="http://www.w3.org/2000/svg" width="335" height="99.7" overflow="visible" xmlns:v="https://vecta.io/nano"><path fill="#4d4d4d" d="M335 50.7c0 27.1-22 49-49 49H50.2c-27.1 0-49-22-49-49h0c0-27.1 22-49 49-49H286c27 0 49 21.9 49 49h0z"/><path fill="#fff" d="M333.8 49c0 27.1-22 49-49 49H49C22 98 0 76.1 0 49h0C0 22 22 0 49 0h235.7c27.1 0 49.1 22 49.1 49h0z"/><g fill="#f0037f"><path d="M77.4 38.8c1.9 0 3.5.3 4.7 1s2.2 1.6 2.9 2.7c.2.3.4.6.5.9s.2.7.4 1c0 .1.1.3.1.4v.5c0 .1-.1.2-.2.2s-.2.1-.3.1h-.2c-.1 0-.2.1-.4 0s-.3 0-.4 0h-.6-.7c-.3 0-.4 0-.6-.1s-.3-.1-.4-.1c-.1-.1-.3-.3-.3-.5s-.2-.4-.3-.6a3.16 3.16 0 0 0-1.4-1.4l-1.3-.6a3.73 3.73 0 0 0-1.2-.2c-.5 0-.9 0-1.2.1-.1 0-.3.1-.4.1s-.2.1-.4.1c-1.2.5-2.1 1.4-2.6 2.6-.1.2-.2.4-.2.7s-.2.5-.2.7c0 .1 0 .2-.1.4 0 .1 0 .2-.1.4v.3.4c0 .1-.1.3 0 .4v.4.2.2.2.3.3c0 .1 0 .3.1.4 0 .2.1.4.1.6s.1.3.1.5c.3.8.6 1.4 1 1.9s.9 1 1.6 1.3c.2.1.4.2.6.2.2.1.5.1.7.2h.3.3.2.4.4.2c.2 0 .4-.1.6-.1s.4-.1.6-.2c.4-.2.8-.4 1.1-.7s.6-.6.8-1l.3-.6c.1-.2.2-.4.2-.7.1-.2.1-.4.2-.5s.2-.3.4-.4c.1 0 .2-.1.4-.1h.5H85h.5c.2 0 .3 0 .4.1s.2.2.2.4 0 .4-.1.6l-.2.7-.3.8c-.1.3-.2.5-.3.7a.76.76 0 0 0-.2.4c-.1.1-.1.3-.2.4-1 1.6-2.4 2.6-4.3 3.2-.2.1-.4.1-.6.2s-.4.1-.6.1H79h-.3-.4-.4-.4-.5c-.2 0-.3 0-.5-.1h-.3-.4-.4c-.2-.1-.4-.1-.5-.1-.2 0-.3-.1-.5-.1-.2-.1-.3-.1-.5-.2s-.3-.1-.5-.2c-1.1-.5-2-1.1-2.7-1.9s-1.4-1.7-1.8-2.8l-.3-.8c-.1-.3-.2-.5-.2-.8 0-.1-.1-.2-.1-.2v-.2c0-.2-.1-.3-.1-.5s0-.4-.1-.5v-.2-.2-.5c0-.1-.1-.2-.1-.4s0-.3.1-.4V48v-.1.1c0-.1.1-.3.1-.5V47c0-.1.1-.3.1-.4s0-.3.1-.4c.1-.3.1-.5.2-.7s.1-.5.2-.7.2-.5.3-.7.2-.5.3-.6l.9-1.4c.1-.1.2-.2.3-.4l.3-.3a6.73 6.73 0 0 1 1.4-1.1c.5-.3 1.1-.6 1.7-.9.2-.1.4-.2.7-.2.2-.1.5-.1.7-.2.1 0 .2-.1.3-.1s.2 0 .3-.1h.4.4.1.5zm29.9 9.4c0 .1.1.3.1.6v.6.4c0 .2-.1.4-.1.6s0 .4-.1.6c0 .1-.1.3-.1.4s0 .3-.1.4l-.3.9-.3.9c-.5 1.3-1.3 2.3-2.2 3.2-.9.8-2.1 1.5-3.4 1.9-.2.1-.4.1-.6.2s-.4.1-.6.1c-.1 0-.2.1-.3.1H99l-.9.1h-.4-.4-.3-.3-.3c-.1 0-.3-.1-.4-.1s-.3 0-.4-.1c-.1 0-.3-.1-.4-.1s-.3-.1-.4-.1c-.2-.1-.4-.1-.6-.2s-.4-.2-.6-.2c-1.1-.5-2-1.1-2.7-1.9-.8-.8-1.4-1.7-1.8-2.8l-.3-.8c-.1-.3-.2-.6-.2-.9 0-.1-.1-.2-.1-.2v-.2c0-.1-.1-.3-.1-.4s0-.3-.1-.4v-.3-.2-.3-.3c0-.1-.1-.2-.1-.4s0-.3.1-.4v-.3-.3-.2-.4-.3c0-.1.1-.2.1-.3s0-.2.1-.3c.1-.3.2-.6.2-.9s.1-.6.2-.9.3-.6.4-.9.3-.6.5-.9c.5-.9 1.2-1.6 1.9-2.2s1.6-1.1 2.6-1.5c.2-.1.5-.2.7-.2.3-.1.5-.1.8-.2.1 0 .2-.1.3-.1h.3l.8-.1h.1.1c1.3 0 2.4.1 3.3.4s1.8.7 2.5 1.2c.2.2.5.3.7.6.3.2.5.4.6.6l.3.3c.1.1.2.2.2.3l.6.9c.2.3.4.6.5 1 .1.3.2.5.3.7s.2.5.3.8c.1.2.1.4.1.6s.1.4.1.6c0 .1.1.2.1.4s0 .2.1.3 0 .2 0 .3v.3h0zm-4.2 1.1c0-.1.1-.2.1-.4s0-.3-.1-.4V48v-.2-.2c0-.1-.1-.3-.1-.4s0-.3-.1-.4c0-.1 0-.2-.1-.3-.1-.2-.1-.4-.2-.6s-.1-.4-.2-.6c-.4-.9-1-1.7-1.7-2.2-.7-.6-1.8-.9-3.1-.9h-.1-.1-.2-.2c-.2 0-.4.1-.6.1s-.4.1-.5.2c-.9.5-1.5.9-1.9 1.5s-.8 1.3-1.1 2.1c-.1.2-.1.4-.1.6s-.1.4-.1.6v.2.2.3.3c0 .1-.1.3-.1.5v.5.3.2.2.2.2c.1.2.1.4.1.6s.1.4.1.6c.2.6.4 1.1.7 1.6s.6.9 1.1 1.2c.1.1.2.2.3.2.1.1.2.1.3.2l.6.3c.2.1.5.1.7.2.1 0 .2.1.3 0h.3c.1 0 .2.1.3.1h.4.2.2.2c.2 0 .4-.1.5-.1.2 0 .4-.1.5-.1.8-.3 1.4-.7 1.8-1.2s.8-1.1 1.1-1.9c.1-.2.2-.4.2-.7s.1-.5.2-.7l.3-.7v-.2-.3-.2zm7.9-10.1h2.2.6c.2 0 .4 0 .5.1.2.1.3.2.4.3s.2.3.3.4l1 1.5 1.9 3.1 1.9 3.1.9 1.5.9 1.4c.1.1.1.2.2.3s.1.2.3.3l.1.1h.2c.1 0 .2-.1.2-.2s0-.3.1-.4v-.4-.4-1.7-6.3-1-.3-.2-.4c0-.3.1-.5.2-.6s.2-.2.4-.2h.5 1.7.4c.1 0 .3 0 .4.1.2.1.4.2.4.5v.8 3 11.3 2.3.6c0 .2 0 .4-.1.5s-.2.2-.3.2-.2.1-.4.1h-1-1.5-.5c-.2 0-.3 0-.4-.1-.2-.1-.4-.2-.5-.4s-.2-.3-.3-.5l-.5-.8-.5-.8-4.1-6.5c-.3-.4-.5-.8-.7-1.2s-.5-.8-.7-1.2c-.1-.1-.2-.3-.3-.5a.55.55 0 0 0-.5-.3.76.76 0 0 0-.2.4v.6 1.9 6.5 1.1.3.3.3c0 .3 0 .5-.1.6s-.2.2-.4.2h-.5-1.6-.4c-.1 0-.3 0-.4-.1-.2-.1-.4-.3-.4-.5v-.8V54 43.1v-2.5-.6c0-.2 0-.4.1-.5s.2-.2.4-.3h.1 0zm29.3 0h2.8.7c.2 0 .4.1.6.1.1 0 .1.1.1.2s0 .2.1.3v.1.2.3 1.1.4.3c-.1.3-.3.5-.5.5h-1-2.8-.9c-.3 0-.4.2-.5.5v.2.2.4.4 2.4 7.8 2.5.7c0 .2-.1.4-.3.4-.1 0-.3.1-.4.1h-.5-1.8-.6c-.2 0-.3-.1-.4-.2s-.1-.3-.1-.6v-.7-2.7-7.5-2.3-.4-.4-.2-.2c-.1-.3-.3-.5-.6-.5h-1-2.5-.7-.6c-.1-.1-.3-.1-.3-.2-.1-.1-.1-.2-.1-.4v-.4-1.3-.6c0-.2.1-.3.3-.4.1 0 .2-.1.3-.1h.1 10.6zm20.4 18c0 .1 0 .2.1.3s.1.2.1.3v.3c0 .1-.1.2-.2.2-.1.1-.4.1-.7.1h-.8-1.3-.4-.3a1.38 1.38 0 0 1-.4-.3c-.1-.1-.2-.3-.2-.5s-.1-.3-.2-.5l-.3-.9-.3-.8c-.1-.2-.1-.3-.1-.4s-.1-.3-.1-.4c-.1-.1-.1-.2-.2-.3s-.3-.1-.4-.2h-.3-.3-4.4-1c-.4 0-.6.1-.8.2-.1.1-.2.3-.3.4-.1.2-.1.4-.2.5-.1.3-.3.6-.4 1l-.3 1c-.1.2-.1.4-.2.6s-.2.4-.3.5-.2.1-.4.1h-.6-.6-.6-.9c-.3 0-.6 0-.7-.1s-.1-.1-.1-.2v-.3c0-.1.1-.2.1-.3s.1-.2.1-.3c.2-.4.3-.8.5-1.3.2-.4.3-.9.5-1.3.1-.1.1-.3.2-.4s.1-.3.2-.4c.1-.4.3-.8.4-1.2s.3-.8.4-1.2.3-.7.4-1.1.3-.7.4-1.1l1.2-3 1.2-3c0-.1.1-.2.1-.2s0-.2.1-.2c.1-.4.3-.8.4-1.2s.3-.8.5-1.2c.1-.2.2-.4.2-.6.1-.2.2-.4.3-.5s.2-.1.4-.1h.1.1 2.4.6c.2 0 .4 0 .5.1.2.1.3.3.4.5s.1.4.2.6c.1.3.2.6.4.9s.2.6.4.9c0 .1.1.2.1.3s.1.2.1.3c.1.4.3.7.4 1.1s.3.7.4 1.1c.4.9.7 1.8 1 2.7l1 2.7c0 .1.1.1.1.2s0 .1.1.2l.3.9.3.9c.1.1.1.3.2.4 0 .1.1.3.1.4.2.6.5 1.2.6 1.7a12.2 12.2 0 0 0 .7 1.7c0 .1.1.1.1.1s-.2.3-.1.3zm-7.1-6.2c.2-.1.3-.2.3-.5 0-.2-.1-.4-.2-.6 0-.1-.1-.1-.1-.2s0-.1-.1-.2c-.2-.6-.5-1.2-.6-1.9-.2-.6-.4-1.3-.7-1.9 0-.1-.1-.2-.1-.3s-.1-.3-.1-.4-.1-.2-.2-.3-.2-.1-.3-.1l-.1.1s-.1 0-.1.1c-.1.2-.2.4-.3.7s-.1.5-.2.7l-.6 1.5-.6 1.6c-.1.2-.1.4-.2.5-.1.2-.1.4-.2.6-.1.1 0 .3 0 .5.1.1.2.2.4.2h.6 2.1.5c.2 0 .7-.1.8-.1zm17.5-12.2c1.9 0 3.5.3 4.7 1s2.2 1.6 2.9 2.7c.2.3.4.6.5.9s.2.7.4 1c0 .1.1.3.1.4v.5c0 .1-.1.2-.2.2s-.2.1-.3.1h-.2c-.1 0-.2.1-.4 0s-.3 0-.4 0h-.6-.7c-.2 0-.4 0-.6-.1-.2 0-.3-.1-.4-.1-.1-.1-.3-.3-.3-.5s-.2-.4-.3-.6a3.16 3.16 0 0 0-1.4-1.4l-1.3-.6a3.73 3.73 0 0 0-1.2-.2c-.5 0-.9 0-1.2.1-.1 0-.3.1-.4.1s-.2.1-.4.1c-1.2.5-2.1 1.4-2.6 2.6-.1.2-.2.4-.2.7s-.2.5-.2.7c0 .1 0 .2-.1.4 0 .1 0 .2-.1.4v.3.4.4.4.2.2.2.3.3c0 .1 0 .3.1.4 0 .2.1.4.1.6s.1.3.1.5c.3.8.6 1.4 1 1.9s.9 1 1.6 1.3c.2.1.4.2.6.2.2.1.5.1.7.2h.3.3.2.4.4.2c.2 0 .4-.1.6-.1s.4-.1.6-.2c.4-.2.8-.4 1.1-.7s.6-.6.8-1l.3-.6c.1-.2.2-.4.2-.7.1-.2.1-.4.2-.5s.2-.3.4-.4c.1 0 .2-.1.4-.1h.5 1.7.5c.2 0 .3 0 .4.1s.2.2.2.4 0 .4-.1.6l-.2.7-.3.8c-.1.3-.2.5-.3.7a.76.76 0 0 0-.2.4c-.1.1-.1.3-.2.4-1 1.6-2.4 2.6-4.3 3.2-.2.1-.4.1-.6.2s-.4.1-.6.1h-.3-.3-.4-.4-.4-.5c-.2 0-.3 0-.5-.1h-.3-.4-.4c-.2-.1-.4-.1-.5-.1-.2 0-.3-.1-.5-.1-.2-.1-.3-.1-.5-.2s-.3-.1-.5-.2c-1.1-.5-2-1.1-2.7-1.9-.8-.8-1.4-1.7-1.8-2.8l-.3-.8c-.1-.3-.2-.5-.2-.8 0-.1-.1-.2-.1-.2v-.2c0-.2-.1-.3-.1-.5s0-.4-.1-.5v-.2-.2-.5c0-.1-.1-.2-.1-.4s0-.3.1-.4V48v-.1.1c0-.1.1-.3.1-.5V47c0-.1.1-.3.1-.4s0-.3.1-.4c.1-.3.1-.5.2-.7s.1-.5.2-.7.2-.5.3-.7.2-.5.3-.6l.9-1.4c.1-.1.2-.2.3-.4l.3-.3a6.73 6.73 0 0 1 1.4-1.1c.5-.3 1.1-.6 1.7-.9.2-.1.4-.2.7-.2.2-.1.5-.1.7-.2.1 0 .2-.1.3-.1s.2 0 .3-.1h.4.4.1.2zm21.9.4h2.8.7c.2 0 .4.1.6.1.1 0 .1.1.1.2s0 .2.1.3v.1.2.3 1.1.4.3c-.1.3-.3.5-.5.5h-1-2.8-.9c-.3 0-.4.2-.5.5v.2.2.4.4 2.4 7.8 2.5.7c0 .2-.1.4-.3.4-.1 0-.3.1-.4.1h-.5-1.8-.6c-.2 0-.3-.1-.4-.2s-.1-.3-.1-.6v-.7-2.7-7.5-2.3-.4-.4-.2-.2c-.1-.3-.3-.5-.6-.5h-1-2.5-.7-.6c-.1-.1-.3-.1-.3-.2-.1-.1-.1-.2-.1-.4v-.4-1.3-.6c0-.2.1-.3.3-.4.1 0 .2-.1.3-.1h.1H193zm14.7 0h2.2.6c.2 0 .4 0 .5.1a1.38 1.38 0 0 1 .4.3c.1.1.2.3.3.4l1 1.5 1.9 3.1 1.9 3.1.9 1.5.9 1.4c.1.1.1.2.2.3s.1.2.3.3l.1.1h.2c.1 0 .2-.1.2-.2s0-.3.1-.4v-.4-.4-1.7-6.3-1-.3-.2-.4c0-.3.1-.5.2-.6s.2-.2.4-.2h.5 1.7.4c.1 0 .3 0 .4.1.2.1.4.2.4.5v.8 3 11.3 2.3.6c0 .2 0 .4-.1.5s-.2.2-.3.2-.2.1-.4.1h-1-1.5-.5c-.2 0-.3 0-.4-.1-.2-.1-.4-.2-.5-.4s-.2-.3-.3-.5l-.5-.8-.5-.8-4.1-6.5c-.3-.4-.5-.8-.7-1.2s-.5-.8-.7-1.2c-.1-.1-.2-.3-.3-.5a.55.55 0 0 0-.5-.3.76.76 0 0 0-.2.4v.6 1.9 6.5 1.1.3.3.3c0 .3 0 .5-.1.6s-.2.2-.4.2h-.5-1.6-.4c-.1 0-.3 0-.4-.1-.2-.1-.4-.3-.4-.5v-.8V54 43.1v-2.5-.6c0-.2 0-.4.1-.5s.2-.2.4-.3h.1c-.1 0 0 0 0 0z"/><path d="M245.1 48.2c0 .1.1.3.1.6v.6.4c0 .2-.1.4-.1.6s0 .4-.1.6c0 .1-.1.3-.1.4s0 .3-.1.4l-.3.9-.3.9c-.5 1.3-1.3 2.3-2.2 3.2-.9.8-2.1 1.5-3.4 1.9-.2.1-.4.1-.6.2-.2 0-.4.1-.6.1-.1 0-.2.1-.3.1h-.3l-.9.1h-.4-.4-.3-.3-.3c-.1 0-.3-.1-.4-.1s-.3 0-.4-.1c-.1 0-.3-.1-.4-.1s-.3-.1-.4-.1c-.2-.1-.4-.1-.6-.2s-.4-.2-.6-.2c-1.1-.5-2-1.1-2.7-1.9s-1.4-1.7-1.8-2.8l-.3-.8c-.1-.3-.2-.6-.2-.9 0-.1-.1-.2-.1-.2v-.2c0-.1-.1-.3-.1-.4s0-.3-.1-.4v-.3-.2-.3-.3c0-.1-.1-.2-.1-.4s0-.3.1-.4v-.3-.3-.2-.4-.3c0-.1.1-.2.1-.3s0-.2.1-.3c.1-.3.2-.6.2-.9s.1-.6.2-.9.3-.6.4-.9.3-.6.5-.9c.5-.9 1.2-1.6 1.9-2.2s1.6-1.1 2.6-1.5c.2-.1.5-.2.7-.2.3-.1.5-.1.8-.2.1 0 .2-.1.3-.1h.3l.8-.1h.1.1c1.3 0 2.4.1 3.3.4s1.8.7 2.5 1.2c.2.2.5.3.7.6.3.2.5.4.6.6l.3.3c.1.1.2.2.2.3l.6.9c.2.3.4.6.5 1 .1.3.2.5.3.7s.2.5.3.8c.1.2.1.4.1.6s.1.4.1.6c0 .1.1.2.1.4s0 .2.1.3 0 .2 0 .3v.3h0zm-4.2 1.1c0-.1.1-.2.1-.4s0-.3-.1-.4V48v-.2-.2c0-.1-.1-.3-.1-.4s0-.3-.1-.4c0-.1 0-.2-.1-.3-.1-.2-.1-.4-.2-.6s-.1-.4-.2-.6c-.4-.9-1-1.7-1.7-2.2s-1.8-.9-3.1-.9h-.1-.1-.2-.2c-.2 0-.4.1-.6.1s-.4.1-.5.2c-.8.3-1.4.8-1.8 1.4s-.8 1.3-1.1 2.1c-.1.2-.1.4-.1.6s-.1.4-.1.6v.2.2.3.3c0 .1-.1.3-.1.5v.5.3.2.2.2.2c.1.2.1.4.1.6s.1.4.1.6c.2.6.4 1.1.7 1.6s.6.9 1.1 1.2c.1.1.2.2.3.2.1.1.2.1.3.2l.6.3c.2.1.5.1.7.2.1 0 .2.1.3 0h.3c.1 0 .2.1.3.1h.4.2.2.2c.2 0 .4-.1.5-.1.2 0 .4-.1.5-.1.8-.3 1.4-.7 1.8-1.2s.8-1.1 1.1-1.9c.1-.2.2-.4.2-.7s.1-.5.2-.7l.1-.7v-.2-.3-.1zm6.2-10.1h2.1.6c.2 0 .4 0 .5.1s.2.3.3.4c0 .2.1.4.1.6.1.3.1.5.2.8s.1.5.2.8c0 .1.1.2.1.2v.2c.1.3.1.5.2.8 0 .3.1.5.2.8.1.2.1.4.2.6 0 .2.1.4.1.6.2.6.3 1.2.4 1.8s.3 1.2.4 1.8c.1.3.2.5.2.8s.1.5.2.8c.1.2.1.4.2.6s.1.3.3.4h.1.1c.1 0 .2-.1.2-.3.1-.2.1-.3.1-.4.1-.2.1-.5.2-.7s.1-.5.2-.7c0-.1 0-.2.1-.3 0-.1 0-.2.1-.3.1-.2.2-.5.2-.7s.1-.5.2-.7c0-.1 0-.1.1-.2 0-.1 0-.2.1-.2.1-.2.1-.3.1-.5s.1-.3.1-.5c0-.1.1-.3.1-.3 0-.1.1-.3.1-.4s.1-.3.1-.4c.2-.5.3-1 .4-1.5s.2-1 .4-1.5c.1-.3.2-.5.2-.8s.1-.5.2-.8c.1-.2.1-.4.2-.6a.78.78 0 0 1 .4-.4c.1 0 .3-.1.4-.1h.5 1.6.6c.2 0 .3.1.4.1s.2.2.2.4.1.3.1.5c.1.3.2.7.2 1s.2.7.2 1c.1.2.1.5.2.7s.1.5.2.7.1.4.1.6.1.4.2.6c.2.7.4 1.3.5 2s.3 1.4.5 2c.1.3.2.6.2.8s.1.6.2.8a.9.9 0 0 1 .1.5c0 .2.1.3.2.4 0 0 .1 0 .1.1h.1.1.1c.1-.1.2-.3.2-.5s.1-.3.1-.5c.1-.3.2-.6.2-.9s.1-.6.2-.9l.6-2.4c.2-.8.3-1.6.6-2.4.1-.3.2-.6.2-.9s.1-.6.2-.9c0-.1.1-.2.1-.2v-.2c.1-.3.1-.5.2-.8s.1-.5.2-.8c0-.1.1-.3.1-.5s.1-.3.2-.4.3-.1.5-.2h.6 1.5.5c.1 0 .3 0 .4.1.2.1.3.2.2.5 0 .2-.1.4-.1.6-.1.4-.3.9-.4 1.3-.1.5-.2.9-.4 1.3 0 .1-.1.2-.1.3s0 .2-.1.3l-.3 1-.3 1c0 .1-.1.2-.1.3s0 .2-.1.3c-.1.2-.2.5-.2.7s-.1.5-.2.7c0 .1-.1.2-.1.2s0 .2-.1.2c-.1.3-.2.5-.2.8s-.1.5-.2.8c-.1.2-.1.4-.1.5 0 .2-.1.3-.1.5l-.6 2.1c-.2.7-.3 1.4-.6 2.1 0 .1-.1.2-.1.4 0 .1 0 .2-.1.4l-.3 1-.3 1c-.1.2-.1.5-.2.6a.78.78 0 0 1-.4.4c-.1 0-.3.1-.5.1h-.5-1.8-.6c-.2 0-.3-.1-.5-.1-.1-.1-.2-.2-.2-.3s-.1-.3-.1-.4l-.3-1.1c-.1-.4-.2-.7-.2-1.1-.1-.2-.1-.4-.2-.7s-.1-.5-.2-.7-.1-.3-.1-.5-.1-.3-.1-.5c-.1-.4-.3-.9-.4-1.3l-.3-1.4c-.1-.3-.2-.5-.2-.7s-.1-.5-.2-.7c-.1-.3-.2-.6-.2-.9-.1-.3-.1-.6-.2-.9-.1-.1-.1-.3-.1-.4s-.1-.2-.1-.4c0 0-.1-.1-.2-.1h-.1c-.1 0-.2.1-.3.3s-.1.3-.1.5l-.3 1.2-.3 1.2-.6 2.4-.6 2.4c-.1.3-.2.6-.2.9s-.1.6-.2.9-.2.5-.2.8-.1.5-.2.8c-.1.2-.1.3-.1.5s-.1.3-.3.4c-.1.1-.3.1-.5.1h-.6-1.9c-.1 0-.2-.1-.3-.1s-.2 0-.3-.1a1.38 1.38 0 0 1-.3-.4c-.1-.2-.1-.4-.1-.6l-.3-.9-.3-.9c0-.1-.1-.2-.1-.3s0-.2-.1-.3l-.3-.9c-.1-.3-.2-.6-.2-.9 0-.1-.1-.1-.1-.2v-.2c-.1-.3-.2-.5-.2-.8-.1-.3-.1-.6-.2-.8v-.2c0-.1 0-.1-.1-.2-.1-.3-.2-.5-.2-.8s-.1-.5-.2-.8c-.1-.2-.1-.4-.1-.6s-.1-.4-.1-.6c-.1-.2-.1-.4-.1-.5 0-.2-.1-.4-.2-.5-.2-.5-.3-1.1-.4-1.6l-.4-1.6c0-.1-.1-.2-.1-.3s0-.2-.1-.3l-.3-1.2-.3-1.2c0-.1-.1-.3-.1-.6-.1-.3-.1-.4 0-.6.1-.1.2-.2.4-.2h.1.1z"/></g></svg>
                        </div>
                    <?php //prices here
                    include("prices.php");
                    ?>
                </div>
                <div class="content-nav-list" style="width: 94%">
                    <div class="contact-form">
                        <?php
                        $msg = "";
                        if (!empty($_POST)) {
                            if (!empty($_POST['name']) && isset($_POST['name'])) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $message = $_POST['message'];
                                $txt = '<div style="margin:0 10% 0 10%;border: 1px solid #cdcdcd;">
                  <div class="col-sm-6 col-sm-offset-3">
                      <div class="panel panel-primary">
                          <div class="panel-body">
                              <div style="padding: 30px;">
                                  <p>Name: ' . $name . ',</p>
                                  <p>Email: ' . $email . ',</p>
                                  <p>' . $message . '</p>
                                  <p>Regards</p>
                                  <p>LOGO</p>
                                  <div style="margin-top:10%;">
                                      <hr>
                                      <small class="text-center" style="display:block;">&copy; ' . date("Y") . ' LOGO Inc. All Rights Reserved. <br></small>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>';
                                $email = 'winstonfalcon@gmail.com';
                                $from = 'inquiry@pebblebrookseniorhomecare.com';
                                $headers = 'From:' . $from . "\r\n";
                                $headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                                $msg = mail($email, $subject, $txt, $headers);
                            }
                        }
                        ?>
                        <div class="hero-banner">
                            <div class="topcenter-box">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="contact-form">
                                        <div class="text-align">
                                            <!-- <span  class="mobile-breadcrumb" style="color:#adadad; font-size:13px"> Residential Care for the Elderly </span> -->
                                            <!-- <span  class="mobile-breadcrumb" style="color:#999; font-size:13px">LICENSE # 336425448 </span>  -->

                                        </div>
                                        <div class="hero-banner" style="width: 632px">
                                            <div class="topcenter-box second-child">
                                                <div class="text-over-background">
                                                    <p>
                                                        <span>Family Owned and Operated</span>
                                                    </p>
                                                    <h1>
                                                        <span>The Best Assisted Living in Temecula, CA</span>
                                                    </h1>
                                                </div>


                                                <div class="header-padding">
                                                    <h2>Pebble Brook Assisted Living at Temecula</h2>
                                                </div>

                                                <p class="p-text" style="line-height:2">Having worked as caregivers for over 30 years, an idea came to mind to build our senior assisted living facility. Pebble Brook Assisted Living was built not to be just another "<b>assisted living in Temecula</b>," but a place that our residents can TRULY call home. With love and compassion, we strive to provide the highest quality, affordable care for our residents. Our focus is to ensure our residents' safety, comfort, and well-being, thus allowing each resident and their family members to be at ease.</p>

                                                <div style="position: relative;">
                                                    <img src="https://www.pebblebrookseniorhomecare.com/responsive.jpg" style="max-width:100%">
                                                    <a href="https://www.youtube.com/watch?v=kqLSRbWc2Pk" target="_blank" style="display:flex;justify-content: center;position: absolute;top: 15px;right: 30px;left: 0;bottom: 0;">
                                                        <img src="https://www.pebblebrookseniorhomecare.com/house1.jpg" alt="Facility Main" title="Our Assisted Living Facility Front" style=" padding-right: 0;max-width: 100%;border-radius: 50%;width: 50px;height: 50px;object-fit: cover;border: 3px solid #fff;margin-right: 8px;">
                                                        <p style="color:#fff;font-weight: bold;">Pebblebrook 1 Minute Tour </p>
                                                    </a>
                                                </div>

                                                <p class="p-text" style="line-height:2">We are family owned and family-run business. Our 1:2 caregiver-to-patient ratio enables us to manage each resident down to the dot. This means your loved one will receive more personalized care, more time, and more help compared to the average assisted living facility in Temecula, which has a 1:16 caregiver-to-patient ratio. Our monthly cost is 30% less than the big assisted living facilities. We have amazing, personalized meals that mom and dad will enjoy, a housekeeping-free lifestyle, and medication management. Our passion is to assist and improve the quality of life of residents who require assistance with their daily lives. </p>

                                                <p class="p-text" style="line-height:2">Our assisted living facility is located in a quiet, peaceful cul-de-sac in Temecula, between wine country and Pechanga Casino, making it perfect for morning strolls. Our assisted living is near Anza, Aguanga and Lake Riverside. We are also pet-friendly. Each room is move-in ready. Fully equipped with a large screen television, cable, and unlimited internet access.</p>



                                                <hr class="hr3">
                                                <h3>Below is a Summary of Services We Provide</h3>
                                                <p class="p-text"><a href="/basics/" style="color:#993366; text-decoration: underline">SERVICES</a> </p>
                                                <p class="p-text" style="line-height:2">This ranges from 24/7 help, 3 meals a day and snacks in beween, appointment scheduling, cognitive services, house keeping and laundry, toileting, bedridden care, medication management more!
                                                <p class="p-text"><a href="/dining/" style="color:#993366; text-decoration: underline">SAMPLE FOOD MENU</a> </p>
                                                <p class="p-text" style="line-height:2">From hot oatmeal for breakfast, ham sandwiches with sides of colesloaw or macaroni salad for lunch to Lasagna for dinner just to name a few!
                                                </p>
                                                <p class="p-text"><a href="/hospice/" style="color:#993366; text-decoration: underline">HOSPICE SERVICES</a> </p>
                                                <p class="p-text" style="line-height:2">We accept Hospice patients. Hospice companies can send Nurses, Home Health Aids and Doctors to our facility to check on patients.
                                                </p>

                                                <p class="p-text">
                                                <p href="/transportation/" style="color:#993366; text-decoration: underline">TRANSPORTATION</a> </p>
                                                <p class="p-text" style="line-height:2">We work with transportation companies to provide our residents a smooth and comfortable ride to their appointments and special events.
                                                </p>


                                                <?php include("address.php"); ?>


                                                <h3>Online Form</h3>
                                                <br>
                                                <div class="contact-form">
                                                    <form method="post" class="form-container">
                                                        <input type="text" id="name" class="name" placeholder="Your Name" name="name" required="">
                                                        <input type="email" id="email" class="email" placeholder="Your Email" name="email" required="">
                                                        <input type="text" id="subject" class="subject" placeholder="Subject" name="subject" required="">
                                                        <textarea id="message" name="message" rows="4" class="textarea" placeholder="Message" required=""></textarea>
                                                        <button type="submit" class="border-0 fs-16 py-2 px-4 button"><b style="color:#fff;">Submit</b></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <?php
                    if (!empty($msg)) { ?>
                        <div style="text-align:center" class="alert alert-success alert-dismissible successmsg">
                            <p style="font-size:larger; margin-bottom:0; text-align:center; color:green;">
                                <b>Thanks, mail sent. We'll get back to you soon!</b>
                            </p>
                        </div>
                    <?php } ?>
                    <footer>

                    </footer>
                    <script>
                        setTimeout(function() {
                            $('.alert-success').css('display', 'none');
                        }, 3500);
                    </script>
                </div>
                <br>
            </div>
            <div class="divider"></div>
            <div class="videos-found"></div>
        </div>
        <div class="section-footer">
            <div class="nav nav-footer">
                <ul class="nav-item nav-footer-list">
                    <?php //footer here

                    include("footerBar.php");
                    ?>
                </ul>
            </div>
            <div class="footer-divider-mobile"></div>
            <div class="social-list social-footer">
                <a aria-label="facebook share" href="https://www.facebook.com/Pebble-Brook-Senior-Home-Care-2227131354196518/" rel="nofollow noopener" class="bg-facebook"></a>
                <a aria-label="twitter share" href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-twitter"></a>
                <a aria-label="reddit share" href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-reddit"></a>
                <a aria-label="google share" href="https://api.addthis.com/oexchange/0.8/forward/google/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-google"></a>
                <a aria-label="messenger share" href="https://api.addthis.com/oexchange/0.8/forward/messenger/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-messenger"></a>
                <a aria-label="email share" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-email"></a>
            </div>
            <div class="footer-divider"></div>
            <div class="copy">
                Copyright <?php echo date('Y'); ?>. All rights reserved. Pebble Brook Assisted Living. 33722 Pebble Brook Circle Temecula CA 92592. RCFE License #336425448 </div>
            <div class="logos">
                <div class="bg-googleplay"></div>
                <div class="bg-appstore"></div>
                <div class="bg-rta"></div>
                <div class="bg-mcaffee"></div>
                <div class="bg-lock"></div>
                <div class="bit" style="color:#fff;">128-bit SSL</div>

            </div>
        </div>
    </div>
    <div class="section-content" style="">
        <main id="maincontent"></main>


    </div>



    <!-- dropdown menu toggler -->
    <script>
        $('.services-toggle').click(function() {
            $('.our-services .display-flex .right-arrow').toggleClass('d-none');
            $('.our-services .display-flex .down-arrow').toggleClass('d-none')
        })
        $('.facility-toggle').click(function() {
            $('.facility-features .display-flex .right-arrow').toggleClass('d-none');
            $('.facility-features .display-flex .down-arrow').toggleClass('d-none')
        })
    </script>

</body>