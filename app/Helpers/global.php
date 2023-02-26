<?php

use App\Model\MemberOrganizationInfo;
use CMS\Models\PointInfo;
use SiteSetting\Models\SiteSetting;
use Files\Models\UploadFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Membership\Models\UserPointReduction;
use PublicOpinion\Models\PublicOpinionVote;
use User\Models\UserInfo;

function seperator($depth)
{
    $space = '';
    for ($i = 1; $i < $depth; $i++) {
        $space .= '-';
    }
    return $space;
}


function getdeliverydetails($userid = null)
{
    if ($userid != null) {
        $userinfo = UserInfo::where('user_id', $userid)->pluck('value', 'key')->toArray();
        if ($userinfo != null) {
            return $userinfo;
        }
        return false;
    }
    return false;
}


function getSiteSetting($key)
{
    $config = SiteSetting::where('key', '=', $key)->first();
    if ($config != null) {
        return $config->value;
    }
    return null;
}


function totalVoteUsers()
{
    $totalvoteusers = PublicOpinionVote::groupBy('user_id')->count();
    return $totalvoteusers;
}


function returnUserDetail($key = null, $userid = null)
{
    if ($key != null && $userid != null) {
        $userinfo = UserInfo::where('user_id', $userid)->where('key', $key)->first();
        if ($userinfo) {

            return $userinfo->value;
        }
    }
    return null;
}


function returnSiteSetting($key = null)
{
    if ($key != null) {
        $sitesetting = SiteSetting::where('key', $key)->first();
        if ($sitesetting) {

            return $sitesetting->value;
        }
    }
    return null;
}


function ProductRating($rating)
{
    if ($rating->count() > 0) {
        return $rating->sum('rating') / $rating->count();
    } else {
        return 0;
    }
}

function thumbnail_url($file)
{
    $supportExtension = array('jpg', 'png', 'gif', 'webp');
    if (in_array($file->extension, $supportExtension)) {
        return Storage::url('resize/' . $file->path);
    } else {
        return Storage::url($file->path);
    }

    return null;
}

function getThumbnailUrl($id)
{
    $file = UploadFile::where('id', $id)->first();
    if ($file) {
        $supportExtension = array('jpg', 'png', 'gif', 'webp');
        if (in_array($file->extension, $supportExtension)) {
            return Storage::url('resize/' . $file->path);
        } else {
            return Storage::url($file->path);
        }
    }
    return null;
}


function getOrginalUrl($id)
{
    $file = UploadFile::where('id', $id)->first();
    if ($file) {
        return Storage::url($file->path);
    }
    return null;
}

function getFileTitle($id)
{
    $file = UploadFile::where('id', $id)->first();
    if ($file) {
        return $file->title;
    }
    return null;
}

function original_url($file)
{
    $supportExtension = array('jpg', 'png', 'gif', 'webp');
    if (in_array($file->extension, $supportExtension)) {
        return Storage::url($file->path);
    } else {
        return Storage::url($file->path);
    }

    return null;
}


function returnImage($image, $path)
{
    if (File::exists($path)) {
        File::delete($path);
    }
    $requestedimage = $image;
    $imagename = time() . str_replace(" ", "", $requestedimage->GetClientOriginalName());
    $path = public_path('image/product');

    $requestedimage->move($path, $imagename);
    return 'image/product/' . $imagename;
}

function returnBrandBanner($image, $path)
{

    if (File::exists($path)) {
        File::delete($path);
    }
    $requestedimage = $image;
    $imagename = time() . str_replace(" ", "", $requestedimage->GetClientOriginalName());
    $path = public_path('image/brand');

    $requestedimage->move($path, $imagename);
    return 'image/brand/' . $imagename;
}
function returnCategoryBanner($image, $path)
{

    if (File::exists($path)) {
        File::delete($path);
    }
    $requestedimage = $image;
    $imagename = time() . str_replace(" ", "", $requestedimage->GetClientOriginalName());
    $path = public_path('image/category/banner');
    $requestedimage->move($path, $imagename);
    return 'image/category/banner/' . $imagename;
}
function returnCategoryLogo($image, $path)
{

    if (File::exists($path)) {
        File::delete($path);
    }
    $requestedimage = $image;
    $imagename = time() . str_replace(" ", "", $requestedimage->GetClientOriginalName());
    $path = public_path('image/category/logo');

    $requestedimage->move($path, $imagename);
    return 'image/category/logo/' . $imagename;
}




function returnOrganizationMemberInfo($memberid, $key)
{
    $memberorg_info = MemberOrganizationInfo::where('member_org_id', $memberid)->where('key', $key)->first();
    if ($memberorg_info) {
        return $memberorg_info->value;
    }
    return null;
}



function getFileUrlByUploads($upload = null, $type = null)
{
    $file = $upload;
    if ($file != null) {

        if ($type == "small") {
            $supportExtension = array('jpg', 'png', 'gif', 'webp');
            if (in_array($file->extension, $supportExtension)) {
                return Storage::url('resize/' . $file->path);
            } else {
                return Storage::url($file->path);
            }
        } else {
            return Storage::url($file->path);
        }
    }
    return null;
}

function checkFileExists($id = null)
{
    $uploadfile = UploadFile::where('id', $id)->first();
    if ($uploadfile) {
        if (Storage::exists($uploadfile->path)) {
            return true;
        }
        return false;
    }
    return false;
}



function checkMemberReduction($propertydetailid = null)
{
    $memberreduction  = UserPointReduction::where('user_id', Auth::id())
        ->where('property_detail_id', $propertydetailid)
        ->first();
    if ($memberreduction) {
        return true;
    }
    return false;
}




function numberToWord($num = '')
{
    $num    = (string) ((int) $num);
    if ((int) ($num) && ctype_digit($num)) {
        $words  = array();
        $num    = str_replace(array(',', ' '), '', trim($num));
        $list1  = array(
            '', 'one', 'two', 'three', 'four', 'five', 'six', 'seven',
            'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen',
            'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2  = array(
            '', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty',
            'seventy', 'eighty', 'ninety', 'hundred'
        );
        $list3  = array(
            '', 'thousand', 'lakhs', 'crores', 'arab','kharab'
    
        );
        $num_length = strlen($num);
        $levels = (int) (($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num    = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        foreach ($num_levels as $num_part) {
            $levels--;
            $hundreds   = (int) ($num_part / 100);
            $hundreds   = ($hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ($hundreds == 1 ? '' : 's') . ' ' : '');
            $tens       = (int) ($num_part % 100);
            $singles    = '';
            if ($tens < 20) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
            } else {
                $tens = (int) ($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = (int) ($num_part % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . (($levels && (int) ($num_part)) ? ' ' . $list3[$levels] . ' ' : '');
        }
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }
        $words  = implode(', ', $words);
        $words  = trim(str_replace(' ,', ',', ucwords($words)), ', ');
        if ($commas) {
            $words  = str_replace(',', ' and', $words);
        }
        return $words;
    } else if (!((int) $num)) {
        return 'Zero';
    }
    return '';
}

function getNepaliCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
        13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
        19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
        40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
        70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $digits = array('', 'Hundred','Thousand','Lakh', 'Crore','Arab');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}
