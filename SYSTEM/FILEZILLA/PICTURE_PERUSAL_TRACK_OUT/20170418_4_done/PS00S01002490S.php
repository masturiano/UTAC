<?php
# ===============================================================================
# [DATE]  : 2017.04.13         [AUTHOR]  : DOS) Mydel
# [SYS_ID]: GPRISM             [SYSTEM]  : CCD
# [SUB_ID]:                    [SUBSYS]  : 
# [PRC_ID]:                    [PROCESS] :
# [PGM_ID]: PS00S01002490.php  [PROGRAM] : Picture Perusal Track Out
# [MDL_ID]:                    [MODULE]  :
# -------------------------------------------------------------------------------
# [COMMENT]
#
# -------------------------------------------------------------------------------
# [UPDATE_LOG]
#
# [UPDATE_PERSON]       [UPDATE]    [COMMENT]
# ====================  ==========  ============================================
# -------------------------------------------------------------------------------

#---------------------------------------------------
# グローバル設定
#---------------------------------------------------
global $gw_scr;
global $g_msg;
global $g_err_lv;
global $g_PrgCD;
#---------------------------------------------------
# グループ設定
# 画面をグループに分け、それぞれのプロパティを
# 配列によって設定する。
#---------------------------------------------------

#---------------------------------------------------
# 1st Layer Form: ID
#---------------------------------------------------
$GROUP[] = array(
	"cel"		=> "col",
	"matrix"	=> "3,2",

	"s_usr_id"	=> array(
		"matrix"		=> "1,1",
		"title"			=> PS00S01002490_item("UsrID"),
		"name"			=> "s_usr_id",
		"size"			=> 20,
		"maxlength"		=> 13,
		"value"			=> $gw_scr['s_usr_id'],
		"type" => array(
		        1 => "text",
		        2 => "disp",
		        3 => "disp",
		        4 => "disp",
    		),
	),


	"s_usr_nm"	=> array(
		"matrix"		=> "3,1",
		"type"			=> "disp",
		"name"			=> "s_usr_nm",
		"width"			=> "200",
		"value"			=> $gw_scr['s_usr_nm'],
	),

	"s_lot_id"	=> array(
		"matrix"		=> "1,2",
		"title"			=> PS00S01002490_item("LotID"),
		"name"			=> "s_lot_id",
		"size"			=> 20,
		"maxlength"		=> 15,
		"value"			=> $gw_scr['s_lot_id'],
		"type" => array(
		        1 => "text",
		        2 => "disp",
		        3 => "disp",
		        4 => "disp",
    		),
	),

	"s_hidden"	=> array(
		"matrix"		=> "3,2",
		"type"			=> "hidden",
		"name"			=> array(
			"s_upd_lev"
			),
		"value"			=> array(
			$gw_scr['s_upd_lev']
			),
		"class"			=> "noborder"
	)
										
);

#---------------------------------------------------
# 2nd Layer Form: Display Data
#---------------------------------------------------
$GROUP[] = array(
	"cel"		=> "col",
	"matrix"	=> "1,3",

	# Equipment Code
	"s_equip_id"	=> array(
		"matrix"		=> "1,1",
		"title"			=> PS00S01002490_item("EquipmentCode"),
		"name"			=> "s_equip_id",
		"size"			=> 19,
		"maxlength"		=> 13,
		//"readonly"		=> array("","","",""), // true or false
		//"itm_cls"		=> array("","","",""), // dis_text or blank
		"value"			=> $gw_scr['s_equip_id'],
    		"type" => array(
		        1 => "disp",
		        2 => "text",
		        3 => "disp",
		        4 => "disp",
    		),
	),
	# Good Quantity
	"s_good_qty"	=> array(
		"matrix"		=> "1,2",
		"title"			=> PS00S01002490_item("GoodQuantity"),
		"name"			=> "s_good_qty",
		"size"			=> 19,
		"maxlength"		=> 13,
		//"readonly"		=> array("","","",""), // true or false
		//"itm_cls"		=> array("","","",""), // dis_text or blank
		"value"			=> $gw_scr['s_good_qty'],
		"type" => array(
		        1 => "disp",
		        2 => "text",
		        3 => "disp",
		        4 => "disp",
    		),
	),
	# Reject Quantity
	"s_rej_qty"	=> array(
		"matrix"		=> "1,3",
		"title"			=> PS00S01002490_item("RejectQuantity"),
		"type"			=> "text",
		"name"			=> "s_rej_qty",
		"size"			=> 19,
		"maxlength"		=> 13,
		//"readonly"		=> array("","","",""), // true or false
		//"itm_cls"		=> array("","","",""), // dis_text or blank
		"value"			=> $gw_scr['s_rej_qty'],
		"type" => array(
		        1 => "disp",
		        2 => "text",
		        3 => "disp",
		        4 => "disp",
    		),
	),
);
#---------------------------------------------------
# 3rd Layer Form: Display Data
#---------------------------------------------------
$GROUP[] = array(
	"cel"		=> "col",
	"matrix"	=> "2,13",

	# Step Name
	"s_io_blc_nm"	=> array(
		"matrix"		=> "1,1",
		"title"			=> PS00S01002490_item("IoBlockName"),
		"type"			=> "disp",
		"name"			=> "s_io_blc_nm",
		"value"			=> $gw_scr['s_io_blc_nm'],
	),
	# Package Name
	"s_pkg_nm"		=> array(
		"matrix"		=> "1,2",
		"title"			=> PS00S01002490_item("PackageName"),
		"type"			=> "disp",
		"name"			=> "s_pkg_nm",
		"value"			=> $gw_scr['s_pkg_nm']
	),
	# Type Name
	"s_prd_nm"		=> array(
		"matrix"		=> "1,3",
		"title"			=> PS00S01002490_item("KindName"),
		"type"			=> "disp",
		"name"			=> "s_prd_nm",
		"value"			=> $gw_scr['s_prd_nm']
	),
	# Diffusion Number
	"s_lot_no_str"	=> array(
		"matrix"		=> "1,4",
		"title"			=> PS00S01002490_item("DiffFactoryNo"),
		"type"			=> "disp",
		"name"			=> "s_lot_no_str",
		"value"			=> $gw_scr['s_lot_no_str']
	),
);

#---------------------------------------------------
# 4th Layer Form: Message Display
#---------------------------------------------------
$GROUP[] = array(
		"cel"		=> "col",
		"matrix"	=> "1,1",

		"s_message"	=> array(
		"matrix"	=> "1,1",
		"type"		=> "msg",
		"value"		=> $g_msg,
		"lev"		=> $g_err_lv
	)
);

#---------------------------------------------------
# 5th Layer Form: Button
#---------------------------------------------------
$GROUP[] = array(
    "cel"       => "col",
    "matrix"    => "5,1",
    "class"     => "noborder",

    # CHECK BUTTON
    "s_chk"     => array(
	    "matrix"    => "1,1",
	    "name"      => "s_chk",
	    "value"     => button_name("Check"),
	    //"onclick"   => "jgt_btn_flg(" . $g_PrgCD . ")"
	    "onclick" 	=> "jgt_page_action('CHECK','', 1)",
	    "type" => array(
	        1 => "button",
	        2 => "button",
	        3 => "none",
	        4 => "none",
        ),
    ),

    # EXECUTE BUTTON
    "s_sub"     => array(
	    "matrix"    => "2,1",
	    "name"      => "s_sub",
	    "value"     => button_name("Execute"),
	    "onclick" 	=> "jgt_page_action('EXECUTE','', 1)",
	    "type" => array(
	        1 => "none",
	        2 => "none",
	        3 => "button",
	        4 => "none",
        ),
    ),

    # CLEAR BUTTON
    "s_erase"     => array(
	    "matrix"    => "3,1",
	    "name"      => "s_erase",
	    "value"     => button_name("Erase"),
	    //"onclick"   => "jgt_btn_flg(" . $g_PrgCD . ")",
	    "onclick" 	=> "jgt_page_action('CLEAR','', 1)",
	    "type" => array(
	        1 => "button",
	        2 => "button",
	        3 => "none",
	        4 => "none",
        ),
    ),

    # BACK BUTTON
    "s_rtn"     => array(
	    "matrix"    => "4,1",
	    "name"      => "s_rtn",
	    "value"     => button_name("Return"),
	    //"onclick"   => "jgt_btn_flg(" . $g_PrgCD . ")",
	    "onclick" 	=> "jgt_page_action('BACK','', 1)",
	    "type" => array(
	        1 => "none",
	        2 => "button",
	        3 => "button",
	        4 => "button",
        ),
    ),
);

$GROUP[] = array(
	"cel"           => "col",
	"matrix"        => "1,1",
	"s_hidden"      => array(
		"matrix"    => "1,1",
		"type"      => "hidden",
		"name"      => array(
			"s_renzheng",
			"s_renzheng_db",
			"s_renzheng_t",
		),
		"value"     => array(
			$gw_scr['s_renzheng'],
			$gw_scr['s_renzheng_db'],
			$gw_scr['s_renzheng_t'],
		),
		"class"     => "noborder"
	),
);

$g_def = array(
	"s_usr_id",
	"s_sub",
	"s_rtn"
);

?>
