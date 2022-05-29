
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center footer-content">
                <ul class="footer-icon">
                    <li class="footer_list"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_list"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_list"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="footer_list"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="sub-heading footer_text text-black"><i class="far fa-copyright"></i>2020 MegaOne. Made with love by themeindustry</p>

            </div>
        </div>
    </div>
</section>


<!--modal window-->
<div class="modal fade model-reg" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="appointment-form contact-form" id="modal-contact-form-data">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="font-weight-bold green-color form-tittle">Apply<span class="blue-color"> Now!</span></h1>
                    <div class="col-12" id="quote_result"></div>
                    <div class="form-group-1">
                        <input type="text" name="userName" id="name" placeholder="Your Name" required />
                        <input type="text" name="fatherName" placeholder="Father Name" required />
                        <input type="email" name="userEmail" id="email" placeholder="Email" required />
                        <input type="number" name="userPhone" id="phone_number" placeholder="Phone number" required />
                        <input type="text" name="userAddress" id="title" placeholder="Address" required />
                        <div class="select-list">
                            <select name="course" id="course_type" class="la-angle-down">
                                <option value="course">Course to Apply</option>
                                <option value="society">Society</option>
                                <option value="language">Language</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-large btn-primary contact-btn w-100 text-white modal_contact_btn" id="submit_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>SUBMIT NOW</b></button>

                </form>


            </div>

        </div>
    </div>
</div>
<!--modal window end-->

<!-- JavaScript -->
<script src="{{ asset('front/vendor/js/bundle.min.js') }}"></script>

<!-- Plugin Js -->
<script src="{{ asset('front/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/jquery.cubeportfolio.min.js') }}"></script>

<!-- custom script -->
<script src="{{ asset('front/js/mediaelement-and-player.min.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/parallaxie.min.js') }}"></script>
<script src="{{ asset('front/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>