<?php
/**
 * Template Name: FAQ
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

$email = 'defaultuser@test.com';
$faqsdata = faqs($email);
if(!empty($faqsdata)){
    $faqlist = $faqsdata['faqs'];
}else{
    $faqlist = array();
}


?>


    <?php
        while ( have_posts() ) :
            the_post();
            if ( comments_open() || get_comments_number() ) :
            endif;
    ?>
   <style type="text/css">
    .faq-main{
      padding: 60px 0;

    }
 #accordion .panel{
    border: none;
    box-shadow: none;
    border-radius: 0;
    margin-bottom: 15px;
}
#accordion .panel-heading{
    padding: 0;
}
#accordion .panel-title a {
    display: block;
    font-size: 16px;
    font-weight: bold;
    line-height: 24px;
    color: #000;
    background: #fff;
    border: none;
    border-bottom: 2px solid #43b02a;
    padding: 15px 20px 15px 47px;
    position: relative;
    transition: all 0.5s ease 0s;
}
#accordion .panel-title a.collapsed{
    border-bottom-color: #ddd;
    color: #888;
}
#accordion .panel-title a:before{
    content: "\f106";
    font-family: "FontAwesome";
    font-weight: 900;
    font-size: 18px;
    position: absolute;
    top: 30%;
    left: 20px;
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a.collapsed:before{
    content: "\f107";
}
#accordion .panel-body{
    font-size: 15px;
    color: #8c8c8c;
    line-height: 25px;
    background: #f6f6f6;
    border: none;
    padding: 14px 20px;
}
  #accordion .panel-title a:focus {
    text-decoration: none;
}
  </style>
<div class="faq-main">
  <div class="container">
    <div class="row">
        <div class=" col-md-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            if(!empty($faqlist)){ 
                foreach ($faqlist as $key => $value) { ?>
                    
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne-<?php echo $key; ?>">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $value['question']; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne-<?php echo $key; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-<?php echo $key; ?>">
                        <div class="panel-body">
                            <?php echo $value['answer']; ?>
                        </div>
                    </div>
                </div>

                <?php } } ?>
                
                

            </div>
        </div>
    </div>
</div>
</div>


        <?php endwhile;  ?>
<?php
get_footer();
