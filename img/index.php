
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
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h2 class="g-font-size-22--xs g-font-size-36--sm g-font-size-50--md g-color--white">Amazon物販、訪問介護業界の<br>ノウハウをコンサルサポート！</h2>
                </div>
                
            </div>
        </div>
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <div class="g-margin-b-30--xs">
                        <h2 class="g-font-size-22--xs g-font-size-36--sm g-font-size-46--md g-color--white">ディージェンス合同会社へ<br>ようこそ！<br><br> 販売・運営に関するサポートを<br>いたします。</h2>
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
        <h2 class="g-font-size-32--xs g-font-size-36--md">ディージェンス合同会社が提供するサポートビジネス</h2>
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
                    <p class="g-margin-b-0--xs">Amazonで商材を出品する方向けの講座の認定講師として活動中。</p>
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
                    <h3 class="g-font-size-18--xs">サプリメント通販 杜の都自然食品 運営責任者</h3>
                    <p class="g-margin-b-0--xs">女性向け・お子さま向け・男性向けの各種サプリメントの開発及び販売。<br>
                        開発は国内にて徹底して行なっているので品質には自信があります。</p>
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
                    <h3 class="g-font-size-18--xs">訪問マッサージ事業 ぐんま訪問リハビリセンター代表</h3>
                    <p class="g-margin-b-0--xs">シニア向けの訪問リハビリマッサージのマッチング事業を行なってます。<br>
群馬県だけではなく全国のマッサージ業者へのコンサルも賜ってます。</p>
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
                    <h3 class="g-font-size-18--xs"> 高齢者向け食事宅配事業 責任者</h3>
                    <p class="g-margin-b-0--xs">シニア専門の低カロリー食事（お弁当）の宅配事業。<br>
配食からお届け、安否確認も行うことにより地元密着型のサービスを提供</p>
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
                    <h3 class="g-font-size-18--xs">ああああああああああ</h3>
                    <p class="g-margin-b-0--xs">ああああああああああああああああああああ</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="clearfix">
                <div class="g-media g-width-30--xs">
                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                        <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                    </div>
                </div>
                <div class="g-media__body g-padding-x-20--xs">
                    <h3 class="g-font-size-18--xs">ああああああああああ</h3>
                    <p class="g-margin-b-0--xs">ああああああああああああああああああああ</p>
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
<div id="events" class="s-promo-block-v3 g-bg-position--center g-my-fullheight--md g-my-fullheight--lg" style="background: url('img/1920x1080/09.jpg') 50% 0 no-repeat fixed;background-color:rgba(255,255,255,0.5);background-blend-mode:lighten;">
    <div>
        <div style="padding-top:4em;">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--gray g-letter-spacing--2 g-text-center--xs">Events</p>
            <h2 class="g-font-size-30--xs g-font-size-25--sm g-font-size-50--lg g-color--gray g-text-center--xs">イベント</h2>
        </div>
        <div class="container-fluid">
            <div class="g-margin-b-30--xs">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 events-card">
                        <a href="">
                            <div class="row">
                                <div class="col-xs-7 col-sm-12">
                                    <img src="img/event_satoh.png" alt="画像" class="img-responsive g-padding-y-5--xs g-padding-y-20--lg g-padding-x-10--sm g-padding-x-20--lg" style="width:100%">
                                </div>
                                <div class="col-xs-5 col-sm-12 g-padding-y-0--md g-padding-y-20--xs g-padding-y-40--sm g-text-center--md">
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md ws-nw g-color--gray">2021年9月○日</p>
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md g-color--gray">佐藤大輔　初登壇</p>
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md g-color--gray">Amazonで確実に月利30万円を稼ぐ戦略</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-12 events-card">
                        <a href="">
                            <div class="row">
                                <div class="col-xs-7 col-sm-12">
                                    <img src="img/event_party.jpg" alt="画像" class="img-responsive g-padding-y-5--xs g-padding-y-20--lg g-padding-x-10--sm g-padding-x-20--lg" style="width:100%">
                                </div>
                                <div class="col-xs-5 col-sm-12 g-padding-y-0--md g-padding-y-20--xs g-padding-y-40--sm g-text-center--md">
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md ws-nw g-color--gray">2021年11月23日</p>
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md g-color--gray">佐藤大輔　バースデーパーティ</p>
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md g-color--gray">佐藤大輔と交流を持って明るい未来を切り開こう</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-12 events-card">
                        <a href="">
                            <div class="row">
                                <div class="col-xs-7 col-sm-12">
                                    <img src="img/event_meeting.jpg" alt="画像" class="img-responsive g-padding-y-5--xs g-padding-y-20--lg g-padding-x-10--sm g-padding-x-20--lg" style="width:100%">
                                </div>
                                <div class="col-xs-5 col-sm-12 g-padding-y-0--md g-padding-y-20--xs g-padding-y-40--sm g-text-center--md">
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md ws-nw g-color--gray">2021年12月24日</p>
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md g-color--gray">クリスマスイベント</p>
                                    <p class="g-font-size-16--xs g-font-size-22--sm g-font-size-20--md g-color--gray">来年の抱負を語り合い、自分を奮い立たせる会</p>
                                </div>
                            </div>
                        </a>
                    </div>
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
        <div class="g-my-fullheight--xs g-bg-position--center swiper-slide">
            <div class="container g-ver-center--xs">
                <div>
                    <div class="row swiper-slide" style="margin:0">
                        <div class="col-xs-6" style="padding:0 2px 0 0">
                            <img src="img/970x970/01.jpg" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p class="g-font-size-14--xs">
                                お客様の声お客様の声お客様の声お客様の声お客様の声お客様講座に入会するか最後まで迷っていたところ佐藤先生とお話しする機会がありとても誠実で真面目な方という印象を受けました。<br>
                                そこで「これが最後のチャンス」と思い、入会しましたが、思った通り佐藤先生は面倒見もよく、丁寧に指導してくださるので、大変感謝してます。<br>
                                今まで入ってきた講座の中で本当に利益が出た講座と思います。
                            </p>
                            <p class="g-text-right--xs g-font-size-14--xs">株式会社aa<br>代表取締役 aa様</p>
                        </div>
                        <div class="col-xs-6" style="padding:0 0 0 2px">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                            <p class="g-font-size-14--xs">
                                お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                            </p>
                            <p class="g-text-right--xs g-font-size-14--xs">株式会社bb<br>代表取締役 bb様</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="g-my-fullheight--xs g-bg-position--center swiper-slide">
            <div class="container g-ver-center--xs">
                <div>
                    <div class="g-margin-b-30--xs">
                        <div class="row swiper-slide" style="margin:0">
                            <div class="col-xs-6" style="padding:0 2px 0 0">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-14--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社dd<br>代表取締役 cc様</p>
                            </div>
                            <div class="col-xs-6" style="padding:0 0 0 2px">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-14--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社ee<br>代表取締役 dd様</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="g-my-fullheight--xs g-bg-position--center swiper-slide visible-xs">
            <div class="container g-ver-center--xs">
                <div>
                    <div class="g-margin-b-30--xs">
                        <div class="row swiper-slide" style="margin:0">
                            <div class="col-xs-6" style="padding:0 2px 0 0">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-14--xs">
                                    お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声
                                </p>
                                <p class="g-text-right--xs g-font-size-14--xs">株式会社cc<br>代表取締役 ee様</p>
                            </div>
                            <div class="col-xs-6" style="padding:0 0 0 2px">
                            <img src="img/no-img.png" alt="画像" class="img-responsive g-padding-y-5--xs" style="width:100%">
                                <p class="g-font-size-14--xs">
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
                    わたしの夢は日本中の方に裕福な生活をしてもらうことです。<br>
                    裕福と言っても、それは金銭面だけではなく、「やりがい」だったり「自分の居場所」、「大切な人を守ること」など、さまざまだと思ってます。<br>
                    人々がより良い生活を続けられるよう、明るくサポートしていきたいと心から思ってます。<br>
                    わたしは、人よりもちょっとだけ雑な面があったり、忘れっぽかったりすることもありますがそれも含めて、一緒に活動してくれる方々に感謝してます。
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
                    <p>商号商号商号（商号商号 Ltd.）</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">設立</p>
                </div>
                <div class="col-xs-8">
                    <p>○○年（平成○○年）○○月○○日</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">資本金</p>
                </div>
                <div class="col-xs-8">
                    <p>000,000,000,000円</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">役員</p>
                </div>
                <div class="col-xs-8">
                    <p>代表　○○ ○○</p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">事業内容</p>
                </div>
                <div class="col-xs-8">
                    <p>
                        事業１<br>
                        事業２<br>
                        事業３
                    </p>
                </div>
                <div class="col-xs-4">
                    <p class="g-color--primary g-margin-l-20--xs g-margin-l-60--sm g-margin-l-100--md">事業所</p>
                </div>
                <div class="col-xs-8">
                    <p>
                        【本店】<br>
                        〒０００－００００<br>
                        都道府県<br>
                        電話番号<br>
                        FAX<br>
                        アクセス
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
    <div class="col-xs-6 g-margin-b-30--xs g-margin-b-0--sm">
            <h5 class="g-color--primary">Q.見学はできますか？</h5>
            <p>
                A.はい、年に数回説明会がありますのでご見学いただけます。
            　（基本的には3月にまとめて見学を全国各地にて開催しております）
            </p>
            <h5 class="g-color--primary">Q.資料だけでも提供いただけますか？</h5>
            <p>A.説明会で配布しておりますのでご参照ください。</p>
            <h5 class="g-color--primary">Q.個別相談はありますか？</h5>
            <p>A.講師によってサポート週が決まっているのでご希望の講師の週にZOOM予約を入れることができます。 個別相談という特別な枠は現在ございませんが、今後検討してまいります。</p>
        </div>
        <div class="col-sm-6">
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
        <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs">プライバシーポリシー</h2>
    </div>
    <div class="g-margin-b-50--xs">
        <div class="row g-margin-b-50--xs">
        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--sm">
            <h5 class="g-color--primary">序文</h5>
            <p>Diigence（以下「当社」といいます。）は、お客様からの信頼を最優先とし、お客様個人に関わる情報を正確、かつ機密に取り扱うことは、当社にとって重要な責務であると考えております。そのために、お客様の個人情報に関する「個人情報保護方針」（プライバシーポリシー）を制定し、個人情報の取り扱い方法について、全社員及び関連会社への徹底を実践してまいります。その内容は以下の通りです。なお、既に当社で保有し利用させて頂いている個人情報につきましても、本方針に従ってお客様の個人情報の取り扱いを実施致します。</p>
            <h5 class="g-color--primary">個人情報（プライバシー）の取り扱いについて</h5>
            <p>（1）個人情報の取得<br>
                当社は個人情報を適法かつ公正な手段により収集致します。お客様に個人情報の提供をお願いする場合は、事前に収集の目的、利用の内容を開示した上で、当社の正当な事業の範囲内で、その目的の達成に必要な限度において、個人情報を収集致します。<br>
                <br>
                （2）個人情報の利用および共同利用<br>
                当社がお預かりした個人情報は、個人情報を頂いた方に承諾を得た範囲内で、また収集目的に沿った範囲内で利用致します。利用目的については、以下の「利用目的の範囲」の内、当社の正当な事業の範囲内でその目的の達成に必要な事項を利用目的と致します。<br>
                ●利用目的の範囲について<br>
                ・業務上のご連絡をする場合<br>
                ・当社が取り扱う商品及びサービスに関するご案内をする場合<br>
                ・お客様からのお問い合せまたはご依頼等への対応をさせて頂く場合<br>
                ・その他、お客様に事前にお知らせし、ご同意を頂いた目的の場合<br>
                ●上記目的以外の利用について<br>
                上記以外の目的で、お客様の個人情報を利用する必要が生じた場合には、法令により許される場合を除き、その利用について、お客様の同意を頂くものとします。
                <br>
                （3）個人情報の第三者提供<br>
                当社は、お客様の同意なしに第三者へお客様の個人情報の提供は行いません。但し個人情報に適用される法律その他の規範により、当社が従うべき法令上の義務等の特別な事情がある場合は、この限りではありません。<br>
                <br>
                （4）個人情報の開示・修正等の手続<br>
                お客様からご提供頂いた個人情報に関して、照会、訂正、削除を要望される場合は、お問い合わせフォームまでご連絡・ご請求ください。当該ご請求が当社の業務に著しい支障をきたす場合等を除き、お客様ご本人によるものであることが確認できた場合に限り、合理的な期間内に、お客様の個人情報を開示、訂正、削除致します。<br>
                <br>
                （5）個人情報の開示等に要する手数料<br>
                開示請求者（お客様ご本人と認められる方）に対し開示等に要する手数料のご負担をお願いする場合がありますが、その場合はあらかじめその旨を明らかにしご負担頂くことと致します。<br>
                個人情報の保護に関する法令・規範の遵守について<br>
                当社は、当社が保有する個人情報に関して適用される個人情報保護関連法令及び規範を遵守します。また本方針は、日本国の法律、その他規範により判断致します。本方針は当社の個人情報の取り扱いに関しての基本的な方針を定めるものであり当社は本方針に則って個人情報保護法等の法令・規範に基づく個人情報の保護に努めます。<br>
                個人情報（プライバシー）の安全管理措置について<br>
                当社は、個人情報への不正アクセス、個人情報の紛失、破壊、改ざん、漏えい等から保護し、正確性及び安全性を確保するために管理体制を整備し、適切な安全対策を実施致します。個人情報を取り扱う事務所内への部外者の立ち入りを制限し、当社の個人情報保護に関わる役員・社員等全員に対し教育啓発活動を実施するほか管理責任者を置き個人情報の適切な管理に努めます。<br>
                継続的な改善について<br>
                当社は、個人情報保護への取組みについて、日本国の従うべき法令の変更、取り扱い方法、環境の変化に対応するため、継続的に見直し改善を実施致します。<br>
                お問い合わせ<br>
                個人情報の取り扱いに関するお問い合わせは、下記にて受け付けております。</p>
                                <p>ディージェンス合同会社-Diigence-<br>
                〒372-0022 群馬県伊勢崎市日之出町492−5<br>
                Mail:info@diigence.com
            </p>
        </div>
        <div class="col-sm-6">
          
        </div>
        </div>
    </div>
</div>          
<!-- End Privacy Policy -->

<!-- Google Map -->
<section class="s-google-map">
    <div id="js__google-container" class="s-google-container g-height-400--xs">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.754672908764!2d139.22642101462526!3d36.31825560238031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ee645d6f6b1d1%3A0xef43107a7ac11217!2z44CSMzcyLTAwMjIg576k6aas55yM5LyK5Yui5bSO5biC5pel5LmD5Ye655S677yU77yZ77yS4oiS77yV!5e0!3m2!1sja!2sjp!4v1629376157330!5m2!1sja!2sjp" 
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<!-- End Google Map -->

<!--========== END PAGE CONTENT ==========-->

<!-- footer -->
<?php include('components/footer.php') ?>