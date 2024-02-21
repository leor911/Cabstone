<?php

/**
 * Copyright 2012 Realestate.co.nz Ltd
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

class RealestateCoNz_Api_Method_OpenHome_Put extends RealestateCoNz_Api_Method 
{
 
    /**
     *
     * @var int
     */
    protected $listing_id;
 
    /**
     *
     * @var int
     */
    protected $open_home_id;
    
    /**
     *
     * @var string
     */
    protected $http_method = 'PUT';

    /**
     *
     * @var string
     */
    protected $data;
    
    /**
     *
     * @var string
     */
    protected $http_enc_type = 'application/json';
        
    /**
     *
     * @param int $id 
     */
    public function __construct($listing_id, $open_home_id, $data = null)
    {
        $this->listing_id = $listing_id;
        
        $this->open_home_id = $open_home_id;
        
        if(null !== $data) {
            $this->setData($data);
        }
    }
    
    /**
     *
     * @param string $data 
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->setRawData($data);
    }
    
    /**
     *
     * @return string
     */
    public function getUrl()
    {
        return '/listings/' . $this->listing_id . '/open-homes/' . $this->open_home_id . '/';
    }
}
