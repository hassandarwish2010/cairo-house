<?php

/**
 * Upload image
 *
 * @return name
 */
function uploadImage($upload, $resize_width = 500, $resize_height = 500){
        $filename = rand().time().'.'.$upload->getClientOriginalExtension();
        $filePath = public_path('uploads/').$filename;
        $thumbPath = public_path('uploads/thumbs/').$filename;
        $image = Image::make($upload);
        $thumb = Image::make($upload)->resize($resize_width, $resize_height)->encode($upload->getClientOriginalExtension(), 75);
        $image->save($filePath);
        $thumb->save($thumbPath);
        return $filename;
}

function uploadImage2($upload, $resize_width = 500, $resize_height = 500,$resize_width2 = 1140, $resize_height2 = 570){
    $filename = rand().time().'.'.$upload->getClientOriginalExtension();
    $filePath = public_path('uploads/').$filename;
    $thumbPath = public_path('uploads/thumbs/').$filename;
    $thumbPath2 = public_path('uploads/thumbs2/').$filename;
    $image = Image::make($upload);
    $thumb = Image::make($upload)->resize($resize_width, $resize_height)->encode($upload->getClientOriginalExtension(), 75);
    $thumb2 = Image::make($upload)->resize($resize_width2, $resize_height2)->encode($upload->getClientOriginalExtension(), 75);

    $image->save($filePath);
    $thumb->save($thumbPath);
    $thumb2->save($thumbPath2);
    return $filename;
}
/**
 * Limit with clean string
 *
 * @return string
 */
function clean_limit($string, $limit = 20) {
  return $string = str_limit(html_entity_decode(strip_tags($string)), $limit);
}

//Locales languages
function locales() {
  return [
    'ar' => 'ar',
    'en' => 'en',
  ];
}
//set cookie
function cookie_set($name, $value) {
  return setcookie($name, $value, time()+60*60*24*365*10, "/");
}

//get cookie
function cookie_get($name, $default = 'default') {
  return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
}

//Upload video
function uploadFile($upload){
  $filename = rand().time().'.'.$upload->getClientOriginalExtension();
  $filePath = public_path('uploads');
  $upload->move($filePath, $filename);
  return $filename;
}
