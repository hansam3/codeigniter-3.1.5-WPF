<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--
<?php if ($this->cbconfig->get_device_view_type() === 'desktop' && $this->cbconfig->get_device_type() === 'mobile') { ?>
<meta name="viewport" content="width=1000">
<?php } else { ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php } ?>
-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo html_escape(element('page_title', $layout)); ?></title>
<?php if (element('meta_description', $layout)) { ?><meta name="description" content="<?php echo html_escape(element('meta_description', $layout)); ?>"><?php } ?>
<?php if (element('meta_keywords', $layout)) { ?><meta name="keywords" content="<?php echo html_escape(element('meta_keywords', $layout)); ?>"><?php } ?>
<?php if (element('meta_author', $layout)) { ?><meta name="author" content="<?php echo html_escape(element('meta_author', $layout)); ?>"><?php } ?>
<?php if (element('favicon', $layout)) { ?><link rel="shortcut icon" type="image/x-icon" href="<?php echo element('favicon', $layout); ?>" /><?php } ?>
<?php if (element('canonical', $view)) { ?><link rel="canonical" href="<?php echo element('canonical', $view); ?>" /><?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo element('layout_skin_url', $layout); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/ui-lightness/jquery-ui.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>" media="all" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jssor.slider-28.0.0.min.js') ?>"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/cheongsim.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.tmpl.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexnav.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/design.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/lnb.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.numeric.js') ?>"></script>
<script type="text/javascript">
// 자바스크립트에서 사용하는 전역변수 선언
var cb_url = "<?php echo trim(site_url(), '/'); ?>";
var cb_cookie_domain = "<?php echo config_item('cookie_domain'); ?>";
var cb_charset = "<?php echo config_item('charset'); ?>";
var cb_time_ymd = "<?php echo cdate('Y-m-d'); ?>";
var cb_time_ymdhis = "<?php echo cdate('Y-m-d H:i:s'); ?>";
var layout_skin_path = "<?php echo element('layout_skin_path', $layout); ?>";
var view_skin_path = "<?php echo element('view_skin_path', $layout); ?>";
var is_member = "<?php echo $this->member->is_member() ? '1' : ''; ?>";
var is_admin = "<?php echo $this->member->is_admin(); ?>";
var cb_admin_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_admin') . '"' : '""'; ?>;
var cb_board = "<?php echo isset($view) ? element('board_key', $view) : ''; ?>";
var cb_board_url = <?php echo ( isset($view) && element('board_key', $view)) ? 'cb_url + "/' . config_item('uri_segment_board') . '/' . element('board_key', $view) . '"' : '""'; ?>;
var cb_device_type = "<?php echo $this->cbconfig->get_device_type() === 'mobile' ? 'mobile' : 'desktop' ?>";
var cb_csrf_hash = "<?php echo $this->security->get_csrf_hash(); ?>";
var cookie_prefix = "<?php echo config_item('cookie_prefix'); ?>";
</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>

<!-- CSS
================================================== -->       
<!-- Font awesome css file-->
<link href="<?php echo base_url('assets/css/template/font-awesome.min.css');?>" rel="stylesheet">
<!-- Superslide css file-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/template/superslides.css');?>">
<!-- Slick slider css file -->
<link href="<?php echo base_url('assets/css/template/slick.css');?>" rel="stylesheet"> 
<!-- Circle counter cdn css file -->
<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
<!-- smooth animate css file -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/template/animate.css');?>"> 
<!-- preloader -->
<!-- <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />-->
<!-- gallery slider css -->
<link type="text/css" media="all" rel="stylesheet" href="<?php echo base_url('assets/css/template/jquery.tosrus.all.css');?>" />    
<!-- Default Theme css file -->
<link id="switcher" href="<?php echo base_url('assets/css/template/default-theme.css');?>" rel="stylesheet">
<!-- Main structure css file -->
<link href="<?php echo base_url('assets/css/template/style.css');?>" rel="stylesheet">

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    



</head>
<body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
    <div class="container">
        <ul class="header-top-menu">
            <?php if ($this->member->is_admin() === 'super') { ?>
                <li><i class="fa fa-cog"></i><a href="<?php echo site_url(config_item('uri_segment_admin')); ?>" title="관리자 페이지로 이동">관리자</a></li>
            <?php } ?>
            <?php
            if ($this->member->is_member()) {
                if ($this->cbconfig->item('use_notification')) {
            ?>
                <script type="text/javascript">
                //<![CDATA[
                $(document).mouseup(function (e)
                {
                    var noticontainer = $('.notifications-menu');

                    if ( ! noticontainer.is(e.target) // if the target of the click isn't the container...
                        && noticontainer.has(e.target).length === 0) // ... nor a descendant of the container
                    {
                        noticontainer.hide();
                    }
                });
                //]]>
                </script>
            <?php
                }
            ?>
                <li><i class="fa fa-sign-out"></i><a href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>" title="로그아웃">로그아웃</a></li>
                <li><i class="fa fa-user"></i><a href="<?php echo site_url('mypage'); ?>" title="마이페이지">마이페이지</a></li>
            <?php } else { ?>
                <li><i class="fa fa-sign-in"></i><a href="<?php echo site_url('login?url=' . urlencode(current_full_url())); ?>" title="로그인">로그인</a></li>
                <li><i class="fa fa-user"></i><a href="<?php echo site_url('register'); ?>" title="회원가입">회원가입</a></li>
            <?php } ?>
        </ul>
    </div>
    </header>
    <!--=========== END HEADER SECTION ================--> 


      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="<?php echo base_url(); ?>">선학UP대학원대학교 <span>한국어교육원</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="course-archive.html">한국어교육원소개</a></li>
                <li><a href="scholarship.html">입학안내</a></li>
                <li><a href="events-archive.html">학사안내</a></li>
                <li><a href="gallery.html">열린한국어교육원</a></li>                
                <!--<li><a href="blog-archive.html">blog</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">커뮤니티<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>
                </li>               
                <li><a href="contact.html">Contact</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    
    <!-- main start -->
    <!-- 본문 시작 -->
    <?php if (isset($yield))echo $yield; ?>
    <!-- 본문 끝 -->
    <!-- main end -->

    <!-- footer start -->
    <footer>
        <div class="container">
            <div>
                <ul class="company">
                    <li><a href="<?php echo document_url('aboutus'); ?>" title="회사소개">회사소개</a></li>
                    <li><a href="<?php echo document_url('provision'); ?>" title="이용약관">이용약관</a></li>
                    <li><a href="<?php echo document_url('privacy'); ?>" title="개인정보 취급방침">개인정보 취급방침</a></li>
                    <li><a href="<?php echo site_url('pointranking'); ?>" title="포인트 전체랭킹">포인트 전체랭킹</a></li>
                    <li><a href="<?php echo site_url('pointranking/month'); ?>" title="포인트 월별랭킹">포인트 월별랭킹</a></li>
                    <li><a href="<?php echo site_url('levelup'); ?>" title="레벨업">레벨업</a></li>
                </ul>
            </div>
            <div class="copyright">
                <?php if ($this->cbconfig->item('company_address')) { ?>
                    <span><?php echo $this->cbconfig->item('company_address'); ?>
                        <?php if ($this->cbconfig->item('company_zipcode')) { ?>(우편 <?php echo $this->cbconfig->item('company_zipcode'); ?>)<?php } ?>
                    </span>
                <?php } ?>
                <?php if ($this->cbconfig->item('company_owner')) { ?><span><b>대표</b> <?php echo $this->cbconfig->item('company_owner'); ?></span><?php } ?>
                <?php if ($this->cbconfig->item('company_phone')) { ?><span><b>전화</b> <?php echo $this->cbconfig->item('company_phone'); ?></span><?php } ?>
                <?php if ($this->cbconfig->item('company_fax')) { ?><span><b>팩스</b> <?php echo $this->cbconfig->item('company_fax'); ?></span><?php } ?>
            </div>
            <div class="copyright">
                <?php if ($this->cbconfig->item('company_reg_no')) { ?><span><b>사업자</b> <?php echo $this->cbconfig->item('company_reg_no'); ?></span><?php } ?>
                <?php if ($this->cbconfig->item('company_retail_sale_no')) { ?><span><b>통신판매</b> <?php echo $this->cbconfig->item('company_retail_sale_no'); ?></span><?php } ?>
                <?php if ($this->cbconfig->item('company_added_sale_no')) { ?><span><b>부가통신</b> <?php echo $this->cbconfig->item('company_added_sale_no'); ?></span><?php } ?>
                <?php if ($this->cbconfig->item('company_admin_name')) { ?><span><b>정보관리책임자명</b> <?php echo $this->cbconfig->item('company_admin_name'); ?></span><?php } ?>
                <span>Copyright&copy; <?php echo $this->cbconfig->item('site_title'); ?>. All Rights Reserved.</span>
            </div>
            <?php
            if ($this->cbconfig->get_device_view_type() === 'mobile') {
            ?>
                <div class="see_mobile"><a href="<?php echo current_full_url(); ?>" class="btn btn-primary btn-xs viewpcversion">PC 버전으로 보기</a></div>
            <?php
            } else {
                if ($this->cbconfig->get_device_type() === 'mobile') {
            ?>
                <div class="see_mobile"><a href="<?php echo current_full_url(); ?>" class="btn btn-primary btn-lg viewmobileversion" style="width:100%;font-size:5em;">모바일 버전으로 보기</a></div>
            <?php
                } else {
            ?>
                <div class="see_mobile"><a href="<?php echo current_full_url(); ?>" class="btn btn-primary btn-xs viewmobileversion">모바일 버전으로 보기</a></div>
            <?php
                }
            }
            ?>
        </div>
    </footer>
    <!-- footer end -->

<?php if ($this->cbconfig->get_device_view_type() === 'mobile') {?>
<div id="side_menu">
    <div class="side_wr add_side_wr">
        <div id="isroll_wrap" class="side_inner_rel">
            <div class="side_inner_abs">
                <div class="m_search">
                    <form name="mobile_header_search" id="mobile_header_search" action="<?php echo site_url('search'); ?>" onSubmit="return headerSearch(this);">
                        <input type="text" placeholder="Search" class="form-control per80" name="skeyword" accesskey="s" />
                    </form>
                </div>
                <div class="m_login">
                    <?php if ($this->member->is_member()) { ?>
                        <span><a href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>" class="btn btn-primary btn-xs" title="로그아웃"> <i class="fa fa-sign-out"></i> 로그아웃 </a></span>
                        <span><a href="<?php echo site_url('mypage'); ?>" class="btn btn-primary btn-xs" title="마이페이지"> <i class="fa fa-user"></i> 마이페이지 </a></span>
                    <?php } else { ?>
                        <span><a href="<?php echo site_url('login?url=' . urlencode(current_full_url())); ?>" class="btn btn-primary btn-xs" title="로그인"> <i class="fa fa-sign-in"></i> 로그인 </a></span>
                        <span><a href="<?php echo site_url('register'); ?>" class="btn btn-primary btn-xs" title="회원가입"> <i class="fa fa-user"></i> 회원가입 </a></span>
                    <?php } ?>
                </div>
                <ul class="m_board">
                    <?php if ($this->cbconfig->item('open_currentvisitor')) { ?>
                        <li><a href="<?php echo site_url('currentvisitor'); ?>" title="현재 접속자"><span class="fa fa-link"></span> 현재 접속자</a></li>
                    <?php } ?>
                    <?php if ($this->member->is_member()) { ?>
                        <li><a href="<?php echo site_url('notification'); ?>" title="나의 알림"><span class="fa fa-bell-o"></span>알림 : <?php echo number_format(element('notification_num', $layout) + 0); ?> 개</a></li>
                        <?php if ($this->cbconfig->item('use_note') && $this->member->item('mem_use_note')) { ?>
                            <li><a href="javascript:;" onClick="note_list();" title="나의 쪽지"><span class="fa fa-envelope"></span> 쪽지 : <?php echo number_format($this->member->item('meta_unread_note_num') + 0); ?> 개</a></li>
                        <?php } ?>
                        <?php if ($this->cbconfig->item('use_point')) { ?>
                            <li><a href="<?php echo site_url('mypage/point'); ?>" title="나의 포인트"><span class="fa fa-gift"></span> 포인트 : <?php echo number_format($this->member->item('mem_point') + 0); ?> 점</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <ul class="m_menu">
                    <?php
                    $menuhtml = '';
                    if (element('menu', $layout)) {
                        $menu = element('menu', $layout);
                        if (element(0, $menu)) {
                            foreach (element(0, $menu) as $mkey => $mval) {
                                if (element(element('men_id', $mval), $menu)) {
                                    $menuhtml .= '<li class="dropdown">
                                    <a href="' . element('men_link', $mval) . '" ' . element('men_custom', $mval);
                                    if (element('men_target', $mval)) {
                                        $menuhtml .= ' target="' . element('men_target', $mval) . '"';
                                    }
                                    $menuhtml .= ' class="text_link" title="' . html_escape(element('men_name', $mval)) . '">' . html_escape(element('men_name', $mval)) . '</a><a href="#" style="width:25px;float:right;" class="subopen" data-menu-order="' . $mkey . '"><i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-custom-menu drop-downorder-' . $mkey . '">';

                                    foreach (element(element('men_id', $mval), $menu) as $skey => $sval) {
                                        $menuhtml .= '<li><a href="' . element('men_link', $sval) . '" ' . element('men_custom', $sval);
                                        if (element('men_target', $sval)) {
                                            $menuhtml .= ' target="' . element('men_target', $sval) . '"';
                                        }
                                        $menuhtml .= ' title="' . html_escape(element('men_name', $sval)) . '">' . html_escape(element('men_name', $sval)) . '</a></li>';
                                    }
                                    $menuhtml .= '</ul></li>';

                                } else {
                                    $menuhtml .= '<li><a class="text_link" href="' . element('men_link', $mval) . '" ' . element('men_custom', $mval);
                                    if (element('men_target', $mval)) {
                                        $menuhtml .= ' target="' . element('men_target', $mval) . '"';
                                    }
                                    $menuhtml .= ' title="' . html_escape(element('men_name', $mval)) . '">' . html_escape(element('men_name', $mval)) . '</a></li>';
                                }
                            }
                        }
                    }
                    echo $menuhtml;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.hoverIntent.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ba-outside-events.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/iscroll.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/mobile.sidemenu.js'); ?>"></script>

<?php } ?>


<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Preloader js file -->
<script src="<?php echo base_url('assets/js/template/queryloader2.min.js');?>" type="text/javascript"></script>
<!-- For smooth animatin  -->
<script src="<?php echo base_url('assets/js/template/wow.min.js');?>"></script>  
<!-- Bootstrap js -->
<script src="<?php echo base_url('assets/js/template/bootstrap.min.js');?>"></script>
<!-- slick slider -->
<script src="<?php echo base_url('assets/js/template/slick.min.js');?>"></script>
<!-- superslides slider -->
<script src="<?php echo base_url('assets/js/template/jquery.easing.1.3.js');?>"></script>
<script src="<?php echo base_url('assets/js/template/jquery.animate-enhanced.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/template/jquery.superslides.min.js');?>" type="text/javascript" charset="utf-8"></script>   
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('assets/js/template/jquery.tosrus.min.all.js');?>"></script>   

<!-- Custom js-->
<script src="<?php echo base_url('assets/js/template/custom.js');?>"></script>


<link href="<?php echo base_url('assets/css/gallery/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/template/gallery.js');?>"></script>

<!--=============================================== 
Template Design By WpFreeware Team.
Author URI : http://www.wpfreeware.com/
====================================================-->


<script type="text/javascript">
$(document).on('click', '.viewpcversion', function(){
    Cookies.set('device_view_type', 'desktop', { expires: 1 });
});
$(document).on('click', '.viewmobileversion', function(){
    Cookies.set('device_view_type', 'mobile', { expires: 1 });
});
</script>
<?php echo element('popup', $layout); ?>
<?php echo $this->cbconfig->item('footer_script'); ?>
<!--
Layout Directory : <?php echo element('layout_skin_path', $layout); ?>,
Layout URL : <?php echo element('layout_skin_url', $layout); ?>,
Skin Directory : <?php echo element('view_skin_path', $layout); ?>,
Skin URL : <?php echo element('view_skin_url', $layout); ?>,
-->
</body>
</html>
