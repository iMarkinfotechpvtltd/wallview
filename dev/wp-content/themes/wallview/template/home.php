<?php 

/* Template Name: home
*/ 
get_header();
$banner=get_post_meta(5,"top_banner_image",true);
$thumb = wp_get_attachment_image_src($banner, 'top_banner_img' );						
?>   
<!-- Banner Starts-->
<section class="main-banner" style="background-image:url('<?php echo $thumb['0'];?>')">
<div class="container">
    <div class="checklist">
        <?php the_field("banner_title",5);?>
    </div>
</div>
</section>
 <!-- Banner Ends-->
    
    
    
<!-- Call Detail Starts-->
<?php
$banner=get_post_meta(5,"after_banner_image",true);
$thumb = wp_get_attachment_image_src($banner, 'after_banner_img' );
?>
<section class="call-info" style="background-image:url('<?php echo $thumb['0']; ?>')">
    <div class="container">
        <?php the_field("banner_content",5);?>
        <a href="tel:<?php the_field("banner_phone",5);?>"><i class="fa fa-mobile" aria-hidden="true"></i> <?php the_field("banner_phone",5);?></a>
    </div>
</section>
<!-- Call Detail Ends-->    

    
<!-- Samples Section Starts-->
<section class="samples">
<div class="container">
<?php 
query_posts( array ( 'post_type' => 'post','showposts'=>'3','order'=>'ASC') ); ?> 
<?php while ( have_posts() ) : the_post(); ?>
<div class="sample-block">
    <div class="sample-img">
        <?php the_post_thumbnail();?>
    </div>
    <h3><?php the_title();?></h3>
	 <?php the_content();?>
</div>
    <?php endwhile;
	wp_reset_query();?>
</div>
</section>
<!-- Samples Section Ends-->

    
    
    
<!-- Quote1 Starts-->

<?php
$banner=get_post_meta(5,"banner_2_image",true);
$thumb = wp_get_attachment_image_src($banner, 'banner_2_img' );
?>
<section class="quote-one" style="background-image:url(' <?php echo $thumb['0']; ?>')">
<div class="container">
    <?php the_field("banner_2_title",5);?>
</div>
</section>
<!-- Quote1 Ends-->  
    
    

<!-- About Us Section Starts-->
<section class="about-us" id="about">
<div class="container">
<div class="lft">
    <h1> <?php the_field("about_us_title",5);?></h1>
    <?php the_field("about_us_content",5);?>
</div>
    
<div class="rgt">
 <div class="rgt-abt-frm">
    <div class="about-form">
        <h2><!--span><img src="images/form-icon.png" /> </span--> Contact Form</h2>
		  <?php echo do_shortcode( '[contact-form-7 id="19" title="Contact form 1" html_class="form-inline"]' ); ?>
    </div>
</div>  
<div class="abt_video">
   <iframe width="560" height="315" src="<?php the_field("about_us_video",5);?>" frameborder="0" allowfullscreen></iframe>    
 </div>
</div>
</section>
<!-- About Us Section Ends-->  

    
<!-- Services Section Starts-->
<section class="service" id="service">

<!-- Quote 2 Starts-->
<?php
$banner=get_post_meta(5,"skill_section_image",true);
$thumb = wp_get_attachment_image_src($banner, 'skill_section_img' );
?>
<div class="quote-two" style="background-image:url('<?php echo $thumb['0']; ?>')">
<div class="container">
    <h2><?php the_field("skill_section_title",5);?></h2>
</div>
</div>
<!-- Quote 2 Ends-->
    
<div class="container">
    <ul>
	<?php 
     query_posts( array ( 'post_type' => 'skills','showposts'=>'-1','order'=>'ASC') ); ?> 
     <?php while ( have_posts() ) : the_post(); ?>
        <li><a href="javascript:void(0)"><div class="icon-block"><?php the_post_thumbnail();?></div><span><?php the_title();?></span></a></li>
	<?php
	endwhile;
	wp_reset_query();?>
    </ul>
    
</div>
</section>
<!-- Services Section Ends-->
    
    
    

<!-- Testimonial Section Starts-->
<section class="testimonial" id="testimonial">
<div class="container">
        <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			<?php 
			$i=0;
				query_posts( array ( 'post_type' => 'testimonials','showposts'=>'-1','order'=>'ASC') ); ?> 
				<?php while ( have_posts() ) : the_post(); 
				if($i==0)
					{
					?>
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">
                           <figure class="clearfix">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                    <figcaption class="caption">
                                        <p class="msg-testimonisl"><?php the_content();?></p>
                                        <span class="author"><?php the_title();?></span>
                                    </figcaption>
                               </div>
                           </figure>
                        </div>
                    </div>
                </div>
                <?php
				}
					else
				{
	?>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                           <figure class="clearfix">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                    <figcaption class="caption">
                                        <?php the_content();?>
                                        <span class="author"><?php the_title();?> </span>
                                    </figcaption>
                               </div>
                           </figure>
                        </div>
                    </div>
                </div>
				<?php
				}
				$i++;
				endwhile;	
				wp_reset_query();
				?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="/#tcb-testimonial-carousel" data-slide="prev"> <span></span> </a><!-- class="glyphicon glyphicon-chevron-left" -->
            <a class="right carousel-control" href="/#tcb-testimonial-carousel" data-slide="next"> <span></span> </a><!-- class="glyphicon glyphicon-chevron-right" -->
        </div>
  
    </div>
</section>
<!-- Testimonial Section Ends-->
    
    
    
    
<!-- Gallery Section Starts-->
<section class="gallery"  id="gallery">
<div class="container">
    <h1><span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gal-icon.png" /></span><?php the_field("our_gallery_title",5);?></h1>
    
    
  
    
    <ul id="filters" class="clearfix">
			
<?php 
$args = array(
'type'                     => 'gallery',
'taxonomy'                 => 'gallety_category',
'order'                    => 'desc',
);
$i=1;
$categories = get_categories( $args );
foreach ( $categories as $category ) {
 $name = $category->name; 
 $slug = $category->slug;

 ?>

                           </a>
			<!--li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span></li-->
			<li><span class="filter <?php if($i==1){ echo 'active';} ?>" data-filter=".<?php if($i==1){echo 'app';}
			else { echo 'card';}?>"><?php echo $name ?></span></li>
			<?php $i++;
			}?>
			<li><span><a href="https://www.facebook.com/WallviewAU/" target="_blank">More <i class="fa fa-facebook-square" ></i></a></span></li>
			</ul>

		<div id="portfoliolist">
<?php
$a=1;		
$args = array (
      'taxonomy' => 'gallety_category',
    );
    $categories = get_terms ( $args );
    foreach ( $categories as $category ) {
      $args = array (
        'post_type' => 'gallery',
		'posts_per_page' => -1,
        'tax_query' => array(
		array(
			'taxonomy' => 'gallety_category',
			'field' => 'slug',
			'order' =>  'DESC',
			'terms' => $category->slug
		)
		)
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
?>
			<?php while($query->have_posts()) : $query->the_post();?>
			<div class="portfolio <?php if($a==1){echo 'card';} else {echo 'app';} ?>" data-cat="<?php if($a==1){echo 'card';} else {echo 'app';} ?>" style="<?php if($a==1){echo 'display: inline-block;';} ?>">
				<div class="portfolio-wrapper">	
						<?php
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
						<a href="<?php echo $large_image_url[0];?>" data-lightbox="example-set" ><img src="<?php echo $large_image_url[0]; ?>" ></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title"></a>
							<span class="text-category"><?php the_title(); ?></span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			<?php
			     endwhile;
			    ?>
<?php
	  }
	  $a++;
	}
  ?>     			
		
			
		</div>
    
    
    
    
</div>
</section>
<!-- Gallery Section Ends-->
    
    
    
    
<!-- Quick Quote Section Starts-->
<?php $mail = get_field("admin_form_email",5); 
//echo $mail;
?>

<section class="quick-quote" id="quick">
<div class="quote-title">
    <div class="container"><?php the_field("quick_qoute_section_title",5);?></div>
</div>    
    
<div class="container">
 <form role="form" id="signupForm">
<div class="lft dimensions">
<input type="hidden" name="mail1" value="<?php echo $mail;?>">
  <div class="form-group">
    <label>Wall 1:</label>
    <input type="text" id="wall_11" name="wall_11" class="form-control">
    <input type="text" id="wall_12" name="wall_12" class="form-control">
  </div>
     
     <div class="form-group">
    <label>Wall 2:</label>
    <input type="text" id="wall_21" name="wall_21" class="form-control">
    <input type="text" id="wall_22" name="wall_22" class="form-control">
  </div>
     
     <div class="form-group">
    <label>Wall 3:</label>
    <input type="text" id="wall_31" name="wall_31" class="form-control">
    <input type="text" id="wall_32" name="wall_32" class="form-control">
  </div>
     
     <div class="form-group">
    <label>Wall 4:</label>
    <input type="text" id="wall_41" name="wall_41" class="form-control">
    <input type="text" id="wall_42" name="wall_42" class="form-control">
  </div>
     
     <div class="form-group">
    <label>Total Area:</label>
    <input type="text" id="area" name="area" class="form-control full">
  </div>
  
</div>
<div class="rgt oth-details">
<div class="form-group">
    <label>Wallpaper Details (Manufacturer, Brand, Ink)</label>
    <textarea class="form-control" id="details" name="details"></textarea>
</div>
<div class="form-group">
    <label>Other Information</label>
    <textarea class="form-control" id="other_ifo" name="other_ifo"></textarea>
</div>
    
    
<div class="form-group adjust">
    <label>Wall Type</label>
    <select class="form-control hlf" id="wall_type" name="wall_type"><option value="Gyprock">Gyprock</option>
	<option value="wall2">Rendered</option>
	<option value="wall2">Other</option></select>
</div>
<div class="form-group adjust adjust-r">
    <label>Email</label>
    <input type="email" id="email_3" name="email_3" class="form-control hlf">
</div>
<div class="form-group adjust">
    <label>Name</label>
    <input type="text" id="name_3" name="name_3" class="form-control hlf">
</div>
<div class="form-group adjust adjust-r">
    <label>Phone</label>
    <input type="text" id="phone_3" name="phone_3" class="form-control hlf">
</div>
<div class="form-group adjust">
    <label>Suburb</label>
    <input type="text" id="suburb" name="suburb" class="form-control hlf">
</div>
<button type="submit" class="btn">Request Quote</button>
   
<span id="msg"><span>
</div>
</form>
</div>
</section>
<!-- Quick Quote Section Ends-->
<script>
jQuery(document).ready(function(){
	 jQuery('.form-control').each(function () {
		
jQuery(this).blur(function () {
var l1 = jQuery("#wall_11").val();
var w1 = jQuery("#wall_12").val();
if(l1!="" && w1!="")
{
	var area1 = parseInt(l1)*parseInt(w1);
}
else
{
	var area1 = 0
}
var l2 = jQuery("#wall_21").val();
var w2 = jQuery("#wall_22").val();
if(l2!="" && w2!="")
{
	var area2 = parseInt(l2)*parseInt(w2);
}
else
{
	var area2 = 0
}
var l3 = jQuery("#wall_31").val();
var w3 = jQuery("#wall_32").val();
if(l3!="" && w3!="")
{
	var area3 = parseInt(l3)*parseInt(w3);
}
else
{
	var area3 = 0
}
var l4 = jQuery("#wall_41").val();
var w4 = jQuery("#wall_42").val();
if(l4!="" && w4!="")
{
	var area4 = parseInt(l4)*parseInt(w4);
}
else
{
	var area4 = 0
}
var final_val = parseInt(area1) + parseInt(area2) + parseInt(area3) + parseInt(area4);
jQuery("#area").val(final_val);
 
});
});
});
</script>			
<script>
jQuery(document).ready(function(){ 
	 jQuery('#signupForm').validate({
		 
			rules: {
				wall_11: {
					required: true
				},
				wall_12: {
					required: true
				},
				wall_21: {
					required: true
				},
				wall_22: {
					required: true
				},
				wall_31: {
					required: true
				},
				wall_32: {
					required: true
				},
				wall_41: {
					required: true
				},
				wall_42: {
					required: true
				},
				area: {
					required: true
				},
				details: {
					required: true
				},
				other_ifo: {
					required: true
				},
				wall_type: {
					required: true
				},
			   email_3: {
					required: true,
					email: true
				},
				name_3: {
					required: true
				},
				phone_3: {
					required: true,
					number: true,
				    maxlength: 20	
				},	
					suburb: {
					required: true
				},				
			},
		messages: {
				
				wall_11: "Please enter a wall_11",
				wall_12: "Please enter wall_12",
				wall_21: "Please enter wall_21",
				wall_22: "Please enter wall_21",
				wall_31: "Please enter wall_31",
				wall_32: "Please enter wall_32",
				wall_41: "Please enter wall_41",
				wall_42: "Please enter wall_42",
				details: "Please enter details",
				other_ifo: "Please enter other_ifo",
				wall_type: "Please select wall_type",
				email_3: "Please enter email",
				email_3: "Please enter correct email",
				name_3: "Please enter name",
				phone_3: "Please enter phone number",
				phone_3: "Please enter correct phone number",
			},
	submitHandler: function(form) {
		jQuery(form).ajaxSubmit({
			type:"GET",
			url:"<?php bloginfo('template_url'); ?>/ajax/form.php",
			
			data:jQuery(form).serialize(),
			success: function(data)
			{
				//alert(data);
				 jQuery("form").trigger("reset");
				 jQuery('#msg').html("Your qoute has been sucessfully registered").css('color','green');
				
			}
		 });
	}
	});
});
</script>
<script>
        jQuery(document).ready(function () {
            jQuery("#wall_11").attr("placeholder", "Height (m)");
			jQuery("#wall_12").attr("placeholder", "Width (m)");
			jQuery("#wall_21").attr("placeholder", "Height (m)");
			jQuery("#wall_22").attr("placeholder", "Width (m)");
			jQuery("#wall_31").attr("placeholder", "Height (m)");
			jQuery("#wall_32").attr("placeholder", "Width (m)");
			jQuery("#wall_41").attr("placeholder", "Height (m)");
			jQuery("#wall_42").attr("placeholder", "Width (m)");
            
        });
    </script>

<?php
get_footer();?>