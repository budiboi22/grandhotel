<script src="<?=base_url();?>assets/js/datepickr.js"></script>
        <script>
            jQuery(function() {
                new datepickr('checkin');
            });
            jQuery(function() {
                new datepickr('checkout');
            });
        </script>	
<!-- slider -->
<div id="slider">
    <div class="callbacks_container">
        <ul class="rslides pic_slider">
            <li>
                <img src="assets/img/slider-home/pic%20(1).jpg" alt="" />
                <div class="slider-info">
                    <h1>Welcome to Grand Malioboro Hotel</h1>
                </div>
            </li>  
            <li>
                <img src="assets/img/slider-home/pic%20(2).jpg" alt="" />
                <div class="slider-info">
                    <h1>It's our way to make you feel more than home</h1>
                </div>
            </li>                              
        </ul>
    </div>
</div>
<!-- slider close -->

<div class="clearfix"></div>

<!-- search begin -->
<div id="booking">
    <div class="container">
        <div class="row">
            <span class="span2">Booking Now:</span>
            <form class="form-inline" method="get" action="booking.php">
                <div class="span2">
                    <input type="text" id="checkin" name="checkin" required/>
                </div>
                <div class="span2">
                    <input type="text" id="checkout" name="checkout" required/>
                </div>
                <div class="span2">
                    <select id="room" name="room">
                        <option value=""/>Select Room
                        <option value="deluxe"/>Deluxe Room
                        <option value="elegant"/>Elegant Room
                        <option value="luxury"/>Luxury Room
                    </select>
                </div>            	
                <div class="span2">
                    <select id='guest' name='guest'>
                        <option value=""/>Number of Guest
                        <option value="1"/>1
                        <option value="2"/>2
                        <option value="3"/>3
                        <option value="4"/>4
                        <option value="5"/>5
                        <option value="5+"/>5+
                    </select>
                </div>
                <div class="span2">
                    <input type="submit" class="btn btn-pimary btn-submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- search close -->

<!-- content begin -->
<div id="content">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <h2>Favorite Rooms</h2>
                Find your favorite room, feel more than home<br /><br />
            </div>

            <!-- room -->
            <div class="room span4">
                <div class="btn-book-container">
                    <a href="booking.php?room=deluxe" class="btn-book">Book Now</a>
                </div>
                <img data-original="assets/img/room-1.jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                <h4>Deluxe Room</h4>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="row">
                    <ul class="room-features">
                        <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                        <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                        <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                        <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>

                    </ul>
                </div>
            </div>
            <!-- close room -->

            <!-- room -->
            <div class="room span4">
                <div class="btn-book-container">
                    <a href="booking.php?room=elegant" class="btn-book">Book Now</a>
                </div>
                <img data-original="assets/img/room-2.jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                <h4>Elegant Room</h4>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="row">
                    <ul class="room-features">
                        <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                        <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                        <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                        <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                    </ul>
                </div>
            </div>
            <!-- close room -->


            <!-- room -->
            <div class="room span4">
                <div class="btn-book-container">
                    <a href="booking.php?room=luxury" class="btn-book">Book Now</a>
                </div>
                <img data-original="assets/img/room-3.jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                <h4>Luxury Room</h4>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="row">
                    <ul class="room-features">
                        <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                        <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                        <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                        <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                    </ul>
                </div>

            </div>
            <!-- close room -->


        </div>

        <hr />

        <div class="row gallery">
            <div class="text-center">
                <h2>Hotel Gallery</h2>
                Find your favorite room, feel more than home<br /><br />
            </div>

            <div class="span2">
                <a class="preview" href="assets/img/gallery/pic%20(1).jpg" rel="prettyPhoto" title="Your Title">
                    <img data-original="assets/img/gallery/pic%20(1).jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="assets/img/gallery/pic%20(1).jpg" rel="prettyPhoto" title="Your Title">
                    <img data-original="assets/img/gallery/pic%20(2).jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="assets/img/gallery/pic%20(1).jpg" rel="prettyPhoto" title="Your Title">
                    <img data-original="assets/img/gallery/pic%20(3).jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="assets/img/gallery/pic%20(1).jpg" rel="prettyPhoto" title="Your Title">
                    <img data-original="assets/img/gallery/pic%20(4).jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="assets/img/gallery/pic%20(1).jpg" rel="prettyPhoto" title="Your Title">
                    <img data-original="assets/img/gallery/pic%20(5).jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="assets/img/gallery/pic%20(1).jpg" rel="prettyPhoto" title="Your Title">
                    <img data-original="assets/img/gallery/pic%20(6).jpg" src="assets/img/pic-blank-1.gif" class="img-polaroid" alt="" />
                </a>
            </div>

        </div>

        <hr />

        <div class="row">
            <div class="span3 feature">
                <i class="icon-desktop icon-3x"></i><br />
                <h4>Modern</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

            <div class="span3 feature">
                <i class="icon-calendar icon-3x"></i><br />
                <h4>Responsive</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

            <div class="span3 feature">
                <i class="icon-circle-arrow-right icon-3x"></i><br />
                <h4>Hotel</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

            <div class="span3 feature">
                <i class="icon-thumbs-up icon-3x"></i><br />
                <h4>Template</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>


    </div>

</div>
<!-- content close -->