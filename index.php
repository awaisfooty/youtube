<?php get_header(); ?>

<section style="background-color: #fdfdfd;">
        <div class="container">
            <div class="row">
                <?php
                $posts = get_posts();
 
                foreach($posts as $post) {
                ?>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="unique-box">
                        <div class="unique-img">
                            <img src="https://avatars.mds.yandex.net/i?id=3ea6f34ccbfa31f5606f2c2da9db7c4e96ade33e-8152091-images-thumbs&n=13" alt="">
                        </div>
                        <div class="play-bt">
                            <i class="fa-solid fa-play"></i>    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="unique">
                        <a href="<?php echo get_the_permalink(); ?>"><h1><?php echo get_the_title();?></h1></a>
                        <p><?php echo get_the_content(); ?></p>
                        <button>Discover More</button>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
</section>
<section style="margin-top: 50px; margin-bottom: 40px;">
        <div class="service py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="head-service">
                            <h1>Our Services</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae tempora quibusdam facere! Delectus suscipit soluta nemo sapiente adipisci iusto non?</p>
                        </div>
                            <div class="web-design">
                                <div class="icon-ct">
                                    <i class="fa-solid fa-computer"></i>
                                </div>
                                <h1>Web Design</h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam aliquid quae cumque corrupti unde totam id voluptas quo, soluta voluptates.</p>
                                <a href="">More Details</a>
                            </div>
                            <div class="web-design">
                                <div class="icon-ct">
                                    <i class="fa-solid fa-volume-high"></i>
                                </div>
                                <h1>Digital Marketing</h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam aliquid quae cumque corrupti unde totam id voluptas quo, soluta voluptates.</p>
                                <a href="">More Details</a>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="web-design">
                            <div class="icon-ct">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                            <h1>App Deasgin</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam aliquid quae cumque corrupti unde totam id voluptas quo, soluta voluptates.</p>
                            <a href="">More Details</a>
                        </div>
                        <div class="web-design">
                            <div class="icon-ct">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <h1>Creator</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam aliquid quae cumque corrupti unde totam id voluptas quo, soluta voluptates.</p>
                            <a href="">More Details</a>
                        </div>
                        <div class="web-design">
                            <div class="icon-ct">
                                <i class="fa-solid fa-arrows-left-right-to-line"></i>
                            </div>
                            <h1>Web Products</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam aliquid quae cumque corrupti unde totam id voluptas quo, soluta voluptates.</p>
                            <a href="">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section style="background-color: #fdfdfd;">
        <div class="container">
            <div class="work">
                <h1>This Is How We <span>Works</span> With Our Clients With thier project</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem perspiciatis recusandae, fugiat accusamus culpa harum!</p>
            </div>
            <div class="row py-4">

            <?php
                    $args = array(
                        'post_type'  => 'winter',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <div class="card" style="width: 18rem;">
                                <img style="width: 100%; height: 100%;" src="https://10wallpaper.com/wallpaper/1920x1200/1212/white_yellow_tulip-Beautiful_flowers_wallpaper_1920x1200.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="<?php echo get_the_permalink(); ?>"><h5 class="card-title"><?php echo get_the_title();?></h5></a>
                                    <p class="card-text"><?php echo get_the_content();?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                <?php
                    $args = array(
                        'post_type'  => 'summer',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <div class="card" style="width: 18rem;">
                                <img style="width: 100%; height: 100%;" src="https://avatars.mds.yandex.net/i?id=2245778e0b545d60a4ef71b8a0b1c666292b4045-11497947-images-thumbs&n=13" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="<?php echo get_the_permalink(); ?>"><h5 class="card-title"><?php echo get_the_title();?></h5></a>
                                    <p class="card-text"><?php echo get_the_content();?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                 <?php
                    $args = array(
                        'post_type'  => 'ocean',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <div class="card" style="width: 18rem;">
                                <img style="width: 100%; height: 100%;" src="https://wallbox.ru/resize/1920x1200/wallpapers/main2/201713/149081140958dbfa11adb935.67473686.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="<?php echo get_the_permalink(); ?>"><h5 class="card-title"><?php echo get_the_title();?></h5></a>
                                    <p class="card-text"><?php echo get_the_content();?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            
            <div class="logo-work">
                <img src="https://avatars.mds.yandex.net/i?id=20f1111a3a3429dc1c8ca99de5eb8b6c-5231985-images-thumbs&n=13" alt="">
                <img src="https://avatars.mds.yandex.net/i?id=7b6f3f5b3834174d75028f3ac2189dd4cbb895af-5236398-images-thumbs&n=13" alt="">
                <img src="https://avatars.mds.yandex.net/i?id=f673d033640c42ba8a64b85f550165d2-4577098-images-thumbs&n=13" alt="">
                <img src="https://avatars.mds.yandex.net/i?id=231631c8b62fe882fde1d60414a7397ed56e6a16-9035616-images-thumbs&n=13" alt="">
                <img src="https://avatars.mds.yandex.net/i?id=664998e74b2a2672a24605e9f6e43bebe37f57a3-9229664-images-thumbs&n=13" alt="">
            </div>
        </div>
</section>
<section style="background-color: #fdfdfd; padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <div class="some">
                <h1>Some of our recent client <span>Work</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cupiditate porro quidem quibusdam esse quo repellendus atque adipisci, laborum inventore?</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="work-left">
                        <div class="part-1">
                            <div class="left-img-box">
                                <img src="https://avatars.mds.yandex.net/i?id=063483fb7deee84b4640dfbf2ca4c55a4354852e-10470894-images-thumbs&n=13" alt="">
                            </div>
                            <h1>NFT APP Development</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis iure quidem omnis labore qui!</p>
                            <a href="">Read Case Study</a>
                        </div>
                    </div>
                    <div class="work-left">
                        <div class="part-1">
                            <div class="left-img-box">
                                <img src="https://yandex-images.clstorage.net/4rv7S2z41/0aa9e9bjn/z933bYZcGPXF74nGZdijVbbn3qvTkg8GpWIWGkN6mCg1FkWVJItDSLqI0ts6d7sgXoCTPRMmaFxrsSa78FnVwo7l_zC3QRycvKKBqzX4r0G-kqunl-NnF9ELH2p-XpQdWFpQOLwKjpkXVU5u75peIR_wmyA7ewU8Rg3XstVISZMDJeftmoB5xbFbzGqxREPhquY2K_tjZ4uJXldWart8mLU_jOSYGoZZA1nexlPyys0DiKOEDmdRlFIpnn6dCLnXZyWXCU6IdWVJR8gaiex7AcayKnOHb28raWYrauL72KAde9hw-LK6XeONwpp3XnoFi2RjnO4PIVCmqWo6ubRZe68tswmW8GUN6XOsvmFYR-lGOoLHy2trQ_F2Y65ej1yAbT9MlJzajqVX1SJG4xo-SQNUQ_ySS91oNn0uihGo2ZfbDTsBVphFpZWzINLdHBMZpj6ug8Nn97tNWjN6DhscBMXbXIwQBhINW9XCmpe6vo3T_AOwnt8dtC5VptZtBNmD0zEXESY0lUlVO4B6yfQL0S6yvqvfj-fnAUJjJnqTVHR9kwxoaApOJVc1In7vhi7hj2SHvGKHxdRG-YKWXawRv8fdo30uhBVtqZ8MPoWQK1VuTv4zYxPzH_HyEwqCxyB8qceEyNBaAikDzQqGf3pCARdQO4Ce21nAek0CIom4jUdbpa_tKhyV8WlzwBqdhFfxiqbOe_NHc0vNkhvm7isgjJF72FSQZk6BQ1XSDrvajmk7wNMIaqNpQJJNIta5-E17zyl76TYoEYWlS5QitczDGbZCBkd7d1OHiW7fqmanoLB1yyRs2AaGgWPdShZXni7d-_TrnLrTkRSy4XpiCUCVT1dRK-GWiI3dVV_Y7o2A20kOQvLTH0tbC5nej9oOG0SMjftMEGyaBo1PKb7i_wIy-a9Mx3CWAyFYGsUCau2IXbMLHaOBmhjtXal3yO4ltC9JaiKOn6_ju_ORljfG5tc4" alt="">
                            </div>
                            <h1>BRANDING BUSNIESS PLAN</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis iure quidem omnis labore qui!</p>
                            <a href="">Read Case Study</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="see-all ms-auto">
                        <h3><a href="">See All Work →</a></h3>
                    </div>
                    <div class="work-left">
                        <div class="part-1">
                            <div class="left-img-box">
                                <img src="https://avatars.mds.yandex.net/i?id=397230ab3768b2ad70767898a7f7624c7807444a-10747677-images-thumbs&n=13" alt="">
                            </div>
                            <h1>BANK WEBSITE DEVELOPMENT</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis iure quidem omnis labore qui!</p>
                            <a href="">Read Case Study</a>
                        </div>
                    </div>
                    <div class="work-left">
                        <div class="part-1">
                            <div class="left-img-box">
                                <img src="https://avatars.mds.yandex.net/i?id=2fcf4534c265019320635255e45a17c658b321d5-7017431-images-thumbs&n=13" alt="">
                            </div>
                            <h1>WEB APP DEVELOPMENT</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis iure quidem omnis labore qui!</p>
                            <a href="">Read Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section style="background-color: #8d38f2; padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="question">
                    <h1>Frequently Asked Question</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus atque non facere eius voluptate rerum!</p>
                </div>
                <div class="accordien">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" style="background-color: #8d38f2; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is the desgin process for branding?
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="bottom-line"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" style="background-color: #8d38f2; border-top: 1px solid white; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            How much does logo design services cost?
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="bottom-line"></div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" style="background-color: #8d38f2; border-top: 1px solid white; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            How much does website design cost?
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="bottom-line"></div>
                </div>
            </div>
</section>
<section style="background-color: #fdfdfd; padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <div class="about">
                <h1>What Client Says About Our <span>Performance</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vel libero voluptate labore ipsa sapiente vitae sint provident excepturi sunt!</p>
            </div>
            <div class="team-card">

                <div class="team-cd-1">
                    <div class="cd-img">
                        <img src="https://yandex-images.clstorage.net/Iri5y3180/6696fbIq8AaT/N-oXInVKGB5xMZDhiyIglrFSxOlvKhE7FIomUAOT5E3V0R1DupVQaq39Esrl9SHqfyhgIO744ZD74SxjziWCdlOu0xZkr91KwNVUIfuyYWIAhkTtHu8ximU_Q4EjdkQNVZeulJiyM61-isCIEhHUyrpNFOQu2AQGfZB4Z06ShmOH2tTSEOqr3TRCkKN6coFxQXM1fM8P0vhB_PPhRuSTq9PErBeIsDBM7wjyudPwBMobrMbCLIqmp-7EmAbNIrcBNruXoZFIuz31wOAjGQAQErIjh0__PUPL8D9gQPT2cpnAhp4kapOSzh17QjnR0CX7WQ4kUp64xVdsJEpV7BD1owea9EHQiaiMJeEhUGggkSNAM9bfDc8A6bIeANEUJEC6wrZuRPqSQpzvaSJaMnAmSSqu1DI-iuWXDUcYV69yhKE32GZCMpmqPmcTgmN7wwBzwNDHLM9tw0sSf6GwxHXxixG2fsULgmMNbWnwCJKBRmlarieD32jX5K1GSDV8UWVSFQiEg-G6231lMiAjC-LBUhPwVw3dHGHJk67DIXW0IYghNr81mgDyvs7YMppgIPTJGDx1gZyax3UdxNpGnHF2oVTqpHFg26sdlSGQY_kwQkPSsgdPTU_xOlGsE6B3RICocnRN9csAoy2tuzI7E6JVyHsd1ADseDYkHtdoJc5TN3AW-HVz8bi4beZAQBDrssFhQvAF33yfU4pg_EPRJKeSeKBUz4WoIwDd3WgzalBCJ9i6zZXiD7h0dpwWOYYvc5VRNDtFkzK7uSzk81Cz2VEx4oLwNq-ujzKIQy-h8NeWkPpxNE_mOnCx_T85cpjC00SaCT53cVwoNbU_Nup0riAFYGbqxoFQKvtOxMIiwHsxUzFw4haO_Z2BevEPAPLW58KaIfUsVZsBEq8NSuIL4fAWiCp_VVAduET3PcaJVOzxZrMUiQUCwyqLHQfiw7ErMWFSQqO1b3wtYrgT3YDBY" alt="">
                        <div class="cd-text">
                            <h1>Jacob Alverez</h1>
                            <p>Product Owner</p>
                        </div>
                    </div>
                    <div class="cd-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatum consequatur pariatur eligendi reprehenderit ab consectetur corrupti odit harum labore?</p>
                </div>
                <div class="team-cd-1">
                    <div class="cd-img">
                        <img src="https://avatars.mds.yandex.net/i?id=831415c5d61a7478d0059f69ae66b8199cc2c1f5-9848498-images-thumbs&n=13" alt="">
                        <div class="cd-text">
                            <h1>Jasse Rodriguez</h1>
                            <p>Busniessman</p>
                        </div>
                    </div>
                    <div class="cd-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatum consequatur pariatur eligendi reprehenderit ab consectetur corrupti odit harum labore?</p>
                </div>
                <div class="team-cd-1">
                    <div class="cd-img">
                        <img src="https://avatars.mds.yandex.net/i?id=d68765dc9239624ab594ab5bc87deede0e3300a6-13015897-images-thumbs&n=13" alt="">
                        <div class="cd-text">
                            <h1>Rock David</h1>
                            <p>Desginer</p>
                        </div>
                    </div>
                    <div class="cd-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatum consequatur pariatur eligendi reprehenderit ab consectetur corrupti odit harum labore?</p>
                </div>
                <div class="team-cd-1">
                    <div class="cd-img">
                        <img src="https://avatars.mds.yandex.net/i?id=1bd6b241e5525059c006466c2b9084ad36b471a5-12632677-images-thumbs&n=13" alt="">
                        <div class="cd-text">
                            <h1>Jorden Ella</h1>
                            <p>Busniessman</p>
                        </div>
                    </div>
                    <div class="cd-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatum consequatur pariatur eligendi reprehenderit ab consectetur corrupti odit harum labore?</p>
                </div>

            </div>
        </div>
</section>
<section style="background-color: #fdfdfd; padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <div class="blog">
                <h1>Read Our Latest <span>Blog</span> For <br> Your Insight</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, adipisci dolor reiciendis incidunt fuga harum assumenda tempore non. Suscipit, mollitia!</p>
            </div>
            <div class="blog-line"></div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="blog-text">
                    <?php
                        $args = array(
                        'post_type'  => 'framework',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                            <a href="<?php echo get_the_permalink(); ?>"><h2 class="card-title"><?php echo get_the_title();?></h2></a>
                            <p class="card-text"><?php echo get_the_content();?></p>
                        <?php
                    }
                    ?>
                    </div>
                    <div class="blog-img">
                        <img src="https://yandex-images.clstorage.net/Iri5y3180/6696fbIq8AaT/N-oXInVKGB5xMZDhiyIglrFSxOlvKhE7FI9mUAaWkbhVIWjz38B1Ggitcr_FpdG_bw0A4J69kUWbJBlj20UCYwP-04ZU3-3K0NTQYbtyAUNlY9Usz2_AnzFPglWWI3TNc1evdJiD4qyvOiBoYWBUOhpcwYD-GCcmemVY1kyRh1JWeNdSAclKLtdAUuB7khICkBJE_S-Msrvy_-IwBPTSSyBVLGSagAM9LQgRqYCwVJv7jueCrLqGtS6FOVX8oOXjNzuk06PZqu9VMNKDCQNx8cCgd80dHYEKMWxDghYV4FhiZx-GuSKBz164kaugkWXZWWx3MJ7ZdjfOV2p0zuJH0hZYRJJiyhs_dPGh8imCQAPQ8ec_716jSBAM0mLEJ8NaUpd_Frjy0z1M2PJIAJLXqvmcF5Cs-bZWrQVoN6yTReJUykdwcsipfYZSkuHKExCDM-AU_U2dAehxrbOylZbyiVKH_ueo00K_TAqg6PHy99r5b6ZxTsvF9qxVCuSPcrbAhCiGo1G56n-n8NKR69IxUBNwNe88P4NpoM8iA1RG8bnSRg52KkLxHP3IMhpQQFeYaz2kMrzbVEYux3kEr2FFgWYIdCIwyYqPtECSYzlRIJFRIHd_b69wq6IfowGk59HqkLTOJyoTYn-eyJNp0uFW-0qcJUJeKgVFPXUaVo0glMN02XazU9r6_NWQ4XG70gIBEyLnTr8NwJryT9JSR_UBOLA2vkQJsJIPTcnCKjKTRjqa3cehnmhXx_wkubetgrXht-mWcFDbu_5mgEJDWCKBwRMRl5yvbMK5Ia3zoXb3g-nQtt3WWgGy7RyIMLij8ASJaT9U8g4plGTc90s2_hKEs2ZqhBLBmdneV_Ix4ThAUjMBMbbPvd8wCwEM8aAHpeO5EdVudyui4N9vGKObgKIWqigddbOeWNZmLJRrdC9xV8EFqQeBwemKHXcTQLE4cjEBQJJXTg088unTjMIQk" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="blog-text">
                    <?php
                        $args = array(
                        'post_type'  => 'hosting',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                            <a href="<?php echo get_the_permalink(); ?>"><h2 class="card-title"><?php echo get_the_title();?></h2></a>
                            <p class="card-text"><?php echo get_the_content();?></p>
                        <?php
                    }
                    ?>
                    </div>
                    <div class="blog-img">
                        <img src="https://avatars.mds.yandex.net/i?id=8147eefab530abfc71146ca07502f9dbcdde7e77-10651277-images-thumbs&n=13" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="blog-text">
                    <?php
                        $args = array(
                        'post_type'  => 'ceo',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                            <a href="<?php echo get_the_permalink(); ?>"><h2 class="card-title"><?php echo get_the_title();?></h2></a>
                            <p class="card-text"><?php echo get_the_content();?></p>
                        <?php
                    }
                    ?>
                    </div>
                    <div class="blog-img">
                        <img src="https://avatars.mds.yandex.net/i?id=41feb766afaf5b29d248bef0405bfde8b4e2337b-5335037-images-thumbs&n=13" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="container"> 
        <?php
            $var = 10;
            my_data($var);
        ?>     
    </div>
</section>
<?php get_footer(); ?>
