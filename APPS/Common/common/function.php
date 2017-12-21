<?php
   
    function get_type($data,$pid=0,$level=1)
    {
    	$arr = array();
    	foreach ($data as $key => $value) {
    		if($value['pid'] == $pid)
    		{
    			$value['level'] = $level;
    			$arr[] = $value;
    			$arr=array_merge($arr,get_type($data,$value['tid'],$level+1));
    		}
    	}

    	return $arr;
    }


?>