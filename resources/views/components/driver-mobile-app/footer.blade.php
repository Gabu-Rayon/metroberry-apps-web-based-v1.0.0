   <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light">By using our App you have agreed to our </span>
            <br/>
            <a href="#" class="dark-link">
                <span class="font-weight-light">Terms of Use & Privacy Policy</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->

</div>
    <!--Terms And Conditions Agreement Container End--><!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('mobile-app-assets/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/main.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('mobile-app-assets/js/history.js') }}"></script>
    <!--International Telephone input JS-->
    <script src=" {{ asset('mobile-app-assets/js/intlTelInput.min.js') }}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjAxAszIxcGy7sHQxpFh0c1EDs-3AO76Q&libraries=places&callback=initMap">
    </script>
    <!-- Push scripts to the footer -->
    @stack('scripts')
    </body>

    </html>
