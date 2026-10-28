<?php
// Sidebar icons as an inline SVG sprite, used with
// <svg><use href="#icon-name"></use></svg>. 24x24 line icons drawn with
// currentColor so they follow the text colour.
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
  <defs>
    <!-- a pair of terraced houses -->
    <symbol id="icon-house" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <path d="M2 11.5 7 7l5 4.5L17 7l5 4.5"/>
      <path d="M3.5 10.5V20h17v-9.5"/>
      <path d="M12 11.5V20"/>
      <path d="M6 20v-4h2.5v4M15.5 20v-4H18v4"/>
    </symbol>
    <!-- time series chart -->
    <symbol id="icon-chart" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <path d="M3 3v18h18"/>
      <path d="m6.5 15 3-5 3 3.5 3.5-7 3 4.5"/>
    </symbol>
    <!-- wind turbine -->
    <symbol id="icon-turbine" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="9" r="1.5"/>
      <path d="M12 7.5V2.5M10.7 9.75 6.4 12.25M13.3 9.75l4.3 2.5"/>
      <path d="M12 10.5 11.25 21M12 10.5l.75 10.5M8.5 21h7"/>
    </symbol>
    <!-- lab flask -->
    <symbol id="icon-flask" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 3h6M10 3v6.5L4.8 18.6A1.6 1.6 0 0 0 6.2 21h11.6a1.6 1.6 0 0 0 1.4-2.4L14 9.5V3"/>
      <path d="M7.2 15h9.6"/>
    </symbol>
    <!-- molecule -->
    <symbol id="icon-molecule" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="6" cy="7" r="2.5"/>
      <circle cx="18" cy="7" r="2.5"/>
      <circle cx="12" cy="17.5" r="2.5"/>
      <path d="M8.5 7h7M7.3 9.2l3.4 6.1M16.7 9.2l-3.4 6.1"/>
    </symbol>
    <!-- clock -->
    <symbol id="icon-clock" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="12" r="9"/>
      <path d="M12 7v5l3.5 2"/>
    </symbol>
    <!-- document, the default -->
    <symbol id="icon-document" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
      <path d="M6 3h8l4 4v14H6z"/>
      <path d="M14 3v4h4M9 12h6M9 15.5h6"/>
    </symbol>
  </defs>
</svg>
