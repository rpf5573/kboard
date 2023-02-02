<style>
.document_top_area { display: inline-block; margin-bottom:35px; width:100%; }
.document_top_area .document_top_left { width: 19%; float: left; margin-right:1%;}
.document_top_area .document_top_left .portrait { width: 180px; height: 180px; background-image: url(<?php echo $content->attach->{'portrait'}[0]; ?>) !important; background-position: center top !important; background-repeat: no-repeat !important; background-size: cover !important; background-blend-mode: multiply;}
.document_top_area .document_top_left img { max-width: 180px; width:100%; border: 2px solid #888; }
.document_top_area .document_top_right { width: 80%; float: right;  }
.document_top_area .document_top_right .info_1line { border-bottom: 2px solid #777; margin-bottom:5px; padding-bottom: 10px;}
.document_top_area .document_top_right .info_1line .info_item span.title { font-size: 2rem; font-weight: 700; }
.document_top_area .document_top_right .info_1line .info_item span { font-size: 1.2rem; font-weight: 300; }
.document_top_area .document_top_right .info_1line .info_item .name_br { display:none;}
.document_top_area .document_top_right .info_2line .info_item { width:24.5%; display: inline-block;  border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px; }
.document_top_area .document_top_right .info_2line .info_item span.item_name { display: inline-block; font-size: 1rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 5px; }
.document_top_area .document_top_right .info_2line .info_item span.value { display: inline-block; font-size: 1.25rem; font-weight: 700; width:100%; color:#222; margin-bottom: 10px; }
.document_top_area .document_top_right .info_2line .info_item.last_item { width:74.5%; display: inline-block;  border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px; }
.document_info_area { display: inline-block; margin-bottom:35px; width:100%; }
.document_info_area .info_1line { border-bottom: 2px solid #777; margin-bottom:5px; padding-bottom: 10px;}
.document_info_area .info_1line .info_item span.title { font-size: 1.5rem; font-weight: 700; }
.document_info_area .info_2line .info_item { width:19.5%; display: inline-block; border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px;}
.document_info_area .info_2line .info_item span.item_name { display: inline-block; font-size: 1rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 5px; }
.document_info_area .info_2line .info_item span.value { display: inline-block; font-size: 1.25rem; font-weight: 700; width:100%; color:#222; margin-bottom: 10px; }
.document_info_area .info_2line .info_item.last_item { width:59.5%; display: inline-block; }
.document_info2_area { display: inline-block; margin-bottom:35px; width:100%; }
.document_info2_area .info_1line { border-bottom: 2px solid #777; margin-bottom:5px; padding-bottom: 10px;}
.document_info2_area .info_1line .info_item span.title { font-size: 1.5rem; font-weight: 700; }
.document_info2_area .info_2line .info_item { width:100%; display: inline-block;  border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px; }
.document_info2_area .info_2line .info_item span.item_name { display: inline-block; font-size: 1rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 5px; }
.document_info2_area .info_2line .info_item span.value { display: inline-block; font-size: 1.25rem; font-weight: 700; width:100%; color:#222; margin-bottom: 10px; }
.mobile_off { display:inline!important; }
.mobile_on { display:none!important; }

@media screen and (max-width: 600px) {
.document_top_area { display: inline-block; margin-bottom:35px; width:100%; }
.document_top_area .document_top_left { width: 34%; float: left; }
.document_top_area .document_top_left .portrait { width: 100%; height: 180px; background-image: url(<?php echo $content->attach->{'portrait'}[0]; ?>) !important; background-position: center top !important; background-repeat: no-repeat !important; background-size: cover !important; background-blend-mode: multiply;}
.document_top_area .document_top_left img { max-width: 180px; width:100%; border: 2px solid #888; }
.document_top_area .document_top_right { width: 64%; float: right;  }
.document_top_area .document_top_right .info_1line { border-bottom: 2px solid #777; margin-bottom:5px; padding-bottom: 10px;}
.document_top_area .document_top_right .info_1line .info_item span.title { font-size: 2rem; font-weight: 700; }
.document_top_area .document_top_right .info_1line .info_item span { font-size: 1.2rem; font-weight: 300; }
.document_top_area .document_top_right .info_1line .info_item .name_br { display:inline;}
.document_top_area .document_top_right .info_2line .info_item { width:49%; display: inline-block;  border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px; }
.document_top_area .document_top_right .info_2line .info_item span.item_name { display: inline-block; font-size: 1rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 5px; }
.document_top_area .document_top_right .info_2line .info_item span.value { display: inline-block; font-size: 1.25rem; font-weight: 700; width:100%; color:#222; margin-bottom: 10px; }
.document_top_area .document_top_right .info_2line .info_item.last_item { width:100%; display: inline-block;  border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px; }
.document_info_area { display: inline-block; margin-bottom:35px; width:100%; }
.document_info_area .info_1line { border-bottom: 2px solid #777; margin-bottom:5px; padding-bottom: 10px;}
.document_info_area .info_1line .info_item span.title { font-size: 1.5rem; font-weight: 700; }
.document_info_area .info_2line .info_item { width:49%; display: inline-block; border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px;}
.document_info_area .info_2line .info_item span.item_name { display: inline-block; font-size: 1rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 5px; }
.document_info_area .info_2line .info_item span.value { display: inline-block; font-size: 1.25rem; font-weight: 700; width:100%; color:#222; margin-bottom: 10px; }
.document_info_area .info_2line .info_item.last_item { width:100%; display: inline-block; }
.document_info2_area { display: inline-block; margin-bottom:35px; width:100%; }
.document_info2_area .info_1line { border-bottom: 2px solid #777; margin-bottom:5px; padding-bottom: 10px;}
.document_info2_area .info_1line .info_item span.title { font-size: 1.5rem; font-weight: 700; }
.document_info2_area .info_2line .info_item { width:100%; display: inline-block;  border-bottom: 1px solid #ccc; margin-bottom:5px; padding-bottom: 10px; }
.document_info2_area .info_2line .info_item span.item_name { display: inline-block; font-size: 1rem; font-weight: 300; width:100%; color:#aaa; margin-bottom: 5px; }
.document_info2_area .info_2line .info_item span.value { display: inline-block; font-size: 1.25rem; font-weight: 700; width:100%; color:#222; margin-bottom: 10px; }    
.mobile_off { display:none!important; }
.mobile_on { display:inline!important; }
}
</style>
<div id="kboard-document">
	<div id="kboard-snu-clothing-menber-document">
		<div class="kboard-document-wrap" itemscope itemtype="http://schema.org/Article">
		    <div class="document_top_area">
		        <div class="document_top_left">
		            <?php if($content->attach->{'portrait'}[1]):?><div class="portrait"></div><?php else:?><img src="<?php echo $skin_path?>/noimg.jpg"><?php endif?> 
		        </div>
		        <div class="document_top_right">
		            <div class="info_1line">
		                <div class="info_item"><span class="title"><?php echo $content->title?></span><span class="name_br"><br></span><span>(<?php echo $content->option->{'Name_English'}?>, <?php echo $content->option->{'Name_Chinese'}?>)</span></div>
		            </div>
		            <div class="info_2line">
		                <div class="info_item"><span class="item_name">성별</span><span class="value"><?php echo $content->option->{'Gender'}?></span></div>
		                <div class="info_item"><span class="item_name">나이</span><span class="value"> </span></div>
		                <div class="info_item"><span class="item_name">생년월일</span><span class="value"><?php echo $content->option->{'Birth_Date'}?></span></div>
		                <div class="info_item"><span class="item_name">입학년도</span><span class="value"><?php if($content->category1):?><?php echo $content->category1?><?php endif?></span></div>
		                <div class="info_item last_item"><span class="item_name">연락처</span><span class="value"><?php echo $content->option->{'Mobile_No'}?></span></div>
		                <div class="info_item last_item"><span class="item_name">이메일</span><span class="value"><?php echo $content->option->{'Email_On_Campus'}?><span class="mobile_off">, </span><span class="mobile_on"><br></span><?php echo $content->option->{'Email_Out_of_Campus'}?></span></div>
		            </div>      
		        </div>
		    </div>
            <div class="document_info_area">
                    <div class="info_1line">
		                <div class="info_item"><span class="title">학사정보</span></div>
		            </div>
		            <div class="info_2line">
		                <div class="info_item"><span class="item_name">과정</span><span class="value"><?php echo $content->option->{'Course'}?></span></div>
		                <div class="info_item"><span class="item_name">대학(원)</span><span class="value"><?php echo $content->option->{'University'}?></span></div>
		                <div class="info_item"><span class="item_name">학과(부)</span><span class="value"><?php echo $content->option->{'Department'}?></span></div>
		                <div class="info_item"><span class="item_name">전공</span><span class="value"><?php echo $content->option->{'Major'}?></span></div>
		                <div class="info_item"><span class="item_name">전공구분</span><span class="value"><?php echo $content->option->{'Classification_of_major'}?></span></div>
		                <div class="info_item"><span class="item_name">학적구분</span><span class="value"><?php echo $content->option->{'Academic_Classification'}?></span></div>
		                <div class="info_item"><span class="item_name">학적상태</span><span class="value"><?php echo $content->option->{'Academic_Status'}?></span></div>
		                <div class="info_item"><span class="item_name">입학일자</span><span class="value"><?php echo $content->option->{'Entrance_Date'}?></span></div>
		                <div class="info_item"><span class="item_name">졸업일자</span><span class="value"><?php echo $content->option->{'Graduation_Date'}?></span></div>
		                <div class="info_item"><span class="item_name">수료일자</span><span class="value"><?php echo $content->option->{'Completion_Date'}?></span></div>
		                <div class="info_item"><span class="item_name">주야구분</span><span class="value"><?php echo $content->option->{'Day_Night'}?></span></div>
		                <div class="info_item"><span class="item_name">지도교수</span><span class="value"><?php echo $content->option->{'Advisor'}?></span></div>
		                <div class="info_item"><span class="item_name">입학구분</span><span class="value"><?php echo $content->option->{'Admission_Classification'}?></span></div>
		                <div class="info_item"><span class="item_name">학번</span><span class="value"><?php echo $content->option->{'Student_ID'}?></span></div>
		                <div class="info_item"><span class="item_name">학년</span><span class="value"><?php echo $content->option->{'Academic_Year'}?></span></div>
		                <div class="info_item"><span class="item_name">휴학 학기수</span><span class="value"><?php echo $content->option->{'Semester_Leave_No'}?></span></div>
		                <div class="info_item"><span class="item_name">등록 학기수</span><span class="value"><?php echo $content->option->{'Semesters_Enrolled_No'}?></span></div>
		                <div class="info_item"><span class="item_name">국적</span><span class="value"><?php echo $content->option->{'nationality'}?></span></div>
		                <div class="info_item"><span class="item_name">출신학교</span><span class="value"><?php echo $content->option->{'Graduation_School'}?></span></div>
		                <div class="info_item"><span class="item_name">유형구분</span><span class="value"><?php echo $content->option->{'Type_Classification'}?></span></div>
		                <div class="info_item"><span class="item_name">학적 변동</span><span class="value"><?php echo $content->option->{'Academic_Change'}?></span></div>
		                <div class="info_item"><span class="item_name">등록 구분</span><span class="value"><?php echo $content->option->{'Registration_Category'}?></span></div>
		                <div class="info_item last_item"><span class="item_name">대학원(졸업연도)</span><span class="value"><?php echo $content->option->{'Graduate_School'}?></span></div>
		            </div>      
            </div>
            <div class="document_info2_area">
                    <div class="info_1line">
		                <div class="info_item"><span class="title">졸업후 정보</span></div>
		            </div>
		            <div class="info_2line">
		                <div class="info_item"><span class="item_name">직업</span><span class="value"><?php echo $content->option->{'Current_Job'}?></span></div>
		                <div class="info_item"><span class="item_name">비고</span><span class="value"><?php echo $content->content?></span></div>
		            </div>      
            </div>

			<div class="kboard-detail">
					<div class="detail-attr detail-date">
					<div class="detail-name"><?php echo __('Date', 'kboard')?></div>
					<div class="detail-value"><?php echo date('Y-m-d H:i', strtotime($content->date))?></div>
				</div>
				<div class="detail-attr detail-view">
					<div class="detail-name"><?php echo __('Views', 'kboard')?></div>
					<div class="detail-value"><?php echo $content->view?></div>
				</div>
			</div>
			
			<?php if($content->isAttached()):?>
			<div class="kboard-attach">
				<?php foreach($content->attach as $key=>$attach):?>
				<button type="button" class="kboard-button-action kboard-button-download" onclick="window.location.href='<?php echo $url->getDownloadURLWithAttach($content->uid, $key)?>'" title="<?php echo sprintf(__('Download %s', 'kboard'), $attach[1])?>"><?php echo $attach[1]?></button>
				<?php endforeach?>
			</div>
			<?php endif?>
		</div>
		
		<div class="kboard-control">
			<div class="left">
				<a href="<?php echo esc_url($url->getBoardList())?>" class="kboard-snu-clothing-menber-button-small"><?php echo __('List', 'kboard')?></a>
			</div>
			
			<?php if($content->isEditor() || $board->permission_write=='all'):?>
			<div class="right">
				<a href="<?php echo $url->getContentEditor($content->uid)?>" class="kboard-snu-clothing-menber-button-small"><?php echo __('Edit Link', 'kboard-snu-clothing-menber')?></a>
				<a href="<?php echo $url->getContentRemove($content->uid)?>" class="kboard-snu-clothing-menber-button-small" onclick="return confirm('<?php echo __('Are you sure you want to delete?', 'kboard')?>');"><?php echo __('Delete Link', 'kboard-snu-clothing-menber')?></a>
			</div>
			<?php endif?>
		</div>
		
		<?php if($board->contribution() && !$board->meta->always_view_list):?>
		<div class="kboard-snu-clothing-menber-poweredby">
			<a href="https://www.cosmosfarm.com/products/kboard" onclick="window.open(this.href);return false;" title="<?php echo __('KBoard is the best community software available for WordPress', 'kboard')?>">Powered by KBoard</a>
		</div>
		<?php endif?>
	</div>
</div>