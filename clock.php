<?php

 header('Content-type: image/svg+xml; charset=utf-8');

 $s = gmdate('s') / 60;
 $m = (gmdate('i') + $s) / 60;
 $h = (gmdate('H') + $m) / 24;
 $w = (gmdate('w') + $h) / 7;

 $s *= 360;
 $m *= 360;
 $h *= 360;
 $w *= 360;

?>
<svg xmlns="http://www.w3.org/2000/svg"
  version="1.1"
  xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 0 640 640">
 <style>
  text
  { dominant-baseline: central;
    text-anchor: middle;
    font-family: serif; }
  .h
  { font-size: 40px;
    stroke: #000;
    fill: none; }
  .m
  { font-size: 20px;
    stroke: #000;
    fill : #000; }
  .w
  { font-size: 15px;
    stroke: #777;
    fill: #777; }
  #t line
  { stroke-width: 3px;
    stroke: #000; }
 </style>
 <circle cx="320" cy="320" r="300" fill="#fff" stroke-width="10" stroke="#000"/>
 <text class="h" x="320" y="45">12</text>
 <text class="h" x="320" y="45" transform="rotate(15 320 320)">13</text>
 <text class="h" x="320" y="45" transform="rotate(30 320 320)">14</text>
 <text class="h" x="320" y="45" transform="rotate(45 320 320)">15</text>
 <text class="h" x="320" y="45" transform="rotate(60 320 320)">16</text>
 <text class="h" x="320" y="45" transform="rotate(75 320 320)">17</text>
 <text class="h" x="320" y="45" transform="rotate(90 320 320)">18</text>
 <text class="h" x="320" y="45" transform="rotate(105 320 320)">19</text>
 <text class="h" x="320" y="45" transform="rotate(120 320 320)">20</text>
 <text class="h" x="320" y="45" transform="rotate(135 320 320)">21</text>
 <text class="h" x="320" y="45" transform="rotate(150 320 320)">22</text>
 <text class="h" x="320" y="45" transform="rotate(165 320 320)">23</text>
 <text class="h" x="320" y="45" transform="rotate(180 320 320)">00</text>
 <text class="h" x="320" y="45" transform="rotate(195 320 320)">01</text>
 <text class="h" x="320" y="45" transform="rotate(210 320 320)">02</text>
 <text class="h" x="320" y="45" transform="rotate(225 320 320)">03</text>
 <text class="h" x="320" y="45" transform="rotate(240 320 320)">04</text>
 <text class="h" x="320" y="45" transform="rotate(255 320 320)">05</text>
 <text class="h" x="320" y="45" transform="rotate(270 320 320)">06</text>
 <text class="h" x="320" y="45" transform="rotate(285 320 320)">07</text>
 <text class="h" x="320" y="45" transform="rotate(300 320 320)">08</text>
 <text class="h" x="320" y="45" transform="rotate(315 320 320)">09</text>
 <text class="h" x="320" y="45" transform="rotate(330 320 320)">10</text>
 <text class="h" x="320" y="45" transform="rotate(345 320 320)">11</text>
 <text class="m" x="320" y="80">30</text>
 <text class="m" x="320" y="80" transform="rotate(30 320 320)">35</text>
 <text class="m" x="320" y="80" transform="rotate(60 320 320)">40</text>
 <text class="m" x="320" y="80" transform="rotate(90 320 320)">45</text>
 <text class="m" x="320" y="80" transform="rotate(120 320 320)">50</text>
 <text class="m" x="320" y="80" transform="rotate(150 320 320)">55</text>
 <text class="m" x="320" y="80" transform="rotate(180 320 320)">00</text>
 <text class="m" x="320" y="80" transform="rotate(210 320 320)">05</text>
 <text class="m" x="320" y="80" transform="rotate(240 320 320)">10</text>
 <text class="m" x="320" y="80" transform="rotate(270 320 320)">15</text>
 <text class="m" x="320" y="80" transform="rotate(300 320 320)">20</text>
 <text class="m" x="320" y="80" transform="rotate(330 320 320)">25</text>
 <g id="t">
  <g id="t3">
   <line id="t1" x1="320" y1="75" x2="320" y2="85" transform="rotate(6 320 320)"/>
   <use xlink:href="#t1" transform="rotate(30 320 320)"/>
   <use xlink:href="#t1" transform="rotate(60 320 320)"/>
   <use xlink:href="#t1" transform="rotate(90 320 320)"/>
  </g>
  <use xlink:href="#t3" transform="rotate(90 320 320)"/>
  <use xlink:href="#t3" transform="rotate(180 320 320)"/>
  <use xlink:href="#t3" transform="rotate(270 320 320)"/>
 </g>
 <use xlink:href="#t" transform="rotate(6 320 320)"/>
 <use xlink:href="#t" transform="rotate(12 320 320)"/>
 <use xlink:href="#t" transform="rotate(18 320 320)"/>
 <text class="w" x="320" y="120" transform="rotate(25.7 320 320)">THU</text>
 <text class="w" x="320" y="120" transform="rotate(77.1 320 320)">FRI</text>
 <text class="w" x="320" y="120" transform="rotate(128.6 320 320)">SAT</text>
 <text class="w" x="320" y="120" transform="rotate(180 320 320)">SUN</text>
 <text class="w" x="320" y="120" transform="rotate(231.4 320 320)">MON</text>
 <text class="w" x="320" y="120" transform="rotate(282.9 320 320)">TUE</text>
 <text class="w" x="320" y="120" transform="rotate(334.3 320 320)">WED</text>
 <line id="w" x1="320" y1="320" x2="320" y2="500" stroke-width="12" stroke="#777">
  <animateTransform
    attributeName="transform"
    attributeType="XML"
    type="rotate"
    from="<?= $w ?> 320 320"
    to="<?= 360 + $w ?> 320 320"
    dur="168h"
    repeatCount="indefinite"/>
 </line>
 <line id="h" x1="320" y1="320" x2="320" y2="520" stroke-width="10" stroke="#000">
  <animateTransform
    attributeName="transform"
    attributeType="XML"
    type="rotate"
    from="<?= $h ?> 320 320"
    to="<?= 360 + $h ?> 320 320"
    dur="24h"
    repeatCount="indefinite"/>
 </line>
 <line id="m" x1="320" y1="320" x2="320" y2="560" stroke-width="5" stroke="#000">
  <animateTransform
    attributeName="transform"
    attributeType="XML"
    type="rotate"
    from="<?= $m ?> 320 320"
    to="<?= 360 + $m ?> 320 320"
    dur="1h"
    repeatCount="indefinite"/>
 </line>
 <line id="s" x1="320" y1="320" x2="320" y2="580" stroke-width="2" stroke="#f77">
  <animateTransform
    attributeName="transform"
    attributeType="XML"
    type="rotate"
    from="<?= $s ?> 320 320"
    to="<?= 360 + $s ?> 320 320"
    dur="60s"
    repeatCount="indefinite"/>
 </line>
 <circle cx="320" cy="320" r="20" fill="#000"/>
</svg>
