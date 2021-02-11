<?php

/**
 * check if the first parameter is null , then return second parameter
 *
 * @param Null $first
 * @param Null $second
 *
 * @return string
 */
function ifFirstNull($first , $second)
{
    return $first == null ? $second : $first;
}
/**
 * determine local lang to chose file;
 *
 * @param  string  $key
 *
 * @return string
 */
function myTrans($key)
{
    $local = app()->getLocale();
    return __("{$local}.{$key}");
}

/**
 * get the section that linked with nav bar links
 *
 * @param  \App\Models\Section  $sections
 *
 * @return array
 */
function getLinkedSections($sections)
{
    return collect($sections)->where('link_with_nav' , 1)->all();
}

/**
 * get the sections that user chose it visible
 *
 * @param  \App\Models\Section  $sections
 *
 * @return array
 */
function getVisibleSections($sections)
{
    return collect($sections)->where('visible' , 1)->all();
}

/**
 * get the available view type for now.
 *
 * @return array
 */
function getAvailableViewsType()
{
    return [
        "1" =>"simple text",
        "2" => "text cards",
        "3" => "gallery cards"
    ];
}

/**
 *
 * @param String $componentType
 *
 * @return string
 */
function resolveComponentName($componentType)
{
    return "components.section.$componentType";
}

/**
 * this function is return the type for using the component name.
 *
 * @param $type
 *
 * @return array
 */
function resolveViewTypeForComponent($type)
{
    $type = resolveComponentName(getAvailableViewsType()[$type]);
    return str_replace(' ' , '-' , $type);
}
