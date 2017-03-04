<?php get_header() ?>


            <section class="hero">
                <div class="container">

                    <h2 class="main-title"><?php bloginfo(); ?></h2>
                    <p class="main-subtitle"><?php bloginfo('description'); ?></p>

                    <form class="hero-form col-xs-12 col-md-offset-2 col-md-8" action="#">
                        <input class="hero-form-input col-xs-12 col-md-8" type="text" name="destination"
                               placeholder="WHAT IS YOUR DESTINATION, SAILOR?">
                        <button class="hero-form-button col-xs-12 col-md-4"><i class="icon-boat"></i> FIND A BOAT
                        </button>
                    </form>


                </div>
            </section>
        </div>

        <section id="destination" class="destination">
            <div class="container">
                <div class="row">
                    <div class="destination-info col-xs-12">
                        <div class="destination-info-item">
                            <span class="item-count">2,300</span>
                            <span class="item-description">Destinations</span>
                        </div>
                        <div class="destination-info-item">
                            <span class="item-count">1,000</span>
                            <span class="item-description">Cities</span>
                        </div>
                        <div class="destination-info-item">
                            <span class="item-count">35,000</span>
                            <span class="item-description">Boats</span>
                        </div>
                        <div class="destination-info-item">
                            <span class="item-count">50,000</span>
                            <span class="item-description">Sailors</span>
                        </div>
                    </div>
                </div>

                <h2 class="title">EXPLORE OUR TOP DESTINATIONS</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et</p>

               <!-- <?php
/*                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=55,66');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        */?>
                        <h1><a href="<?php /*the_permalink(); */?>"><?php /*the_title(); */?></a></h1>
                        <?php /*the_content();
                    endwhile;  // завершаем цикл.
                endif;
                /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
                //wp_reset_query();
               // */?>
                -->

                <?php
                if (have_posts()) :
                    query_posts('cat=12');   // указываем ID рубрик, которые необходимо вывести.
                while (have_posts()) : the_post();
                ?>

               <!-- <article class="post">
                    <h2><a href="<?php /*the_permalink(); */?>"><?php /*the_title(); */?></a></h2>
                    <p> <?php /*the_content(); */?></p>

                </article>-->

                    <div class="destination-item gallery-item modal-dest-2 col-xs-12 col-sm-6 col-md-4">
                        <div class="img-wrap">

                            <?php if ( has_post_thumbnail()) : ?>

                                    <?php the_post_thumbnail('large', ['class' => 'gallery-item-img']); ?>

                            <?php endif; ?>
                        </div>

                        <a class="gallery-item-link" href="#"> <?php echo get_the_date(); ?></a>
                        <!--?php
echo get_the_date('d.m.Y');
?-->
                        <div class="gallery-item-info">
                            <h3><?php the_title(); ?></h3>
                            <span><?php the_content(); ?></span>
                        </div>

                    </div>

                <?php
                endwhile;

                else :
                echo '<p> No content </p>';

                endif;
                ?>







                <div class="col-xs-12">
                    <button class="destination-btn">EXPLORE MORE DESTINATIONS</button>
                </div>


            </div>
        </section>

        <section class="owner">
            <video autoplay loop muted class="bgvideo">
                <source src="img/water.mp4" type="video/mp4">
                </source>
            </video>
            <div class="container">

                <h2 class="main-title">HAVE YOUR OWN BOAT?</h2>
                <p class="main-subtitle">navigare necesse est, vivere non est necesse</p>

                <button class="owner-button">Make money with your boat</button>

            </div>


        </section>


        <section id="boats" class="boats">
            <div class="container">

                <h2 class="title">FEATURED BOATS</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et</p>

                <div class="boats-item gallery-item modal-boats-1 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img1.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€580 / day</a>
                    <div class="gallery-item-info">
                        <h3>Delphia 47</h3>
                        <span class="item-location"><i class="icon-location"></i>Gdańsk, Poland</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>8 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-2 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img2.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€950 / day</a>
                    <div class="gallery-item-info">
                        <h3>Sense 55</h3>
                        <span class="item-location"><i class="icon-location"></i>Portofino, Italy</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>12 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-3 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img3.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€820 / day</a>
                    <div class="gallery-item-info">
                        <h3>Crusier 51</h3>
                        <span class="item-location"><i class="icon-location"></i>Palma de Mallorca, Spain</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>10 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-4 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img4.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€400 / day</a>
                    <div class="gallery-item-info">
                        <h3>Crusier 41S</h3>
                        <span class="item-location"><i class="icon-location"></i>Lisbon, Portugal</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>8 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-1 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img1.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€580 / day</a>
                    <div class="gallery-item-info">
                        <h3>Delphia 47</h3>
                        <span class="item-location"><i class="icon-location"></i>Gdańsk, Poland</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>8 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-2 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img2.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€950 / day</a>
                    <div class="gallery-item-info">
                        <h3>Sense 55</h3>
                        <span class="item-location"><i class="icon-location"></i>Portofino, Italy</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>12 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-3 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img3.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€820 / day</a>
                    <div class="gallery-item-info">
                        <h3>Crusier 51</h3>
                        <span class="item-location"><i class="icon-location"></i>Palma de Mallorca, Spain</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>10 Berths</span>
                    </div>
                </div>

                <div class="boats-item gallery-item modal-boats-4 col-xs-12 col-sm-6">
                    <div class="img-wrap">
                        <img class="gallery-item-img " src="img/boat-img4.png" alt="img">
                    </div>

                    <a class="gallery-item-link" href="#">€400 / day</a>
                    <div class="gallery-item-info">
                        <h3>Crusier 41S</h3>
                        <span class="item-location"><i class="icon-location"></i>Lisbon, Portugal</span>
                        <span class="item-peoples"><i class="icon-peoples"></i>8 Berths</span>
                    </div>
                </div>

                <div class="col-xs-12">
                    <button class="boats-btn">LOAD MORE BOATS</button>
                </div>


            </div>
        </section>













        <!-- modal windows -->
        <div id="modal-box-dest-1" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Figueira da Foz</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi
                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci
                            velit,
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.
                        </p>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48790.24425019524!2d-8.871854212260933!3d40.15586372595474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2237e03def9c41%3A0x878e2298dda9f4de!2zRmlndWVpcmEgZGEgRm96LCDQn9C-0YDRgtGD0LPQsNC70LjRjw!5e0!3m2!1sru!2sua!4v1487321971961"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-dest-2" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ibiza</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24837.81513365544!2d1.412138327495636!3d38.90736028773339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129946bc6d9d1985%3A0xb6ca1af29357fa88!2zMDc4MDAg0JjQsdC40YbQsCwg0JHQsNC70LXQsNGA0YHQutC40LUg0L4t0LLQsCwg0JjRgdC_0LDQvdC40Y8!5e0!3m2!1sru!2sua!4v1487323795844"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-dest-3" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Palma de Mallorca</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi
                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci
                            velit,
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.
                        </p>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98401.34585383377!2d2.6355081822366744!3d39.58120248390704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297925adc696257%3A0x197cf15666fde8e3!2z0J_QsNC70YzQvNCwLCDQkdCw0LvQtdCw0YDRgdC60LjQtSDQvi3QstCwLCDQmNGB0L_QsNC90LjRjw!5e0!3m2!1sru!2sua!4v1487324493687"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-dest-4" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Portofino</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                            sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi
                            nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                        </p>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.316638001095!2d9.206615765808408!3d44.303440718157304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d49fc6fc6f4c05%3A0xefd9aab5f00f01db!2zMTYwMzQgUG9ydG9maW5vLCDQk9C10L3Rg9GPLCDQmNGC0LDQu9C40Y8!5e0!3m2!1sru!2sua!4v1487325100143"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-dest-5" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Port Hercules</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium
                        </p>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.8312201530907!2d7.421804515795499!3d43.73483295516554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdc28ee7e92af1%3A0x3fe448dadb532858!2z0J_QvtGAINCt0YDQutGO0LvRjA!5e0!3m2!1sru!2sua!4v1487325233398"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="modal-box-boats-1" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delphia 47</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium
                        </p>

                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-boats-2" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Sense 55</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium
                        </p>

                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-boats-3" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Crusier 51</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium
                        </p>

                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-boats-4" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">Crusier 41S</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem
                            accusantium doloremque laudantium
                        </p>

                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="button" class="btn-modal" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-box-owner" class=" modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Заголовок модального окна -->
                    <div class="modal-header">
                        <h4 class="modal-title">SHARE your boat NOW!</h4>
                        <div class="modal-header-border"></div>
                    </div>
                    <!-- Основное содержимое модального окна -->
                    <div class="modal-body">
                        <form id="mod-form" class="modal-form" action="#" method="get">

                            <ul class="form-list">
                                <li>
                                    <input type="text" name="name" placeholder="Your name">
                                </li>
                                <li>
                                    <input type="email" name="email" placeholder="Email">
                                </li>
                                <li>
                                    <input type="text" name="boat" placeholder="Boat model">
                                </li>
                                <li>
                                    <input class="modal-form-input" type="text" name="location" placeholder="Location">
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!-- Футер модального окна -->
                    <div class="modal-footer">
                        <button type="submit" class="btn-modal" form="mod-form">Send</button>
                        <button type="button" class="btn-modal" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

      <?php get_footer() ?>




