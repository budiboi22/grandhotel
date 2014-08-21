<script>
    function login() {
        $(document).ready(function() {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/login/check_login",
                data: "user=" + $("#username").val() + "&pass=" + $("#password").val(),
                cache: false,
                dataType: 'json',
                type: 'POST',
                beforeSend: function() {
                    $('#page').append('<div id="pageload">ffgfgf</div>');
                },
                complete: function() {
                    $('#pageload').remove();
                },
                success: function(json) {
                    if (json.data) {
//                    onload();
                        alert(json.logstatus);
                    } else
                    {
                        alert("Login Anda Salah Silahkan di ulangi");
                    }
                },
                error: function(xmlHttpRequest, textStatus, errorThrown) {
                    start = xmlHttpRequest.responseText.search("<title>") + 7;
                    end = xmlHttpRequest.responseText.search("</title>");
                    errorMsg = xmlHttpRequest.responseText;
                    if (start > 0 && end > 0)
                        alert("Rangerti " + errorMsg + xmlHttpRequest.responseText + "  [" + xmlHttpRequest.responseText.substring(start, end) + "]");
                    else
                        alert("Error juga " + errorMsg + xmlHttpRequest.responseText);
                }
            });
        });
    }


    function enterpress() {
        $(document).ready(function() {
            $("#button_login").keypress(function(event) {
                if (event.which == 13) {
                    login();
                }

            });
        });
    }
</script>

<div class="container-fluid-full">
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="login-box">               
                <img src="<?php echo base_url() . 'assets/img/logo.png'; ?>" alt="Grand Malioboro Hotel" style="padding:15px;margin-left:50px;">
                <h2>Login to your account</h2>  
                <form class="form-horizontal" method="POST" action="<?php echo base_url() . 'admin/login/check_login'; ?>" id="form_login">
                    <?php echo validation_errors();?>     
                
                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="username" id="username" type="text" placeholder="type username" required/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="type password" required/>
                        </div>                      
                        <div class="clearfix"></div>  
                        <div class="button-login">	
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="clearfix"></div>
                </form>
                <hr>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/.fluid-container-->

</div><!--/fluid-row-->