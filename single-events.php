<?php
/**
* Single Event
*
*
* @since   1.0.0
* @package WP
*/
get_header(); ?>
<section class='single_event'>
<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>
    <div class="container small">
        <div class="row firstRow justify-content-between">
            <div class="col-9 col-xl-6 col-lg-6 col-md-6">
                <a href="events" class='backButton'>
                    <svg width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.966 13.444L4.641 3.119l6.42-.122.04-2.091-10.004.191-.191 10.004 2.091-.04.122-6.42 10.325 10.325 1.522-1.522z" fill="#F90"/></svg>
                    Back to all events
                </a>
            </div>
            <div class="col-3 col-xl-6 col-lg-6 col-md-6 justify-content-end align-self-end text-right">
                <a class='share' onclick='getURL();'  id='popup-btn' onclick='copyUrl();'>
                    <svg width="18" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.923 13.755c-.632 0-1.206.229-1.722.573L5.682 10.03c0-.115.057-.23.057-.287 0-.057 0-.23-.057-.287l7.519-4.297c.46.344 1.09.572 1.722.572a2.84 2.84 0 002.87-2.865A2.84 2.84 0 0014.923 0a2.84 2.84 0 00-2.87 2.866c0 .115 0 .172.057.287L4.592 7.452a2.823 2.823 0 00-1.722-.573A2.84 2.84 0 000 9.745a2.84 2.84 0 002.87 2.866c.632 0 1.205-.23 1.722-.573l7.519 4.298c0 .115-.057.172-.057.287a2.84 2.84 0 002.87 2.866 2.84 2.84 0 002.87-2.866 2.843 2.843 0 00-2.871-2.868z" fill="#F90"/></svg>
                    <text>Share<text>
                </a>
            </div>
            <div id="popup-wrapper" class="popup-container hide-me">
                <div class="popup-content">
                    <span id="close">&times;</span>
                    <p>
                    
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.881px" height="122.88px" viewBox="0 0 122.881 122.88" enable-background="new 0 0 122.881 122.88" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M61.44,0c33.933,0,61.441,27.507,61.441,61.439 c0,33.933-27.508,61.44-61.441,61.44C27.508,122.88,0,95.372,0,61.439C0,27.507,27.508,0,61.44,0L61.44,0z M34.106,67.678 l-0.015-0.014c-0.785-0.718-1.207-1.685-1.256-2.669c-0.049-0.982,0.275-1.985,0.984-2.777c0.01-0.011,0.019-0.021,0.029-0.031 c0.717-0.784,1.684-1.207,2.668-1.256c0.989-0.049,1.998,0.28,2.792,0.998l12.956,11.748l31.089-32.559v0 c0.74-0.776,1.723-1.18,2.719-1.204c0.992-0.025,1.994,0.329,2.771,1.067v0.001c0.777,0.739,1.18,1.724,1.205,2.718 c0.025,0.993-0.33,1.997-1.068,2.773L55.279,81.769c-0.023,0.024-0.048,0.047-0.073,0.067c-0.715,0.715-1.649,1.095-2.598,1.13 c-0.974,0.037-1.963-0.293-2.744-1L34.118,67.688L34.106,67.678L34.106,67.678L34.106,67.678z"/></g></svg>

Link Copied</p>
<?php

    echo '<script> window.setTimeout("#popup-wrapper.window.close()", 300); </script>';

?>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center image">
               <div class='eventsImage' style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
            </div>
        </div>
        <div class="row details justify-content-center">
            <div class="col-xl-6 col-lg-6 col-12">
                <?php
                    $address = 'avenida+gustavo+paiva,maceio,alagoas,brasil';

                    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

                    $output= json_decode($geocode);

                    $lat = $output->results[0]->geometry->location->lat;
                    $long = $output->results[0]->geometry->location->lng;
                ?>  
                <h1><?php the_title();?></h1>
                <div class="row eventRow">
                    <div class="col-12 col-xl-4 col-lg-4 col-md-4">
                        <div class="label">
                            <svg width="13" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.023 0C2.683 0 0 2.726 0 6.121c0 3.394 6.023 11.686 6.023 11.686s6.023-8.292 6.023-11.686C12.046 2.726 9.362 0 6.023 0zm0 8.903c-1.533 0-2.738-1.224-2.738-2.783 0-1.557 1.204-2.782 2.738-2.782 1.533 0 2.738 1.223 2.738 2.782S7.556 8.903 6.023 8.903z" fill="#F90"/></svg>
                            Where
                        </div>

                    </div>
                    <div class="col-12 col-xl-8 col-lg-8 col-md-8 locDets">
                        <form action="http://maps.google.com/maps" method="get" target="_blank">
                            <input type="hidden" name="daddr" value='<?php the_field( 'location' ); ?>' />
                            <input id='address' type="submit" class='locationText' value='<?php the_field( 'location' ); ?>' />
                        </form>
                    </div>
                </div>
                <div class="row eventRow">
                    <div class="col-12 col-xl-4 col-lg-4 col-md-4">
                        <div class='label'>
                        <svg width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 0a7.497 7.497 0 00-5.303 12.803 7.497 7.497 0 0010.606 0A7.497 7.497 0 0015 7.5 7.51 7.51 0 007.5 0zm2.665 9.67l-3-1.5a.75.75 0 01-.415-.67V3.75a.75.75 0 011.5 0v3.287l2.585 1.293a.75.75 0 01-.67 1.34z" fill="#F90"/></svg>

                            When
                        </div>
                    </div>
                    <div class="col-12 col-xl-8 col-lg-8 col-md-8 locDets">
                        <?php $date = strtotime(get_field('date')); ?>
                        <?php echo date('M d, 20y', $date); ?>
                        <br/>
                        <?php echo date('g:i a', $date); ?>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center Links">
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <a class='btn solid'href="<?php the_field( 'ticket_link' ); ?>">Get my ticket
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.93944 21.9405L18.6947 6.18521L18.8806 15.9814L22.0715 16.0422L21.7792 0.778222L6.51518 0.485891L6.57606 3.67686L16.3722 3.86268L0.616912 19.618L2.93944 21.9405Z" fill="#FF9900"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 addCal">
                        <?php  
                            $location = urlencode(get_field( 'location' ));
                            $desc = urlencode(get_field( 'description' ));                       
                            $datetime = new DateTime(get_field( 'date' ));
                            $endDate = new DateTime(get_field( 'end_date' ));
                            $result = $datetime->format("Y-m-d\THis");
                            $krr    = explode('-', $result);
                            $result = implode("", $krr);

                            $resultV2 = $endDate->format("Y-m-d\THis");
                            $krrV2    = explode('-', $resultV2);
                            $resultV2 = implode("", $krrV2);
                        ?>
                        <?php $calendar_file = get_field( 'calendar_file' ); ?>
                        <?php if ($calendar_file ) : ?>

                        <ul class="backButton">
                            <li>
                                <a>Add to Calendar</a>
                                <ul>
                                <li><a class='backButton' href="https://calendar.google.com/calendar/u/0/r/eventedit?text=<?php the_title(); ?>&dates=<?php echo $result; ?>/<?php echo $resultV2; ?>&details=<?php echo $desc ?>&location=<?php echo $location; ?>&trp=false&sprop=&sprop=name:"target="_blank" rel="nofollow">Google Calendar</a> </li>
                                <li><a href="<?php echo esc_url( $calendar_file['url'] ); ?>">Other Calendar</a></li>
                                </ul>
                            </li>
                        </ul>
                        <?php else: ?>
                            <a class='backButton' href="https://calendar.google.com/calendar/u/0/r/eventedit?text=<?php the_title(); ?>&dates=<?php echo $result; ?>/<?php echo $resultV2; ?>&details=<?php echo $desc ?>&location=<?php echo $location; ?>&trp=false&sprop=&sprop=name:"target="_blank" rel="nofollow">Add to Calendar</a> 
                            <?php endif; ?>

                        </div>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-12">
                <h6>
                Details
                </h6>
                <p>
                    <?php the_field( 'description' ); ?>
                </p>
            </div>



            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex"></div>
    </div>
</div>

<section class="image-testimonial-overlay" id="<?php the_sub_field( 'id' ); ?>" >
<!-- <section class="image-testimonial-overlay" id="<?php the_sub_field( 'id' ); ?>" style="background-image: url('data:image/svg+xml,%3Csvg width='1440' height='270' viewBox='0 0 1440 270' fill='none' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Crect width='1440' height='270' fill='%23FF9900'/%3E%3Crect width='1440' height='270' fill='url(%23pattern0)'/%3E%3Crect width='1440' height='270' fill='black' fill-opacity='0.75'/%3E%3Cdefs%3E%3Cpattern id='pattern0' patternContentUnits='objectBoundingBox' width='1' height='1'%3E%3Cuse xlink:href='%23image0' transform='translate(0 -1.27963) scale(0.000347222 0.00185185)'/%3E%3C/pattern%3E');"> -->

<div class="container-fluid testing">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/liveVideo.mp4" type="video/mp4">
  </video>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text text-center GiT">
                        <div class='quote'>Looking to plan your next event?</div>
                        <p><?php the_sub_field( 'author' ); ?></p>
                        <a href='#'class="btn outline">	Get in touch
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.93944 28.9405L24.6947 13.1852L24.8806 22.9814L28.0715 23.0422L27.7792 7.77822L12.5152 7.48589L12.5761 10.6769L22.3722 10.8627L6.61691 26.618L8.93944 28.9405Z" fill="#FF9900"/>
            </svg>
            </a>
        </div>
</div>

</section>

<?php get_footer(); ?>
