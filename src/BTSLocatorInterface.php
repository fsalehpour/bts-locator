<?php

namespace FSalehpour\BTSLocator;

interface BTSLocatorInterface
{
    public function getBTSLocation($cid, $lac, $mcc, $mnc);
}