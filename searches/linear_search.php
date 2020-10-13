<?php

/**
 * Linear search in PHP
 * 
 * Reference: https://www.geeksforgeeks.org/linear-search/
 * 
 * @param Array $list a array of integers to search
 * @param integer $target an integer number to search for in the list
 * @return integer the index where the target is found (or -1 if not found)
 *
 *
 * USAGE: linear_search(ARRAY,INTEGER);
 * 
 * OUTPUT: 0        - If not found
 *         POSITION - If found
 *
 * Examples:
 * 
 *  linear_search([5, 7, 8, 11, 12, 15, 17, 18, 20], 15)
 *  6
 *  
 *  linear_search([5, 7, 8, 11, 12, 15, 17, 18, 20], 1)
 *  0
 * 
 **/


function linear_search($list, $target) #Linear Search
  { $n = sizeof($list);
    for($i = 0; $i < $n; $i++) 
    { 
        if($list[$i] == $target)
                {
                  return ($i+1); #FOUND
                }
    } 
    return 0;  # NOT FOUND
   }



# DRIVER CODE  

echo linear_search([5, 7, 8, 11, 12, 15, 17, 18, 20], 15); # OUTPUT DISPLAY | FOUND
echo linear_search([5, 7, 8, 11, 12, 15, 17, 18, 20], 1);  # OUTPUT DISPLAY | NOT FOUND


# Example
#/*
$data = array(5, 7, 8, 11, 12, 15. 17, 18, 20);  
$x = 15; 


$result = linear_search($data, $x); # OUTPUT DISPLAY
if($result == -1) 
    echo "Element not found"; 
else
    echo "Element found at position " , $result; 
#*/
?>
