
<link rel="shortcut icon" href="<?php base_url() ?>webresources/images/ico/site-icon.png">
<title><?php echo $title ?> | BaSeafood</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Huong Dan Su dung</title>
<script type="text/javascript" src="<?php echo base_url(); ?>webresources/js/jquery.js"></script>
<style type="text/css">

    body {
        margin: 0;
        padding: 0;
        overflow: hidden;
        height: 100%;
        max-height: 100%;
        font-family: Sans-serif;
        line-height: 1.5em;
    }

    #nav {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 230px; /* Width of navigation frame */
        height: 100%;
        overflow: hidden; /* Disables scrollbars on the navigation frame. To enable scrollbars, change "hidden" to "scroll" */
        background: #eee;
        font-size: 12px;
    }

    main {
        position: fixed;
        top: 0;
        left: 230px; /* Set this to the width of the navigation frame */
        right: 0;
        bottom: 0;
        overflow: auto;
        background: #fff;
    }

    .innertube {
        margin: 15px; /* Provides padding for the content */
    }

    p {
        color: #555;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul a {
        color: darkgreen;
        text-decoration: none;
    }

    /*IE6 fix*/
    * html body {
        padding: 0 0 0 230px; /* Set the last value to the width of the navigation frame */
    }

    * html main {
        height: 100%;
        width: 100%;
    }
    .usermanual {
        width: 100%;
    }
    .usermanual--half {
        width: 60%;
    }
    .usermanual--quater {
        width: 30%;
    }
    .usermanual--supersmall {
        width: 20%;
    }

</style>