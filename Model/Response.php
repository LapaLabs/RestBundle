<?php

namespace LapaLabs\Model\Response;

class Response
{
    /**
     * Thrown Exception
     *
     * @var \Exception
     */
    private $error;
    
    /**
     * Fetched data
     *
     * @var mixed
     */
    private $data;
    
    /**
     * @param \Exception $error
     * @return $this
     */
    public function setError(\Exception $error)
    {
        $this->error = $error;
        
        return $this;
    }
    
    /**
     * @return \Exception
     */
    public function getError()
    {
        return $this->error;
    }
        
    /**
     * @param mixed $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}
