<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  index_cheshi_demo.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/08/15 20:27
 *  文件描述 :  Wx_小程序：发送模板消息示例
 *  历史记录 :  -----------------------
 */
include('../library/AccessTokenRequest.php');
include('../library/Small_Program_Generate.php');

// 获取success_token
$accessTokenArr = AccessTokenRequest::wxRequest(
    'wx6516385261fa963a',
    'dc9823245780a506e679a121bb535e0b',
    './project_access_token/'
);

// 生成小程序码
print_r(Small_Program_Generate::SmallRequest(
    $accessTokenArr['data']['access_token'],
    [
        // 发送携带的参数
        'scene'      => 'ShiGuangYu',
        // 页面地址
        'page'       => 'pages/home/index/index',
        // 二维码尺寸
        'width'      => 430,
        // 二维码颜色
        'auto_color' => false,
        'line_color' => [
            "r"=>0,
            "g"=>0,
            "b"=>0
        ],
        'is_hyaline' => true,
    ],
    // 二维吗保存路径
    './uploads/wx_code/',
    // 用户Token标识
    'token1'
));

