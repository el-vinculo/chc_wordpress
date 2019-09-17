<?php
/**
 * Template Name: About US
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

// $email = 'defaultuser@test.com';
// $faqsdata = faqs($email);
// if(!empty($faqsdata)){
//     $faqlist = $faqsdata['faqs'];
// }else{
//     $faqlist = array();
// }

if($_SESSION['userdata']!=''){
    $email = $_SESSION['userdata']['email'];
    $authToken= $_SESSION['userdata']['authentication_token'];
} 
$data = aboutUs($email, $authToken);

if($data['status']!='unauthorized'){
    $data= $data['about_us'][0]['body'];
}else{
    $post_12 = get_post(23); 
    $data = $post_12->post_content;
}

?>

<div class="container-fluid space">
    <div class="container blogs">
    <div class="col-md-9 rightside">

        <div <?php post_class();?>> 
        <div class="row post-area">
    <div class="post-64 page type-page status-publish hentry">
                    <div class="col-md-12 border">
                <div class="line"></div>
                                <div class="post_title">
                <h3><?php //the_title(); ?>About Us</h3>
                </div>
                                <div class="post-tags">             </div>
                
    <div class="post_content">
        <?php echo $data; 
        ?>      
    </div>
                            </div>
    </div>
</div>  
        </div>
    </div>
    <?php //get_sidebar(); ?>
    </div>
</div>
<?php
get_footer();
