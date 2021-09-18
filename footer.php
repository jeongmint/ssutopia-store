</div><!--/.main-inner-->
			</div><!--/.main-->	
	
			<div class="clear"></div>
	
		</div><!--/.wrap-content-inner-->
	</div><!--/.wrap-content-->	
	
	<footer id="footer">
	
		<?php if ( get_theme_mod( 'footer-ads', 'off' ) == 'on' ): ?>
		<div id="footer-ads">
			<?php dynamic_sidebar( 'footer-ads' ); ?>
		</div><!--/#footer-ads-->
		<?php endif; ?>
			
		<?php // footer widgets
			$total = 4;
			if ( get_theme_mod( 'footer-widgets','0' ) != '' ) {
				
				$total = get_theme_mod( 'footer-widgets' );
				if( $total == 1) $class = 'one-full';
				if( $total == 2) $class = 'one-half';
				if( $total == 3) $class = 'one-third';
				if( $total == 4) $class = 'one-fourth';
				}

				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
		{ ?>		
		<div id="footer-widgets">
				
			<div class="pad group">
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
					<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
				
				<div class="footer-widget-<?php echo esc_attr( $i ); ?> grid <?php echo esc_attr( $class ); ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
					<?php dynamic_sidebar( 'footer-' . $i ); ?>
				</div>
				
					<?php } ?>
				<?php } ?>
			</div><!--/.pad-->

		</div><!--/#footer-widgets-->	
		<?php } ?>
		
		<div id="footer-bottom">
			
			<a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
				
			<div class="pad group">
				
				<div class="grid one-full">
					
					<?php if ( get_theme_mod('footer-logo') ): ?>
						<img id="footer-logo" src="<?php echo esc_url( get_theme_mod('footer-logo') ); ?>" alt="<?php echo esc_attr( get_bloginfo('name')); ?>">
					<?php endif; ?>
					
					<div id="copyright">
						<?php if ( get_theme_mod( 'copyright' ) ): ?>
							<p><?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>
						<?php else: ?>
							<p><?php bloginfo(); ?> &copy; <?php echo esc_html( date_i18n( esc_html__( 'Y', 'instorm' ) ) ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'instorm' ); ?></p>
						<?php endif; ?>
					</div><!--/#copyright-->
					
					<?php if ( get_theme_mod( 'credit', 'on' ) == 'on' ): ?>
					<div id="credit">
						<p> 슈니버스 | 서울특별시 동작구 상도로55길 8, 2층 공용창업공간(상도동, 챌린지스테이션)<br>
							대표👩🏻‍💼  최정민<br>
							사업자등록번호 : 435-73-00312 <a href="http://www.ftc.go.kr/bizCommPop.do?wrkr_no=4357300312" target="_blank">🔍 </a>
							| 통신판매업신고번호 : 2021-서울동작-1371<br><br>
						</p>
						<p>
							<!-- 이니시스 인증마크 적용 시작 -->
						<img src='https://image.inicis.com/mkt/certmark/inipay/inipay_43x43_color.png' border='0' alt='클릭하시면 이니시스 결제시스템의 유효성을 확인하실 수 있습니다.' style='cursor:pointer' Onclick=javascript:window.open('https://mark.inicis.com/mark/popup_v3.php?mid=CIGssunivs','mark','scrollbars=no,resizable=no,width=565,height=683');>
							<!-- 이니시스 인증마크 적용 종료 -->
							
							<!-- KB에스크로 이체 인증마크 적용 시작 -->
								<a href="https://okbfex.kbstar.com/quics?page=C021590&cc=b034066%3Ab035526&mHValue=8994de4139f9babe938e12c5ed93f12e#AutoLogOut" 									target="_blank">
								<img src="http://img1.kbstar.com/img/escrow/escrowcmark.gif" border="0" width="43" height="43" alt='클릭하시면 kb에스크로 판매자 확인정보를 조회하실 수 있습니다.' />
								</a>
							<!-- KB에스크로이체 인증마크 적용 종료 -->
						</p>
						<p>
							<br>
							<a href="https://pf.kakao.com/_JNgis">🗳️ 카카오톡 채널 고객센터</a> | 
							<a href="mailto:chef@ssunivs.com?cc=snvs.official@gmail.com">Contact Us 📧</a> | 
							<a href="https://ssuniverse.notion.site/Hello-SSUNIVERSE-7373f0cd163d4d2ca0b1574389441727">Notion <img src="https://raw.githubusercontent.com/ssunivs/ssutopia-store/main/img/flower-blue.png" border="0" width="18" height="18" alt='Team Notion' /></a>
							<br><br>
						</p>
						<p>
							<a href="https://www.ssunivs.com/개인정보-보호정책"> [개인정보 보호정책] | </a>
							<a href="https://www.ssunivs.com/서비스-이용약관"> [서비스 이용약관] </a> <br><br>
						</p>
						<p>© 슈니버스 Co. All Rights Reserved. </p>
					</div><!--/#credit-->
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'footer-social', 'on' ) == 'on' ): ?>
						<?php instorm_social_links() ; ?>
					<?php endif; ?>
					
				</div>
							
			</div><!--/.pad-->

		</div><!--/#footer-bottom-->

	</footer><!--/#footer-->
	
</div><!--/#wrapper-->

<?php wp_footer(); ?>
</body>
</html>