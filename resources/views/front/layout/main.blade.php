<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Website Resmi PT. Tri Lestari Sandang Industri</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/asests_frontend/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body class="d-flex flex-column h-100">

        <main class="flex-shrink-0">

            <!---- memanggil component navbar di folder front------>
             @include('front.component.navbar')
            <!---memanggil container atau konten-->
             @yield('container')
            <!----- End konten ----->

        </main>

        <!-- Footer -->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <!------ copyright terkini-------->
                    <div class="col-auto"> 
                        <div class="copyright">
                            <span>Copyright@
                            <script type="text/javascript">
                                var creditsyear = new Date();
                                document.write(creditsyear.getFullYear());
                            </script>
                            </span></strong>. All Rights Reserved</span>
                        </div>
                    </div>
                    <!----- End ------>

                    <div class="col-auto">
                        <a class="small" href="/">Privacy Police</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="/">Terms and conditions</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="/">Contact</a>
                    </div>

                </div>
            </div>
        </footer>
        <!------ End Footer -------->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/assets_frontend/js/scripts.js"></script>
    </body>
</html>
