<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 05/10/18
 * Time: 00.27
 */

namespace App\ServiceParameters;


class ResponseMessageServiceParameter
{
    private $code;
    private $message;
    private $data;

    /**
     * ResponseAttributParameterClass constructor.
     * @param $code
     * @param $message
     * @param $data
     */
    public function __construct($code, $message, $data)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }


    public function getResponse()
    {
        return [
            'code' => $this->code,
            'message' => $this->message,
            'data' => $this->data
        ];
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }


}