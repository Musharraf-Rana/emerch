@extends('front.layout.main')

@section('content')
    <div style="overflow-x: hidden;">
        <style>
            .thankyou-container h3 {
                font-size: 50px;
            }

            .thankyou-container p {
                font-size: 24px;
            }

            .thankyou-container h4 {
                font-size: 35px;
            }

            .thankyou-container span {
                color: #FF497C;
            }

            #thank_you_page {
                margin-top: 200px;
            }

            header {
                background-color: #1F1E23;
                position: absolute;
                top: 0%;
            }

            @media only screen and (max-width: 1024px) {
                .thankyou-container h3 {
                    font-size: 50px !important;
                }
            }

            @media only screen and (max-width: 768px) {
                .thankyou-lottie {
                    width: 50% !important;
                }

                .thankyou-container h3 {
                    font-size: 40px !important;
                }
            }

            @media only screen and (max-width: 450px) {
                .thankyou-lottie {
                    width: 75% !important;
                }

                .thankyou-container h3 {
                    font-size: 34px !important;
                }

                .thankyou-container p {
                    font-size: 24px;
                }

                .thankyou-container h4 {
                    font-size: 28px;
                }
            }

            lottie-player {
                margin-top: -50px;
                margin-bottom: -50px;
                align-items: center;
            }
        </style>

        <section id="thank_you_page">
            <div class="container d-flex justify-content-center">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player class="thankyou-lottie" src="https://assets9.lottiefiles.com/private_files/lf30_2dlzxeim.json"
                    background="transparent" speed="1" style="width: 25%" loop autoplay></lottie-player>

            </div>
            <div class="container text-center thankyou-container pb-5">
                <h3 class="mt-5">THANK YOU !</h3>
                <p class="text-center">We have received your application successfully. We will get back to you soon.</p>
            </div>

        </section>
    @endsection

