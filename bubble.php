<?php
/* 
 * phpでバブルソート
 * @param array int &$data ソート元データ
 * @param int $len         元データの長さ
 */

function bubbleSort(&$data, $len){

	if($len <= 1){
		return;
	}

	for($i = 0; $i < $len; $i++){
		if($data[$i+1] < $data[$i]){
			$tmp = $data[$i];

			$data[$i]   = $data[$i+1];
			$data[$i+1] = $tmp;
		}
	}

	bubbleSort($data , $len-1);
}
?>