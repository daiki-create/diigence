
<!-- GET -->
<?php
if($_GET['message']){
    $message=htmlentities($_GET['message']);
    echo "
    <div class='message'>
        $message
    </div>
    ";
}
?>

<!-- header -->
<?php include('components/header.php') ?>

<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper js__swiper-one-item">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper" style="white-space:nowrap">
        <div class="g-my-fullheight--xs2 g-fullheight--sm g-my-fullheight--md g-fullheight--lg g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h2 class="g-font-size-22--xs g-font-size-36--sm g-font-size-50--md g-color--white">Amazon物販事業<br>Amazonコンサルティング事業<br>訪問医療事業をご提供</h2>
                </div>
                
            </div>
        </div>
        <div class="g-my-fullheight--xs2 g-fullheight--sm g-my-fullheight--md g-fullheight--lg g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-22--xs g-font-size-36--sm g-font-size-46--md g-color--white">ディージェンス合同会社の<br>ホームページへようこそ<br>Amazonの販売・運営に関する<br>サポートも致します。</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Swiper Wrapper -->

    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->
    
    <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
        <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
        <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
    </a>
</div>
<!--========== END SWIPER SLIDER ==========-->

<!--========== PAGE CONTENT ==========-->
<!-- Features -->
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="g-text-center--xs g-margin-b-100--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Diigence</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md">ディージェンス合同会社が提供するビジネス</h2>
    </div>
    <div class="row g-margin-b-60--xs g-margin-b-70--md">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                        <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">株式会社リアルプロモーション主催Amazonリピート物販実践講座 認定講師</h3>
                    <p class="g-margin-b-0--xs">Amazonで商材を出品する方向けの講座の認定講師として活動中（中国輸入・サプリメント販売など幅広く対応）。</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                        <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">サプリメント通販<br>杜の都自然食品運営責任者</h3>
                    <p class="g-margin-b-0--xs">男性向け・女性向け・お子様向けの各種サプリメントの開発および販売を担当。<br>
国内GMP認定工場での製造なので、品質にも自信があります。</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                        <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">訪問マッサージ事業<br>ぐんま訪問リハビリセンター代表</h3>
                    <p class="g-margin-b-0--xs">シニア向けの訪問リハビリ・マッサージを行っています。</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // end row  -->
    <div class="row">
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                        <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">高齢者向け食事宅配事業<br>最高責任者</h3>
                    <p class="g-margin-b-0--xs">食事でお困りのシニアの方にお弁当の宅配を行っています。
配食だけでなく、安否確認も行うことにより地元密着型のサービスを提供</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                        <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">Amazonコンサルティング事業 </h3>
                    <p class="g-margin-b-0--xs">もう一つの収入の柱を増やしたいと思っている事業者様に、Amazonのコンサルティングも行っています。</p>
                </div>
            </div>
        </div>
    
    </div>
    <!-- // end row  -->
</div>
<!-- End Features -->

<!-- Parallax -->
<div class="js__parallax-window" style="background: url(img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
    <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-margin-b-80--xs">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--primary">迷っている方はまずはご相談からどうぞ！</h2>
        </div>
    </div>
</div>
<!-- End Parallax -->

<!--========== Events ==========-->
<div id="events" class="s-promo-block-v3 g-bg-position--center  g-my-fullheight--md g-my-fullheight--lg" style="background: url('img/1920x1080/09.jpg') 50% 0 no-repeat fixed;background-color:rgba(255,255,255,0.5);background-blend-mode:lighten;">
    <div>
        <div style="padding-top:4em;">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--gray g-letter-spacing--2 g-text-center--xs">Events</p>
            <h2 class="g-font-size-30--xs g-font-size-25--sm g-font-size-50--lg g-color--gray g-text-center--xs">イベント</h2>
        </div>
        <div class="container-fluid">
            <div class="g-margin-b-30--xs">
                <div class="row">
                <?php foreach ($news_list as $news):?>
                    <div class="col-sm-4 col-xs-12 events-card">
                        <a href="<?php echo $news['link'];?>">
                            <div class="row">
                                <div class="col-xs-5 col-sm-12 g-padding-x-0--xs">
                                    <img src="<?php echo $news['url'];?>" alt="画像" class="img-responsive g-padding-y-10--xs g-padding-y-5--xs g-padding-y-20--lg g-padding-x-10--sm g-padding-x-20--lg" style="width:80%;margin-left:10%;">
                                </div>
                                <div class="col-xs-7 col-sm-12 g-padding-y-0--md g-padding-y-0--xs g-padding-y-10--sm g-padding-x-0--xs g-padding-x-5--sm g-text-center--md">
                                    <p class="g-font-size-16--xs g-font-size-18--sm g-font-size-18--md g-margin-b-10-md ws-nw g-color--gray"><?php echo $news['date'];?></p>
                                    <p class="line-clamp-1 g-font-size-16--xs g-font-size-18--sm  g-margin-b-10-md g-font-size-18--md g-color--gray"><?php echo $news['title'];?></p>
                                    <p class="line-clamp-2 g-font-size-14--xs g-font-size-16--sm  g-margin-b-10-md g-font-size-16--md g-color--gray"><?php echo $news['description'];?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--========== Events ==========-->

<!-- Mail -->
<div id="mail" class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 50% 0 no-repeat fixed;">
    <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">News letter</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register for e-mail newsletter</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <form class="input-group" action="actions/send_thanks.php" method="post">
                    <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                    <span class="input-group-btn">
                        <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Mail -->

<!--========== Voice ==========-->
<div id="voice" class="s-swiper js__swiper-one-item g-padding-y-40--xs g-padding-y-60--sm hidden-xs">
    <div class="g-text-center--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Customer's Voice</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs">お客様の声</h2>
    </div>
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
        <div class="g-my-fullheight--lg g-fullheight--sm g-bg-position--center swiper-slide">
            <div class="container g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <div class="row swiper-slide">
                        <div class="col-sm-4 col-xs-6">
                            <img src="img/970x970/01.jpg" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p>
                                講座に入会するか最後まで迷っていたところ佐藤先生とお話しする機会がありとても誠実で真面目な方という印象を受けました。<br>
                                そこで「これが最後のチャンス」と思い、入会しましたが、思った通り佐藤先生は面倒見もよく、丁寧に指導してくださるので、大変感謝してます。<br>
                                今まで入ってきた講座の中で本当に利益が出た講座と思います。
                            </p>
                            <p class="g-text-right--xs">株式会社aa 代表取締役 aa様</p>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p>
                                お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                            </p>
                            <p class="g-text-right--xs">株式会社bb 代表取締役 bb様</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p>
                                お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                            </p>
                            <p class="g-text-right--xs">株式会社cc 代表取締役 cc様</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="g-my-fullheight--lg g-fullheight--sm g-bg-position--center swiper-slide">
            <div class="container g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <div class="g-margin-b-30--xs">
                        <div class="row swiper-slide">
                            <div class="col-sm-4 col-xs-6">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p>
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs">株式会社dd 代表取締役 dd様</p>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p>
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs">株式会社ee 代表取締役 ee様</p>
                            </div>
                            <div class="col-sm-4">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p>
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs">株式会社ff 代表取締役 ff様</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Swiper Wrapper -->

    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->
</div>
<!-- End Voice -->

<!--========== SP Voice ==========-->
<div id="sp-voice" class="s-swiper js__swiper-one-item g-padding-y-40--xs g-padding-y-60--sm visible-xs">
    <div class="g-text-center--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Customer's Voice</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs">お客様の声</h2>
    </div>

    <!-- SP Swiper Wrapper -->
    <div class="swiper-wrapper">
        <div class="g-fullheight--xs g-bg-position--center swiper-slide">
            <div class="container g-ver-center--xs">
                <div>
                    <div class="row swiper-slide" style="margin:0">
                        <div class="col-xs-6" style="padding:0 3px 0 0">
                            <img src="img/970x970/01.jpg" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p class="g-font-size-12--xs">
                                講座に入会するか最後まで迷っていたところ佐藤先生とお話しする機会がありとても誠実で真面目な方という印象を受けました。<br>
                                そこで「これが最後のチャンス」と思い、入会しましたが、思った通り佐藤先生は面倒見もよく、丁寧に指導してくださるので、大変感謝してます。<br>
                                今まで入ってきた講座の中で本当に利益が出た講座と思います。
                            </p>
                            <p class="g-text-right--xs g-font-size-14--xs">株式会社aa<br>代表取締役 aa様</p>
                        </div>
                        <div class="col-xs-6" style="padding:0 0 0 3px">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p class="g-font-size-12--xs">
                                お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                            </p>
                            <p class="g-text-right--xs g-font-size-14--xs">株式会社bb<br>代表取締役 bb様</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide">
            <div class="container g-ver-center--xs">
                <div>
                    <div class="g-margin-b-30--xs">
                        <div class="row swiper-slide" style="margin:0">
                            <div class="col-xs-6" style="padding:0 3px 0 0">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-12--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社dd<br>代表取締役 cc様</p>
                            </div>
                            <div class="col-xs-6" style="padding:0 0 0 3px">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-12--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社ee<br>代表取締役 dd様</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide visible-xs">
            <div class="container g-ver-center--xs">
                <div>
                    <div class="g-margin-b-30--xs">
                        <div class="row swiper-slide" style="margin:0">
                            <div class="col-xs-6" style="padding:0 3px 0 0">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-12--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社cc<br>代表取締役 ee様</p>
                            </div>
                            <div class="col-xs-6" style="padding:0 0 0 3px">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-12--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社ff<br>代表取締役 ff様</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- End SP Swiper Wrapper -->

    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->
</div>
<!-- End Voice -->

<!-- Blogs -->
<div class="container">
    <div class="g-text-center--xs g-margin-b-80--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md">Latest News</h2>
    </div>
    <div class="row">
        <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
            <!-- News -->
            <article>
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Image">
                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Create Something Great.</a></h3>
                    <p>The time has come to bring those ideas and plans to life.</p>
                </div>
            </article>
            <!-- End News -->
        </div>
        <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
            <!-- News -->
            <article>
                <img class="img-responsive" src="img/970x970/02.jpg" alt="Image">
                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Jacks of All. Experts in All.</a></h3>
                    <p>The time has come to bring those ideas and plans to life.</p>
                </div>
            </article>
            <!-- End News -->
        </div>
        <div class="col-sm-4">
            <!-- News -->
            <article>
                <img class="img-responsive" src="img/970x970/03.jpg" alt="Image">
                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="http://keenthemes.com/">Finding your Perfect Place.</a></h3>
                    <p>The time has come to bring those ideas and plans to life.</p>
                </div>
            </article>
            <!-- End News -->
        </div>
    </div>
</div>
<!-- End Blogs -->

<!-- Corporate -->　
<div id="corporate" class="g-promo-section g-padding-y-40--xs g-padding-y-60--sm">
    <div class="container">
        <div class="row">
            <div class="col-md-2 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Career</p>
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-50--md">About</h2>
                </div>
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-50--md">Diigence</h2>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <p class="g-font-size-18--xs">
                    ディージェンス合同会社は、Amazonの販売やコンサルティング、訪問医療事業を行っている会社です。<br>
「知性」を意味するintelligenceという語彙からつけた企業名に恥じぬよう、常に最先端の情報を仕入れて、事業運営をしてまいります。<br>
弊社に関わる方々が皆、幸せになるような企業を目指しています。<br>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 hidden-sm hidden-xs g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
        <img class="img-responsive" src="img/970x970/03.jpg" alt="Image">
    </div>
    <div class="container" style="margin-top:50px;">
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">商号</p>
                </div>
                <div class="col-xs-8">
                    <p>ディージェンス合同会社</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">設立</p>
                </div>
                <div class="col-xs-8">
                    <p>2021年9月30日</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">資本金</p>
                </div>
                <div class="col-xs-8">
                    <p>100万円</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">役員</p>
                </div>
                <div class="col-xs-8">
                    <p>佐藤大輔</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">事業内容</p>
                </div>
                <div class="col-xs-8">
                    <p>
                        Amazon販売<br>
                        Amazonコンサルティング<br>
                        訪問マッサージ事業<br>
                        高齢者向け食事宅配事業<br>
                    </p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">事業所</p>
                </div>
                <div class="col-xs-8">
                    <p><br>
                        〒981-1244<br>
                        宮城県名取市那智が丘1-16-1<br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Corporate -->

<!--========== FAQ ==========-->
<div id="faq" class="g-container--md g-padding-y-40--xs g-padding-y-60--sm">
    <div class="g-text-center--xs g-margin-b-40--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">FAQ</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-40--xs">よくあるご質問</h2>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-12 g-margin-b-30--xs g-margin-b-0--sm">
            <h5 class="g-color--primary">Q.見学はできますか？</h5>
            <p>
                A.はい、年に数回説明会がありますのでご見学いただけます。
            　（基本的には3月にまとめて見学を全国各地にて開催しております）
            </p>
            <h5 class="g-color--primary">Q.資料だけでも提供いただけますか？</h5>
            <p>A.説明会で配布しておりますのでご参照ください。</p>
            <h5 class="g-color--primary">Q.個別相談はありますか？</h5>
            <p>A.講師によってサポート週が決まっているのでご希望の講師の週にZOOM予約を入れることができます。個別相談という特別な枠は現在ございませんが、今後検討してまいります。</p>
        </div>
        <div class="col-sm-6 col-xs-12 g-margin-b-30--xs g-margin-b-0--sm">
            <h5 class="g-color--primary">Q.分割払いはありますか</h5>
            <p>A.ございます。お支払いに関しましては別途ご相談ください。</p>
            <h5 class="g-color--primary">Q.サポート期間はどのくらいですか？</h5>
            <p>A.基本的には一年間となってますが、ご希望の方に関しましては、無料延長サポートを受けている方もいらっしゃいます。</p>
            <h5 class="g-color--primary">Q.辞めたくなったときの返金はありますか？</h5>
            <p>A.諦めることはだめです。最後まで一緒に頑張りましょう。</p>
        </div>
    </div>
</div>          
<!-- FAQ -->

<!-- Contacts -->
<div id="contacts" class="g-bg-color--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">お問い合わせはこちら</h2>
        </div>
        <form action="actions/send_inquiry.php" method="post">
            <div class="row g-margin-b-40--xs">
                <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                    <div class="g-margin-b-20--xs">
                        <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Name" name="name">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email" name="email">
                    </div>
                    <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone" name="phone">
                </div>
                <div class="col-sm-6">
                    <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message" name="content"></textarea>
                </div>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- End Contacts -->

<!--========== Privacy Policy ==========-->
<div class="g-container--md g-padding-y-40--xs g-padding-y-60--sm">
    <div class="g-text-center--xs g-margin-b-80--xs">
        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Privacy Policy</p>
        <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs"><a href="privacy.php" target="_blank">プライバシーポリシーはこちら</a></h2>
    </div>
    <div class="g-margin-b-50--xs">
        <div class="row g-margin-b-50--xs">
        <div class="col-xs-12 g-margin-b-30--xs g-margin-b-0--sm">
            <h5 class="g-color--primary"></h5>
        </div>
        </div>
    </div>
</div>          
<!-- End Privacy Policy -->

<!-- Google Map -->
<section class="s-google-map">
    <div id="js__google-container" class="s-google-container g-height-400--xs">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3135.598479041915!2d140.8440394146863!3d38.195999895586745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a25d21b396fc5%3A0xf9d27726f4989ae3!2z44CSOTgxLTEyNDQg5a6u5Z-O55yM5ZCN5Y-W5biC6YKj5pm644GM5LiY77yR5LiB55uu77yR77yW4oiS77yR!5e0!3m2!1sja!2sjp!4v1631179552881!5m2!1sja!2sjp" 
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<!-- End Google Map -->

<!--========== END PAGE CONTENT ==========-->

<!-- footer -->
<?php include('components/footer.php') ?>