SELECT COUNT(*)
FROM `snuclothingmenber_kboard_board_content`
INNER JOIN `snuclothingmenber_kboard_board_option`
ON `snuclothingmenber_kboard_board_content`.`uid`=`snuclothingmenber_kboard_board_option`.`content_uid`
WHERE `snuclothingmenber_kboard_board_content`.`board_id`='1'
AND (`snuclothingmenber_kboard_board_content`.`title` LIKE '%가%'
OR `snuclothingmenber_kboard_board_content`.`content` LIKE '%가%')
OR ((`snuclothingmenber_kboard_board_option`.`option_key`='academic_change'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='student_id'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='graduation_date'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='academic_year'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='type_classification'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='birth_date'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='department'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='registration_category'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='graduation_school'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='email_out_of_campus'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='name_english'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='advisor'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='classification_of_major'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='course'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='academic_status'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='completion_date'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='major'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='semester_leave_no'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='semesters_enrolled_no'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='academic_classification'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='nationality'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='current_job'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='university'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='day_night'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='admission_classification'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='graduate_school'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='attendance'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='mobile_no'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='name_chinese'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='tel'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='entrance_date'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='gender'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%')
OR (`snuclothingmenber_kboard_board_option`.`option_key`='email_on_campus'
AND `snuclothingmenber_kboard_board_option`.`option_value` LIKE '%가%'))
AND `snuclothingmenber_kboard_board_content`.`category1`='2015'
AND `snuclothingmenber_kboard_board_content`.`notice`=''
AND (`snuclothingmenber_kboard_board_content`.`status` IS NULL
OR `snuclothingmenber_kboard_board_content`.`status`=''
OR `snuclothingmenber_kboard_board_content`.`status`='pending_approval')
GROUP BY `snuclothingmenber_kboard_board_content`.`uid`
