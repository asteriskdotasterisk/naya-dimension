<div id="naya_main">

    <h2>Contact Information</h2>
    <div class="half float_l">
        <h4><?php
if ($info) {
    echo $info;
}
else{
echo "Send us a message now!";
}
?></h4>
        <p>Feel free to send your feedbacks, and other messgaes here.</a>.</p>
        <div id="contact_form">
            <form method="post" name="contact" action="<?php echo base_url(); ?>home/contact">

                <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                <div class="cleaner h10"></div>

                <label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
                <div class="cleaner h10"></div>

                <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
                <div class="cleaner h10"></div>

                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                <div class="cleaner h10"></div>				

                <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

            </form>
        </div>
    </div>
    <div class="half float_r">
        <h4>Mailing Address</h4>
        <h5>Naya Dimension - Nepal</h5>
			Nakhkhu, Lalitpur <br />
        <br />
        <br /><br />

			Phone: +977-98510-56645<br />
			Email: <a href="mailto:info@nayadimension.com">info@nayadimension.com</a><br/>

        <div class="cleaner h40"></div>

        <h5>Naya Dimension - Australia</h5>
			Australia,<br />
			Sth Street, 10680<br />
			Some place<br /><br />

			Phone: 050-024-1860<br />
			Email: <a href="mailto:contact@nayadimension.com">contact@nayadimension.com</a><br/>
    </div>

    <div class="cleaner h40"></div>

<!--  <iframe width="940" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe> -->

    <div class="cleaner"></div>

</div> <!-- END of main -->

</div> <!-- END of wrapper -->
