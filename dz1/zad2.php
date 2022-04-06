<?php

CONST TOTAL_PICTURES = 80;
CONST PEN_PICTURES = 23;
CONST FELT_PICTURES = 40;

function getPaintPictures()
{
    return TOTAL_PICTURES - PEN_PICTURES - FELT_PICTURES;
}

$paint_pictures = getPaintPictures();
