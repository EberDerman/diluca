<!DOCTYPE html>

    <html lang=en>

    <head><?php include 'php/head.php'; ?><style>
            body,
            html {
                height: 100%;
                margin: 0
            }

            .image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100vw;
                height: 100vh;
                overflow: hidden
            }

            .image-container img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain
            }

            @media (max-width:1200px) {
                .image-container {
                    height: 100vh
                }
            }

            @media (max-width:992px) {
                .image-container {
                    height: 100vh
                }
            }

            @media (max-width:768px) {
                .image-container {
                    height: 100vh
                }
            }

            @media (max-width:576px) {
                .image-container {
                    height: 100vh
                }
            }
        </style><?php include 'php/header.php'; ?>
        <div class=image-container data-aos=fade-up data-aos-delay=100 data-aos-duration=2000>
            <img alt="Di Luca Logo" src=assets/images/DiLucaLogo.webp>
        </div><?php include './php/footer.php'; ?>