<?php
date_default_timezone_set("Asia/Dacca");
date_default_timezone_get();

if (!function_exists('array_column')) {
    function array_column($input, $column_key, $index_key = null)
    {
        if ($index_key !== null) {
            // Collect the keys
            $keys = array();
            $i = 0; // Counter for numerical keys when key does not exist

            foreach ($input as $row) {
                if (array_key_exists($index_key, $row)) {
                    // Update counter for numerical keys
                    if (is_numeric($row[$index_key]) || is_bool($row[$index_key])) {
                        $i = max($i, (int) $row[$index_key] + 1);
                    }

                    // Get the key from a single column of the array
                    $keys[] = $row[$index_key];
                } else {
                    // The key does not exist, use numerical indexing
                    $keys[] = $i++;
                }
            }
        }

        if ($column_key !== null) {
            // Collect the values
            $values = array();
            $i = 0; // Counter for removing keys

            foreach ($input as $row) {
                if (array_key_exists($column_key, $row)) {
                    // Get the values from a single column of the input array
                    $values[] = $row[$column_key];
                    $i++;
                } elseif (isset($keys)) {
                    // Values does not exist, also drop the key for it
                    array_splice($keys, $i, 1);
                }
            }
        } else {
            // Get the full arrays
            $values = array_values($input);
        }

        if ($index_key !== null) {
            return array_combine($keys, $values);
        }

        return $values;
    }
}

if (!function_exists('calculate_parcentage')) {
    function calculate_parcentage($total,$percentage)
    {
        $percentage_val =(($total*$percentage)/100);
        $result =doubleval($total- $percentage_val);
        return $result;


    }
}
function formatPhoneNumber($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' -'.$areaCode.'-'.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = $areaCode.'-'.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
}

if ( ! function_exists('wordLimiter'))
{
    function wordLimiter($str, $limit = 100, $end_char = '&#8230;')
    {
        if (trim($str) == '')
        {
            return $str;
        }

        preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

        if (strlen($str) == strlen($matches[0]))
        {
            $end_char = '';
        }

        return rtrim($matches[0]).$end_char;
    }
}


function setChangeDateFormat($date=0){

    $date = strtotime($date);
    return $date;

}

function getChangeDateFormat($date=NULL){

    $date = date("m/d/Y",$date);
    return $date;

}

function customDateFormat($date=NULL){

    $date = date("d/m/Y",$date);
    return $date;

}

function setChangeTimeFormat($time=0){

    $curdate=date("m/d/Y $time");
    $time = strtotime($curdate);
   return $time;

}

function getChangeTimeFormat($time=0){

    $curdate=date("G:i",$time);
    return $curdate;

}

function productDateFormat($date){

    $today = date("F j, Y",$date);
    return $today;

}
function productExpiredDateFormat($date,$expired){

    $expired=(!empty($expired)) ? $expired :'+1 day';
    $date = date("Y-m-d",$date);
    $date = date_create($date);
    date_modify($date, $expired);
    return date_format($date, "F j, Y");

}



