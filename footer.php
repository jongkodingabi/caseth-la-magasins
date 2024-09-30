<footer id="footer" class="my-5">
    <div class="container py-5 my-5">
      <div class="row">

        <div class="col-md-3">
          <div class="footer-menu">
            <img src="images/caseths-logo.png" alt="logo" style="width: 150px;">
            <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="social-links">
              <ul class="d-flex list-unstyled gap-2">
                <!-- <li class="social"> -->
                  <!-- <a href="#">
                    <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                  </a> -->
                <!-- </li> -->
                <li class="social">
                  <a href="https://wa.me/628989186468">
                    <iconify-icon class="social-icon" icon="ri:whatsapp-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="https://www.tiktok.com/@caseths.la.magasins?_r=1&_d=ee77b6b0bl6add&sec_uid=MS4wLjABAAAAqhvR9g9InpWvZ4bOHOZMkEAasagwWm2UCZTiPAO6-8zFeBHO9CxNfb0CTupVVYXY&share_author_id=7400993818738902022&sharer_language=id&source=h5_t&u_code=efgcclf9id3a73&ug_btm=b8727,b0&social_share_type=4&utm_source=copy&sec_user_id=MS4wLjABAAAAqhvR9g9InpWvZ4bOHOZMkEAasagwWm2UCZTiPAO6-8zFeBHO9CxNfb0CTupVVYXY&tt_from=copy&utm_medium=ios&utm_campaign=client_share&enable_checksum=1&user_id=7400993818738902022&share_link_id=D58B728C-271A-4558-9334-B958189070C3&share_app_id=1180">
                    <iconify-icon class="social-icon" icon="ri:tiktok-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="https://www.instagram.com/cas_la.magasin?igsh=MWtqdDRsZDM2ZXo5ZQ==">
                    <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <!-- <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li> -->

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Quick Links</h3>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="menu-item">
                <a href="index.php#about" class="nav-link">About us</a>
              </li>
              <li class="menu-item">
                <a href="shop.php" class="nav-link">Shop</a>
              </li>
              <li class="menu-item">
                <a href="index.php#advice" class="nav-link">Conatct Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Help Center</h5>
              <ul class="menu-list list-unstyled">
              <a href="index.php#advice" class="nav-link">FAQs</a>
                <li class="menu-item">
                  <a href="#" class="nav-link">Payment</a>
                </li>
                <li class="menu-item">
                  <a href="https://wa.me/628989186468" class="nav-link">Returns & Refunds</a>
                </li>
                <li class="menu-item">
                  <a href="https://wa.me/628989186468" class="nav-link">Delivery Information</a>
                </li>
              </ul>
          </div>
        </div>
       <div class="col-md-3">
  <div>
    <h3>Our Newsletter</h3>
    <p class="blog-paragraph fs-6">Subscribe to our newsletter to get updates about our grand offers.</p>
    <div class="search-bar border rounded-pill border-dark-subtle px-2">
      <form id="emailForm" class="text-center d-flex align-items-center" action="saveemail.php" method="post">
        <input type="email" name="email" class="form-control border-0 bg-transparent" placeholder="Enter your email here" required />
        <button type="submit" class="btn p-0 border-0 bg-transparent">
          <!-- button untuk mengirim data -->
          <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
        </button>
      </form>
    </div>
  </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('emailForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this);
        
        // Submit form data using AJAX
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Email Terkirim",
                    showConfirmButton: false,
                    timer: 1700
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
            });
            console.error('Error:', error);
        });
    });
</script>

      </div>
    </div>
  </footer>
<div id="footer-bottom">
    <div class="container">
      <hr class="m-0">
      <div class="row mt-3">
        <div class="col-md-6 copyright">
          <p class="secondary-font">© 2024 Caseths. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/swiper-bundle.js"></script>
  <script src="js/boostrap-bundle.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="js/icon.js"></script>
</body>

</html>