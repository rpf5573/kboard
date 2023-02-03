<?php
$is_loaded = false;

while($content = $list->hasNext()):
$uid = $list->row->uid; ?>

<tr class="<?php if($content->uid == kboard_uid()):?>kboard-list-selected<?php endif?>">
	<td class="kboard-list-uid"><?php echo $uid;?></td>
	<td class="kboard-list-title"> <?php
      if($content->attach->{'portrait'}[1]):?>
        <div class="portrait">
          <img src="<?php echo $content->attach->{'portrait'}[0]; ?>" />
        </div><?php 
      else:?>
        <div class="noimg"><img src="<?php echo $skin_path?>/noimg.jpg"></div><?php endif?>
        <div class="name_area"><?php echo $content->title?> <span class="member_name">(<?php echo $content->option->{'Name_English'}?>, <?php echo $content->option->{'Name_Chinese'}?>)</span></div>
	</td>
	<?php if($board->use_category && $board->initCategory1()):?>
		<td class="kboard-list-category1">
		<?php if($board->initCategory1() && $content->category1):?>
			<a href="<?php echo $url->set('category1', $content->category1)->set('pageid', '1')->set('target', '')->set('keyword', '')->set('mod', 'list')->toString()?>" title="<?php echo $content->category1?>"><div class="category1-wrap"><?php echo $content->category1?></div></a>
		<?php endif?>
		</td>
	<?php endif?>
	<td class="kboard-list-mobile"><?php echo $content->option->{'Mobile_No'}?></td>
	<td class="kboard-list-email"><?php echo $content->option->{'Email_Out_of_Campus'}?></td>
	<td class="kboard-list-job"><?php echo $content->option->{'Current_Job'}?></td>
	<td class="kboard-list-view">
    <button type="button" class="modal-btn" data-modal-id="<?php echo $uid; ?>"><?php echo __('상세보기', 'kboard-cross-link')?></button>
	</td>
	<?php if($content->isEditor() || $board->permission_write=='all'):?>
	<td class="kboard-list-view">
		<div class="separator">
			<span class="kboard-edit">
				<a href="<?php echo $url->getContentEditor($content->uid)?>" title="<?php echo __('수정', 'kboard-cross-link')?>"><?php echo __('수정', 'kboard-cross-link')?></a>
			</span>
			<span class="kboard-remove">
				<a href="<?php echo $url->getContentRemove($content->uid)?>" class="" onclick="return confirm('<?php echo __('Are you sure you want to delete?', 'kboard')?>');" title="<?php echo __('삭제', 'kboard-cross-link')?>"><?php echo __('삭제', 'kboard-cross-link')?></a>
			</span>
		</div>
	</td>
	<?php endif?>
</tr> 

<tr style="height: 0px !important;">
  <td style="height: 0px !important; padding: 0 !important; border: none !important;">
    <div class="modal_container" data-modal-id="<?php echo $uid; ?>">
      <div class="modal_wrap">
        <div class="modal_close"><i class="xi-close-thin"></i></div>
        <div class="modal_detail">
          <div class="document_top_area">
            <div class="document_top_left"> <?php 
              if($content->attach->{'portrait'}[1]): ?>
                <div class="portrait">
                  <img src="<?php echo $content->attach->{'portrait'}[0]; ?>" />
                </div> <?php
              else: ?>
                <img src="<?php echo $skin_path?>/noimg.jpg"> <?php
              endif; ?>
            </div>
            <div class="document_top_right">
              <div class="info_1line">
                <div class="info_item">
                  <span class="title"> <?php
                    echo $content->title?>
                  </span>
                  <span class="name_br"><br></span>
                  <span>
                    (<?php echo $content->option->{'Name_English'}?>, <?php echo $content->option->{'Name_Chinese'}?>)
                  </span>
                </div>
              </div>
              <div class="info_2line"> <?php
                $options = $content->option->row;
                $age = '';
                if (isset($options['birth_date'])) {
                  $birth_date = $options['birth_date'];
                  if (function_exists('kboard_snu_is_valid_date') && kboard_snu_is_valid_date($birth_date)) {
                    if (function_exists('kboard_snu_get_age')) {
                      $age = kboard_snu_get_age($birth_date);
                    }
                  }
                } ?>
                <div class="info_item"><span class="item_name">성별</span><span class="value"><?php echo $content->option->{'Gender'}?></span></div>
                <div class="info_item"><span class="item_name">나이</span><span class="value"><?php echo $age; ?></span></div>
                <div class="info_item"><span class="item_name">생년월일</span><span class="value"><?php echo date('Y.m.d', strtotime($content->option->{'Birth_Date'}))?></span></div>
                <div class="info_item"><span class="item_name">입학년도</span><span class="value"><?php if($content->category1):?><?php echo $content->category1?><?php endif?></span></div>
                <div class="info_item last_item1"><span class="item_name">연락처</span><span class="value"><?php echo $content->option->{'Mobile_No'}?></span></div>
                <div class="info_item last_item2"><span class="item_name">이메일</span><span class="value"><?php echo $content->option->{'Email_On_Campus'}?><span class="mobile_off">, </span><span class="mobile_on"><br></span><?php echo $content->option->{'Email_Out_of_Campus'}?></span></div>
              </div>      
            </div>
          </div>
          <div class="document_info_area">
            <div class="info_1line">
              <div class="info_item">
                <span class="title">학사정보</span>
              </div>
            </div>
            <div class="info_2line">
              <div class="info_item"><span class="item_name">과정</span><span class="value"><?php echo $content->option->{'Course'}?></span></div>
              <div class="info_item"><span class="item_name">대학(원)</span><span class="value"><?php echo $content->option->{'University'}?></span></div>
              <div class="info_item"><span class="item_name">학과(부)</span><span class="value"><?php echo $content->option->{'Department'}?></span></div>
              <div class="info_item"><span class="item_name">전공</span><span class="value"><?php echo $content->option->{'Major'}?></span></div>
              <div class="info_item"><span class="item_name">전공구분</span><span class="value"><?php echo $content->option->{'Classification_of_major'}?></span></div>
              <div class="info_item"><span class="item_name">학적구분</span><span class="value"><?php echo $content->option->{'Academic_Classification'}?></span></div>
              <div class="info_item"><span class="item_name">학적상태</span><span class="value"><?php echo $content->option->{'Academic_Status'}?></span></div>
              <div class="info_item"><span class="item_name">입학일자</span><span class="value"><?php if($content->option->{'Entrance_Date'}):?><?php echo date('Y.m.d', strtotime($content->option->{'Entrance_Date'}))?><?php else:?>해당없음<?php endif?></span></div>
              <div class="info_item"><span class="item_name">졸업일자</span><span class="value"><?php if($content->option->{'Graduation_Date'}):?><?php echo date('Y.m.d', strtotime($content->option->{'Graduation_Date'}))?><?php else:?>해당없음<?php endif?></span></div>
              <div class="info_item"><span class="item_name">수료일자</span><span class="value"><?php if($content->option->{'Completion_Date'}):?><?php echo date('Y.m.d', strtotime($content->option->{'Completion_Date'}))?><?php else:?>해당없음<?php endif?></span></div>
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
        </div>
      </div>
    </div>
  </td>
</tr>

<?php
if (!$is_loaded) {
  $is_loaded = true; ?>
  <tr class="script-container" style="height: 0px !important;">
    <script>
      function handle_modal_container_click(e) {
        const $target = jQuery(e.currentTarget);
        const wrap = e.currentTarget.querySelector(".modal_wrap");
        const originalEvent = e.originalEvent;
        const paths = originalEvent.composedPath();
        !paths.includes(wrap) && $target.removeClass("show-modal");
      }

      function handle_modal_close_click(e) {
        const $target = jQuery(e.currentTarget);
        const $container = jQuery($target.closest(".modal_container"));
        $container.removeClass("show-modal");
      }

      function handle_show_modal_click(e) {
        const $target = jQuery(e.currentTarget);
        const id = $target.attr("data-modal-id");
        jQuery(`.modal_container[data-modal-id="${id}"]`).addClass("show-modal");

        const data = {
          action: "kboard_snu_update_view_count_action",
          uid: id,
        };

        const ajax_url = jQuery('input[name="ajax_url"]').val();
        jQuery.post(ajax_url, data, (response) => {
          if (!response.success) return;
        });
      }

      setTimeout(() => {
        (($) => {
          const $container = $(".modal_container");
          const $close = $(".modal_close");
          const $buttons = $(".kboard-list-view > .modal-btn");

          $container.off("click");
          $close.off("click");
          $buttons.off("click");

          $container.on("click", handle_modal_container_click);
          $close.on("click", handle_modal_close_click);
          $buttons.on("click", handle_show_modal_click);
        })(jQuery);

        // 더보기 버튼 핸들러
        (($) => {
          const $button = $(".kboard-pagination .kboard-snu-clothing-menber-button-small");
          const ajax_url = $('input[name="ajax_url"]').val();
          const page_url = $("input[name=kboard_snu_list_latest_board_url]").val();
          const keyword = $("input[name=keyword]").val();
          const category1 = $("input[name=kboard_snu_list_category1]").val();
          const current_page = $("input[name=kboard_snu_list_current_page]").val();
          const board_id = $("input[name=board_id]").val();

          $button.off('click');

          $button.on("click", () => {
            let page = $("input[name=kboard_snu_list_page]").val();
            if (page == "-1") {
              alert("더 불러올 데이터가 없습니다");
            } else {
              page++;

              const data = {
                action: "kboard_snu_more_view_action",
                board_id,
                pageid: page,
                keyword,
                category1,
                current_page,
              };

              $("input[name=kboard_snu_list_page]").val(page);

              $.get(
                page_url,
                data,
                function (response) {
                  const data = response.replace(/(^\s*)|(\s*$)/gi, "");
                  if (data) {
                    console.log('data', data);
                    $("#kboard-snu-clothing-menber-list .kboard-list tbody").append(
                      data
                    );
                  } else {
                    alert("더 읽을 데이터가 없습니다");
                    $("input[name=kboard_snu_list_page]").val(-1);
                  }
                },
                "text"
              );
            }
          });
        })(jQuery);
      }, 10);
    </script>
  </tr> <?php
}

endwhile; ?>
