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

class RealestateCoNz_Api_Method_Agent_Get extends RealestateCoNz_Api_Method 
{

    /**
     *
     * @var string
     */
    protected $format;    
    
    /**
     *
     * @var int
     */
    protected $id;
        
    /**
     *
     * @param int $id 
     */
    public function __construct( $id, $format = null )
    {
        $this->id = $id;
        if(null !== $format) {
            $this->setData($format);
        }
    }

        /**
     *
     * @param string $data 
     */
    public function setData($format)
    {
        $this->setQueryParams($format);
    }
    
    
    /**
     *
     * @return string
     */
    public function getUrl()
    {
        return '/agents/' . $this->id . '/';
    }
}

