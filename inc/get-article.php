<?php
$_prop = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : 'denverpost.com';
$_storyid = (isset($_REQUEST['x'])) ? $_REQUEST['x'] : '24501545';
$_url = 'http://www.'. $_prop .'/mngi/servletDispatch/JsonArticleServlet.dyn?ci='. $_storyid .'&includeBody=true';

// data
$data = file_get_contents($_url);
$original_json = json_decode($data);
// echo (string)$data;
// return false;
$article_info = array();

// PROCESS FEED
// Create new json object to pass to article
// I need to extract and format the following information:
  // headline
  // overline and create link to section
  // byline and property with author email
  // all associated images and information
  // update date
  // first posted time
  // last updated time
  // body of article propertly processed
  
foreach ($original_json->article as $prop) {
  array_push($article_info, 
    array( 'headline' => trim($prop->headline), 
           'byline' => getAuthorName($prop->byline),
           'source' => getPropertyName($prop->byline),
           'updateTime' => processUpdateOld ($prop->updateDate),
           'imgSrc' => $prop->articleAssociations->articleAssociation[0]->data->associationURL,
           'caption' => removeIPTC( $prop->articleAssociations->articleAssociation[0]->data->associationCaption),
           'credit' => strip_tags($prop->articleAssociations->articleAssociation[0]->data->associationCredit),
           'body' => $prop->body
     )
  );
}

$json = '{ "article" :' . json_encode($article_info) . '}';
echo $json;


// FUNCTIONS


function getAuthorName($str) {
  $str = (string) $str;
  $str_arr = explode('<br>', $str);
  if(isset($str_arr[1])) {
    return strip_tags(str_replace('By ', '', $str_arr[0]));
  } else {
    $str_arr = explode('     ', $str);
    if(isset($str_arr[1])) {
      return strip_tags(ucwords(strtolower(str_replace('By ', '', $str_arr[0]))));
    }
    else {
      $str_arr = explode(',', $str);
      if(isset($str_arr[1])) {
        return strip_tags(ucwords(strtolower(str_replace('By ', '', $str_arr[0]))));
      }
      else {
        return '';
      }
    }
  }
}
function removeIPTC($str) {
  $str = preg_replace("/<!--[^>]+-->/i", "", $str);  
  return $str;
}
function processMedia($str) {
  return ($str == '') ? '' : (string) $str;
}
function getPropertyName($str) {
  if (strpos($str,'Bloomberg')) {
    return 'Bloomberg News';
  }
  if (strpos($str,'Associated')) {
    return 'The Associated Press';
  }
  if (strpos($str,'AP')) {
    return 'The Associated Press';
  }
  $str = (string) $str;
  $str_arr = explode('<br>', $str);
  if(isset($str_arr[1])) {
    return strip_tags($str_arr[1]);
  } else {
    return 'Wire services';
  }
}
function processArticle( $str ) {
  $str = preg_replace("/<iframe[^>]+\>/i", "", $str);  
  return $str;
}
function processTime( $str ) {
  return date('m/j/y, g:ia', strtotime( $str ));
}
function processExcerpt($str) {
  $str = (string) $str;
  $str = str_replace("&mdash;",' — ',$str);
  $str_arr = explode('<', $str);
  return strip_tags($str_arr[0]);
}
function processUpdate( $str ) {
  $first = new DateTime();
  $first->setTimezone(new DateTimeZone('America/Denver'));
  $second = new DateTime(  $str );
  $second->setTimezone(new DateTimeZone('America/Denver'));
  $diff = $first->diff( $second );
  if($diff->days === 0) {
    if($diff->h === 0) {
      if($diff->i === 0) {
        $time = '1m';
      } else {
        $time = ($diff->i > 1) ? $diff->i . 'm' : '1m';
      }
    } else {
      $time = ($diff->h > 1) ? $diff->h . 'h' : '1h';
    }
  } else {
    $time = ($diff->days > 1) ? $diff->days . ' days' : '1 day';
  }
  return $time;
}
function processUpdateOld( $str ) {
  $first = strtotime("now");
  $second = strtotime($str);
  $diff = round(abs($first - $second) / 60, 0);
  if($diff > 1) {
    if($diff > 59) {
      if($diff > 1399) {
        if($diff > 2799) {
          $time = round($diff / 1400, 0) . ' days';
        }
        else {
          $time = '1 day';
        }
      }
      else {
        $time = round($diff / 60, 0) . 'h';
      }
    }
    else {
      $time = $diff . 'm';
    }
  } else {
    $time = '1m';
  }
  return $time;
}
function processSafeText ( $str ) {
  $str = str_replace("'",'&#39;',$str);
  $str = str_replace("*",'&#42;',$str);
  $str = str_replace("^",'&#94;',$str);
  $str = str_replace("@",'&#64;',$str);
  $str = str_replace("‘",'&lsquo;',$str);
  $str = str_replace("’",'&rsquo;',$str);
  $str = str_replace("'",'&#39;',$str);
  $str = str_replace('"','&quot;',$str);
  $str = str_replace('“','&quot;',$str);
  $str = str_replace('”','&quot;',$str);
  return $str;
}
