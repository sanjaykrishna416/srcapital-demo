<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> </title>

    <link href="<?= $favIcon ?>" rel="shortcut icon" type="image/png" width="50%">

    <style>
        .form-container {
            padding: 15px 30px !important;
            border-radius: 2px var(--primary-color) !important;
        }
    </style>
</head>


<body>
    <!-- ------------------------header and navbar------------- -->
    <?php include_once('src/components/preLoader.php') ?>
    <?php include_once('src/views/layouts/navbar.php') ?>

    <!-- -------page header------ -->
    <?php require_once('src/components/pageHeader.php'); ?>
    <!-- -------page header------ -->

    <!-- ------------------------header and navbar------------- -->


    <!-- -----contact us------------- -->
    <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 1050;"></div>
    <section class="mt-5 mb-5 contact-form-container">
        <div class="container contact-section p-3">

            

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="row p-2 p-md-4 mt-3">
                        <div class="col-md-4">
                            <div class="contact-card text-center p-4">
                                <div class="icon me-3 mb-2">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <h5 class="mb-2">Mobile Number</h5>
                                <p class="mb-1 fw-bold"><a href="tel: <?= $companyMobileNumber ?>"><?= $companyMobileNumber ?></a></p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-3">
                            <div class="contact-card text-center p-4">
                                <div class="icon me-3 mb-2">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <h5 class=" mb-2">Email Address</h5>
                                <p class="mb-0 fw-bold"><a href="mailto:<?= $companyEmail ?>"><?= $companyEmail ?></a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-md-0 mt-3 ">
                            <div class="contact-card text-center p-4">
                                <div class="icon me-3 mb-2">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5 class="mb-2">Our Office Location</h5>
                                <p class="mb-0 fw-bold">
                                    <?= $companyAddress ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-8 col-sm-12 text-center mt-3 mt-md-0">
                    <img src="/assets/images/about/contact-gif.gif" alt="contact" class="img-fluid" width="80%">
                </div>

                <div class="col-lg-6 col-md-8 col-sm-12 mt-3 mt-md-0 form-container">
                    <div class="mt-3">
                        <h2 class="fw-bold"><span class="secondary-highlight-text">Contact</span> <span class="primary-highlight-text" >Us</span></h4>
                            <form class="mt-3">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">Name*</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Your  Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Number*</label>
                                        <input type="text" class="form-control" id="mobile" maxlength="12"
                                            placeholder="Enter Your Phone Number"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subject" class="form-label">Subject*</label>
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Enter Your Subject">
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message*</label>
                                        <textarea class="form-control" id="message" rows="5"
                                            placeholder="Enter Your Message"></textarea>
                                    </div>
                                    <div class="text-start mt-4 mb-4">
                                        <button id="submitBtn" class="btn-primary py-3 px-3" type="button"
                                            onclick="contactUs()">
                                            <span id="btnText">Send Message</span>
                                            <span id="btnLoader" class="spinner-border spinner-border-sm d-none"
                                                role="status" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

    </section>




    <section class="mb-5">
        <div class="container">
            <h2 class="fw-bold">Visit Our <span class="highlight-text">Office</span></h2>
            <div class="mt-2 rounded">
                <div class="card">
                    <div class="card-body">
                       
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d462.223839825543!2d79.7014964!3d12.8252745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52c2fb94254da5%3A0x9393e7a5170db1db!2sMutual%20Fund%20Distributor%20RAJA!5e1!3m2!1sen!2sin!4v1790489107408!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -----contact us------------- -->




    <!-- ------------------------   footer ------------- -->
    <?php include_once('src/views/layouts/footer.php') ?>
    <!-- ------------------------   footer ------------- -->

     <script>

        function showToast(message, type) {
            var toastContainer = document.getElementById("toastContainer");

            var toastElement = document.createElement("div");
            toastElement.className = `toast align-items-center text-white bg-${type} border-0 show`;
            toastElement.role = "alert";
            toastElement.ariaLive = "assertive";
            toastElement.ariaAtomic = "true";
            toastElement.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">${message}</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    `;

            toastContainer.appendChild(toastElement);

            // Automatically remove the toast after 5 seconds
            setTimeout(() => toastElement.remove(), 5000);
        }

        function contactUs() {
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var phone = document.getElementById("mobile");
            var message = document.getElementById("message");
            var subject = document.getElementById("subject");
            var submitBtn = document.getElementById("submitBtn");
            var btnText = document.getElementById("btnText");
            var btnLoader = document.getElementById("btnLoader");

            // ✅ Email Validation Regex
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            // ✅ Phone Validation (10 digits only)
            var phonePattern = /^\d{10}$/;

            if (!name.value || !email.value || !phone.value || !subject.value || !message.value) {
                showToast("All fields are required.", "danger");
                return;
            }
            if (!emailPattern.test(email.value)) {
                showToast("❌ Please enter a valid email address.", "danger");
                return;
            }
            if (!phonePattern.test(phone.value)) {
                showToast("❌ Phone number must be exactly 10 digits.", "danger");
                return;
            }

            var formData = new FormData();
            formData.append("name", name.value);
            formData.append("email", email.value);
            formData.append("phone", phone.value);
            formData.append("message", message.value);
            formData.append("subject", subject.value);

            // Show loader & disable button
            btnText.innerText = "Sending...";
            btnLoader.classList.remove("d-none");
            submitBtn.disabled = true;

            fetch("src/controllers/sendMail.php", {
            method: "POST",
            body: formData
        })
        .then(async (response) => {
            const responseText = await response.text();

            try {
                const data = JSON.parse(responseText);

                if (!response.ok) {
                    throw new Error(data.message || "Request failed.");
                }

                return data;
            } catch (error) {
                console.error("PHP response:", responseText);
                throw new Error("Server returned an invalid response.");
            }
        })
        .then((data) => {
            showToast(data.message, data.success ? "success" : "danger");

            if (data.success) {
                name.value = "";
                email.value = "";
                phone.value = "";
                subject.value = "";
                message.value = "";
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            showToast("Something went wrong. Please try again.", "danger");
        })
        .finally(() => {
            btnText.innerText = "Submit";
            btnLoader.classList.add("d-none");
            submitBtn.disabled = false;
        });
    }
    </script>
</body>

</html>