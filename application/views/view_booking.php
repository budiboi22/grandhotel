    <!-- subheader begin -->
	<div id="subheader">
    	<div class="container">
    	  <div class="row">
          	<div class="span12">
            	<h1>Booking</h1>
                <span>This is custom slogan for each page.</span>
            </div>
          </div>
    	</div>
    </div>
	<!-- subheader close -->  
      
	<!-- content begin -->
  <div id="content">
    	<div class="container">
        	<div class="row">
            	<div class="booking-form">                    
                    <form id="booking" name="booking" action="booked.php" method="POST"> 
                    <div class="span9">
                    	<div class="row">
                        <h3 class="title span9">Personal Data</h3>
                    	<div class="span3">
                            <span class="text-label"><i class=" icon-user"></i>Name</span>
                            <input type="text" id="name" name="name" required/>
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-envelope-alt"></i>Email</span>
                            <input type="email" id='email' name='email' required/>
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-phone"></i>Phone</span>
                            <input type="tel" id='phone' name='phone' required/>
                        </div>
                        <h3 class="title span9">Your Stay</h3>
                        <div class="span6">
                            <span class="text-label"><i class="icon-group"></i>Guests</span>
                        	<div class="row">
                            	<div class="span3">
                                    <?php 
                                    
                                    if (isset($_GET['guest'])){
                                        if(!empty($_GET['guest'])){
                                            $guest = $_GET['guest'];
                                                echo '<select id=\'guest\' name=\'guest\'>
                                                        <option value="'.$guest.'">'.$guest.'
                                                     </select>'; 
                                        }
                                        
                                        if($_GET['guest'] == ''){
                                            echo '<select id=\'guest\' name=\'guest\'>
                                                    <option value=""/>Adults
                                                    <option value="1"/>1
                                                    <option value="2"/>2
                                                    <option value="3"/>3
                                                    <option value="4"/>4
                                                    <option value="5"/>5
                                                    <option value="5+"/>5+
                                                 </select>';
                                        }
                                    }else{
                                       echo '<select id=\'guest\' name=\'guest\'>
                                          <option value=""/>Adults
                                          <option value="1"/>1
                                          <option value="2"/>2
                                          <option value="3"/>3
                                          <option value="4"/>4
                                          <option value="5"/>5
                                          <option value="5+"/>5+
                                           </select>';
                                    }
                                    
                                    ?>
                                    
                               	</div>
                                <div class="span3">
                                    <select id="guestkid" name='guestkid'>
                                          <option value="" />Kids
                                          <option value="1"/>1
                                          <option value="2"/>2
                                          <option value="3"/>3
                                          <option value="4"/>4
                                          <option value="5"/>5
                                          <option value="5+"/>5+
                                    </select>
                               	</div>
                        	</div>                       
                        </div>	
                        <div class="span3">
                            <span class="text-label"><i class="icon-suitcase"></i>Room</span>
                            <select id="room" name='room' required>
                                <?php 
                                    if($_GET['room']){
                                        $room = $_GET['room'];
                                        if($room == 'deluxe'){
                                             echo '<option value="Deluxe Room - $199 / night"/>Deluxe Room - $199 / night';                                                   
                                        }
                                        
                                        if($room == 'luxury'){
                                          echo  '<option value="Luxury Room - $399 / night"/>Luxury Room - $399 / night';
                                        }
                                        if($room == 'elegant'){
                                          echo  '<option value="Elegant Room - $299 / night"/>Elegant Room - $299 / night';
                                        }
                                        if($room == ''){
                                            echo '<option />Select Room
                                              <option value="Deluxe Room - $199 / night"/>Deluxe Room - $199 / night
                                              <option value="Elegant Room - $299 / night"/>Elegant Room - $299 / night
                                              <option value="Luxury Room - $399 / night"/>Luxury Room - $399 / night';
                                        }
                                    }else{
                                        echo '<option />Select Room
                                              <option value="Deluxe Room - $199 / night"/>Deluxe Room - $199 / night
                                              <option value="Elegant Room - $299 / night"/>Elegant Room - $299 / night
                                              <option value="Luxury Room - $399 / night"/>Luxury Room - $399 / night';
                                    }                                
                                ?>  
                                
                            </select>
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-calendar"></i>Check In Date</span>
                            <?php
                                
                            if (!empty($_GET['checkin'])){
                                echo '<input type="text" id="checkin" name="checkin" value="'.$_GET['checkin'].'" required/>';
                            }else{
                                echo '<input type="text" id="checkin" name="checkin" required/>';
                            }
                                
                            ?>
                            
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-calendar"></i>Check Out Date</span>
                            
                            <?php
                                
                            if (!empty($_GET['checkout'])){
                                echo '<input type="text" id="checkout" name="checkout" value="'.$_GET['checkout'].'" required/>';
                            }else{
                                echo '<input type="text" id="checkout" name="checkout" required/>';
                            }
                                
                            ?>
                            
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-money"></i>Payment</span>
                            <select id="payment" name="payment" required>
                                  <option value=""/>Select Payment
                                  <option value="Cash"/>Cash
                                  <option value="Credit Card"/>Credit Card
                                  <option value="Bank Transfer"/>Bank Transfer
                            </select>
                        </div>
                    </div>
                    </div>
                                        <div class="span3 btn-book-submit">
                    	<input type="submit" class="btn btn-primary" value="Submit" style="margin-top:75px;"/> 
                    </div>
                    </form>
            	</div>
            </div>
        </div>
	</div>
	<!-- content close -->