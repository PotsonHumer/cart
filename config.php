<?php
	// 基本設定 ----
	$this->c_num_set = 1; //可購買起始數量
	$this->c_num = 99; //可購買最大數量
	$this->arrival_start = date("Y-m-d",mktime(0,0,0,date("m"),date("d") + 1,date("Y"))); //到貨日期起始日
	$this->arrival_range = 10; //到貨日期範圍 (從起始日起計算天數)
	$this->taiwan_zone = 0; //台灣地區選單, 0 => 關閉 , 1 => 啟動
	$this->gender_select = 0; //性別欄位位置, 0 => 至前 , 1 => 至後
	
	/*
		需要增加以下 TPLMSG 參數
	
		$TPLMSG['MEMBER_INFO'] = "Member Information"; //會員資訊
		$TPLMSG['ADDRESSEE'] = "Addressee"; //收件人
		$TPLMSG['SAM'] = "Same as Member"; //同會員資料
		$TPLMSG['INVOICE_INFO'] = "Invoice Information"; //發票資訊
		$TPLMSG['DUP_INVOICE'] = "Duplicate Uniform Invoice"; //二聯式發票
		$TPLMSG['TRI_INVOICE'] = "Triplicate Uniform Invoice"; //三聯式發票
		$TPLMSG['DONATE'] = "Donate"; //捐贈
		$TPLMSG['VAT'] = "VAT number"; //統一編號
		$TPLMSG['ARRIVAL_TIME'] = "Arrival time"; //到貨時間
		$TPLMSG['YEAR'] = "Year"; //年
		$TPLMSG['MONTH'] = "Month"; //月
		$TPLMSG['DAY'] = "Day"; //日
		$TPLMSG['FIRST_S_BTN'] = "First Shopping?"; //第一次購物
		$TPLMSG['FIRST_I_BTN'] = "First Inquiry?"; //第一次詢價

		########################################################################

		需要於 default-items.php 內增加此陣列
		
		$ws_array["contact_s"]=array(
			1 => 'Mr.',
			2 => 'Miss.',
			3 => 'Mrs.',
		);
	*/
	
	###########################################################################
	// 語系對應設定
	// 基本設定
	$this->basic_lang = array(
		"MSG_MODE"  => $TPLMSG['SEND'],
		"MSG_MEMBER_NAME"  => $TPLMSG['MEMBER_NAME'],
		"MSG_CONTACT_PERSON" => $TPLMSG['CONTACT_PERSON'],
		"MSG_COMPANY_NAME" => $TPLMSG['COMPANY_NAME'],
		"MSG_ZIP" => $TPLMSG["ZIP"],
		"MSG_ADDRESS" => $TPLMSG["ADDRESS"],
		"MSG_TEL" => $TPLMSG["TEL"],
		"MSG_FAX" => $TPLMSG["FAX"],
		"MSG_EMAIL" => $TPLMSG["EMAIL"],
		"MSG_CELLPHONE" => $TPLMSG["CELLPHONE"],
		"MSG_MEMBER_INFO" => $TPLMSG['MEMBER_INFO'],
	);
	
	// 進階設定
	$this->adv_lang = array(
		"MSG_MEMBER_NAME"  => $TPLMSG['MEMBER_NAME'],
		"MSG_ADDRESS" => $TPLMSG["ADDRESS"],
		"MSG_TEL" => $TPLMSG["TEL"],
		"MSG_COMPANY_NAME" => $TPLMSG['COMPANY_NAME'],
		"MSG_ADDRESSEE" => $TPLMSG['ADDRESSEE'],
		"MSG_SAM" => $TPLMSG['SAM'],
		"MSG_INVOICE_INFO" => $TPLMSG['INVOICE_INFO'],
		"MSG_DUP_INVOICE" => $TPLMSG['DUP_INVOICE'],
		"MSG_TRI_INVOICE" => $TPLMSG['TRI_INVOICE'],
		"MSG_DONATE" => $TPLMSG['DONATE'],
		"MSG_VAT" => $TPLMSG['VAT'],
		"MSG_ARRIVAL_TIME" => $TPLMSG['ARRIVAL_TIME'],
		"MSG_YEAR_WORD" => $TPLMSG['YEAR'],
		"MSG_MONTH_WORD" => $TPLMSG['MONTH'],
		"MSG_DAY_WORD" => $TPLMSG['DAY'],
	);
					
?>