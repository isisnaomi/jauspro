<body class="light-bg">

<div class="collection-device-grid">
		<div class="layout">
				<main id="content">
						<!--Change devices with class "light" or "dark"-->
						<section id="template-selector" class="light">

								<div id="template-grid">
										<div class="template-grid-copy device-grid-copy"></div>
										<span class="filter-wrapper"></span>
										<div class="device-grid-wrapper">
												<div class="template-grid device-grid">

														<figure class="grid-item left device tablet">
																<a class="hover-trigger" href="#" name="Card"></a>
																<div class="device-hardware"></div>
																<div class="hover-mask">
																		<a href="#">
																				<span><span>View </span><strong>Card</strong></span>
																		</a>
																</div>
																<div class="device-screen">
																		<div class="screen-content is--visible" style="background-image: url(plantilla1_tablet.png?format=300w);"><img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/563891b4e4b0073853ce630f/5638e456e4b0bcbea32a1f40/1446569050308/landing-full-centercard-01.png?format=300w">
																		</div>
																</div>
																<figcaption>Card</figcaption>
														</figure>

														<figure class="grid-item device monitor">
																<a class="hover-trigger" href="#" name="Focus"></a>
																<div class="device-hardware" data-reactid=".0.$=1$grid.2.1.$5638961be4b06dabba8dd51b.1"></div>
																<div class="hover-mask">
																		<a href="/coverpage/layouts/focus" name="Focus">
																				<span><span>View </span><strong>Focus</strong></span>
																		</a>
																</div>
																<div class="device-screen">
																		<div class="screen-content is--visible" style="background-image: url(plantilla1.jpg?format=500w);"><img src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/563891b4e4b0073853ce630f/5638e387e4b090df1b02efec/1446568840446/profile-center-center-01.png?format=500w"></div>
																</div>
																<figcaption data-reactid=".0.$=1$grid.2.1.$5638961be4b06dabba8dd51b.4">Focus</figcaption>
														</figure>

														<figure class="grid-item right device laptop">
																<a class="hover-trigger" href="/coverpage/layouts/vanguard" name="Vanguard" data-id="563899bde4b01c4506da423d" data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.0"></a>
																<div class="device-hardware" data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.1"></div>
																<div class="hover-mask" data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.2"><a href="/coverpage/layouts/vanguard" name="Vanguard" data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.2.0"><span data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.2.0.0"><span data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.2.0.0.0">View </span><strong data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.2.0.0.1">Vanguard</strong></span></a></div>
																<div class="device-screen" data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.3">
																		<div class="screen-content is--visible" data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.3.0" style="background-image: url(plantilla1_laptop.png?format=500w);"><img data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.3.0.0" src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/563891b4e4b0073853ce630f/5638e0c1e4b003fbd40c1d88/1446568134859/profile-full-left-01.png?format=500w"></div>
																</div>
																<figcaption data-reactid=".0.$=1$grid.2.1.$563899bde4b01c4506da423d.4">Vanguard</figcaption>
														</figure>
												</div>
										</div>
								</div>
						</section>
				</main>
		</div>
</div>

</body>
<style>

.device-grid-wrapper {
    position: relative;
    margin: auto;
}

.device-grid-wrapper .device-grid {
    width: 70%;
    padding-bottom: 100px;
    margin: auto;
    transform: translate3d(0,0,0);
    transition: opacity 250ms ease-in-out,transform 500ms cubic-bezier(.33,0,.2,1) 0ms
}

.device-grid-wrapper .device-grid.is--leaving {
    transform: translate3d(0,.5vw,0);
    opacity: 0
}

.device-grid-wrapper .device-grid:after {
    content: '';
    clear: both;
    display: block
}

.device-grid-wrapper .device-grid .grid-item {
    width: 100%;
    margin: 0 0 30% 0;
    opacity: 1;
    transform: translate3d(0,0,0)
}

.device-grid-wrapper .device-grid .grid-item-enter {
    opacity: .01;

    transform: translate3d(0,-2vw,0)
}

.device-grid-wrapper .device-grid .grid-item-enter.grid-item-enter-active {
    opacity: 1;
    transform: translate3d(0,0,0);
    transition: opacity 200ms ease-in-out,transform 400ms cubic-bezier(.33,0,.2,1) 0ms
}

.device-grid-wrapper .device-grid .grid-item-leave {
    opacity: 1;
    transform: translate3d(0,0,0)
}

.device-grid-wrapper .device-grid .grid-item-leave.grid-item-leave-active {
    opacity: .01;
    transition: opacity 200ms ease-in-out,transform 400ms cubic-bezier(.33,0,.2,1) 0ms
}

.device-grid-wrapper .two-per-row .device-grid {
    width: 100%;
    padding: 5% 9%;
    box-sizing: border-box
}

.device-grid-wrapper .two-per-row .device-grid .grid-item {
    width: 42.5%;
    margin-left: 0;
    float: left;
    margin-bottom: 20%
}

.device-grid-wrapper .two-per-row .device-grid .grid-item:nth-child(odd) {
    margin-right: 15%
}

.device-grid-wrapper .two-per-row .device-grid .left {
    margin-left: 0;
    margin-right: 15%
}

.device-grid-wrapper .two-per-row .device-grid .left.monitor {
    margin-left: -3.4%;
    margin-right: 12.2%
}

.device-grid-wrapper .two-per-row .device-grid .left.laptop {
    margin-right: 12.5%;
    width: 38.8%;
    margin-top: 2.2%
}

.device-grid-wrapper .two-per-row .device-grid .right {
    margin-right: 0
}

.device-grid-wrapper .two-per-row .device-grid .monitor {
    width: 48.7%
}

.device-grid-wrapper .two-per-row .device-grid .monitor+.tablet.right {
    margin-top: -.5%
}

.device-grid-wrapper .three-per-row .device-grid {
    padding: 0 6.4%
}

.device-grid-wrapper .three-per-row .device-grid .left {
    margin-left: 0 !important
}

.device-grid-wrapper .three-per-row .device-grid .right {
    margin-right: 0 !important
}

.device-grid-wrapper .three-per-row .device-grid .grid-item {
    width: 23.2%;
    margin-right: 10.5%;
    margin-bottom: 10%
}

.device-grid-wrapper .three-per-row .device-grid .grid-item:nth-child(odd) {
    margin-right: 10.5%
}

.device-grid-wrapper .three-per-row .device-grid .grid-item.tablet {
    margin-top: 2.6%
}

.device-grid-wrapper .three-per-row .device-grid .grid-item.laptop {
    width: 24.2%;
    margin-top: 2%
}

.device-grid-wrapper .three-per-row .device-grid .grid-item.monitor {
    width: 31.4%;
    margin-right: 10.5%
}

@media all and (min-width: 768px) {
    .device-grid-wrapper .device-grid {
        width:100%;
        padding: 5% 9%;
        box-sizing: border-box
    }

    .device-grid-wrapper .device-grid .grid-item {
        width: 42.5%;
        margin-left: 0;
        float: left;
        margin-bottom: 20%
    }

    .device-grid-wrapper .device-grid .grid-item:nth-child(odd) {
        margin-right: 15%
    }

    .device-grid-wrapper .device-grid .left {
        margin-left: 0;
        margin-right: 15%
    }

    .device-grid-wrapper .device-grid .left.monitor {
        margin-left: -3.4%;
        margin-right: 12.2%
    }

    .device-grid-wrapper .device-grid .left.laptop {
        margin-right: 12.5%;
        width: 38.8%;
        margin-top: 2.2%
    }

    .device-grid-wrapper .device-grid .right {
        margin-right: 0
    }

    .device-grid-wrapper .device-grid .monitor {
        width: 48.7%
    }

    .device-grid-wrapper .device-grid .monitor+.tablet.right {
        margin-top: -.5%
    }
}

@media all and (min-width: 1281px) {
    .device-grid-wrapper .device-grid {
        padding:0 6.4%
    }

    .device-grid-wrapper .device-grid .left {
        margin-left: 0 !important
    }

    .device-grid-wrapper .device-grid .right {
        margin-right: 0 !important
    }

    .device-grid-wrapper .device-grid .grid-item {
        width: 23.2%;
        margin-right: 10.5%;
        margin-bottom: 10%
    }

    .device-grid-wrapper .device-grid .grid-item:nth-child(odd) {
        margin-right: 10.5%
    }

    .device-grid-wrapper .device-grid .grid-item.tablet {
        margin-top: 2.6%
    }

    .device-grid-wrapper .device-grid .grid-item.laptop {
        width: 24.2%;
        margin-top: 2%
    }

    .device-grid-wrapper .device-grid .grid-item.monitor {
        width: 31.4%;
        margin-right: 10.5%
    }
}

@media all and (min-width: 768px) {
    .device-grid-wrapper .device.laptop .screen-content img {
        height:177px;
        width: calc(1.523809524 * 177px)
    }
}

@media all and (min-width: 1024px) {
    .device-grid-wrapper .device.laptop .screen-content img {
        height:236px;
        width: calc(1.523809524 * 236px)
    }
}

@media all and (min-width: 1281px) {
    .device-grid-wrapper .device.laptop .screen-content img {
        height:178px;
        width: calc(1.523809524 * 178px)
    }
}

@media all and (min-width: 1441px) {
    .device-grid-wrapper .device.laptop .screen-content img {
        height:201px;
        width: calc(1.523809524 * 201px)
    }
}

@media all and (min-width: 1601px) {
    .device-grid-wrapper .device.laptop .screen-content img {
        height:223px;
        width: calc(1.523809524 * 223px)
    }
}

@media all and (min-width: 1920px) {
    .device-grid-wrapper .device.laptop .screen-content img {
        height:267px;
        width: calc(1.523809524 * 267px)
    }
}

@media all and (min-width: 768px) {
    .device-grid-wrapper .device.monitor .screen-content img {
        height:175px;
        width: calc(1.76056338 * 175px)
    }
}

@media all and (min-width: 1024px) {
    .device-grid-wrapper .device.monitor .screen-content img {
        height:233px;
        width: calc(1.76056338 * 233px)
    }
}

@media all and (min-width: 1281px) {
    .device-grid-wrapper .device.monitor .screen-content img {
        height:200px;
        width: calc(1.76056338 * 200px)
    }
}

@media all and (min-width: 1441px) {
    .device-grid-wrapper .device.monitor .screen-content img {
        height:225px;
        width: calc(1.76056338 * 225px)
    }
}

@media all and (min-width: 1601px) {
    .device-grid-wrapper .device.monitor .screen-content img {
        height:250px;
        width: calc(1.76056338 * 250px)
    }
}

@media all and (min-width: 1920px) {
    .device-grid-wrapper .device.monitor .screen-content img {
        height:300px;
        width: calc(1.76056338 * 300px)
    }
}

@media all and (min-width: 768px) {
    .device-grid-wrapper .device.tablet .screen-content img {
        height:177px;
        width: calc(1.523809524 * 177px)
    }
}

@media all and (min-width: 1024px) {
    .device-grid-wrapper .device.tablet .screen-content img {
        height:236px;
        width: calc(1.523809524 * 236px)
    }
}

@media all and (min-width: 1281px) {
    .device-grid-wrapper .device.tablet .screen-content img {
        height:171px;
        width: calc(1.523809524 * 171px)
    }
}

@media all and (min-width: 1441px) {
    .device-grid-wrapper .device.tablet .screen-content img {
        height:192px;
        width: calc(1.523809524 * 192px)
    }
}

@media all and (min-width: 1601px) {
    .device-grid-wrapper .device.tablet .screen-content img {
        height:214px;
        width: calc(1.523809524 * 214px)
    }
}

@media all and (min-width: 1920px) {
    .device-grid-wrapper .device.tablet .screen-content img {
        height:256px;
        width: calc(1.523809524 * 256px)
    }
}

@media all and (min-width: 768px) {
    .device-grid-wrapper {
        max-width:768px
    }
}

@media all and (min-width: 1024px) {
    .device-grid-wrapper {
        max-width:1024px
    }
}

@media all and (min-width: 1281px) {
    .device-grid-wrapper {
        max-width:1281px
    }
}

@media all and (min-width: 1441px) {
    .device-grid-wrapper {
        max-width:1441px
    }
}

@media all and (min-width: 1601px) {
    .device-grid-wrapper {
        max-width:1601px
    }
}

@media all and (min-width: 1920px) {
    .device-grid-wrapper {
        max-width:1920px
    }
}

.device-grid-copy {
    margin: 60px 9% 40px
}

@media all and (min-width: 1281px) {
    .device-grid-copy {
        margin-left:6.4%;
        margin-right: 6.4%
    }
}

.device-grid-copy div {
    font-size: 10px;
    letter-spacing: .3em;
    text-transform: uppercase;
    font-weight: 400
}

.device-grid-copy h1 {
    text-align: left;
    font-size: 18px;
    letter-spacing: .08em;
    line-height: 1.3em;
    text-transform: uppercase;
    font-weight: 400;
    margin: 0 auto;
    display: inline-block;
    width: 100%
}

.device-grid-copy.dark h1 {
    color: #fff
}

.device-grid-copy p {
    color: #c1c1c1;
    margin: auto;
    font-size: 12px;
    margin: 2em auto;
    width: auto;
    max-width: 530px;
    letter-spacing: 0em;
    padding: 0;
    margin: 0;
    text-align: left
}

@media all and (min-width: 1024px) {
    .device-grid-copy p {
        display:block
    }
}

.collection-device-grid .overlay.live-preview,.collection-template-selector .overlay.live-preview {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: rgba(0,0,0,.8);
    z-index: 1000
}

.collection-device-grid .overlay.live-preview .preview-info,.collection-template-selector .overlay.live-preview .preview-info {
    height: 120px;
    width: 100%;
    box-sizing: border-box;
    position: absolute;
    z-index: 1002;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .2em;
    top: 0;
    background-color: rgba(0,0,0,.95);
    opacity: 0
}

.collection-device-grid .overlay.live-preview .preview-info a.start-button,.collection-template-selector .overlay.live-preview .preview-info a.start-button {
    padding: 1.6em 3em;
    background: rgba(255,255,255,.9);
    color: #000 !important;
    font-weight: 400;
    letter-spacing: .13em;
    margin-top: 0;
    line-height: 120px;
    margin-left: 35px;
    font-size: 12px;
    transition-property: background;
    transition-duration: 300ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .overlay.live-preview .preview-info a.start-button:hover,.collection-template-selector .overlay.live-preview .preview-info a.start-button:hover {
    background: #fff
}

.collection-device-grid .overlay.live-preview .preview-info a.live-url,.collection-template-selector .overlay.live-preview .preview-info a.live-url {
    font-weight: 200;
    letter-spacing: .08em;
    font-size: 12px;
    text-transform: none;
    display: inline-block;
    margin-left: 5em;
    color: #ccc !important;
    transition-property: color;
    transition-duration: 300ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .overlay.live-preview .preview-info a.live-url:hover,.collection-template-selector .overlay.live-preview .preview-info a.live-url:hover {
    color: #f2f2f2 !important
}

.collection-device-grid .overlay.live-preview .exit,.collection-template-selector .overlay.live-preview .exit {
    padding: 51px 30px
}

.collection-device-grid .overlay.live-preview iframe,.collection-template-selector .overlay.live-preview iframe {
    z-index: 1002;
    position: absolute;
    bottom: 0;
    background: #fff;
    opacity: 0;
    height: calc(100% - 120px);
    top: 120px
}

.collection-device-grid .overlay.live-preview iframe.is-loaded,.collection-template-selector .overlay.live-preview iframe.is-loaded {
    display: block;
    opacity: 1;
    transition: opacity 500ms cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .overlay.live-preview iframe.is-loaded+.preview-info,.collection-template-selector .overlay.live-preview iframe.is-loaded+.preview-info {
    top: 0;
    opacity: 1;
    transition-property: opacity;
    transition-duration: 500ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .overlay.live-preview.mobile,.collection-template-selector .overlay.live-preview.mobile {
    background-color: rgba(0,0,0,.85)
}

.collection-device-grid .overlay.live-preview.mobile .phone-wrapper,.collection-template-selector .overlay.live-preview.mobile .phone-wrapper {
    opacity: 1;
    width: 300px;
    z-index: 1002;
    top: calc(50% - (510px / 2));
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto
}

.collection-device-grid .overlay.live-preview.mobile .phone-wrapper .device.phone .device-hardware,.collection-template-selector .overlay.live-preview.mobile .phone-wrapper .device.phone .device-hardware {
    width: 121.5%;
    height: 177%;
    top: -14.2%;
    left: -12.5%
}

.collection-device-grid .overlay.live-preview.mobile .phone-wrapper .device.phone iframe,.collection-template-selector .overlay.live-preview.mobile .phone-wrapper .device.phone iframe {
    width: 96.2%;
    height: 100%
}

.collection-device-grid .overlay.live-preview.mobile .phone-wrapper img,.collection-template-selector .overlay.live-preview.mobile .phone-wrapper img {
    height: 510px;
    margin: auto
}

.collection-device-grid .overlay.live-preview.overlay-enter,.collection-template-selector .overlay.live-preview.overlay-enter {
    background-color: rgba(0,0,0,0)
}

.collection-device-grid .overlay.live-preview.overlay-enter iframe,.collection-template-selector .overlay.live-preview.overlay-enter iframe {
    display: none
}

.collection-device-grid .overlay.live-preview.overlay-enter.overlay-enter-active,.collection-template-selector .overlay.live-preview.overlay-enter.overlay-enter-active {
    background-color: rgba(0,0,0,.8);

    transition-property: background-color;
    transition-duration: 1ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .overlay.live-preview.overlay-enter.overlay-enter-active iframe,.collection-template-selector .overlay.live-preview.overlay-enter.overlay-enter-active iframe {
    display: block
}

.collection-device-grid .overlay.live-preview.overlay-leave,.collection-template-selector .overlay.live-preview.overlay-leave {
    opacity: 1;
    background-color: rgba(0,0,0,.8)
}

.collection-device-grid .overlay.live-preview.overlay-leave.overlay-leave-active,.collection-template-selector .overlay.live-preview.overlay-leave.overlay-leave-active {
    opacity: 0;
    background-color: rgba(0,0,0,.8);

    transition-property: opacity;
    transition-duration: 400ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .device,.collection-template-selector .device {
    position: relative
}

.collection-device-grid .device a:focus,.collection-template-selector .device a:focus,.collection-device-grid .device a:active,.collection-template-selector .device a:active {
    outline: none
}

.collection-device-grid .device .device-screen,.collection-template-selector .device .device-screen {
    width: 100%;
    overflow: hidden
}

.collection-device-grid .device .screen-content,.collection-template-selector .device .screen-content {
    width: 100%;
    height: auto;
    position: relative;
    background-color: #333;
    top: 0;
    background-size: cover;

    transition-property: top;
    transition-duration: 300ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1);

    transition-delay: 50ms
}

.collection-device-grid .device .screen-content img,.collection-template-selector .device .screen-content img {
    width: 100%;
    height: auto;
    display: block;
    visibility: hidden;

    transition-property: opacity;
    transition-duration: 300ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1)
}

.collection-device-grid .device .device-hardware,.collection-template-selector .device .device-hardware {
    position: absolute;
    z-index: 20;
    background-size: contain;
    background-repeat: no-repeat;
    image-rendering: -webkit-optimize-contrast
}

.collection-device-grid .device figcaption,.collection-template-selector .device figcaption {
    text-align: center;
    font-size: 9px;
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    font-family: 'Gotham A','Gotham B',sans-serif;
    color: #aeaeae;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: .15em;
    visibility: hidden;
    display: none
}

.collection-device-grid .device .hover-trigger,.collection-template-selector .device .hover-trigger {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 30
}

.collection-device-grid .device .hover-mask,.collection-template-selector .device .hover-mask {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    z-index: 15;
    text-align: center;
    text-transform: uppercase;
    font-size: 11px;
    box-sizing: border-box;
    line-height: 0;
    overflow: hidden;
    transition-property: background-color;
    transition-duration: 2000ms;
    transition-timing-function: cubic-bezier(0,1,.38,1)
}

.collection-device-grid .device .hover-mask a,.collection-template-selector .device .hover-mask a {
    display: block;
    height: 8em;
    bottom: -8em;
    position: absolute;
    width: 100%;
    background: #fff;
    box-sizing: border-box;
    padding: 4em 0;
    transition-property: bottom;
    transition-duration: 300ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1);
    transition-delay: 50ms
}

.collection-device-grid .device .hover-mask a span,.collection-template-selector .device .hover-mask a span {
    opacity: 0;
    transition-property: opacity;
    transition-duration: 300ms;
    transition-timing-function: cubic-bezier(.33,0,.2,1);
    transition-delay: 50ms;
    padding: .25em
}

.collection-device-grid .device .hover-mask a span strong,.collection-template-selector .device .hover-mask a span strong {
    color: inherit;
    font-weight: 500;
    -webkit-font-smoothing: auto
}

.no-touch .collection-device-grid .hover-trigger:hover~.device-screen .screen-content,.no-touch .collection-template-selector .device .hover-trigger:hover~.device-screen .screen-content {
    top: -20px
}

.no-touch .collection-device-grid .hover-trigger:hover~.hover-mask a,.no-touch .collection-template-selector .device .hover-trigger:hover~.hover-mask a {
    bottom: 0
}

.no-touch .collection-device-grid .hover-trigger:hover~.hover-mask a span,.no-touch .collection-template-selector .device .hover-trigger:hover~.hover-mask a span {
    opacity: 1;
    transition-delay: 100ms
}

.collection-device-grid .device.monitor .device-hardware,.collection-template-selector .device.monitor .device-hardware {
    width: 114.8%;
    height: 189.6%;
    top: -7%;
    left: -4%;
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/light/monitor/monitor.png')
}

.collection-device-grid .device.monitor .device-screen,.collection-template-selector .device.monitor .device-screen {
    height: 40vw;
    margin-bottom: 33vw
}

@media all and (min-width: 768px) {
    .collection-device-grid .device.monitor .device-screen,.collection-template-selector .device.monitor .device-screen {
        height:auto;
        margin-bottom: 0
    }
}

.collection-device-grid .dark .device.monitor .device-hardware,.collection-template-selector .dark .device.monitor .device-hardware {
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/dark/monitor/monitor.png')
}

.collection-device-grid .device.tablet .device-hardware,.collection-template-selector .device.tablet .device-hardware {
    width: 132.2%;
    height: 189.6%;
    top: -17%;
    left: -16%;
    image-rendering: auto;
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/light/tablet/tablet.png')
}

.collection-device-grid .device.tablet .device-screen,.collection-template-selector .device.tablet .device-screen {
    height: 46vw
}

@media all and (min-width: 768px) {
    .collection-device-grid .device.tablet .device-screen,.collection-template-selector .device.tablet .device-screen {
        height:auto
    }
}

.collection-device-grid .dark .device.tablet .device-hardware,.collection-template-selector .dark .device.tablet .device-hardware {
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/dark/tablet/tablet.png')
}

.collection-device-grid .device.laptop .device-hardware,.collection-template-selector .device.laptop .device-hardware {
    width: 131.9%;
    height: 189.6%;
    top: -16.2%;
    left: -16%;
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/light/laptop/laptop.png')
}

.collection-device-grid .device.laptop .device-screen,.collection-template-selector .device.laptop .device-screen {
    height: 46vw
}

@media all and (min-width: 768px) {
    .collection-device-grid .device.laptop .device-screen,.collection-template-selector .device.laptop .device-screen {
        height:auto
    }
}

.collection-device-grid .dark .device.laptop .device-hardware,.collection-template-selector .dark .device.laptop .device-hardware {
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/dark/laptop/laptop.png')
}

.collection-device-grid .device.phone .device-hardware,.collection-template-selector .device.phone .device-hardware {
    width: 126.3%;
    height: 177.1%;
    top: -13.7%;
    left: -10.9%;
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/light/phone/phone.png')
}

.collection-device-grid .device.phone iframe,.collection-template-selector .device.phone iframe {
    top: 0
}

.collection-device-grid .dark .device.phone .device-hardware,.collection-template-selector .dark .device.phone .device-hardware {
    background-image: url('https://static1.squarespace.com/static/ta/5134cbefe4b0c6fb04df8065/8370/assets/collections/device-grid/devices/dark/phone/phone.png')
}
</style>

<script>
var $button = $('#uiSwitch button'),
	$template = $('#template-selector'),
		$body = $('body')

$button.on('click', function(e){
	$template.toggleClass('dark');
	$body.toggleClass('dark-bg');
});</script>
