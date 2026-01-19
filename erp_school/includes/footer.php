
<!-- Footer -->
<footer>
      <div class="container-fluid">
        <div
          class="container py-5 d-flex gap-3 flex-column justify-content-center"
        >
          <div
            class="contact py-4 px-5 rounded-3 d-flex justify-content-between align-items-center fw-bolder"
            data-aos="fade-down"
            data-aos-duration="800"
          >
            <h2
              data-aos="fade-right"
              data-aos-duration="800"
              data-aos-delay="800"
            >
              Let's Get Started
            </h2>
            <button
              class="btn-body fs-3 p-3 rounded-2 fw-bold border-0"
              onclick="location.href = './contact.php';"
              data-aos="fade-left"
              data-aos-duration="800"
              data-aos-delay="800"
            >
              Contact Now
            </button>
          </div>

          <div class="footer-content">
            <div class="row py-5">
              <div class="col-md-8">
                <div class="row">
                  <div
                    class="col-lg-3"
                    data-aos="zoom-in"
                    data-aos-duration="800"
                    data-aos-delay="800"
                  >
                    <div class="footer-heading py-3">
                      <h3 class="fw-bold">ACCOUNT</h3>
                    </div>
                    <ul
                      class="account-list fs-4 d-flex flex-column gap-2 list-unstyled"
                    >
                      <li>
                        <a href="" class="footer-links text-white">Profile</a>
                      </li>
                      <li>
                        <a href="" class="footer-links text-white">Setting</a>
                      </li>
                      <li>
                        <a href="" class="footer-links text-white">Billing</a>
                      </li>
                      <li>
                        <a href="" class="footer-links text-white"
                          >Notification</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div
                    class="col-lg-6 d-flex flex-column gap-4"
                    data-aos="zoom-in"
                    data-aos-duration="800"
                    data-aos-delay="800"
                  >
                    <div
                      class="footer-heading py-3 d-flex align-items-center gap-4"
                    >
                      <i class="fa-regular fa-map fs-2"></i>
                      <h3 class="fw-bold">ADDRESS</h3>
                    </div>
                    <div class="reg-office">
                      <h4 class="fw-bold">Regional Office:</h4>
                      <p class="fs-5">
                        3rd Floor,XYZ Plaza,I.A. Phase-7, Sector-73,Mohali
                      </p>
                    </div>
                    <div class="corp-office">
                      <h4 class="fw-bold">Corporate Office:</h4>
                      <p class="fs-5">
                      ErpInfotech  (P)Ltd 27/7,xyz Chowk,Hamirpur
                        (H.P)
                      </p>
                    </div>
                    <div class="mobile d-flex gap-3 align-items-center">
                      <i
                        class="fa-solid fa-mobile-screen-button text-white fs-3"
                      ></i>
                      <p class="fs-5">
                        <a class="text-white footer-links" href="tel:9805999755"
                          >98765-56799</a
                        >,
                        <a class="text-white footer-links" href="tel:7650978128"
                          >78609-74528</a
                        >
                      </p>
                    </div>
                    <div class="mail d-flex gap-3 align-items-center">
                      <i class="fa-solid fa-envelope fs-3"></i>
                      <p>
                        <a
                          class="text-white fs-5 footer-links"
                          href="mailto: 
                        info@iqwing.in"
                        >
                          info@erp.in</a
                        >
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3"></div>
                </div>
              </div>
              <div
                class="col-md-4"
                data-aos="fade-left"
                data-aos-duration="800"
                data-aos-delay="400"
              >
                <div
                  class="footer-heading py-3 d-flex align-items-center gap-4"
                >
                  <h3 class="fw-bold">SUBSCRIBE</h3>
                </div>
                <p class="fs-4 py-3">
                  Subscribe to our newsletter and get weekly goodies right in
                  your inbox.
                </p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="">
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control fs-4 p-3"
                      id="email"
                      name = "email"
                      placeholder="Email Address"
                    />
                  </div>
                  <div class="">
                    <input
                      type="submit"
                      class="btn text-white border border-body py-3 fs-4 rounded-4 w-100 fw-bolder subscribe-btn"
                      value="Subscribe"
                      name="subscribe"
                    />
                  </div>
                </form>
                <p class="fs-4 py-3 text-light">
                  Your data is safe with us. See our
                  <a href="#" class="footer-links text-white fw-bold"
                    >Privacy Policy</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div
            class="social-icons d-flex gap-3 justify-content-center align-items-center"
          >
            <a href="#" class="footer-links text-white"
              ><i class="fa-brands fa-github fs-2"></i
            ></a>
            <a href="#" class="footer-links text-white"
              ><i class="fa-brands fa-dribbble fs-2"></i
            ></a>
            <a href="#" class="footer-links text-white"
              ><i class="fa-brands fa-instagram fs-2"></i
            ></a>
            <a href="#" class="footer-links text-white"
              ><i class="fa-brands fa-facebook fs-2"></i
            ></a>
            <a href="#" class="footer-links text-white"
              ><i class="fa-brands fa-medium fs-2"></i
            ></a>
          </div>
          <div
            class="copyright d-flex justify-content-center align-items-center"
          >
            <p class="fw-bold fs-4">
              Copyright © 2024 School_erp. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <!-- Tiny slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- External JS -->
    <script src="script.js"></script>
  </body>
</html>