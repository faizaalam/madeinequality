<?php /** * The main template file. * * This is the most generic template file in a WordPress theme * and one of the two required files for a theme (the other being style.css). * It is used to display a page when nothing more specific matches a query. * E.g., it puts together the home page when no home.php file exists. * * @link https://codex.wordpress.org/Template_Hierarchy/#contact * * @package Madeinequality */ get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main " role="main">
        <section class="background-cover  parallax-bg">

            
            <div class="row">
                <div class="module-content">
                    <div class="form-section personal-details current" style="opacity: 1; display: block;">
               <!--          <header class="module-head large-11 large-centered column">
                            <h4 class="module-eyebrow commitment-subheader">
                    The <strong class="emphasis">HeForShe</strong> Commitment
                </h4>
                            <h2 class="module-header">
                    <strong class="brand-emphasis">I am one</strong> of billions…
                </h2>
                            <h3 class="module-subhead commitment-header-message">
                    who believe that everyone is born free and equal. I will take action against gender bias, discrimination and violence to bring the benefits of equality to us all.
                </h3>
                        </header> -->
                      
                        <form class="large-8 large-centered medium-8 medium-centered small-12 small-centered column contact-form">



                            <div class="form-group large-6 column medium-6 small-12">
                                <textarea type="text" required></textarea>
                                <label for="first_name" class="control-label">First Name</label><i class="bar"></i>
                            </div>
                            <div class="form-group large-6  medium-6 small-12 column">
                                <textarea type="text" required></textarea>
                                <label for="last_name" class="control-label">Last Name</label><i class="bar"></i>
                            </div>
                            <div class="form-group large-12  medium-12 small-12 column">
                                <textarea type="number" required></textarea>
                                <label for="phone" class="control-label">Phone Number</label><i class="bar"></i>
                            </div>
                            <div class="form-group large-12  medium-12 small-12 column">
                                <textarea id="email" type="email" required></textarea>
                                <label for="email" class="control-label" data-error-message="Invalid">Email</label><i class="bar"></i>

                            </div>
                            <div class="form-group large-12  medium-12 small-12 column">
                                <textarea type="text" required></textarea>
                                <label for="textarea" class="control-label">Message</label><i class="bar"></i>
                            </div>

                            <div class="checkbox large-12  medium-12 small-12 column">
                                <label>
                                    <input type="checkbox" required/><i class="helper"></i>I'm the label from a checkbox
                                </label>
                            </div>
                            <div class="button-container  large-12  medium-12 small-12 column">
                                <button type="button" class="button hvr-trim"><span>Submit</span>
                                </button>
                            </div>
                        </form>
                        </div>  
                     </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>