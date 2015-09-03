<?php
/* 
 * phpでクイックソート
 * @param array int &$data ソート元データ
 * @param int $left = 0    一番左のポインタ
 * @param int $right       一番右のポインタ
 */
function quickSort(&$data, $left = 0, $right){

	//ひとつになったら離散終了
	if($right <= $left){
		return;
	}

	$pivot = $data[(int)($left + $right)/2];

	$i = $left;
	$j = $right;

	while($i <= $j){

		while($data[$i] < $pivot){
			$i++;
		}

		while($pivot < $data[$j]){
			$j--;
		}


		if($i <= $j){
			$tmp = $data[$i];

			$data[$i] = $data[$j];
			$data[$j] = $tmp;

			$i++;
			$j--;
			self::$step++;
			self::$stepQ++;
		}
	}
	//左右で離散
	quickSort($data,$left,$j);
	quickSort($data,$i,$right);

}

?>