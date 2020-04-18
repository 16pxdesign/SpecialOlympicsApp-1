<!--
    *Footer
    *@author     Denis Suserts
    *@edit     Aleksy Ruszala
    *@version 2.0
-->

<script>
    $(function () {

        $('.navbar-toggler').on('click', function (event) {
            event.preventDefault();
            $(this).closest('.navbar-minimal').toggleClass('open');
        })
    });
</script>
<style>

    .animate {
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .navbar {
        padding: 0;

    }

    .navbar > .toggle {
        display: block;
        padding: 0;
        z-index: 10000;
    }

    .navbar-fixed-left {
        top: 0;
        right: 0;
        border-radius: 0;
    }

    .navbar-minimal {
        width: 60px;
        min-height: 50px;
        max-height: 100%;
        background-color: #333333;
        background-color: rgba(51, 51, 51, 0.8);
        border-width: 0;
        z-index: 1000;
    }

    .navbar-minimal > .navbar-toggler {
        position: relative;
        min-height: 60px;
        border-bottom: 1px solid rgb(81, 81, 81);
        z-index: 100;
        cursor: pointer;
        border-radius: 0;
    }


    .navbar-minimal > .navbar-toggler > .menu-icon {
        position: absolute;
        top: 50%;
        right: 50%;
        margin: -8px -8px 0 0;
        width: 16px;
        height: 16px;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCAxNiAzMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTYgMzIiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0ZGRkZGRiIgZD0iTTEsN2gxNGMwLjU1MiwwLDEsMC40NDgsMSwxcy0wLjQ0OCwxLTEsMUgxQzAuNDQ4LDksMCw4LjU1MiwwLDgKCVMwLjQ0OCw3LDEsN3oiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xLDEyaDE0YzAuNTUyLDAsMSwwLjQ0OCwxLDFzLTAuNDQ4LDEtMSwxSDFjLTAuNTUyLDAtMS0wLjQ0OC0xLTEKCVMwLjQ0OCwxMiwxLDEyeiIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0ZGRkZGRiIgZD0iTTEsMmgxNGMwLjU1MiwwLDEsMC40NDgsMSwxcy0wLjQ0OCwxLTEsMUgxQzAuNDQ4LDQsMCwzLjU1MiwwLDMKCVMwLjQ0OCwyLDEsMnoiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xLjMzLDI4Ljk3bDExLjY0LTExLjY0YzAuNDU5LTAuNDU5LDEuMjA0LTAuNDU5LDEuNjYzLDAKCWMwLjQ1OSwwLjQ1OSwwLjQ1OSwxLjIwNCwwLDEuNjYzTDIuOTkzLDMwLjYzM2MtMC40NTksMC40NTktMS4yMDQsMC40NTktMS42NjMsMEMwLjg3MSwzMC4xNzQsMC44NzEsMjkuNDMsMS4zMywyOC45N3oiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yLjk5MywxNy4zM2wxMS42NDEsMTEuNjRjMC40NTksMC40NTksMC40NTksMS4yMDQsMCwxLjY2MwoJcy0xLjIwNCwwLjQ1OS0xLjY2MywwTDEuMzMsMTguOTkzYy0wLjQ1OS0wLjQ1OS0wLjQ1OS0xLjIwNCwwLTEuNjYzQzEuNzg5LDE2Ljg3MSwyLjUzNCwxNi44NzEsMi45OTMsMTcuMzN6Ii8+Cjwvc3ZnPgo=);
        background-repeat: no-repeat;
        background-position: 0 0;
        -webkit-transition: -webkit-transform .3s ease-out 0s;
        -moz-transition: -moz-transform .3s ease-out 0s;
        -o-transition: -moz-transform .3s ease-out 0s;
        -ms-transition: -ms-transform .3s ease-out 0s;
        transition: transform .3s ease-out 0s;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    .navbar-minimal > .navbar-menu {
        position: absolute;
        top: -1000px;
        left: 0;
        margin: 0;
        padding: 0;
        list-style: none;
        z-index: 50;
        background-color: rgba(51, 51, 51, 1);
    }

    .navbar-minimal > .navbar-menu > li {
        margin: 0;
        padding: 0;
        border-width: 0;
        height: 63px;
    }

    .navbar-minimal > .navbar-menu > li > a {
        position: relative;
        display: inline-block;
        color: #ffffff;
        padding: 20px 23px;
        text-align: left;
        cursor: pointer;
        border-bottom: 1px solid #515151;
        width: 100%;
        text-decoration: none;
        margin: 0;
    }

    .navbar-minimal > .navbar-menu > li > a:last-child {
        border-bottom-width: 0;
    }

    .navbar-minimal > .navbar-menu > li > a:hover {
        background-color: #428bca;
    }

    .navbar-minimal > .navbar-menu > li > a > .icon-lib {
        float: right;
    }

    .navbar-minimal.open {
        background-color: #428bca;
        width: 60px;
    }

    .navbar-minimal.open > .navbar-toggler > span {
        background-position: 0 -16px;
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg);
    }

    .navbar-minimal.open > .navbar-menu {
        top: 60px;
        width: 100%;
        min-height: 100%;
        overflow: visible;
    }

    .logo {
        height: 50px;
        margin-left: 25px;
    }
</style>

<nav class="navbar navbar-light bg-dark border-danger">

    <a class="navbar-brand" href="/~cmp311gc1904/"><img class="logo" src="/~cmp311gc1904/images/logo.png"></a>


    <nav class="toggle navbar-fixed-left navbar-minimal animate" role="navigation">
        <div class="navbar-toggler animate">
            <span class="menu-icon"></span>
        </div>
        <ul class="navbar-menu animate">
            <?php
            foreach ($data as $item){
                echo '  <li>
                <a href="/~cmp311gc1904/' . $item["url"] . '" class="animate">
                    <span class="desc animate"> ' . $item["name"] . ' </span>
                    <span class="icon-lib icon-lib-user"></span>
                </a>
            </li>';
            }
            ?>

        </ul>
    </nav>

</nav>
