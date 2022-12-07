<div id="slides" class="carousel slide carousel-cus" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url() . 'public/front/img/4.png'; ?>" alt="FriesBrgrImg">

        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url() . 'public/front/img/5.jpeg'; ?>" alt="Spaghetti">

        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url() . 'public/front/img/7.jpeg'; ?>" alt="corn">

        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Menu Fitrin Catering</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if (!empty($dishesh)) { ?>
            <?php foreach ($dishesh as $dish) { ?>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <?php $image = $dish['img']; ?>
                        <img class="card-img-top" style="width: auto; height: auto;" src="<?php echo base_url() . 'public/uploads/dishesh/thumb/' . $image; ?>">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title"><?php echo $dish['name']; ?></h4>
                                <h6 class="text-muted" style="margin-left: 50px;"><b>Rp.<?php echo $dish['price']; ?></b></h4>
                            </div>
                            <p class="card-text"><?php echo $dish['about']; ?></p>
                            <a href="<?php echo base_url() . 'Dish/addToCart/' . $dish['d_id']; ?>" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="jumbotron">
                <h1>No records found</h1>
            </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>
<!-- ========================================================================================== -->
<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Paket Fitrin Catering</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if (!empty($paket)) { ?>
            <?php foreach ($paket as $paket) { ?>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <?php $image = $paket['img']; ?>
                        <img class="card-img-top" style="width: auto; height: auto;" src="<?php echo base_url() . 'public/uploads/dishesh/thumb/' . $image; ?>">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title"><?php echo $paket['name']; ?></h4>
                                <h6 class="text-muted" style="margin-left: 50px;"><b>Rp.<?php echo $paket['price']; ?></b></h4>
                            </div>
                            <p class="card-text"><?php echo $paket['about']; ?></p>
                            <a href="<?php echo base_url() . 'paket/addToCart/' . $paket['id']; ?>" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="jumbotron">
                <h1>No records found</h1>
            </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>
<!-- ============================================================================================= -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Maps Fitrin Catering</h2>
        </div>
        <div class="col-12 social padding">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.4850716219839!2d112.1544478291591!3d-8.102741671918782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c979ff27b13ec78!2zOMKwMDYnMDkuOSJTIDExMsKwMDknMTguMCJF!5e1!3m2!1sen!2sid!4v1666750884709!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<hr class="my-4">
<section id="contact-us" class="container shadow my-4 p-4">
    <!--Section heading-->
    <?php if ($this->session->flashdata('msg') != "") : ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    <?php endif ?>
    <h2 class="text-center my-2 font-weight-bold">Contact Us</h2>
    <p class="text-center">Always Here For You</p>
    <!--Section description-->
    <p class="text-center mx-auto mb-5"></p>
    <form name="contact-form" action="<?php echo base_url() . 'home/sendMail'; ?>" id="myForm" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-2">
                    <label class="mb-0" for="name" class="">Fullname*</label>
                    <input type="text" id="name" name="name" class="form-control" required <?php set_value("name"); ?>>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label class="mb-0" for="email" class="">Email*</label>
                    <input type="text" id="email" name="email" class="form-control" required <?php set_value("email"); ?>>
                    <span></span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label class="mb-0" for="subject" class="">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" <?php set_value("subject"); ?>>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label class="mb-0" for="message">Your Message*</label>
                    <textarea type="text" id="message" name="message" rows="2" class="form-control" required><?php set_value("message"); ?></textarea>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="status text-danger font-weight-bold my-2"></div>
        <button class="btn btn-info" type="submit">Submit</button>
    </form>

</section>
<script>
    const form = document.getElementById('myForm');
    const userName = document.getElementById('name');
    const email = document.getElementById('email');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })

    const isEmail = (emailVal) => {
        var re =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(emailVal)) {
            return "fail";
        }
    }

    const sendData = (sRate, count) => {
        if (sRate === count) {
            event.currentTarget.submit();
        }
    }

    const successMsg = () => {
        let formCon = document.getElementsByClassName('form-control');
        var count = formCon.length - 1;
        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control success") {
                var sRate = 0 + i;
                sendData(sRate, count);
            } else {
                return false;
            }
        }
    }

    const validate = () => {
        const userNameVal = userName.value.trim();
        const emailVal = email.value.trim();
        const subjectVal = subject.value.trim();
        const messageVal = message.value.trim();

        //username validation
        if (userNameVal === "") {
            setErrorMsg(userName, 'name cannot be blank');
        } else if (!isNaN(userNameVal)) {
            setErrorMsg(userName, 'only characters are allowed');
        } else {
            setSuccessMsg(userName);
        }

        //email validation
        if (emailVal === "") {
            setErrorMsg(email, 'email cannot be blank');
        } else if (isEmail(emailVal) === "fail") {
            setErrorMsg(email, 'enter valid email only');
        } else {
            setSuccessMsg(email);
        }

        //subject can not
        if (subjectVal === "") {
            setErrorMsg(subject, 'subject cannot be blank');
        } else {
            setSuccessMsg(subject);
        }

        //message validation
        if (messageVal === "") {
            setErrorMsg(message, 'message cannot be blank');
        } else {
            setSuccessMsg(message);
        }

        successMsg();
    }

    function setErrorMsg(ele, msg) {

        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        const span = formCon.querySelector('span');
        span.innerText = msg;
        formInput.className = "form-control is-invalid";
        span.className = "invalid-feedback font-weight-bold"
    }

    function setSuccessMsg(ele) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        formInput.className = "form-control success";
    }
</script>