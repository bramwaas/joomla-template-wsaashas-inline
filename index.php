<?php
/**
 * @copyright  Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license    GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 * Bram Waasdorp Eerste versie 
   12/10/2011 tbv website asha-s.com
   25/12/2011
   11/10/2012
   11/11/2012
   9/12/2012 titel grootte meer aanpasbaar gemaakt.
  20/2/2013 extra positie slider toegevoegd na de kop
  4/8/2013 aangepast naar versie 1.3 met nog een positie voor sociaal media icons en footer
           volgorde modules zo gemaakt, dat sociaal media icons en footer het laats gelaten worden
           (in de bovenste laag komen) en daarom klikbaar zijn ook als ze met een ander element overlappen.
           Headerleft in module ipv plaatje binnen sjabloon.
	28/8/2013 nieuw template voor foto's	
    30/8/2013 aanpassingen voor videos en drie content kolommen
    7/9/2013 behavior.modal voor lightbox toegevoegd al werkte dit al omdat de functionaliteit oom in de slider zit.
	8/9/2013 fout in margins tussen items  opgelost
	11/9/2013 6/10/2013 kleine aanpassingen
   23/11/2013 publisher met google plus profile
   11/1/2014 canonical
  15-2-2015 viewport meta toegevoegd nav problemen mobiele bruikbaarheid volgens google webmaster tools en breakpoint mobile
  14-11-2015 gatracker verwijderd.
 */
// no direct access
/* defined( '_JEXEC' ) or die( 'Restricted access' ); */
defined( '_JEXEC' ) or die;
JHtml::_('behavior.framework', true);
// Add modal behavior for links  attribuut data-wsmodal in plaats van class modal, 
// omdat .modal speciale functie heeft in bootstrap 3
// betekent wel wijziging aan alle artikelen daarom eerst beiden toevoegen.
JHTML::_('behavior.modal'); 
JHTML::_('behavior.modal', 'a[data-wsmodal]');
 
// get params
$gplusProfile    = htmlspecialchars($this->params->get('gplusProfile'));
$breakpointMobile = htmlspecialchars($this->params->get('breakpointMobile'));

$background    = htmlspecialchars($this->params->get('background'));
$bgColor    = htmlspecialchars($this->params->get('bgColor'));
$fgColor    = htmlspecialchars($this->params->get('fgColor'));
$showTitle  = htmlspecialchars($this->params->get('showTitle'));

//$headerleft    = htmlspecialchars($this->params->get('headerleft'));
$hlWidth    = htmlspecialchars($this->params->get('hlWidth'));
$hlHeight    = htmlspecialchars($this->params->get('hlHeight'));
$hlMarginTop    = htmlspecialchars($this->params->get('hlMarginTop'));
$hlMarginLeft    = htmlspecialchars($this->params->get('hlMarginLeft'));
if ($hlMarginLeft > " " )
{
// ok geen actie
}
else
{
$hlMarginLeft = 0;
}

$hlMarginBottom    = htmlspecialchars($this->params->get('hlMarginBottom'));
$phMarginTop    = htmlspecialchars($this->params->get('phMarginTop'));
$phWidth    = htmlspecialchars($this->params->get('phWidth'));

$iconsWidth    = htmlspecialchars($this->params->get('iconsWidth'));
$iconsPosLeft    = htmlspecialchars($this->params->get('iconsPosLeft'));
$iconsPosTop    = htmlspecialchars($this->params->get('iconsPosTop'));

$footerWidth    = htmlspecialchars($this->params->get('footericonsWidth'));
$footerPosLeft    = htmlspecialchars($this->params->get('footerPosLeft'));
$footerPosBottom    = htmlspecialchars($this->params->get('footerPosBottom'));

$logo      = htmlspecialchars($this->params->get('logo'));
$logoWidth    = htmlspecialchars($this->params->get('logoWidth'));
$logoPosLeft    = htmlspecialchars($this->params->get('logoPosLeft'));
$logoPosTop    = htmlspecialchars($this->params->get('logoPosTop'));

$contentPosLeft    = htmlspecialchars($this->params->get('contentPosLeft'));
$contentPosRight    = htmlspecialchars($this->params->get('contentPosRight')); /* eigenlijk right margin daarom 100 - */
$contentPosTop    = htmlspecialchars($this->params->get('contentPosTop'));
$marginLeftRight   = htmlspecialchars($this->params->get('marginLeftRight'));
if ($marginLeftRight > " " and $marginLeftRight > 0 and $marginLeftRight < 50)
{
// ok geen actie
}
else
{
$marginLeftRight = 2;
}
if ($contentPosLeft > " " and $contentPosLeft > (1.5 * $marginLeftRight) and $contentPosLeft < 100 - $marginLeftRight)
{
// ok geen actie
}
else
{
$contentPosLeft = $marginLeftRight;
}
if ($contentPosRight > " " and $contentPosRight > (1.5 * $marginLeftRight) and 100 -  $contentPosRight > $contentPosLeft)
{
$contentPosRight = 100 - $contentPosRight;
}
else
{
$contentPosRight = 100 - $marginLeftRight;
}
$itemLeadHeight = htmlspecialchars($this->params->get('itemLeadHeight'));
$itemLeadWidth  = htmlspecialchars($this->params->get('itemLeadWidth'));
$itemLeadMargin = htmlspecialchars($this->params->get('itemLeadMargin'));
$itemHeight    	= htmlspecialchars($this->params->get('itemHeight'));
$itemWidth    	= htmlspecialchars($this->params->get('itemWidth'));
$itemMargin    	= htmlspecialchars($this->params->get('itemMargin'));
$itemPageWidth  = htmlspecialchars($this->params->get('itemPageWidth'));
if ($itemPageWidth > " " and $itemPageWidth < 100 and $itemPageWidth > 0)
{
// ok
}
else
{
$itemPageWidth = 100;
}

$linkColor    = htmlspecialchars($this->params->get('linkColor'));
$linkDecoration    = htmlspecialchars($this->params->get('linkDecoration'));
$linkHvColor    = htmlspecialchars($this->params->get('linkHvColor'));

$menuMarginTop  = htmlspecialchars($this->params->get('menuMarginTop'));
$menuMarginLeft  = htmlspecialchars($this->params->get('menuMarginLeft'));
$menuColor    = htmlspecialchars($this->params->get('menuColor'));
$menuFontSize = htmlspecialchars($this->params->get('menuFontSize')); 
$menuDisplay = htmlspecialchars($this->params->get('menuDisplay'));
$menuDecoration    = htmlspecialchars($this->params->get('menuDecoration'));
$menuHvColor    = htmlspecialchars($this->params->get('menuHvColor'));
$menuHvDecoration  = htmlspecialchars($this->params->get('menuHvDecoration'));
$menuActiveColor  = htmlspecialchars($this->params->get('menuActiveColor'));
$menuActiveDecoration  = htmlspecialchars($this->params->get('menuActiveDecoration'));

$app      = JFactory::getApplication();
$doc      = JFactory::getDocument();
$templateparams  = $app->getTemplate(true)->params;
$areaWidth = $contentPosRight - $contentPosLeft;
$marginArea = $marginLeftRight * 50 / $areaWidth;
$leftWidth = $contentPosLeft - (1.5 * $marginLeftRight);
$rightWidth =  100 - $contentPosRight - (1.5 * $marginLeftRight);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"  
 xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php echo $this->language; ?>" >
<?php $app = JFactory::getApplication(); ?>
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $background; ?>" type="text/css" />
<?php if ($gplusProfile > " ") : ?><link rel="publisher" href="<?php echo $gplusProfile ?>" /><?php endif; ?>
<?php include("include_link_rel_canonical.php"); ?>





<?php if($this->direction == 'rtl') : ?>
  <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<!-- styles declared here to make them easier to parametrize and overrule some template.css declarations 7/9/2013 -->

<style type="text/css">
body,
div.moduletable_menu ul,
div.module_menu ul
{ 
<?php if ($bgColor > " ") : ?>background-color: <?php echo $bgColor ?>; <?php endif; ?>/* #080810 */
<?php if ($fgColor > " ") : ?>color: <?php echo $fgColor ?>; <?php endif; ?>
}

a,
a:link,
a:visited
{
<?php if ($linkColor > " ") : ?>color: <?php echo $linkColor ?>; <?php endif; ?>
<?php if ($linkDecoration > " ") : ?>text-decoration: <?php echo $linkDecoration ?>; <?php endif; ?>
}

a,
a:hover
{
<?php if ($linkHvColor > " ") : ?>color: <?php echo $linkHvColor ?>; <?php endif; ?>
}

div#headerleft
 { /* plaatje linksboven, of slider, of watanders voor de kop links */
margin-left: <?php echo $hlMarginLeft + $marginLeftRight; ?>%; /* 2%; */
    margin-top: <?php echo $hlMarginTop ?>%; /* 1%; */
<?php if ($hlMarginBottom > " ") : ?>margin-bottom: <?php echo $hlMarginBottom; ?>%;<?php endif; ?>	
<?php if ($hlWidth > " ") : ?>width: <?php echo $hlWidth; ?>%;<?php else : ?>width: auto;<?php endif; ?> /* 25% */
   /* height werkt niet als percentage hier nog geen oplossing voor gevonden */
<?php if ($hlHeight > " ") : ?>height: <?php echo $hlHeight; ?>%;<?php else : ?>height: auto;<?php endif; ?> /* 25% */

 }

 div#wrapper
{
  margin-left: auto;
  margin-right: auto;
  width: 100%;
     /*  border: 1px solid #00f; */
        
}


#area
{
margin-left: <?php echo $contentPosLeft; ?>%; /* 2%; */
width: <?php echo $areaWidth ; ?>%;
}
#rightcolumn
{
margin-right: <?php echo $marginLeftRight; ?>%;
width: <?php echo $rightWidth; ?>%; 
}
#leftcolumn
{
margin-left: <?php echo $marginLeftRight; ?>%;
width: <?php echo $leftWidth; ?>%;
}
#maincolumn div.item-page      /* artikel pagina 1.6 */
{ /* standaard voor andere inhouditems an een blog. */
width: <?php echo $itemPageWidth; ?>%;
left: <?php echo (100 - $itemPageWidth) / 2; ?>%;

}


div#page_heading { /* pagina kop naast headerleft */
    float: left;
margin-left: <?php echo (0.5 * $marginLeftRight); ?>%; /* 1%; */
    padding-top: 0;
<?php if ($hlWidth > " ") : ?>width: <?php echo 100 - (2.5 * $marginLeftRight) - $hlWidth - $hlMarginLeft; ?>%; <?php endif; ?>/* 70%; */
}
div#page_heading h1
{
<?php if ($phMarginTop > " ") : ?>margin-top: <?php echo $phMarginTop ?>%; <?php endif; ?>/* 2% */
<?php if ($phWidth > " ") : ?>width: <?php echo $phWidth ?>%; <?php endif; ?>/* 45.7% (45.7%*70%=32% 32 + 2 + 25 + 1 = 60%) */
}

h2,
div#page_heading h1,
#maincolumn h1,
#maincolumn h2,
div.moduletable_menu h3,
div.module_menu h3,
#maincolumn div.blog h1, /* titel blog */
#maincolumn div.blog h2 /* sub-titel blog */
 {
<?php if ($fgColor > " ") : ?>color: <?php echo $fgColor ?>; <?php endif; ?> /* voorlopig de standaard pagina kleur */
}
div#icons
{   /* icons social media boven logo */
position: absolute;
<?php if ($iconsPosTop > " ") : ?>top: <?php echo $iconsPosTop; ?>%;  <?php endif; ?>    
<?php if ($iconsPosLeft > " ") : ?>left: <?php echo $iconsPosLeft; ?>%; <?php endif; ?>
<?php if ($iconsWidth > " ") : ?>width: <?php echo $iconsWidth; ?>%; <?php endif; ?> /* 93% * 40% = 37.2% */
}

div#logo
{   /* logo website rechts van het midden transparant, 480x96 bij breedte 1280px */
position: absolute; 
<?php if ($logoPosTop > " ") : ?>padding-top: <?php echo $logoPosTop; ?>%;  <?php endif; ?>    
<?php if ($logoPosLeft > " ") : ?>left: <?php echo $logoPosLeft; ?>%; <?php endif; ?>
<?php if ($logoWidth > " ") : ?>width: <?php echo $logoWidth; ?>%; <?php endif; ?> /* 93% * 40% = 37.2% */
}
div#footer
{   /* footer onder aan de pagina */
position: fixed;
<?php if ($footerPosBottom > " ") : ?>bottom: <?php echo $footerPosBottom; ?>%;  <?php endif; ?>    
<?php if ($footerPosLeft > " ") : ?>left: <?php echo $footerPosLeft; ?>%; <?php endif; ?>
<?php if ($footerWidth > " ") : ?>width: <?php echo $footerWidth; ?>%; <?php endif; ?> /* 93% * 40% = 37.2% */
}

div#logo img,
img#logo_img
{
width: 100%;
}

#maincolumn div.blog h1, /* titel blog */
#maincolumn div.blog h2, /* sub-titel blog */
div.items-leading/* hoofd artikelen van voorpagina en blog 1.6 */
{
margin-top: <?php echo $contentPosTop; ?>%; /* 1.0% */
/* width: <?php echo 100 - $marginArea - $contentPosLeft ; ?>%; *//* 70%;  */
}
div.items-leading /* hoofd artikelen van voorpagina en blog 1.6 */
{
float: left; 
position: relative; 
width: 100%;
<?php if ($itemLeadHeight > " ") : ?>
padding-bottom: <?php echo $itemLeadHeight; ?>%;
height: 1px; /* bij 0 gaan ze op elkaar */ 
overflow: hidden; 
<?php endif; ?>
}
div.items-leading  div/* hoofd artikelen van voorpagina en blog 1.6 */
{
<?php if ($itemLeadWidth > " ") : ?>
width: <?php echo $itemLeadWidth; ?>%;   
<?php endif; ?>
<?php if ($itemLeadMargin > " ") : ?>
margin-right: <?php echo $itemLeadMargin; ?>%;   
<?php endif; ?>
<?php if ($itemLeadHeight > " ") : ?>
float:left;
height: 100%;
<?php endif; ?>
}
/* breedte en hoogte van rij vastleggen en de items daarbinnen er op aanpassen
 bij een kolom is 1 item ook een rij, bij meer kolommen iets doen met de breedte van de rij en de items daarin
 */
.items-row
{
float: left;
position: relative;
width: 100%;
<?php if ($itemHeight > " ") : ?>
padding-bottom: <?php echo $itemHeight; ?>%;
height: 1px;
overflow: hidden; 
<?php endif; ?>
}
div.category-desc, /* beschrijving van de categorie komt voor alle items */
div.items-more, /* geeft aan, dat er nog meer items zijn */
div.item, /* vervolgartikel blog */
.items-row div.item
{
<?php if ($itemWidth > " ") : ?>
width: <?php echo $itemWidth; ?>%;   
<?php endif; ?>
/* item margin is: <?php echo $itemMargin; ?> */
<?php if ($itemMargin > " ") : ?>
margin-right: <?php echo $itemMargin; ?>%;   
<?php endif; ?>
<?php if ($itemHeight > " ") : ?>
height: 100%;
<?php endif; ?>
}
div.items-leading  div .videoWrapper,
.videoWrapper 
{ 
    position: relative;
	<?php if ($itemLeadHeight > " ") : ?>
		 padding-bottom:80%;
	<?php endif; ?>
    /* padding-bottom: 56.25%; 16:9     */
	width: 100%;
	height: 1px; 	
}
.videoWrapper object,
.videoWrapper embed,
.videoWrapper iframe  {
        position: absolute;
        top: 0;
        left: 0;
    <?php if ($itemWidth > " ") : ?>
width: <?php echo $itemWidth; ?>%;   
<?php endif; ?>
width:100%;

height: 100%;
}

/* alleen voor blog met 1 kolom einde */
.row-separator
{

}
div.blog div.item img
{
width:100%;
}


div.category-desc, /* beschrijving van de categorie komt voor alle items */
div.items-more, /* geeft aan, dat er nog meer items zijn */
div.item /* vervolgartikel blog */
{
 /* width: <?php echo $contentPosLeft; ?>%; */ /* 23.5%; ((25 - 2) * 100) / 98 = 23,5 */
}

div.moduletable_menu ul li a,
div.moduletable_menu ul li a:link,
div.moduletable_menu ul li a:visited,
div.module_menu ul li a,
div.module_menu ul li a:link,
div.module_menu ul li a:visited,
div.moduletable_menu ul li ul li a:link,
div.moduletable_menu ul li ul li a:visited,
a.sublevel:link,
a.sublevel:visited, 
div.module_menu ul li ul li a:link,
div.module_menu ul li ul li a:visited
{ 
<?php if ($menuColor > " ") : ?>color: <?php echo $menuColor ?>; <?php endif; ?>
<?php if ($menuDecoration > " ") : ?>text-decoration: <?php echo $menuDecoration ?>; <?php endif; ?>
}
div.moduletable_menu,
div.module_menu
{
<?php if ($menuMarginTop > " ") : ?>margin-top: <?php echo $menuMarginTop ?>%; <?php endif; ?>/* 18.5% */
}
div.moduletable_menu ul,
div.module_menu ul
{ 

<?php if ($menuColor > " ") : ?>color: <?php echo $menuColor ?>; <?php endif; ?>
<?php if ($menuFontSize > " ") : ?>font-size: <?php echo $menuFontSize ?>px; <?php endif; ?>      
<?php if ($menuDecoration > " ") : ?>text-decoration: <?php echo $menuDecoration ?>; <?php endif; ?>
<?php if ($menuDisplay == "inline") : ?>
  padding-left: 0;
  margin-left: 0;  
<?php endif; ?>
<?php if ($menuMarginLeft > " ") : ?>margin-left: <?php echo $menuMarginLeft ?>%; <?php endif; ?>
}

div.moduletable_menu ul li.current a,
div.moduletable_menu ul li ul li.current a:link,
div.moduletable_menu ul li ul li.current a:visited,
div.module_menu #current,
div.module_menu ul li.current a,
div.module_menu ul li.current a:link,
div.module_menu ul li.current a:visited
{
<?php if ($menuActiveColor > " ") : ?>color: <?php echo $menuActiveColor ?>; <?php endif; ?>
<?php if ($menuActiveDecoration > " ") : ?>text-decoration: <?php echo $menuActiveDecoration ?>; <?php endif; ?>
}

div.moduletable_menu ul li.active a,
div.moduletable_menu ul li ul li.active a:link,
div.moduletable_menu ul li ul li.active a:visited,
div.module_menu ul li.active a,
div.module_menu ul li.active a:link,
div.module_menu ul li.active a:visited
{ /* bovenliggende menuoptie van actieve menu alleen de kleur aanpassen*/
<?php if ($menuActiveColor > " ") : ?>color: <?php echo $menuActiveColor ?>; <?php endif; ?>
}

div.moduletable_menu ul li a:hover,
div.moduletable_menu ul li ul li a:hover,
a.sublevel:hover, 
div.module_menu ul li a:hover,
div.module_menu ul li ul li a:hover
{ 
<?php if ($menuHvColor > " ") : ?>color: <?php echo $menuHvColor ?>; <?php endif; ?>
<?php if ($menuHvDecoration > " ") : ?>text-decoration: <?php echo $menuHvDecoration ?>; <?php endif; ?>
}

<?php if ($breakpointMobile > " ") : ?>
/* begin @media breakpointMobile */
@media (max-width: <?php echo $breakpointMobile ?>px)  {
#icons
{   /* icons fb etc meer naar links en breder  */ 
left: 0%;
width: 100%; 
<?php if ($this->countModules('headerleft') and $hlWidth > " " and $hlWidth < 40) : ?>
left: <?php echo $hlWidth; ?>%;
width: <?php echo 100 - $hlWidth; ?>%;
<?php endif; ?>

}
 }
/* einde @media breakpointMobile */
<?php endif; ?>

</style>

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />

<![endif]-->

<!--[if IE 7]> 
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
<![endif]--> 



</head>

<body id="page_bg" >
<a  id="up"></a>
  <div id="wrapper">
  <div id="headerleft">
  <?php if(  $this->countModules('headerleft'))    : ?>
             <jdoc:include type="modules" name="headerleft"  />
  <?php endif; ?>
    </div><!--einde headerleft-->  
    <div id="logo">
	<?php if ($logo > " ") : ?>
    <a href="<?php echo $this->baseurl ?>" title="Home" >
      <img id="logo_img" src="<?php echo $this->baseurl ?><?php echo $logo; ?>" alt="logo" />
    </a>
    <?php endif; ?>
	</div><!-- einde logo -->
	
    <div id="page_heading">
       <?php if(  $showTitle)    : ?><h1><?php  echo $this->getTitle(); ?></h1><?php endif; ?>
        <?php if(  $this->countModules('position-1'))    : ?>
            <jdoc:include type="modules" name="position-1"  />
        <?php endif; ?>
        <?php if(  $this->countModules('position-2'))    : ?>
            <jdoc:include type="modules" name="position-2" style="xhtml" />
        <?php endif; ?>
  </div><!-- einde page_heading -->
      <?php if ($leftWidth > 0 ) : ?>
	<div id="leftcolumn">
             <?php if(  $this->countModules('position-9'))    : ?>
               <jdoc:include type="modules" name="position-9" />
            <?php endif; ?>
            <?php if(  $this->countModules('position-10'))    : ?>
               <jdoc:include type="modules" name="position-10" style="rounded" />
           <?php endif; ?>
	</div> <!-- einde leftcolumn -->
	<?php endif; ?>

  <div id="area">
 
<!-- left column is onderdeel van maincolumn --> 
             <div id="maincolumn"><!-- maincolumn -->
                   <jdoc:include type="component" />
          <div class="clr"></div>
           <?php if(  $this->countModules('position-3'))    : ?>
               <jdoc:include type="modules" name="position-3" />
            <?php endif; ?>
            <?php if(  $this->countModules('position-4'))    : ?>
               <jdoc:include type="modules" name="position-4" style="rounded" />
           <?php endif; ?>
         <div class="clr"></div>
          </div><!-- maincolumn einde -->
    </div> <!-- einde area-->
    <?php if ($rightWidth > 0 ) : ?>
	<div id="rightcolumn">
             <?php if(  $this->countModules('position-5'))    : ?>
               <jdoc:include type="modules" name="position-5" />
            <?php endif; ?>
            <?php if(  $this->countModules('position-6'))    : ?>
               <jdoc:include type="modules" name="position-6" style="rounded" />
           <?php endif; ?>
	</div> <!-- einde rightcolumn -->
	<?php endif; ?>
   </div> <!-- einde wrapper -->
      <?php if(  $this->countModules('icons'))    : ?>
        <div id="icons">
           <jdoc:include type="modules" name="icons" />
		</div>   
      <?php endif; ?>
      <?php if(  $this->countModules('footer'))    : ?>
	    <div id="footer">
          <jdoc:include type="modules" name="footer"  />
		</div>  
      <?php endif; ?>


</body>
</html>
