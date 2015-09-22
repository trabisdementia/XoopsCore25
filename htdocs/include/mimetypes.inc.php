<?php
/**
 * XOOPS MIME types
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2015 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.0.0
 * @version             $Id: mimetypes.inc.php 13082 2015-06-06 21:59:41Z beckmi $
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

/**
 * Return a list of file Mimetypes
 *
 * This should really be replaced with a more accurate way of determining the actually mimetype
 */
return array(
    'hqx'   => 'application/mac-binhex40',
    'doc'   => 'application/msword',
    'dot'   => 'application/msword',
    'bin'   => 'application/octet-stream',
    'lha'   => 'application/octet-stream',
    'lzh'   => 'application/octet-stream',
    'exe'   => 'application/octet-stream',
    'class' => 'application/octet-stream',
    'so'    => 'application/octet-stream',
    'dll'   => 'application/octet-stream',
    'pdf'   => 'application/pdf',
    'ai'    => 'application/postscript',
    'eps'   => 'application/postscript',
    'ps'    => 'application/postscript',
    'smi'   => 'application/smil',
    'smil'  => 'application/smil',
    'wbxml' => 'application/vnd.wap.wbxml',
    'wmlc'  => 'application/vnd.wap.wmlc',
    'wmlsc' => 'application/vnd.wap.wmlscriptc',
    'xla'   => 'application/vnd.ms-excel',
    'xls'   => 'application/vnd.ms-excel',
    'xlt'   => 'application/vnd.ms-excel',
    'ppt'   => 'application/vnd.ms-powerpoint',
    'csh'   => 'application/x-csh',
    'dcr'   => 'application/x-director',
    'dir'   => 'application/x-director',
    'dxr'   => 'application/x-director',
    'spl'   => 'application/x-futuresplash',
    'gtar'  => 'application/x-gtar',
    'php'   => 'application/x-httpd-php',
    'php3'  => 'application/x-httpd-php',
    'php4'  => 'application/x-httpd-php',
    'php5'  => 'application/x-httpd-php',
    'phtml' => 'application/x-httpd-php',
    'js'    => 'application/x-javascript',
    'sh'    => 'application/x-sh',
    'swf'   => 'application/x-shockwave-flash',
    'sit'   => 'application/x-stuffit',
    'tar'   => 'application/x-tar',
    'tcl'   => 'application/x-tcl',
    'xhtml' => 'application/xhtml+xml',
    'xht'   => 'application/xhtml+xml',
    'xhtml' => 'application/xml',
    'ent'   => 'application/xml-external-parsed-entity',
    'dtd'   => 'application/xml-dtd',
    'mod'   => 'application/xml-dtd',
    'gz'    => 'application/x-gzip',
    'zip'   => 'application/zip',
    'au'    => 'audio/basic',
    'snd'   => 'audio/basic',
    'mid'   => 'audio/midi',
    'midi'  => 'audio/midi',
    'kar'   => 'audio/midi',
    'mp1'   => 'audio/mpeg',
    'mp2'   => 'audio/mpeg',
    'mp3'   => 'audio/mpeg',
    'aif'   => 'audio/x-aiff',
    'aiff'  => 'audio/x-aiff',
    'm3u'   => 'audio/x-mpegurl',
    'ram'   => 'audio/x-pn-realaudio',
    'rm'    => 'audio/x-pn-realaudio',
    'rpm'   => 'audio/x-pn-realaudio-plugin',
    'ra'    => 'audio/x-realaudio',
    'wav'   => 'audio/x-wav',
    'ogg'   => 'audio/ogg',
    'bmp'   => 'image/bmp',
    'gif'   => 'image/gif',
    'jpeg'  => 'image/jpeg',
    'jpg'   => 'image/jpeg',
    'jpe'   => 'image/jpeg',
    'png'   => 'image/png',
    'tiff'  => 'image/tiff',
    'tif'   => 'image/tif',
    'wbmp'  => 'image/vnd.wap.wbmp',
    'pnm'   => 'image/x-portable-anymap',
    'pbm'   => 'image/x-portable-bitmap',
    'pgm'   => 'image/x-portable-graymap',
    'ppm'   => 'image/x-portable-pixmap',
    'xbm'   => 'image/x-xbitmap',
    'xpm'   => 'image/x-xpixmap',
    'ics'   => 'text/calendar',
    'ifb'   => 'text/calendar',
    'css'   => 'text/css',
    'html'  => 'text/html',
    'htm'   => 'text/html',
    'asc'   => 'text/plain',
    'txt'   => 'text/plain',
    'rtf'   => 'text/rtf',
    'sgml'  => 'text/x-sgml',
    'sgm'   => 'text/x-sgml',
    'tsv'   => 'text/tab-seperated-values',
    'wml'   => 'text/vnd.wap.wml',
    'wmls'  => 'text/vnd.wap.wmlscript',
    'xsl'   => 'text/xml',
    'xml'   => 'text/xml',
    'ogv'   => 'video/ogg',
    'mpeg'  => 'video/mpeg',
    'mpg'   => 'video/mpeg',
    'mpe'   => 'video/mpeg',
    'qt'    => 'video/quicktime',
    'mov'   => 'video/quicktime',
    'avi'   => 'video/x-msvideo',
    'flv'   => 'video/x-flv',
    'mp4'   => 'video/mp4',
    'wmv'   => 'video/x-ms-wmv',
    'webm'  => 'video/webm',
    '3gp'   => 'video/quicktime',
    'odt'   => 'application/vnd.oasis.opendocument.text',
    'ods'   => 'application/vnd.oasis.opendocument.spreadsheet',
    // Office 2007
    'docm'  => 'application/vnd.ms-word.document.macroEnabled.12',
    'docx'  => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'dotm'  => 'application/vnd.ms-word.template.macroEnabled.12',
    'dotx'  => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
    'ppsm'  => 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12',
    'ppsx'  => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
    'pptm'  => 'application/vnd.ms-powerpoint.presentation.macroEnabled.12',
    'pptx'  => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    'xlsb'  => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
    'xlsm'  => 'application/vnd.ms-excel.sheet.macroEnabled.12',
    'xlsx'  => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'xps'   => 'application/vnd.ms-xpsdocument');
