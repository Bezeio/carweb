<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="css/navbar.css"> -->
    <!-- <script src="js/navbar.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/services.css">

    <!-- //navbar -->
    <link rel="stylesheet" href="css/navbarCSS/css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/navbarCSS/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--footer-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


</head>
<style>
    .carousel .item>img {
        position: absolute;
        top: 0;
        left: 0;
        max-width: 100%;
        height: 100%;
    }

    .carousel-inner>.item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 500px;
    }
</style>

<body>
    <?php
    include_once('layout/navbar.php');
    ?>

    <div class='header'>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/ban1.jpg" class="d-block w-100" width="100%" height="600px">
                </div>

                <div class="carousel-item">
                    <img src="img/ban2.jpg" class="d-block w-100" width="100%" height="600px">
                </div>
                <div class="carousel-item">
                    <img src="img/ban3.jpg" class="d-block w-100" width="100%" height="600px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </div>
    <div class=" row content col-md-12 justify-content-center" style="margin-bottom: 100px;margin-top: 100px;">
        <!-- <h3 class="row justify-content-center fw-bold">Lựa chọn đẳng cấp nhất</h3> -->
        <div class="col-md-3">
            <div id="col-1044827431" class="col cot1 medium-4 small-12 large-4">
                <div class="col-inner">
                    <p class="text-top text-primary" style="font-size: 40px;">Chúng tôi có</p>
                    <h1 class="tieu-de">Tất Cả Những Gì Bạn Cần</h1>
                </div>
            </div>
        </div>
        <div class="space col-md-1">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold">TuLaiDienChau: Nơi đặt niềm tin</h3>
            <h5 class="fw-lighter">TuLaiDienChau với nhiều năm kinh nghiệm trong lĩnh vực tư vấn và mua bán. Chúng tôi tự tin cung cấp các dòng xe của các hãng nổi tiếng như: Honda, Mazda, Mitsubishi, Ford, Huyndai,...</h5>
            <h5 class="fw-lighter">Chúng tôi tự hào mang tới cho khách hàng những chiếc xe tốt nhất, dịch vụ tốt nhất, tiết kiệm nhất.</h5>
        </div>

    </div>

    <div class="product-collection">
        <div class="container1">
            <div class="product-collection-wrapper">
                <!-- product col left -->
                <div class="product-col-left flex">
                    <div class="product-col-content">
                        <h2 class="md-title">VỀ CHÚNG TÔI </h2>
                        <p class="text-light">Chúng tôi sẽ luôn cố gắng và không
                            ngừng hoàn thiện nhằm đem đến khách hàng chất lượng và trải nghiệm tốt nhất, Xây dựng
                            một
                            phong cách chuyên nghiệp, phục vụ tất cả mọi nhu cầu của các quý khách hàng</p>
                    </div>
                </div>

                <!-- product col right -->
                <div class="product-col-right">
                    <div class="product-col-r-top flex">
                        <div class="product-col-content">
                            <h2 class="md-title">Về dịch vụ</h2>
                            <p class="text-light">Chúng tôi đã có nhiều năm hoạt động và đã
                                được rất nhiều khách hàng đánh giá cao về cách chúng tôi làm việc</p>
                        </div>
                    </div>

                    <div class="product-col-r-bottom">
                        <!-- left -->
                        <div class="flex">
                            <div class="product-col-content">
                                <h2 class="md-title">Dịch vụ Đa dạng </h2>
                                <p class="text-light">Quý khách hàng có thể lựa chọn rất nhiều loại hình dịch vụ
                                    khác nhau và thoải mái lựa chọn các loại xe từ 4 - 24
                                    chỗ, đầy đủ tiện nghi và an toàn. Phù hợp với mọi nhu cầu của bản thân và gia
                                    đình.</p>
                                <a href="#"><button type="button" class="btn-dark">XEM NGAY</button></a>
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flex">
                            <div class="product-col-content">
                                <h2 class="md-title">Tiết kiệm chi phí</h2>
                                <p class="text-light">Chúng tôi cung cấp cho Quý khách hàng các dịch vụ tốt
                                    nhất với chi phí tiết kiệm nhất, phù hợp với tất cả mọi yêu cầu tài chính và theo như mong ước đã đề ra
                                    của các Quý khách hàng.
                                </p>
                                <a href="#"><button type="button" class="btn-dark">XEM NGAY</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-md-12 justify-content-center mt-5" style="margin-bottom: 200px;">
        <div class="col-inner text-center mb-3">
            <h2><span style="color: #437eeb;">Đăng ký nhận tư vấn</span></h2>
            <h2>Chúng tôi luôn luôn lắng nghe từ khách hàng</h2>
        </div>

        <!-- form -->
        <div class="left col-md-4" style="height: 500px;">
            <form action="ChangeShippingAddress">
                <div class="form-group">
                    <label for="name" hidden>Họ và tên <span>*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Họ và tên *" required="">
                </div>
                <div class="form-group">
                    <label for="name" hidden>EMAIL</label>
                    <input type="text" name="email" class="form-control" placeholder="Email *" value="" required="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="sdt" hidden>Phone number</label>
                    <input type="number" name="mobile" class="form-control" placeholder="Số điện thoại *">
                </div>
                <div class="form-group">
                    <label for="address" hidden>Address</label>
                    <textarea class="form-control" rows="3" name="address" placeholder="Nội dung"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng kí nhận tư vấn</button>
            </form>
        </div>

        <div class="space col-md-1"></div>
        <div class="right col-md-5" style="height: 500px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.2674034365114!2d105.58991422922661!3d18.97253276744543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd3c09260d8c11f1!2zMTjCsDU4JzIxLjEiTiAxMDXCsDM1JzI1LjciRQ!5e0!3m2!1svi!2sus!4v1641226376365!5m2!1svi!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <main>
        <header class="text d-flex justify-content-center" style="margin-top: 30px;">
            <h1>Dịch vụ</h1>
        </header>
    </main>



    <?php
    include_once('layout/services.php');
    include_once('layout/footer.php');
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="js/navbar.js"></script> -->

    <script src="js/navbarJS/jquery-3.3.1.min.js"></script>
    <script src="js/navbarJS/popper.min.js"></script>
    <script src="js/navbarJS/bootstrap.min.js"></script>
    <script src="js/navbarJS/jquery.sticky.js"></script>
    <script src="js/navbarJS/main.js"></script>
</body>

</html>