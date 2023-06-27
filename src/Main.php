<?php

namespace Liujinyong\TencentMap;


use GuzzleHttp\Client;
use Liujinyong\TencentMap\exception\HttpException;

class Main
{
    private $key = "";

    private $httpClient;


    public function __construct($key = "")
    {
        $this->key = $key;
        $this->httpClient = new Client();

    }

    public function get($url, $payload = [])
    {
        try {
            $res = $this->httpClient->get($url);
        } catch (Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }

        return json_decode($res->getBody()->getContents(), 1);
    }

    public function error($code = 0, $msg = "系统内部错误")
    {
        return json_decode([
            'code' => $code,
            'msg' => $msg
        ]);
    }

    /**
     * @param $address
     * @return mixed
     * @throws HttpException
     * 地址转换经纬度
     */
    public function address2latlon($address = "")
    {

        if ($address == "") {
            return $this->error(0, '参数不能为空');
        }
        $url = "https://apis.map.qq.com/ws/geocoder/v1/?address=" . $address . "&key=" . $this->key;
        return $this->get($url);
    }

}