<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<meta name="robots" content="noindex">
        
        <?php include 'inc/inc-header.php'; ?>
        <!-- Content -->
        <div class="container">
        
            <div class="top-padding"></div> 
        
            <div class="row">
            
                <div class="span6">
                    <h3>Questions? Send us a message.</h3>
                    <hr>
                    <p class="resForm"><form id = "contactForm">
                        <i class="icon-pencil"></i> First name:<br> <input type="text" class="span4" name="firstname" required><br><br>
                        <i class="icon-pencil"></i> Last name:<br> <input type="text" class="span4" name="lastname" required><br><br>
                        <i class="icon-envelope"></i> Email<br> <input type="email" class="span4" name="email" required><br><br>
                        <i class="icon-globe"></i> 2 + five = ?<br><input name="human" placeholder="Required" autocomplete="off" class="shadow"><br><br>            
                        <i class="icon-edit"></i> Comment:<br> <textarea rows="5" class="span4" name="message"></textarea><br><br>
                        <input type="submit" value="Submit" name ="submit" class="btn btn-primary">
                    </form></p>
                </div>
                
                <div class="span6">
                    <h3>Address</h3>
                    <hr>
                    <p>
                    eTM Headquarters<br>
                    5780 Lincoln Dr, Suite 146,<br>
                    Edina, MN 55436<br><br>
                    952-679-6337
                    </p>
           <!--          <p><iframe width="100%" height="320px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=5780+Lincoln+Dr,+Suite+146,+Edina,+MN+55436&amp;aq=&amp;sll=46.44186,-93.36129&amp;sspn=12.947516,33.815918&amp;ie=UTF8&amp;hq=&amp;hnear=5780+Lincoln+Dr+%23146,+Minneapolis,+Hennepin,+Minnesota&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></p>
        -->        </div>
               
            </div> <!-- End Content -->

        </div> <!-- /container -->

        <?php include 'inc/inc-footer.php'; ?>
    
        <script>
            /* attach a submit handler to the form */
            $('#contactForm').submit(function (event) {
                event.preventDefault();

                var values = $(this).serialize()

             $.ajax({
                url: "js/send-contact.php",  
                type:'post',
                data:values,
                success: function(res) {
                  console.log(res);
                 if(res=="0"){  
                    $("#contactForm")[0].reset();
                    $("#contactForm").hide();
                    $(".resForm").html("Thank you! We will be in touch shortly.")
                 }
                 else{
                    console.log("Something went wrong, please resubmit. ")
                    // $("#contactForm")[0].reset();
                    // $("#contactForm").hide();
                 }
                },
                error: function (res) {
                    alert('failed');
                  console.log(res);
                }
              }).done(function() {

                });
            })
        </script>
    </body>
</html>
