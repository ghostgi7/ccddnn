<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="TK8">
<style>
    @-webkit-keyframes rotate {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        50% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotate {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        50% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    #bodyLoading {
        width: 80px;
        height: 80px;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        background: rgba(0, 0, 0, .8);
        z-index: 10000;
        border-radius: 50%;
        padding: 7px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .loader {
        position: relative;
        margin: auto;
        width: 60px;
        height: 60px;
        display: block;
        overflow: hidden;
    }

    .loader .d1 {
        width: 54px;
        height: 54px;
    }

    .loader .d2 {
        width: 48px;
        height: 48px;
    }

    .loader .d3 {
        width: 42px;
        height: 42px;
    }

    .loader .d4 {
        width: 36px;
        height: 36px;
    }

    .loader .d5 {
        width: 30px;
        height: 30px;
    }

    .loader .d6 {
        width: 24px;
        height: 24px;
    }

    .loader3, .loader3 div {
        border-radius: 50%;
        padding: 1px;
        border: 2px solid transparent;
        -webkit-animation: rotate linear 3.5s infinite;
        animation: rotate linear 3.5s infinite;
        border-top-color: rgba(255, 255, 255, 0.5);
        border-left-color: #f5cc5b;
        -webkit-animation-timing-function: cubic-bezier(0.55, 0.38, 0.21, 0.88);
        animation-timing-function: cubic-bezier(0.55, 0.38, 0.21, 0.88);
        -webkit-animation-duration: 3s;
        animation-duration: 3s;
    }

    .loader, .loader * {
        will-change: transform;
    }</style>

<link href="{cms_template}/css/chunk-common.dc01d954.css" rel="preload" as="style">
<link href="{cms_template}/css/chunk-vendors.04631ed5.css" rel="preload" as="style">
<link href="{cms_template}/css/index.2c775289.css" rel="preload" as="style">
<link href="{cms_template}/js/index.5beb45b5.js" rel="preload" as="script">
<link href="{cms_template}/css/chunk-vendors.04631ed5.css" rel="stylesheet">
<link href="{cms_template}/css/chunk-common.dc01d954.css" rel="stylesheet">
<link href="{cms_template}/css/index.2c775289.css" rel="stylesheet">
<style type="text/css">
    .v--modal-block-scroll {
        overflow: hidden;
        width: 100vw;
    }

    .v--modal-overlay {
        position: fixed;
        box-sizing: border-box;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.2);
        z-index: 999;
        opacity: 1;
    }

    .v--modal-overlay.scrollable {
        height: 100%;
        min-height: 100vh;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
    }

    .v--modal-overlay .v--modal-background-click {
        min-height: 100%;
        width: 100%;
    }

    .v--modal-overlay .v--modal-box {
        position: relative;
        overflow: hidden;
        box-sizing: border-box;
    }

    .v--modal-overlay.scrollable .v--modal-box {
        margin-bottom: 2px;
    }

    .v--modal {
        background-color: white;
        text-align: left;
        border-radius: 3px;
        box-shadow: 0 20px 60px -2px rgba(27, 33, 58, 0.4);
        padding: 0;
    }

    .v--modal.v--modal-fullscreen {
        width: 100vw;
        height: 100vh;
        margin: 0;
        left: 0;
        top: 0;
    }

    .v--modal-top-right {
        display: block;
        position: absolute;
        right: 0;
        top: 0;
    }

    .overlay-fade-enter-active,
    .overlay-fade-leave-active {
        transition: all 0.2s;
    }

    .overlay-fade-enter,
    .overlay-fade-leave-active {
        opacity: 0;
    }

    .nice-modal-fade-enter-active,
    .nice-modal-fade-leave-active {
        transition: all 0.4s;
    }

    .nice-modal-fade-enter,
    .nice-modal-fade-leave-active {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>
<style type="text/css">
    .vue-modal-resizer {
        display: block;
        overflow: hidden;
        position: absolute;
        width: 12px;
        height: 12px;
        right: 0;
        bottom: 0;
        z-index: 9999999;
        background: transparent;
        cursor: se-resize;
    }

    .vue-modal-resizer::after {
        display: block;
        position: absolute;
        content: '';
        background: transparent;
        left: 0;
        top: 0;
        width: 0;
        height: 0;
        border-bottom: 10px solid #ddd;
        border-left: 10px solid transparent;
    }

    .vue-modal-resizer.clicked::after {
        border-bottom: 10px solid #369be9;
    }
</style>
<style type="text/css">
    .vue-dialog div {
        box-sizing: border-box;
    }

    .vue-dialog .dialog-flex {
        width: 100%;
        height: 100%;
    }

    .vue-dialog .dialog-content {
        flex: 1 0 auto;
        width: 100%;
        padding: 15px;
        font-size: 14px;
    }

    .vue-dialog .dialog-c-title {
        font-weight: 600;
        padding-bottom: 15px;
    }

    .vue-dialog .dialog-c-text {
    }

    .vue-dialog .vue-dialog-buttons {
        display: flex;
        flex: 0 1 auto;
        width: 100%;
        border-top: 1px solid #eee;
    }

    .vue-dialog .vue-dialog-buttons-none {
        width: 100%;
        padding-bottom: 15px;
    }

    .vue-dialog-button {
        font-size: 12px !important;
        background: transparent;
        padding: 0;
        margin: 0;
        border: 0;
        cursor: pointer;
        box-sizing: border-box;
        line-height: 40px;
        height: 40px;
        color: inherit;
        font: inherit;
        outline: none;
    }

    .vue-dialog-button:hover {
        background: rgba(0, 0, 0, 0.01);
    }

    .vue-dialog-button:active {
        background: rgba(0, 0, 0, 0.025);
    }

    .vue-dialog-button:not(:first-of-type) {
        border-left: 1px solid #eee;
    }
</style>
<style type="text/css">
    .carousel-3d-container[data-v-c06c963c] {
        min-height: 1px;
        width: 100%;
        position: relative;
        z-index: 0;
        overflow: hidden;
        margin: 20px auto;
        box-sizing: border-box
    }

    .carousel-3d-slider[data-v-c06c963c] {
        position: relative;
        margin: 0 auto;
        transform-style: preserve-3d;
        -webkit-perspective: 1000px;
        -moz-perspective: 1000px;
        perspective: 1000px
    }</style>
<style type="text/css">
    .carousel-3d-controls[data-v-43e93932] {
        position: absolute;
        top: 50%;
        height: 0;
        margin-top: -30px;
        left: 0;
        width: 100%;
        z-index: 1000
    }

    .next[data-v-43e93932], .prev[data-v-43e93932] {
        width: 60px;
        position: absolute;
        z-index: 1010;
        font-size: 60px;
        height: 60px;
        line-height: 60px;
        color: #333;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-decoration: none;
        top: 0
    }

    .next[data-v-43e93932]:hover, .prev[data-v-43e93932]:hover {
        cursor: pointer;
        opacity: .7
    }

    .prev[data-v-43e93932] {
        left: 10px;
        text-align: left
    }

    .next[data-v-43e93932] {
        right: 10px;
        text-align: right
    }

    .disabled[data-v-43e93932], .disabled[data-v-43e93932]:hover {
        opacity: .2;
        cursor: default
    }</style>
<style type="text/css">
    .carousel-3d-slide {
        position: absolute;
        opacity: 0;
        visibility: hidden;
        overflow: hidden;
        top: 0;
        border-radius: 1px;
        border-color: #000;
        border-color: rgba(0, 0, 0, .4);
        border-style: solid;
        background-size: cover;
        background-color: #ccc;
        display: block;
        margin: 0;
        box-sizing: border-box;
        text-align: left
    }

    .carousel-3d-slide img {
        width: 100%
    }

    .carousel-3d-slide.current {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        z-index: 999
    }</style>