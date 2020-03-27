<?php
include_once("./_dmshop.php");

if($m == 'pc')
{
    $ss_name = "pc_ver";
    if(!shop_get_session($ss_name)) // ./lib/system.lib.php에 정의
    {
        shop_set_session($ss_name,true);// (첫인자를 키, 두번째인자 밸류인 세션변수 생성)
    }
}

//모바일 접속 + 세션에 pc버전이라 되어있지 않으면 url을 모바일path로
if(preg_match("/(Mobile|Android)/",$_SERVER['HTTP_USER_AGENT'])) //사용자의 웹접속환경정보 담은 php전역변수
{
    $ss_name="pc_ver";
    if(!shop_get_session($ss_name))
    {
        shop_url($shop['mobile_path']);
    }
}

if($dmshop['domain_type'])
{
    include_once("$shop[path]/home.php");
}
else
{
    $LastModified
}