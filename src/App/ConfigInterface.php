<?php

namespace uarsoftware\dbpatch\App;

interface ConfigInterface {
    public function __construct($id,$driver,$host,$databaseName,$user,$pass,$port = null);
}