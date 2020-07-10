body {
	font-family: 'Roboto Slab', serif;
	background:#333;
	color:#999;
	--cursor-fill: none;
	--cursor-stroke: rgba(255,255,255,0.15);
	--cursor-stroke-width: 1px
}
.logo {}
.panel-group .panel {
	margin-bottom: 0;
	border-radius: 4px
}
.margin-top-10 {
	margin-top: 10px
}
.panel-default {
	border-color: #000}
.panel {
	margin-bottom: 20px;
	background-color: #333;
	border: 1px solid #000;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
	box-shadow: 0 1px 1px rgba(0,0,0,.05)
}
.panel-default>.panel-heading {
	color: #999;
	background-color: #111;
	border-color: #000000ad;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
	padding: 8px;
	line-height: 1.42857143;
	vertical-align: top;
	border-top: 0px solid #000000;
}
.header {
	position:fixed;
	z-index:2000;
	height:70px;
	color:#fff;
	width:100%;
	z-index:1000;
	background: #333;
}
.navbar-default {
	background-color: #0707079c;
	border-color: #000000;
}
.menu-topbar-admin-help {
	display: none !important ;
}
.topbar-menu li{
	align:center!important;
}
.header .container {
	padding-top: 10px;
}
.header-dropdown {
	margin-top: 10px;
	text-align:right;
}
.header-dropdown .navbar-right {
	margin-right:initial;
}
.header-dropdown a i{
	color:#fff;
	font-size: 30px;
}
.topbar-menu {
	position:fixed;
	right:30px;
	left:30px;
	top:70px;
	z-index:2;
	opacity:0.9;
}
.ossn-layout-admin {
	margin-top: 140px;
}
select,
input[type="password"],
input[type="text"],
textarea {
	color: #333;
	font-size: 13px;
	border: 1px solid #eee;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	display:block;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
	outline: none;
	padding: 12px 14px;
	width:100%;
	margin-bottom: 10px;
	transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-webkit-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out
}
input[type="search"]:focus,
input[type="text"]:focus,
textarea:focus {
	border-color: #ddd;
	box-shadow: 0 0 3px #eee;
	-o-box-shadow: 0 0 3px #eee;
	-moz-box-shadow: 0 0 3px #eee;
	-webkit-box-shadow: 0 0 3px #eee;
	text-decoration:none!important
}
input[type="submit"] {
	display:inherit;
}
label {
	font-size: 16px;
	color: #999;
	font-weight: 300;
	cursor: pointer;
	display:block;
}

.dropdown-submenu {
	z-index:9999;
	position: relative;
}

.dropdown-submenu>.dropdown-menu {
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	-webkit-border-radius: 0 6px 6px 6px;
	-moz-border-radius: 0 6px 6px;
	border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
	display: block;

}

.dropdown-submenu>a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #ccc;

	margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
	border-left-color: #fff;
}

.dropdown-submenu.pull-left {
	float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}
.ossn-system-messages {
	margin-top: 10px;
}
.alert {
	margin-bottom:10px;
}
.topbar-menu li a i{
	margin-left: 5px;
	float: right;
}
.page-title {
	font-size: 20px;
	border-bottom: 5px solid #000000;
	padding-bottom: 10px;
	margin-bottom: 10px;
	text-transform: uppercase;
}
.page-botton-notice {
	margin-top:10px;
}
.no-right-margins {
	margin-right:0px;
}
.ossn-form div:not('.ossn-editor') {
	margin-top:100px;
}
.margin-top-10 {
	margin-top:10px;
}
.margin-bottom-10 {
	margin-bottom:10px;
}
.right {
	float:right;
}
.left {
	float:left;
}
.text-right {
	text-align:right;
}
.ossn-users-list .image {
	margin-top: 1px;
}
.ossn-users-list .name {
	margin-left: 42px;
	margin-top: 2px;
	min-height: 30px;
	max-width: 160px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.table-titles {
	background: #222;
}

.block {
	display:block;
}
.inline-block {
	display:inline-block;
}
.admin-dashboard-item {
	margin-top:10px;
}
.admin-dashboard-fixed-height {
	height:230px;
}
.admin-dashboard-item canvas {
	padding: 14px;
}
.admin-dashboard-box {
	min-height:200px;
}

.admin-dashboard-title {
	background-color: rgba(0,0,0,.5);
	border: 1px solid #000;
	padding: 10px;
	font-weight: 700;
}
.admin-dashboard-contents .text {
	font-size: 40px;
	padding: 74px;
	color:#747474;
}
.admin-dashboard-contents {
	padding: 10px;
	border-bottom: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	max-height:250px;
	margin-bottom: 15px;
}
footer {
	margin-top: 20px;
	border-top: 1px solid #E5E5E5;
	padding-bottom: 20px;
	padding: 10px;
}
footer a {
	text-transform: uppercase;
}
.charjs-legend {
	text-align:center;
}
.charjs-legend .title {
	display: inline-block;
	margin-bottom: 0.5em;
	line-height: 1.2em;
	margin-left:10px;
	padding: 0 0.3em;
}





.charjs-legend .color-sample {
	display: block;
	float: left;
	width: 1em;
	height: 1em;
	border: 2px solid;
	border-radius: 0.5em;
	margin-right: 0.5em;
}
.center {
	text-align:center;
}
.text-right {
	text-align:right;
}
.loading-version {
	background:url('<?php echo ossn_theme_url(); ?>images/loading.gif') no-repeat;
	width:24px;
	height:24px;
	margin: 0 auto;
}
.component-title-icon{
	font-size: 20px !important;
}
.component-title-check {
	color: #147B25;
}
.component-title-delete {
	color:#E70F0F;
}
.components-list-buttons a {
	margin-right: 10px;
}
.components-list-buttons a i{
	margin-right: 5px;
}
.radio-block {
	margin-top:10px;
	margin-bottom:10px;
}
.radio-block span {
	margin-left:5px;
	font-weight:bold;
}
.ui-datepicker-year,
.ui-datepicker-month {
	padding: 0px;
	display: inline-block;
}
.btn-primary,.btn {
	background-color: #111;
	border:0px transparent !important;
	color:#555;
	outline:none;
	border-radius: 2px;
	padding: 4px 8px;
	text-decoration:none;
}
.btn:focus, .btn-link:hover, .btn-primary:hover, .btn.active, .btn-link:focus, .btn:active {
	outline:none !important;
	background-color: #333;
	border:0px solid #000;
	color: #c5ff00;
	border-radius: 2px;
	padding: 4px 8px;
	text-decoration:none;
}
.btn:focus::after, .btn-link:hover::after, .btn-primary:hover::after, .btn.active::after, .btn-link:focus::after, .btn:active::after {
	content: '';
	position: absolute;
	width: 100%;
	height: 1px;
	color: #c5ff00;
	bottom: 0.5vw;
	left: 0;
	border:0px transparent !important;
	opacity: 0;
	transform-origin: 0% 50%;
	transform: scaleX(0);
	transition: all 0.25s ease-out;
}
.btn:after, .btn-link:after, .btn-primary:after, .btn.active:after {
	color: #c5ff00;
	text-decoration:none;
	opacity: 1;
	transform: scaleX(0.5);
	outline:none !important;
	background-color: #333;
	border:0px transparent !important;
	color: #c5ff00;
	border-radius: 2px;
	padding: 4px 8px;
	text-decoration:none;
}

a:hover,
a:focus {
	outline: none;
	color: #c5ff00!important;
	text-decoration:none;
	opacity: 1;
	transform: scaleX(1);
}
.navbar-default .navbar-nav>li>a a:hover,
a:focus{
	color: #c5ff00 !important;
	opacity: 1;
	transform: scaleX(1);
}
a {
	color: #555;
	text-decoration:none;
	pointer-events: auto;
	cursor: pointer;

}
a:hover::after,
a:focus::after {
	color: #c5ff00;
	opacity: 1;
	transform: scaleX(1);
}
a::after {
	content: '';
	position: absolute;
	width: 100%;
	height: 1px;
	background: currentColor;
	bottom: 0.5vw;
	left: 0;
	opacity: 0;
	transform-origin: 0% 50%;
	transform: scaleX(0);
	transition: all 0.25s ease-out;
}
.dropdown-menu {
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	font-size: 14px;
	text-align: left;
	list-style: none;
	background-color: #111!important;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,.15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
	box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
.navbar-default .navbar-nav>.open>a {
	color: #999;
	background-color: #111;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
	color: #c5ff00;
	opacity: 1;
	transform: scaleX(1);
	background-color: #000;
}
.dropdown-menu>li>a:hover {
	background-color: #000;
}
@media (any-pointer: fine) {
	.cursor {
		position: fixed;
		top: 0;
		left: 0;
		display: block;
		pointer-events: none;
	}
	.cursor__inner {
		fill: var(--cursor-fill);
		stroke: var(--cursor-stroke);
		stroke-width: var(--cursor-stroke-width);
	}

}
