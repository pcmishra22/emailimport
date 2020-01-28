<?php

//just now to 1 min
//1 min to 59 min
// 1 hr to 23 hr
// yesterday at 6.14 pm
//January 18 at 3.22 pm.
echo real_time('2020-01-20 11:51:55');


function real_time($timestamp){
  
    date_default_timezone_set("Asia/Kolkata");    
    $time_ago        = strtotime($timestamp);
   
    $current_time    = time();
    $time_difference = $current_time - $time_ago;
    $seconds         = $time_difference;
    $minutes = round($seconds / 60); // value 60 is seconds  
    $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
    $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
    $weeks   = round($seconds / 604800); // 7*24*60*60;  
    $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
    $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
  // seconds
    if ($seconds <= 60){
  
      return "Just Now";
  
    } 
    // minutes
    else if ($minutes <= 60){
  
      if ($minutes == 1){
        return "one minute ago";
      } else {
        return "$minutes minutes ago";
      }
  
    }
    // hours
    else if ($hours <= 24){
  
      if ($hours == 1){
  
        return "an hour ago";
  
      } else {
  
        return "$hours hrs ago";
  
      }
    //days
    } else if ($days <= 7){
  
      if ($days == 1){
  
        return "yesterday at ". date("h:i A",$time_ago); 
  
      } else {
  
        return "$days days ago at " . date("h:i A",$time_ago); 
  
      }
  
    }
    //weeks
    else if ($weeks <= 4.3){
  
      if ($weeks == 1){
  
        return "a week ago";
  
      } else {
  
        return "$weeks weeks ago";
  
      }
  
    } 
    //months
    else if ($months <= 12){
  
      if ($months == 1){
  
        return "a month ago";
  
      } else {
  
        return "$months months ago";
  
      }
  
    } else
    //years 
    {
      
      if ($years == 1){
  
        return "one year ago";
  
      } else {
  
        return "$years years ago";
  
      }
    }
  }
?>