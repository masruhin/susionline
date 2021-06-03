
<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>CodePen Demo</title>

  <meta name="robots" content="noindex">	

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/swarm/pen/WMyeVX">

  
  
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:800">

  <style class="INLINE_PEN_STYLESHEET_ID">
    body {
  background: #000;
  height: 100vh;
  overflow: hidden;
}

#ui .love {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -225px 0 0 -225px;
}
#ui .love:last-child .love_word {
  color: red;
  font-size: 3.5rem;
  text-shadow: 0 0 10px red;
}
#ui .love_word {
  color: #fff;
  font-size: 1.4rem;
  transform: translateY(-100%) rotateZ(-30deg);
  font-family: "Dosis", sans-serif;
  text-shadow: 0 0 10px #ffc800;
  letter-spacing: 2px;
}
#ui .love_horizontal {
  animation: horizontal 10000ms infinite alternate ease-in-out;
}
#ui .love_vertical {
  animation: vertical 20000ms infinite linear;
}
#ui .love:nth-child(1) .love_horizontal {
  animation-delay: -300ms;
}
#ui .love:nth-child(1) .love_vertical {
  animation-delay: -300ms;
}
#ui .love:nth-child(2) .love_horizontal {
  animation-delay: -600ms;
}
#ui .love:nth-child(2) .love_vertical {
  animation-delay: -600ms;
}
#ui .love:nth-child(3) .love_horizontal {
  animation-delay: -900ms;
}
#ui .love:nth-child(3) .love_vertical {
  animation-delay: -900ms;
}
#ui .love:nth-child(4) .love_horizontal {
  animation-delay: -1200ms;
}
#ui .love:nth-child(4) .love_vertical {
  animation-delay: -1200ms;
}
#ui .love:nth-child(5) .love_horizontal {
  animation-delay: -1500ms;
}
#ui .love:nth-child(5) .love_vertical {
  animation-delay: -1500ms;
}
#ui .love:nth-child(6) .love_horizontal {
  animation-delay: -1800ms;
}
#ui .love:nth-child(6) .love_vertical {
  animation-delay: -1800ms;
}
#ui .love:nth-child(7) .love_horizontal {
  animation-delay: -2100ms;
}
#ui .love:nth-child(7) .love_vertical {
  animation-delay: -2100ms;
}
#ui .love:nth-child(8) .love_horizontal {
  animation-delay: -2400ms;
}
#ui .love:nth-child(8) .love_vertical {
  animation-delay: -2400ms;
}
#ui .love:nth-child(9) .love_horizontal {
  animation-delay: -2700ms;
}
#ui .love:nth-child(9) .love_vertical {
  animation-delay: -2700ms;
}
#ui .love:nth-child(10) .love_horizontal {
  animation-delay: -3000ms;
}
#ui .love:nth-child(10) .love_vertical {
  animation-delay: -3000ms;
}
#ui .love:nth-child(11) .love_horizontal {
  animation-delay: -3300ms;
}
#ui .love:nth-child(11) .love_vertical {
  animation-delay: -3300ms;
}
#ui .love:nth-child(12) .love_horizontal {
  animation-delay: -3600ms;
}
#ui .love:nth-child(12) .love_vertical {
  animation-delay: -3600ms;
}
#ui .love:nth-child(13) .love_horizontal {
  animation-delay: -3900ms;
}
#ui .love:nth-child(13) .love_vertical {
  animation-delay: -3900ms;
}
#ui .love:nth-child(14) .love_horizontal {
  animation-delay: -4200ms;
}
#ui .love:nth-child(14) .love_vertical {
  animation-delay: -4200ms;
}
#ui .love:nth-child(15) .love_horizontal {
  animation-delay: -4500ms;
}
#ui .love:nth-child(15) .love_vertical {
  animation-delay: -4500ms;
}
#ui .love:nth-child(16) .love_horizontal {
  animation-delay: -4800ms;
}
#ui .love:nth-child(16) .love_vertical {
  animation-delay: -4800ms;
}
#ui .love:nth-child(17) .love_horizontal {
  animation-delay: -5100ms;
}
#ui .love:nth-child(17) .love_vertical {
  animation-delay: -5100ms;
}
#ui .love:nth-child(18) .love_horizontal {
  animation-delay: -5400ms;
}
#ui .love:nth-child(18) .love_vertical {
  animation-delay: -5400ms;
}
#ui .love:nth-child(19) .love_horizontal {
  animation-delay: -5700ms;
}
#ui .love:nth-child(19) .love_vertical {
  animation-delay: -5700ms;
}
#ui .love:nth-child(20) .love_horizontal {
  animation-delay: -6000ms;
}
#ui .love:nth-child(20) .love_vertical {
  animation-delay: -6000ms;
}
#ui .love:nth-child(21) .love_horizontal {
  animation-delay: -6300ms;
}
#ui .love:nth-child(21) .love_vertical {
  animation-delay: -6300ms;
}
#ui .love:nth-child(22) .love_horizontal {
  animation-delay: -6600ms;
}
#ui .love:nth-child(22) .love_vertical {
  animation-delay: -6600ms;
}
#ui .love:nth-child(23) .love_horizontal {
  animation-delay: -6900ms;
}
#ui .love:nth-child(23) .love_vertical {
  animation-delay: -6900ms;
}
#ui .love:nth-child(24) .love_horizontal {
  animation-delay: -7200ms;
}
#ui .love:nth-child(24) .love_vertical {
  animation-delay: -7200ms;
}
#ui .love:nth-child(25) .love_horizontal {
  animation-delay: -7500ms;
}
#ui .love:nth-child(25) .love_vertical {
  animation-delay: -7500ms;
}
#ui .love:nth-child(26) .love_horizontal {
  animation-delay: -7800ms;
}
#ui .love:nth-child(26) .love_vertical {
  animation-delay: -7800ms;
}
#ui .love:nth-child(27) .love_horizontal {
  animation-delay: -8100ms;
}
#ui .love:nth-child(27) .love_vertical {
  animation-delay: -8100ms;
}
#ui .love:nth-child(28) .love_horizontal {
  animation-delay: -8400ms;
}
#ui .love:nth-child(28) .love_vertical {
  animation-delay: -8400ms;
}
#ui .love:nth-child(29) .love_horizontal {
  animation-delay: -8700ms;
}
#ui .love:nth-child(29) .love_vertical {
  animation-delay: -8700ms;
}
#ui .love:nth-child(30) .love_horizontal {
  animation-delay: -9000ms;
}
#ui .love:nth-child(30) .love_vertical {
  animation-delay: -9000ms;
}
#ui .love:nth-child(31) .love_horizontal {
  animation-delay: -9300ms;
}
#ui .love:nth-child(31) .love_vertical {
  animation-delay: -9300ms;
}
#ui .love:nth-child(32) .love_horizontal {
  animation-delay: -9600ms;
}
#ui .love:nth-child(32) .love_vertical {
  animation-delay: -9600ms;
}
#ui .love:nth-child(33) .love_horizontal {
  animation-delay: -9900ms;
}
#ui .love:nth-child(33) .love_vertical {
  animation-delay: -9900ms;
}
#ui .love:nth-child(34) .love_horizontal {
  animation-delay: -10200ms;
}
#ui .love:nth-child(34) .love_vertical {
  animation-delay: -10200ms;
}
#ui .love:nth-child(35) .love_horizontal {
  animation-delay: -10500ms;
}
#ui .love:nth-child(35) .love_vertical {
  animation-delay: -10500ms;
}
#ui .love:nth-child(36) .love_horizontal {
  animation-delay: -10800ms;
}
#ui .love:nth-child(36) .love_vertical {
  animation-delay: -10800ms;
}
#ui .love:nth-child(37) .love_horizontal {
  animation-delay: -11100ms;
}
#ui .love:nth-child(37) .love_vertical {
  animation-delay: -11100ms;
}
#ui .love:nth-child(38) .love_horizontal {
  animation-delay: -11400ms;
}
#ui .love:nth-child(38) .love_vertical {
  animation-delay: -11400ms;
}
#ui .love:nth-child(39) .love_horizontal {
  animation-delay: -11700ms;
}
#ui .love:nth-child(39) .love_vertical {
  animation-delay: -11700ms;
}
#ui .love:nth-child(40) .love_horizontal {
  animation-delay: -12000ms;
}
#ui .love:nth-child(40) .love_vertical {
  animation-delay: -12000ms;
}
#ui .love:nth-child(41) .love_horizontal {
  animation-delay: -12300ms;
}
#ui .love:nth-child(41) .love_vertical {
  animation-delay: -12300ms;
}
#ui .love:nth-child(42) .love_horizontal {
  animation-delay: -12600ms;
}
#ui .love:nth-child(42) .love_vertical {
  animation-delay: -12600ms;
}
#ui .love:nth-child(43) .love_horizontal {
  animation-delay: -12900ms;
}
#ui .love:nth-child(43) .love_vertical {
  animation-delay: -12900ms;
}
#ui .love:nth-child(44) .love_horizontal {
  animation-delay: -13200ms;
}
#ui .love:nth-child(44) .love_vertical {
  animation-delay: -13200ms;
}
#ui .love:nth-child(45) .love_horizontal {
  animation-delay: -13500ms;
}
#ui .love:nth-child(45) .love_vertical {
  animation-delay: -13500ms;
}
#ui .love:nth-child(46) .love_horizontal {
  animation-delay: -13800ms;
}
#ui .love:nth-child(46) .love_vertical {
  animation-delay: -13800ms;
}
#ui .love:nth-child(47) .love_horizontal {
  animation-delay: -14100ms;
}
#ui .love:nth-child(47) .love_vertical {
  animation-delay: -14100ms;
}
#ui .love:nth-child(48) .love_horizontal {
  animation-delay: -14400ms;
}
#ui .love:nth-child(48) .love_vertical {
  animation-delay: -14400ms;
}
#ui .love:nth-child(49) .love_horizontal {
  animation-delay: -14700ms;
}
#ui .love:nth-child(49) .love_vertical {
  animation-delay: -14700ms;
}
#ui .love:nth-child(50) .love_horizontal {
  animation-delay: -15000ms;
}
#ui .love:nth-child(50) .love_vertical {
  animation-delay: -15000ms;
}
#ui .love:nth-child(51) .love_horizontal {
  animation-delay: -15300ms;
}
#ui .love:nth-child(51) .love_vertical {
  animation-delay: -15300ms;
}
#ui .love:nth-child(52) .love_horizontal {
  animation-delay: -15600ms;
}
#ui .love:nth-child(52) .love_vertical {
  animation-delay: -15600ms;
}
#ui .love:nth-child(53) .love_horizontal {
  animation-delay: -15900ms;
}
#ui .love:nth-child(53) .love_vertical {
  animation-delay: -15900ms;
}
#ui .love:nth-child(54) .love_horizontal {
  animation-delay: -16200ms;
}
#ui .love:nth-child(54) .love_vertical {
  animation-delay: -16200ms;
}
#ui .love:nth-child(55) .love_horizontal {
  animation-delay: -16500ms;
}
#ui .love:nth-child(55) .love_vertical {
  animation-delay: -16500ms;
}
#ui .love:nth-child(56) .love_horizontal {
  animation-delay: -16800ms;
}
#ui .love:nth-child(56) .love_vertical {
  animation-delay: -16800ms;
}
#ui .love:nth-child(57) .love_horizontal {
  animation-delay: -17100ms;
}
#ui .love:nth-child(57) .love_vertical {
  animation-delay: -17100ms;
}
#ui .love:nth-child(58) .love_horizontal {
  animation-delay: -17400ms;
}
#ui .love:nth-child(58) .love_vertical {
  animation-delay: -17400ms;
}
#ui .love:nth-child(59) .love_horizontal {
  animation-delay: -17700ms;
}
#ui .love:nth-child(59) .love_vertical {
  animation-delay: -17700ms;
}
#ui .love:nth-child(60) .love_horizontal {
  animation-delay: -18000ms;
}
#ui .love:nth-child(60) .love_vertical {
  animation-delay: -18000ms;
}
#ui .love:nth-child(61) .love_horizontal {
  animation-delay: -18300ms;
}
#ui .love:nth-child(61) .love_vertical {
  animation-delay: -18300ms;
}
#ui .love:nth-child(62) .love_horizontal {
  animation-delay: -18600ms;
}
#ui .love:nth-child(62) .love_vertical {
  animation-delay: -18600ms;
}
#ui .love:nth-child(63) .love_horizontal {
  animation-delay: -18900ms;
}
#ui .love:nth-child(63) .love_vertical {
  animation-delay: -18900ms;
}
#ui .love:nth-child(64) .love_horizontal {
  animation-delay: -19200ms;
}
#ui .love:nth-child(64) .love_vertical {
  animation-delay: -19200ms;
}
#ui .love:nth-child(65) .love_horizontal {
  animation-delay: -19500ms;
}
#ui .love:nth-child(65) .love_vertical {
  animation-delay: -19500ms;
}
#ui .love:nth-child(66) .love_horizontal {
  animation-delay: -19800ms;
}
#ui .love:nth-child(66) .love_vertical {
  animation-delay: -19800ms;
}
#ui .love:nth-child(67) .love_horizontal {
  animation-delay: -20100ms;
}
#ui .love:nth-child(67) .love_vertical {
  animation-delay: -20100ms;
}
#ui .love:nth-child(68) .love_horizontal {
  animation-delay: -20400ms;
}
#ui .love:nth-child(68) .love_vertical {
  animation-delay: -20400ms;
}
#ui .love:nth-child(69) .love_horizontal {
  animation-delay: -20700ms;
}
#ui .love:nth-child(69) .love_vertical {
  animation-delay: -20700ms;
}
#ui .love:nth-child(70) .love_horizontal {
  animation-delay: -21000ms;
}
#ui .love:nth-child(70) .love_vertical {
  animation-delay: -21000ms;
}
#ui .love:nth-child(71) .love_horizontal {
  animation-delay: -21300ms;
}
#ui .love:nth-child(71) .love_vertical {
  animation-delay: -21300ms;
}
#ui .love:nth-child(72) .love_horizontal {
  animation-delay: -21600ms;
}
#ui .love:nth-child(72) .love_vertical {
  animation-delay: -21600ms;
}
#ui .love:nth-child(73) .love_horizontal {
  animation-delay: -21900ms;
}
#ui .love:nth-child(73) .love_vertical {
  animation-delay: -21900ms;
}
#ui .love:nth-child(74) .love_horizontal {
  animation-delay: -22200ms;
}
#ui .love:nth-child(74) .love_vertical {
  animation-delay: -22200ms;
}
#ui .love:nth-child(75) .love_horizontal {
  animation-delay: -22500ms;
}
#ui .love:nth-child(75) .love_vertical {
  animation-delay: -22500ms;
}
#ui .love:nth-child(76) .love_horizontal {
  animation-delay: -22800ms;
}
#ui .love:nth-child(76) .love_vertical {
  animation-delay: -22800ms;
}
#ui .love:nth-child(77) .love_horizontal {
  animation-delay: -23100ms;
}
#ui .love:nth-child(77) .love_vertical {
  animation-delay: -23100ms;
}
#ui .love:nth-child(78) .love_horizontal {
  animation-delay: -23400ms;
}
#ui .love:nth-child(78) .love_vertical {
  animation-delay: -23400ms;
}
#ui .love:nth-child(79) .love_horizontal {
  animation-delay: -23700ms;
}
#ui .love:nth-child(79) .love_vertical {
  animation-delay: -23700ms;
}
#ui .love:nth-child(80) .love_horizontal {
  animation-delay: -24000ms;
}
#ui .love:nth-child(80) .love_vertical {
  animation-delay: -24000ms;
}
#ui .love:nth-child(81) .love_horizontal {
  animation-delay: -24300ms;
}
#ui .love:nth-child(81) .love_vertical {
  animation-delay: -24300ms;
}
#ui .love:nth-child(82) .love_horizontal {
  animation-delay: -24600ms;
}
#ui .love:nth-child(82) .love_vertical {
  animation-delay: -24600ms;
}
#ui .love:nth-child(83) .love_horizontal {
  animation-delay: -24900ms;
}
#ui .love:nth-child(83) .love_vertical {
  animation-delay: -24900ms;
}
#ui .love:nth-child(84) .love_horizontal {
  animation-delay: -25200ms;
}
#ui .love:nth-child(84) .love_vertical {
  animation-delay: -25200ms;
}
#ui .love:nth-child(85) .love_horizontal {
  animation-delay: -25500ms;
}
#ui .love:nth-child(85) .love_vertical {
  animation-delay: -25500ms;
}
#ui .love:nth-child(86) .love_horizontal {
  animation-delay: -25800ms;
}
#ui .love:nth-child(86) .love_vertical {
  animation-delay: -25800ms;
}
#ui .love:nth-child(87) .love_horizontal {
  animation-delay: -26100ms;
}
#ui .love:nth-child(87) .love_vertical {
  animation-delay: -26100ms;
}
#ui .love:nth-child(88) .love_horizontal {
  animation-delay: -26400ms;
}
#ui .love:nth-child(88) .love_vertical {
  animation-delay: -26400ms;
}
#ui .love:nth-child(89) .love_horizontal {
  animation-delay: -26700ms;
}
#ui .love:nth-child(89) .love_vertical {
  animation-delay: -26700ms;
}
#ui .love:nth-child(90) .love_horizontal {
  animation-delay: -27000ms;
}
#ui .love:nth-child(90) .love_vertical {
  animation-delay: -27000ms;
}
#ui .love:nth-child(91) .love_horizontal {
  animation-delay: -27300ms;
}
#ui .love:nth-child(91) .love_vertical {
  animation-delay: -27300ms;
}
#ui .love:nth-child(92) .love_horizontal {
  animation-delay: -27600ms;
}
#ui .love:nth-child(92) .love_vertical {
  animation-delay: -27600ms;
}
#ui .love:nth-child(93) .love_horizontal {
  animation-delay: -27900ms;
}
#ui .love:nth-child(93) .love_vertical {
  animation-delay: -27900ms;
}
#ui .love:nth-child(94) .love_horizontal {
  animation-delay: -28200ms;
}
#ui .love:nth-child(94) .love_vertical {
  animation-delay: -28200ms;
}
#ui .love:nth-child(95) .love_horizontal {
  animation-delay: -28500ms;
}
#ui .love:nth-child(95) .love_vertical {
  animation-delay: -28500ms;
}
#ui .love:nth-child(96) .love_horizontal {
  animation-delay: -28800ms;
}
#ui .love:nth-child(96) .love_vertical {
  animation-delay: -28800ms;
}
#ui .love:nth-child(97) .love_horizontal {
  animation-delay: -29100ms;
}
#ui .love:nth-child(97) .love_vertical {
  animation-delay: -29100ms;
}
#ui .love:nth-child(98) .love_horizontal {
  animation-delay: -29400ms;
}
#ui .love:nth-child(98) .love_vertical {
  animation-delay: -29400ms;
}
#ui .love:nth-child(99) .love_horizontal {
  animation-delay: -29700ms;
}
#ui .love:nth-child(99) .love_vertical {
  animation-delay: -29700ms;
}
#ui .love:nth-child(100) .love_horizontal {
  animation-delay: -30000ms;
}
#ui .love:nth-child(100) .love_vertical {
  animation-delay: -30000ms;
}

@keyframes horizontal {
  from {
    transform: translateX(0px);
  }
  to {
    transform: translateX(450px);
  }
}
@keyframes vertical {
  0% {
    transform: translateY(180px);
  }
  10% {
    transform: translateY(45px);
  }
  15% {
    transform: translateY(4.5px);
  }
  18% {
    transform: translateY(0px);
  }
  20% {
    transform: translateY(4.5px);
  }
  22% {
    transform: translateY(34.6153846154px);
  }
  24% {
    transform: translateY(64.2857142857px);
  }
  25% {
    transform: translateY(112.5px);
  }
  26% {
    transform: translateY(64.2857142857px);
  }
  28% {
    transform: translateY(34.6153846154px);
  }
  30% {
    transform: translateY(4.5px);
  }
  32% {
    transform: translateY(0px);
  }
  35% {
    transform: translateY(4.5px);
  }
  40% {
    transform: translateY(45px);
  }
  50% {
    transform: translateY(180px);
  }
  71% {
    transform: translateY(428.5714285714px);
  }
  72.5% {
    transform: translateY(441.1764705882px);
  }
  75% {
    transform: translateY(450px);
  }
  77.5% {
    transform: translateY(441.1764705882px);
  }
  79% {
    transform: translateY(428.5714285714px);
  }
  100% {
    transform: translateY(180px);
  }
}
  </style>

  
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d8236034cc3508e70b0763f2575a8bb5850f9aea541206ce56704c013047d712.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-bb9a2ba1f03f6147732cb3cd52ac86c6b24524aa87a05ed0b726f11e46d7e277.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
</head>

<body>
  
<div id="ui">
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Semangat</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">I</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Love</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">You</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">I Love you</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">=</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">=</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">WILL</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">YOU</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">MARRY</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">ME</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">?</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">I</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">need</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">you</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">and</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">You</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Are</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">My</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Dream</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Future</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">in</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">My</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">World</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
  <div class="love">
    <div class="love_horizontal">
      <div class="love_vertical">
        <div class="love_word">Amel</div>
      </div>
    </div>
  </div>
</div>
  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
  <script  src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-b7dde639-da65-588f-7d7f-4834f9c2dbf9" crossorigin></script>
</body>

</html>