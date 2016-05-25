<style type="text/css">

    /* Reset */
    .flip-clock-wrapper * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-clock-wrapper a {
      cursor: pointer;
      text-decoration: none;
      color: #ccc; }

    .flip-clock-wrapper a:hover {
      color: #fff; }

    .flip-clock-wrapper ul {
      list-style: none; }

    .flip-clock-wrapper.clearfix:before,
    .flip-clock-wrapper.clearfix:after {
      content: " ";
      display: table; }

    .flip-clock-wrapper.clearfix:after {
      clear: both; }

    .flip-clock-wrapper.clearfix {
      *zoom: 1; }

    /* Main */
    .flip-clock-wrapper {
      font: normal 11px "Helvetica Neue", Helvetica, sans-serif;
      -webkit-user-select: none; }

    .flip-clock-meridium {
      background: none !important;
      box-shadow: 0 0 0 !important;
      font-size: 36px !important; }

    .flip-clock-meridium a { color: #313333; }

    .flip-clock-wrapper {
      text-align: center;
      position: relative;
      width: 100%;
      margin: 1em;
    }

    .flip-clock-wrapper:before,
    .flip-clock-wrapper:after {
        content: " "; /* 1 */
        display: table; /* 2 */
    }
    .flip-clock-wrapper:after {
        clear: both;
    }

    /* Skeleton */
    .flip-clock-wrapper ul {
      position: relative;
      float: left;
      margin: 5px;
      width: 60px;
      height: 90px;
      font-size: 80px;
      font-weight: bold;
      line-height: 87px;
      border-radius: 6px;
      background: #000;
    }

    .flip-clock-wrapper ul li {
      z-index: 1;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      line-height: 87px;
      text-decoration: none !important;
    }

    .flip-clock-wrapper ul li:first-child {
      z-index: 2; }

    .flip-clock-wrapper ul li a {
      display: block;
      height: 100%;
      -webkit-perspective: 200px;
      -moz-perspective: 200px;
      perspective: 200px;
      margin: 0 !important;
      overflow: visible !important;
      cursor: default !important; }

    .flip-clock-wrapper ul li a div {
      z-index: 1;
      position: absolute;
      left: 0;
      width: 100%;
      height: 50%;
      font-size: 80px;
      overflow: hidden;
      outline: 1px solid transparent; }

    .flip-clock-wrapper ul li a div .shadow {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 2; }

    .flip-clock-wrapper ul li a div.up {
      -webkit-transform-origin: 50% 100%;
      -moz-transform-origin: 50% 100%;
      -ms-transform-origin: 50% 100%;
      -o-transform-origin: 50% 100%;
      transform-origin: 50% 100%;
      top: 0; }

    .flip-clock-wrapper ul li a div.up:after {
      content: "";
      position: absolute;
      top: 44px;
      left: 0;
      z-index: 5;
      width: 100%;
      height: 3px;
      background-color: #000;
      background-color: rgba(0, 0, 0, 0.4); }

    .flip-clock-wrapper ul li a div.down {
      -webkit-transform-origin: 50% 0;
      -moz-transform-origin: 50% 0;
      -ms-transform-origin: 50% 0;
      -o-transform-origin: 50% 0;
      transform-origin: 50% 0;
      bottom: 0;
      border-bottom-left-radius: 6px;
      border-bottom-right-radius: 6px;
    }

    .flip-clock-wrapper ul li a div div.inn {
      position: absolute;
      left: 0;
      z-index: 1;
      width: 100%;
      height: 200%;
      color: #ccc;
      text-shadow: 0 1px 2px #000;
      text-align: center;
      background-color: #333;
      border-radius: 6px;
      font-size: 70px; }

    .flip-clock-wrapper ul li a div.up div.inn {
      top: 0; }

    .flip-clock-wrapper ul li a div.down div.inn {
      bottom: 0; }

    /* PLAY */
    .flip-clock-wrapper ul.play li.flip-clock-before {
      z-index: 3; }

    .flip-clock-wrapper .flip {   box-shadow: 0 2px 5px rgba(0, 0, 0, 0.7); }

    .flip-clock-wrapper ul.play li.flip-clock-active {
      -webkit-animation: asd 0.5s 0.5s linear both;
      -moz-animation: asd 0.5s 0.5s linear both;
      animation: asd 0.5s 0.5s linear both;
      z-index: 5; }

    .flip-clock-divider {
      float: left;
      display: inline-block;
      position: relative;
      width: 20px;
      height: 100px; }

    .flip-clock-divider:first-child {
      width: 0; }

    .flip-clock-dot {
      display: block;
      background: #323434;
      width: 10px;
      height: 10px;
      position: absolute;
      border-radius: 50%;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
      left: 5px; }

    .flip-clock-divider .flip-clock-label {
      position: absolute;
      top: -1.5em;
      right: -86px;
      color: black;
      text-shadow: none; }

    .flip-clock-divider.minutes .flip-clock-label {
      right: -88px; }

    .flip-clock-divider.seconds .flip-clock-label {
      right: -91px; }

    .flip-clock-dot.top {
      top: 30px; }

    .flip-clock-dot.bottom {
      bottom: 30px; }

    @-webkit-keyframes asd {
      0% {
        z-index: 2; }

      20% {
        z-index: 4; }

      100% {
        z-index: 4; } }

    @-moz-keyframes asd {
      0% {
        z-index: 2; }

      20% {
        z-index: 4; }

      100% {
        z-index: 4; } }

    @-o-keyframes asd {
      0% {
        z-index: 2; }

      20% {
        z-index: 4; }

      100% {
        z-index: 4; } }

    @keyframes asd {
      0% {
        z-index: 2; }

      20% {
        z-index: 4; }

      100% {
        z-index: 4; } }

    .flip-clock-wrapper ul.play li.flip-clock-active .down {
      z-index: 2;
      -webkit-animation: turn 0.5s 0.5s linear both;
      -moz-animation: turn 0.5s 0.5s linear both;
      animation: turn 0.5s 0.5s linear both; }

    @-webkit-keyframes turn {
      0% {
        -webkit-transform: rotateX(90deg); }

      100% {
        -webkit-transform: rotateX(0deg); } }

    @-moz-keyframes turn {
      0% {
        -moz-transform: rotateX(90deg); }

      100% {
        -moz-transform: rotateX(0deg); } }

    @-o-keyframes turn {
      0% {
        -o-transform: rotateX(90deg); }

      100% {
        -o-transform: rotateX(0deg); } }

    @keyframes turn {
      0% {
        transform: rotateX(90deg); }

      100% {
        transform: rotateX(0deg); } }

    .flip-clock-wrapper ul.play li.flip-clock-before .up {
      z-index: 2;
      -webkit-animation: turn2 0.5s linear both;
      -moz-animation: turn2 0.5s linear both;
      animation: turn2 0.5s linear both; }

    @-webkit-keyframes turn2 {
      0% {
        -webkit-transform: rotateX(0deg); }

      100% {
        -webkit-transform: rotateX(-90deg); } }

    @-moz-keyframes turn2 {
      0% {
        -moz-transform: rotateX(0deg); }

      100% {
        -moz-transform: rotateX(-90deg); } }

    @-o-keyframes turn2 {
      0% {
        -o-transform: rotateX(0deg); }

      100% {
        -o-transform: rotateX(-90deg); } }

    @keyframes turn2 {
      0% {
        transform: rotateX(0deg); }

      100% {
        transform: rotateX(-90deg); } }

    .flip-clock-wrapper ul li.flip-clock-active {
      z-index: 3; }

    /* SHADOW */
    .flip-clock-wrapper ul.play li.flip-clock-before .up .shadow {
      background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.1)), color-stop(100%, black));
      background: linear, top, rgba(0, 0, 0, 0.1) 0%, black 100%;
      background: -o-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
      background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
      background: linear, to bottom, rgba(0, 0, 0, 0.1) 0%, black 100%;
      -webkit-animation: show 0.5s linear both;
      -moz-animation: show 0.5s linear both;
      animation: show 0.5s linear both; }

    .flip-clock-wrapper ul.play li.flip-clock-active .up .shadow {
      background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.1)), color-stop(100%, black));
      background: linear, top, rgba(0, 0, 0, 0.1) 0%, black 100%;
      background: -o-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
      background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, black 100%);
      background: linear, to bottom, rgba(0, 0, 0, 0.1) 0%, black 100%;
      -webkit-animation: hide 0.5s 0.3s linear both;
      -moz-animation: hide 0.5s 0.3s linear both;
      animation: hide 0.5s 0.3s linear both; }

    /*DOWN*/
    .flip-clock-wrapper ul.play li.flip-clock-before .down .shadow {
      background: -moz-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, black), color-stop(100%, rgba(0, 0, 0, 0.1)));
      background: linear, top, black 0%, rgba(0, 0, 0, 0.1) 100%;
      background: -o-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
      background: -ms-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
      background: linear, to bottom, black 0%, rgba(0, 0, 0, 0.1) 100%;
      -webkit-animation: show 0.5s linear both;
      -moz-animation: show 0.5s linear both;
      animation: show 0.5s linear both; }

    .flip-clock-wrapper ul.play li.flip-clock-active .down .shadow {
      background: -moz-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, black), color-stop(100%, rgba(0, 0, 0, 0.1)));
      background: linear, top, black 0%, rgba(0, 0, 0, 0.1) 100%;
      background: -o-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
      background: -ms-linear-gradient(top, black 0%, rgba(0, 0, 0, 0.1) 100%);
      background: linear, to bottom, black 0%, rgba(0, 0, 0, 0.1) 100%;
      -webkit-animation: hide 0.5s 0.3s linear both;
      -moz-animation: hide 0.5s 0.3s linear both;
      animation: hide 0.5s 0.2s linear both; }

    @-webkit-keyframes show {
      0% {
        opacity: 0; }

      100% {
        opacity: 1; } }

    @-moz-keyframes show {
      0% {
        opacity: 0; }

      100% {
        opacity: 1; } }

    @-o-keyframes show {
      0% {
        opacity: 0; }

      100% {
        opacity: 1; } }

    @keyframes show {
      0% {
        opacity: 0; }

      100% {
        opacity: 1; } }

    @-webkit-keyframes hide {
      0% {
        opacity: 1; }

      100% {
        opacity: 0; } }

    @-moz-keyframes hide {
      0% {
        opacity: 1; }

      100% {
        opacity: 0; } }

    @-o-keyframes hide {
      0% {
        opacity: 1; }

      100% {
        opacity: 0; } }

    @keyframes hide {
      0% {
        opacity: 1; }

      100% {
        opacity: 0; } }


    /*** CUSTOM STYLES ***/


    li{
      list-style: inherit;
      font-size: initial;
    }

    .flip-clock-wrapper ul{
      background:#203c5e;
      width:20px;
      height:32px;
      padding:0;
      font-size:22px;
      line-height:22px;
      margin: 5px 2px;
    }

    .flip-clock-wrapper ul li{
      line-height:30px;
    }

    .flip-clock-wrapper ul li a div div.inn{
      background:#203c5e;
      color: #fff;
      font-size:22px;
    }

    .flip-clock-wrapper ul li a div.up:after{
      background-color:rgba(32, 60, 94, 0.4);
    }

    .flip-clock-wrapper ul li a div.up:after{
      top: 15px;
    }

    .flip-clock-wrapper .flip{
      box-shadow:none;
    }

    .flip-clock-dot{
      width:4px;
      height:4px;
      background:white;
      border-radius:none;
    }

    .flip-clock-divider .flip-clock-label {
        right:initial;
        top: -10px;
        left:5px;
        font-size: 10px;
        color:white;
        text-align:left;
    }

    .flip-clock-divider.hours .flip-clock-label {
        left:15px;
    }

    .flip-clock-divider.minutes .flip-clock-label {
        right: initial;
        left: 15px;
    }

    .flip-clock-divider.seconds .flip-clock-label {
        right: initial;
        left: 15px;
    }

    .flip-clock-divider{
        width: 12px;
        height: 40px;
    }


    .flip-clock-dot.top {
        top: 25px;
    }

    .flip-clock-dot.bottom {
        bottom: 25px;
    }

    .countdown__wrap{
        position: absolute;
        bottom:2px;
        right:10px;
        width:100%;
        max-width:230px;
        margin:0;
    }

    @media (max-width: 360px) {
        .countdown__wrap{
            position: relative;
            margin:0 auto;
            top:2px;
        }
    }

    .countdown h1{
        position: absolute;
        top:0;
        right:20px;
        margin:0;
        padding:0;
        border:0;
        font-family:Arial, sans-serif;
        font-size:14px;
        line-height:32px;
        font-weight:bold;
        text-transform:uppercase;
        letter-spacing:1px;
        color:white;
    }

    @media (max-width: 360px) {
        .countdown h1{
            position: relative;
            right:0;
            margin:0 auto;
            text-align:center;
        }
    }


    /*** CUSTOM STYLES TO CHANGE ***/

    .countdown{
      position: relative;
      width:100%;
      max-width:380px;
      height:78px;
      border-radius:5px;
      background: #286795;
      background: -moz-linear-gradient(top,  #286795 0%, #012351 100%);
      background: -webkit-linear-gradient(top,  #286795 0%,#012351 100%);
      background: linear-gradient(to bottom,  #286795 0%,#012351 100%);
      -webkit-box-shadow: 1px 1px 15px 1px rgba(0,0,0,0.26);
      -moz-box-shadow: 1px 1px 15px 1px rgba(0,0,0,0.26);
      box-shadow: 1px 1px 15px 1px rgba(0,0,0,0.26);
    }

    @media (max-width: 360px) {
        .countdown{
            max-width:99%;
        }
    }

    .countdown:after{
        content:"";
        display:block;
        margin-left:10px;
        width:108px;
        height:78px;
        background-repeat:no-repeat;
        background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGoAAABOCAYAAADIHIO3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo2ZjE1OTlmZS1iYThlLWY0NDQtYjNkNC0xMGU3YjBhNjI0YmQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTM1Rjc4N0ExQThFMTFFNjgwMTE5NTIzM0ExODlFQ0IiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTM1Rjc4NzkxQThFMTFFNjgwMTE5NTIzM0ExODlFQ0IiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODM2NTUwNWQtNDUyMS0zODQ1LTlkODQtOTRjNDYwNjQxZTE0IiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6MmU3NTk1MjgtMjBiZi0xMWU2LWE0ODQt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');

    }

    @media (max-width: 360px) {
        .countdown:after{
            display:none;
        }
    }




</style>
