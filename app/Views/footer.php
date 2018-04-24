@section('footer')

<!-- footer start here -->
        <div class="section footer-top-area footer-two-style">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget">
                            <h2>Our monthly letter with exclusive insights</h2>
                            <div class="subscribeform">
                                <form action="/subscribe" method="post">
                                	{{ csrf_field() }}
                                    <div class="row row-normalize">                     
                                        <div class="col-sm-12">
                                            <label> </label>
                                            <input type="text" class="form-control" name="subscribe_email" placeholder="Enter Your Email">
                                        </div>
                                    </div>               
                                </form>                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h2>Payments accepted from the following credit cards</h2>
                            <div class="payment-method">
                                <ul>
                                    <li><img src="assets/images/payment/5.png" alt=""></li>
                                    <li><img src="assets/images/payment/6.png" alt=""></li>
                                    <li><img src="assets/images/payment/7.png" alt=""></li>
                                    <li><img src="assets/images/payment/8.png" alt=""></li>
                                    <li><img src="assets/images/payment/9.png" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget">
                            <h2>TallChic online shop</h2>
                            <p>One of the largest online cheap clothes wholesalers, we specialize in wholesale clothes as well as online clothing for those looking to save money and buy wholesale clothing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">
                            <p> @php echo '&copy;'.date('Y').' TallChic'; @endphp</p>
                            <ul>
                                <li><a href="/shop">Shop</a></li>
                                <li><a href="/blog">blog</a></li>
                                <li><a href="/page/contact">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="social-media">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                            <p>thank you for visiting!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end here -->
@endsection