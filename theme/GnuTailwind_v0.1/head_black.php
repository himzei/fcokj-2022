<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <div id="hd_wrapper">

		<?php
		/*
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <div class="hd_sch_wr">
            <fieldset id="hd_sch">
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <label for="sch_stx" class="sound_only">검색어 필수</label>
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>

            </fieldset>

            <?php echo popular('theme/basic'); // 인기검색어, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?>
        </div>
        <ul class="hd_login">
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>

        </ul>
    </div>
    */
    ?>

	<section id="topbar" class="bg-indigo-500 text-white py-2">
		<div class="container mx-auto flex justify-between px-4">
			<div class="hidden md:block">
				<i class="bi bi-envelope inline-flex items-center"><a href="mailto:contact@example.com"><span class="pl-1">contact@example.com</span></a></i>
				<i class="bi bi-phone inline-flex items-center ml-4"><span> +1 5589 55488 55</span></i>
			</div>
			<div class="w-full md:w-1/2 flex justify-end items-center">
				<?php if ($is_member) {  ?>
		            <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" class="pl-4">정보수정</a>
		            <a href="<?php echo G5_BBS_URL ?>/logout.php" class="pl-4">로그아웃</a>
		            <?php if ($is_admin) {  ?>
		            <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" class="pl-4">관리자</a>
		            <?php }  ?>
				<?php } else {  ?>
		            <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
		            <a href="<?php echo G5_BBS_URL ?>/login.php" class="pl-4">로그인</a>
	            <?php }  ?>
			</div>
		</div>
	</section>

	<div class="w-full text-yellow-400 bg-black fixed z-10">
		<div x-data="{ open: false }" class="flex flex-col max-w-screen-2xl px-4 mx-auto md:items-center md:justify-between lg:flex-row md:px-6 lg:px-8">

			<div class="flex flex-row items-center justify-between p-2 md:p-3">
				<a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg  focus:outline-none focus:shadow-outline"><img class="w-12 h-12 md:w-16 md:h-16 lg:h-20 lg:w-20" src="./images/logo.png" alt="" />
				</a>
				<button class="sm:hidden bg-yellow-400 text-black shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
					<a href="tel:+919446615488">
						<i class="flex fa fa-phone" aria-hidden="true"></i>
					</a>
				</button>
				<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
					<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
						<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
						<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>

			<nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
				<h2>메인메뉴</h2>
				<a class="px-2 py-2 mt-2 text-sm font-semibold font-san text-yellow-400  rounded-md      md:mt-0 focus:text-gray-900 focus:bg-yellow-400 focus:outline-none focus:shadow-outline" href="<?php echo G5_URL ?>">
					Home
				</a>

                <?php
                $sql = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '2'
                            order by me_order, me_id ";
                $result = sql_query($sql, false);
                $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $menu_datas = array();

                for ($i=0; $row=sql_fetch_array($result); $i++) {
                    $menu_datas[$i] = $row;

                    $sql2 = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '4'
                                  and substring(me_code, 1, 2) = '{$row['me_code']}'
                                order by me_order, me_id ";
                    $result2 = sql_query($sql2);
                    for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                        $menu_datas[$i]['sub'][$k] = $row2;
                    }

                }

                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    	if (empty($menu_datas[$i]['sub']['0'])) {
                ?>
                    <a class="px-2 py-2 text-sm font-semibold font-san text-yellow-400  rounded-md"  href="<?php echo $row['me_link']; ?>"><?php echo $row['me_name'] ?></a>
                    <?php
	                    }
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue;

                        if($k == 0) { ?>
                        		<div @click.away="open = false" class="relative" x-data="{ open: false }">
								<button @click="open = !open" class="inline flex flex-row items-center w-full px-2 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 hover:text-yellow-200 focus:text-gray-900 focus:bg-yellow-400 focus:outline-none focus:shadow-outline">
									<span class="px-2 py-2 text-sm font-semibold font-san text-yellow-400  rounded-md"><?php echo $row['me_name'] ?></span>
									<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-200 transform md:-mt-1">
										<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
										</path>
									</svg>
								</button>
								<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right z-30">
									<div class="px-2 pt-2 pb-4 bg-black rounded-md shadow-lg">
										<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php } ?>
	                    <a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>">
							<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
								<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
							</div>
							<div class="ml-3">
								<p class="font-semibold"><?php echo $row2['me_name'] ?></p>
							</div>
						</a>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</div></div></div></div>'.PHP_EOL;
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <div class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></div>

                <?php } else { ?>
	                <div @click.away="open = false" class="relative" x-data="{ open: false }">
						<button @click="open = !open" class="inline flex flex-row items-center w-full px-2 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 hover:text-yellow-200 focus:text-gray-900 focus:bg-yellow-400 focus:outline-none focus:shadow-outline">
							<span class="px-2 py-2 mt-2 text-sm font-semibold font-san text-yellow-400  rounded-md">기본 메뉴</span>
							<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-200 transform md:-mt-1">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
								</path>
							</svg>
						</button>
						<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right z-30">
							<div class="px-2 pt-2 pb-4 bg-black rounded-md shadow-lg">
								<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
									<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/faq.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">FAQ</p>
										</div>
									</a>
									<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/qalist.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">Q&A</p>
										</div>
									</a>
									<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/new.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">새글</p>
										</div>
									</a>
									<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/current_connect.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">접속자<strong class="visit-num"><?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?></strong></p>
										</div>
									</a>
									<?php if ($is_member) {  ?>
										<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" target="_<?php echo $row2['me_target']; ?>">
											<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
												<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
											</div>
											<div class="ml-3">
												<p class="font-semibold">정보수정</p>
											</div>
										</a>
										<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/logout.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">로그아웃</p>
										</div>
									</a>
									<?php if ($is_admin) {  ?>
										<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" target="_<?php echo $row2['me_target']; ?>">
											<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
												<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
											</div>
											<div class="ml-3">
												<p class="font-semibold">관리자</p>
											</div>
										</a>
									<?php }  ?>
								<?php } else {  ?>
									<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/register.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">회원가입</p>
										</div>
									</a>
									<a class="flex row items-start rounded-lg bg-transparent p-2 text:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo G5_BBS_URL ?>/login.php" target="_<?php echo $row2['me_target']; ?>">
										<div class="bg-teal-500 hover:text-gray-500 rounded-lg p-3">
											<i class="fa fa-rocket fa-2x" aria-hidden="true"></i>
										</div>
										<div class="ml-3">
											<p class="font-semibold">로그인</p>
										</div>
									</a>
								<?php }  ?>
							<?php } ?>
									<?php
									/*
									<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a>
									<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/qalist.php">Q&A</a>
									<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/new.php">새글</a>
									<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/current_connect.php" class="visit">접속자<strong class="visit-num"><?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?></strong></a>
									<?php if ($is_member) {  ?>
										<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
										<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
										<?php if ($is_admin) {  ?>
											<a class="dropdown-item" href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a>
										<?php }  ?>
									<?php } else {  ?>
										<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
										<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/login.php">로그인</a>
									<?php }  ?>
									*/
									?>

                			</div>
						</div>
					</div>

			</nav>
			</div>
			</div>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">

    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }