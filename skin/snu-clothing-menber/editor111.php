<style>
.editor-title { text-align: center; font-size: 2rem; font-weight: 700; color: #222; margin-bottom: 50px; }
select { -webkit-appearance:none!important; -moz-appearance:none!important; appearance:none!important; }
.editor_top_area { width:100%; background: #edeef6; display: inline-block; }
.editor_top_area .editor_top_left_picture { width:20%; float: left; }
.editor_top_area .editor_top_right { width:80%; float: right; }
.editor_top_area .editor_top_right .kboard-attr-row { width:33.33%!important; }
.editor-subtitle{ text-align: left; font-size: 1.5rem; font-weight: 700; color: #222; margin: 50px 0 20px 0; }
.editor_info_area { display: inline-block; }
.editor_info_area .kboard-attr-row { width:20%!important; }
.editor_info_area .kboard-attr-row.last { width:60%!important; }
.editor_info2_area .kboard-attr-row { width:100%!important; }
</style>
<div class="editor-title">졸업생 추가하기</div>
<div id="kboard-snu-clothing-menber-editor">
	<form class="kboard-form" method="post" action="<?php echo $url->getContentEditorExecute()?>" enctype="multipart/form-data" onsubmit="return kboard_editor_execute(this);">
		<?php $skin->editorHeader($content, $board)?>

<div class="editor_top_area">
    <div class="editor_top_left_picture">
        <div class="kboard-attr-row <?php echo esc_attr($field['class'])?> meta-key-<?php echo esc_attr($meta_key)?>">
		<label class="attr-name" for="<?php echo esc_attr($meta_key)?>"><span class="field-name">사진</span></label>
		<div class="attr-value">
			<?php if(isset($content->attach->{$meta_key})):?><?php echo $content->attach->{$meta_key}[1]?> - <a href="<?php echo $url->getDeleteURLWithAttach($content->uid, $meta_key)?>" onclick="return confirm('<?php echo __('Are you sure you want to delete?', 'kboard')?>');"><?php echo __('Delete file', 'kboard')?></a><?php endif?>
				<input type="file" id="kboard-input-<?php echo esc_attr($meta_key)?>" name="kboard_attach_<?php echo esc_attr($meta_key)?>">
			<?php if(isset($field['description']) && $field['description']):?><div class="description"><?php echo esc_html($field['description'])?></div><?php endif?>
		</div>
	    </div>
    </div>
    <div class="editor_top_right">
	<div class="kboard-attr-row <?php echo esc_attr($field['class'])?> required">
		<label class="attr-name" for="<?php echo esc_attr($content->title)?>"><span class="field-name">성명</span> <span class="attr-required-text">*</span></label>
		<div class="attr-value"><input type="text" id="<?php echo esc_attr($meta_key)?>" name="title" class="required" value="<?php echo $content->title?esc_attr($content->title):esc_attr($default_value)?>"<?php if($placeholder):?> placeholder="<?php echo esc_attr($placeholder)?>"<?php endif?>></div>
	</div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Name_English"><span class="field-name">영문</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Name_English" name="kboard_option_Name_English" value="<?php echo $content->option->Name_English ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Name_Chinese"><span class="field-name">한자</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Name_English" name="kboard_option_Name_Chinese" value="<?php echo $content->option->Name_Chinese ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Gender"><span class="field-name">성별</span></label>
	    <div class="attr-value">
	        <input type="checkbox" name="kboard_option_Gender" value="남자"<?php if($content->option->Gender == '남자'):?> checked<?php endif?>>남자 
	        <input type="checkbox" name="kboard_option_Gender" value="여자"<?php if($content->option->Gender == '여자'):?> checked<?php endif?>>여자
	    </div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Birth_Date"><span class="field-name">생년월일</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Birth_Date" name="kboard_option_Birth_Date" value="<?php echo $content->option->Birth_Date ?>"></div>
    </div>    
    	<?php if(!$board->isTreeCategoryActive()):?>
		<?php if($board->initCategory1()):?>
			<div class="kboard-attr-row <?php echo esc_attr($field['class'])?> <?php echo esc_attr($required)?>">
				<label class="attr-name" for="<?php echo esc_attr($meta_key)?>"><span class="field-name">입학년도</span><?php if($required):?> <span class="attr-required-text">*</span><?php endif?></label>
				<div class="attr-value">
					<select id="<?php echo esc_attr($meta_key)?>" name="category1" class="<?php echo esc_attr($required)?>">
						<option value=""><?php echo __('입학년도', 'kboard')?> <?php echo __('Select', 'kboard')?></option>
						<?php while($board->hasNextCategory()):?>
						<option value="<?php echo $board->currentCategory()?>"<?php if($content->category1 == $board->currentCategory()):?> selected<?php endif?>><?php echo $board->currentCategory()?></option>
						<?php endwhile?>
					</select>
					<?php if(isset($field['description']) && $field['description']):?><div class="description"><?php echo esc_html($field['description'])?></div><?php endif?>
				</div>
			</div>
		<?php endif?>
	<?php endif?>
	<div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Mobile_No"><span class="field-name">연락처</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Mobile_No" name="kboard_option_Mobile_No" value="<?php echo $content->option->Mobile_No ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Email_On_Campus"><span class="field-name">이메일(교내)</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Email_On_Campus" name="kboard_option_Email_On_Campus" value="<?php echo $content->option->Email_On_Campus ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Email_Out_of_Campus"><span class="field-name">이메일(외부)</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Email_Out_of_Campus" name="kboard_option_Email_Out_of_Campus" value="<?php echo $content->option->Email_Out_of_Campus ?>"></div>
    </div>   
    </div>
</div>

<div class="editor-subtitle">학사정보</div>
<div class="editor_info_area">
	<div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Course"><span class="field-name">과정</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Course" name="kboard_option_Course" value="<?php echo $content->option->Course ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_University"><span class="field-name">대학(원)</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_University" name="kboard_option_University" value="<?php echo $content->option->University ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Department"><span class="field-name">학과(부)</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Department" name="kboard_option_Department" value="<?php echo $content->option->Department ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Major"><span class="field-name">전공</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Name_Major" name="kboard_option_Major" value="<?php echo $content->option->Major ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Classification_of_major"><span class="field-name">전공구분</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Classification_of_major" name="kboard_option_Classification_of_major" value="<?php echo $content->option->Classification_of_major ?>"></div>
    </div>    
	<div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Academic_Classification"><span class="field-name">학적구분</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Academic_Classification" name="kboard_option_Academic_Classification" value="<?php echo $content->option->Academic_Classification ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Academic_Status"><span class="field-name">학적상태</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Academic_Status" name="kboard_option_Academic_Status" value="<?php echo $content->option->Academic_Status ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Entrance_Date"><span class="field-name">입학일자</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Entrance_Date" name="kboard_option_Entrance_Date" value="<?php echo $content->option->Entrance_Date ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Graduation_Date"><span class="field-name">졸업일자</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Graduation_Date" name="kboard_option_Graduation_Date" value="<?php echo $content->option->Graduation_Date ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Completion_Date"><span class="field-name">수료일자</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Completion_Date" name="kboard_option_Completion_Date" value="<?php echo $content->option->Completion_Date ?>"></div>
    </div> 
	<div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Day_Night"><span class="field-name">주야구분</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Day_Night" name="kboard_option_Day_Night" value="<?php echo $content->option->Day_Night ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Advisor"><span class="field-name">지도교수</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Advisor" name="kboard_option_Advisor" value="<?php echo $content->option->Advisor ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Admission_Classification"><span class="field-name">입학구분</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Admission_Classification" name="kboard_option_Admission_Classification" value="<?php echo $content->option->Admission_Classification ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Student_ID"><span class="field-name">학번</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Student_ID" name="kboard_option_Student_ID" value="<?php echo $content->option->Student_ID ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Academic_Year"><span class="field-name">학년</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Academic_Year" name="kboard_option_Academic_Year" value="<?php echo $content->option->Academic_Year ?>"></div>
    </div> 
	<div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Semester_Leave_No"><span class="field-name">휴학 학기수</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Semester_Leave_No" name="kboard_option_Semester_Leave_No" value="<?php echo $content->option->Semester_Leave_No ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Semesters_Enrolled_No"><span class="field-name">등록 학기수</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Semesters_Enrolled_No" name="kboard_option_Semesters_Enrolled_No" value="<?php echo $content->option->Semesters_Enrolled_No ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_nationality"><span class="field-name">국적</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_nationality" name="kboard_option_nationality" value="<?php echo $content->option->nationality ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Graduation_School"><span class="field-name">출신학교</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Graduation_School" name="kboard_option_Graduation_School" value="<?php echo $content->option->Graduation_School ?>"></div>
    </div>
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Type_Classification"><span class="field-name">유형구분</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Type_Classification" name="kboard_option_Type_Classification" value="<?php echo $content->option->Type_Classification ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Academic_Change"><span class="field-name">학적 변동</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Academic_Change" name="kboard_option_Academic_Change" value="<?php echo $content->option->Academic_Change ?>"></div>
    </div>   
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Registration_Category"><span class="field-name">등록 구분</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Registration_Category" name="kboard_option_Registration_Category" value="<?php echo $content->option->Registration_Category ?>"></div>
    </div>   
    <div class="kboard-attr-row last">
	    <label class="attr-name" for="kboard_option_Graduate_School"><span class="field-name">대학원(졸업연도)</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Graduate_School" name="kboard_option_Graduate_School" value="<?php echo $content->option->Graduate_School ?>"></div>
    </div>
</div>	

<div class="editor-subtitle">졸업후 정보</div>
<div class="editor_info2_area">
    <div class="kboard-attr-row">
	    <label class="attr-name" for="kboard_option_Current_Job"><span class="field-name">직업</span></label>
	    <div class="attr-value"><input type="text" id="kboard_option_Current_Job" name="kboard_option_Current_Job" value="<?php echo $content->option->Current_Job ?>"></div>
    </div>    
    <div class="kboard-attr-row">
	    <label class="attr-name"><span class="field-name">비고</span></label>
	    <div class="attr-value">
	        <?php
			echo kboard_content_editor(array(
				'board' => $board,
				'content' => $content,
				'required' => $required,
				'placeholder' => $placeholder,
				'editor_height' => '400',
			));
			?>
		</div>
    </div>  
</div>
		<div class="kboard-control">
			<div class="left">
				<?php if($content->uid):?>
				<a href="<?php echo $url->getDocumentURLWithUID($content->uid)?>" class="kboard-snu-clothing-menber-button-small"><?php echo __('Back', 'kboard')?></a>
				<a href="<?php echo $url->getBoardList()?>" class="kboard-snu-clothing-menber-button-small"><?php echo __('List', 'kboard')?></a>
				<?php else:?>
				<a href="<?php echo $url->getBoardList()?>" class="kboard-snu-clothing-menber-button-small"><?php echo __('Back', 'kboard')?></a>
				<?php endif?>
			</div>
			<div class="right">
				<?php if($board->isWriter()):?>
				<button type="submit" class="kboard-snu-clothing-menber-button-small"><?php echo __('Save', 'kboard')?></button>
				<?php endif?>
			</div>
		</div>
	</form>
</div>

<?php wp_enqueue_script('kboard-snu-clothing-menber-script', "{$skin_path}/script.js", array(), KBOARD_VERSION, true)?>