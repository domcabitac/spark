<section class="call-out" id="<?php the_sub_field( 'id' ); ?>">
    <div class="container small">
        <div class="bodyContent">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-xl-6 col-lg-6 callOutLeft">
                    <div class="ring-container">
                        <div class="ringring"></div>
                        <div class="circle"></div>
                    </div>
                    <h3>
                        <?php the_sub_field( 'title' ); ?>
                    </h3>
                </div>
                <div class="col-12 col-xl-6 col-lg-6 callOutRight justify-content-end">
                    <h4>
                        <?php the_sub_field( 'subtitle' ); ?>
                    </h4>
                    <a class='arrow-btn' href='#contact'>
                        <?php the_sub_field( 'button_text' ); ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.8584 18.9661L16.1836 8.64088L16.3054 15.0607L18.3965 15.1006L18.205 5.09742L8.20175 4.90585L8.24165 6.99704L14.6615 7.11881L4.33634 17.444L5.8584 18.9661Z" fill="#FF9900"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        <?php the_sub_field( 'text' ); ?>
                    </p>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-12 callOutMobile">
                    <h4>
                        <?php the_sub_field( 'subtitle' ); ?>
                    </h4>
                    <a class='arrow-btn' href='#contact'>
                        <?php the_sub_field( 'button_text' ); ?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.8584 18.9661L16.1836 8.64088L16.3054 15.0607L18.3965 15.1006L18.205 5.09742L8.20175 4.90585L8.24165 6.99704L14.6615 7.11881L4.33634 17.444L5.8584 18.9661Z" fill="#FF9900"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>