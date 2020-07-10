/***Basic***/
body {
	font-size: 14px;
	background-color: #333;
	font-family: font-family: 'Roboto', sans-serif;
	color:#999;
	--cursor-fill: none;
	--cursor-stroke: rgba(255,255,255,0.15);
	--cursor-stroke-width: 1px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ossn-required {
	color: #a94442;
}
::-webkit-scrollbar {
	width: 1px;
}
::-webkit-scrollbar-track {
	background-color: #171717;
	border-left: 1px solid #171717;
}
::-webkit-scrollbar-thumb {
	background-color: #171717;
}
::-webkit-scrollbar-thumb:hover {
	background-color: #171717;
}
.ossn-layout-startup textarea,
.ossn-layout-startup input[type='password'],
.ossn-layout-startup select,
.ossn-layout-startup text,
.ossn-layout-startup input[type='text'],
.ossn-layout-startup focus,
.ossn-form input[type='password'],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type='text'] {
background-color:#111111dd;
background:#111111dd;
color:#c5ff00;
	width: 100%;
	border: 1px dashed #555;
	padding: 10px;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
	text-decoration:none;
}
.ossn-form input[type='submit'] {
	margin-top: 5px;
	margin-bottom: 5px;
	width:100%;
}
.ossn-red-borders {
	border: 1px solid #ff0000 !important;
}
.fa {
	margin-right: 2px;
}
.ossn-hidden {
	display: none;
}
p {
	font-size: 15px;
}
.col-center {
	float: none;
	margin: 0 auto;
}
.container-table {
	display: table;
	width: 100%;
}
.center-row {
	display: table-cell;
	text-align: center;
}
.radio-block {
	margin-top: 10px;
	margin-bottom: 10px;
}
.radio-block span {
	display: inline-block;
	margin-right: 10px;
	font-size: 15px;
	font-weight: bold;
	margin-left: 10px;
}

.button-grey,

.btn-action,

.btn-link,

.btn-primary,

.btn,

.topbar-menu-left li a,

.topbar-menu-right li a {

	background: #11111129;
	border:0px transparent !important;
	color:#555;
	outline:none;
	border-radius: 2px;

	text-decoration:none;

}

.btn-primary.active,
.btn-primary.focus,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:hover,
.open>
.dropdown-toggle
.btn-primary,
.button-grey:focus,

.btn-action:focus,

.btn-link:focus,

.btn-primary:focus,

.btn:focus,

.topbar-menu-left li a:focus,

.topbar-menu-right li a:focus


 {
	outline:none !important;
	background: #333;
	border:0px solid #000;
	color: #c5ff00;
	border-radius: 2px;
	text-decoration:none;
}


.button-grey:hover::after,

.btn-action:hover::after,

.btn-link:hover::after,

.btn-primary:hover::after,

.btn:hover::after,

.topbar-menu-left li a:hover::after,

.topbar-menu-right li a:hover::after

 {
	background: #333;
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

.button-grey:after,

.btn-action:after,

.btn-link:after,

.btn-primary:after,

.btn:after,

.topbar-menu-left li a:after,

.topbar-menu-right li a:after
{
	color: #c5ff00;
	text-decoration:none;
	opacity: 1;
	outline:none !important;
	background: #333;
	border:0px transparent !important;
	color: #c5ff00;
	border-radius: 2px;
	padding: 4px 8px;
	text-decoration:none;
}


a:hover,
a:focus {
	outline: none;
	color: #c5ff00;
}
a {
	color: #555;
	text-decoration:none;
	pointer-events: auto;
}
a:hover::after,
a:focus::after {
	color: #c5ff00;
	text-decoration:none;
	opacity: 1;
	transform: scaleX(1);
}
a::after {
	background: #333;
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
@media (any-pointer: fine)
{
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
/***Layouts***/
.ossn-layout-module,
.ossn-layout-contents,
.ossn-layout-media,
.ossn-layout-newsfeed {
	margin-top: 90px;
	min-height: 400px;
}
.ossn-home-container,
.ossn-layout-startup {
	min-height: 200px;
}
.ossn-home-container .ossn-page-contents {
	background: rgba(255, 255, 255, 0);
	border: 1px solid rgba(238, 238, 238, 0);
}
.ossn-layout-startup {
	min-height: 600px;
	background:#333 url("<?php echo ossn_theme_url();?>images/infinite.svg") no-repeat;
	background-size:1500px;
	background-position: center;
}

.ossn-layout-startup footer .ossn-footer-menu a {
	color: rgba(255, 255, 255, 0.75)!important;
}
.ossn-home-container {
	margin-top: 100px;
}
.ossn-layout-newsfeed .newsfeed-right {
}
.ossn-page-container {
	overflow-x: hidden;
	min-height: 400px;
}
.ossn-layout-module {
	margin-top: 10px;
	background: rgba(0,0,0,0);
	border: 0px solid #eee;
	padding: 10px;
}
.ossn-layout-module .module-title {
	background: rgba(0,0,0,0);
	border: 0px solid #eee;
	padding: 10px;
}
.ossn-layout-module .module-contents {
	padding: 10px;
}
.ossn-layout-module .module-title .title {
	font-weight: bold;
	display: inline-block;
}
.ossn-layout-module .controls {
	float: right;
	display: inline-table;
}
.ossn-layout-media {
	margin-top: 10px;
}
.ossn-layout-media .like-share,
.ossn-layout-media .comments-list {
	margin-left: -10px;
	margin-right: -10px;
}
.ossn-layout-media .content,
.ossn-page-contents {
	background: rgba(0,0,0,0);
	padding: 10px;
	border: 0px solid #eee;
}
.opensource-socialnetwork {
	min-height: 500px;
}
.ossn-home-container .row {
	margin-right: 10px;
	margin-left: 10px;
}
#ossn-signup-errors {
	display: none;
	margin-top: 10px;
}
.ossn-error-page {
	text-align: center;
	padding: 100px;
}
.ossn-error-page .error-heading {
	font-size: 50px;
	font-weight: bold;
}
.ossn-error-page .error-text {
	font-size: 16px;
}
.ossn-error-page .fa-exclamation-triangle {
	font-size: 100px;
}
.ossn-group-members {
	margin-right: 5px;
}
.ossn-page-loading-annimation {
	background: #000;
	opacity:0.9;
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
}
.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
	width: 24px;
	margin: 0 auto;
	margin-top: 20%;
}
/***Topbar***/
.topbar {
	color: #fff;
	z-index: 6;
	position: relative;
	height: 48px;
	position: fixed;
	height: 70px;
	background-color: #111111d1;
	box-shadow: 0px 5px 20px #111111;
	margin-bottom:10px;
	width: 100%;
}
.topbar .fa {
	font-size: 20px;
	margin-top: 5px;
}
.topbar .site-name  {
	float:left;
	width:14%;
}
.topbar .site-name a {

	text-transform: uppercase;
	font-size: 100%;
	color: #fff;
	text-align: center;
	display: block;
	font-weight: 700;
	padding-top: 25px;
	padding-right: 25px;
	padding-bottom: 25px;
	padding-left: 10px;
	margin-left:-20px;
	white-space: nowrap;
}
.topbar .site-name a:hover {
	text-decoration: none;
}
.topbar-menu-left {
	position: relative;
	z-index: 1;
	display: inline-block;
	float: left;
}
.topbar-menu-right li,
.topbar-menu-left li {
	display: inline-block;
}
.ossn-topbar-dropdown-menu a[role="button"]{
	color:#fff;
}
.ossn-topbar-dropdown-menu {
	padding-top: 15px;
	margin-right:83px;
}
.ossn-topbar-dropdown-menu,
#ossn-notif-notification a,
#ossn-notif-messages a,
#ossn-notif-friends a {
	padding: 10px;
	display: block;
	color: #fff;
	height: 70px;
	padding-top: 20px;
}
.topbar-menu-left li a {
	padding: 10px;
	display: block;
	color: #fff;
	height: 70px;
	padding-top: 20px;
	padding-right: 10px;
	padding-left: 20px;
}
.topbar-menu-right li:hover,
.topbar-menu-left li:hover {
	background-color: #444;
}
.topbar .right-side-nospace .topbar-menu-right {
	margin-right: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.topbar .right-side-space .topbar-menu-right {
	margin-right: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.topbar .ossn-icons-topbar-friends,
.topbar .ossn-icons-topbar-messages,
.topbar .ossn-icons-topbar-notification i {
	color: #fff;
}
.topbar .ossn-icons-topbar-friends-new,
.topbar .ossn-icons-topbar-messages-new,
.topbar .ossn-icons-topbar-notifications-new i {
	color: #fff;
}
.ossn-topbar-dropdown-menu {
	float: right;
	margin-left:10px;
}
.ossn-topbar-dropdown-menu ul li a,
.ossn-topbar-dropdown-menu ul li {
	display: block;
	width: 100%;
	color: #000;
}
.ossn-topbar-dropdown-menu .dropdown-menu {
	margin: 1px -120px 0;
}
/***atlas Wall***/
.ossn-wall {;
}
.ossn-wall-items {;
}
.ossn-wall-item {
	padding: 30px;
	padding-top: 10px;
	border-radius:10px;
	box-shadow: 0px 5px 20px #111111;
	margin-top: 20px;
	background-color: #111111;
	padding-bottom: 0px;
}
.ossn-wall-item:first-child {
	margin-top: 0px;
}
.ossn-wall-item .friends a {
	text-decoration: none;
}
.ossn-wall-item .friends a:first-child:before {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
}
.ossn-wall-item .user-img {
	border-radius: 50px;
	margin-top: 0px;
	margin-bottom: 10px;
	display: inline-block;
	float: left;
	box-shadow: 0px 0px 10px #000;
	margin-right: 10px;

}
.ossn-wall-item .meta {
	margin-top:5px;
}
.ossn-wall-item .meta .user {
	display: inline-block;
	margin-top: 3px;
}
.ossn-wall-item .meta .user a {
	font-weight: bold;
}
.ossn-wall-item .meta .user span {
	color: #999;
}
.ossn-wall-item .post-contents {
	margin-top: 15px;
}
.ossn-wall-item .post-contents p {
	/** Incorrect Hyphenation in the theme atlas 3.0 #824 **/
	word-break: break-word;
	text-align: justify;
}
.ossn-wall-item .post-contents img {
	max-width: 100%;
	background:#111;
	border: 1px solid #111;
	display: block;
	margin-bottom: 10px;
	box-shadow: 0px 5px 20px #000;
}
.ossn-wall-item .meta .post-menu {
	float: right;
}
.ossn-wall-container {
	margin-bottom: 20px;
	border-radius:10px;
	box-shadow: 0px 5px 20px #111111;
}
.ossn-wall-container textarea {
	padding: 10px;
	width: 100%;
	background:#444;
	border: 0px solid;
	border-bottom: 0px;
	border-top: 0px;
	resize: vertical;
	outline: none;
}
.ossn-wall-container textarea:focus, select:focus {
	box-shadow: 0px 0px 5px #c5ff00;
}
.ossn-wall-container .controls {
	background-color: #111111;
	border-bottom: 0px solid #222222;
	border-left: 0px solid #222222;
	border-right: 0px solid #222222;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	height: 40px;
	width: 100%;
	margin-top: 3px;
	margin-top: -5px;
	padding-right: 10px;
}
.ossn-wall-container .wall-tabs {
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	background-color: #171717;
}
.ossn-wall-container .wall-tabs .item {
	padding: 10px;
	display: inline-flex;
	font-weight: bold;
	font-size: 13px;
}
.ossn-wall-container .wall-tabs .item:hover {
	background: #ffffff00;
	border-radius: 10px;
	color: #c5ff00;
}
.ossn-wall-container .wall-tabs .item div {
	display: inline-block;
}
.ossn-wall-container .wall-tabs .item .text {
	font-weight: bold;
	margin-top: 1px;
	margin-left: 5px;
	position: absolute;
	font-size: 15px;
}
.ossn-wall-container .controls li {
	margin:-10px;
	padding: 20px;
	display: inline-block;
}
.ossn-wall-container .controls li:hover {
	background: rgba(0,0,0,0.1);
	margin:-21px;
	padding: 30px;
	border-radius:50px;
	border:1px solid #1717177d;
	color: #c5ff00;
}
.ossn-wall-privacy {
	float: right;
	margin-right: 5px;
}
.ossn-wall-container input[type='submit'] {
	padding: 3px 10px;
	display: block;
	margin-top: 6px;
}
.ossn-wall-container i {
	font-size: 15px;
}
.ossn-wall-container input[type="file"] {
	border-left: 1px solid #000;
	border-right: 1px solid #000;
}
.ossn-wall-container input[type="file"],
.ossn-wall-container input[type="text"] {
	width: 100%;
	background-color:#333333dd;
color:#fff;
	border-top: 0px dashed #EEE;
	padding: 5px;
	margin-bottom: 5px;
	margin-top: -5px;
	outline: none;
}
#token-input-ossn-wall-friend-input {
	width: 100% !important;
	border-top: 0px dashed #EEE;
	padding: 7px;
	margin-bottom: 5px;
	margin-top: -5px;
}
#ossn-wall-form .ossn-loading {
	margin: 7px;
}
.ossn-wall-item-type {
	display: inline-block;
}
.ossn-wall-item .friends {
	display: inline-block;
}
/***Comments Likes***/
.ossn-comment-menu {
	float: right;
	display: none;
}
.comments-item:hover .ossn-comment-menu {
	display: block;
}
.comments-likes {
	min-height: 50px;
	width: 100%;
}
.menu-likes-comments-share {
	margin-bottom: 10px;
}
.menu-likes-comments-share li {
	display: inline-block;
}
.menu-likes-comments-share li::after {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
	color: #ccc;
}
.menu-likes-comments-share li:last-child:after {
	content: " ";
}
.comments-list {
	background-color: #111111;
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 10px;
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	padding-right: 10px;
}
.comments-list .comments-item {
	padding-top: 10px;
	padding-bottom: 5px;
}
.comments-list .comments-item:first-child {
	margin-top: 0px;
	padding-top: 10px;
}
.comments-list .comments-item:last-child {
	border-bottom: none;
}
.comments-list .comments-item .comment-user-img {
	display: inline-block;
	border-radius: 32px;
	box-shadow: 0px 5px 20px #050505;
}
.comments-list .comments-item .comment-contents {
	display: inline-block;
	margin-top: -3px;
}
.comment-container {
	padding-bottom: 10px;
	position: relative;
	z-index: 0;
}
.comments-item .col-md-11 {
	padding-left: 0px;
}
.comment-metadata .time-created,
.comment-metadata a {
	display: inline-block;
}
.comment-contents p {
	margin: 0px;
	word-break: break-word;
	text-align: justify;
}
.comment-contents p img {
	display: block;
	margin-top: 10px;
	margin-bottom: 10px;
	max-width: 100%;
}
.comment-contents .owner-link {
	font-weight: bold;
	margin-right: 5px;
	font-size: 14px;
}
.comment-contents {
	width: 100%;
}
.comment-container span[readonly='readonly'],
.comment-container input[readonly='readonly'] {
	background: rgba(0,0,0,0);
}
.comment-box {
	width: 100%;
	border: 0px solid #000;
	padding: 5px 30px 5px 5px !important;
	margin-bottom: 5px;
	box-shadow: 0px 5px 20px #050505;
	outline: none;
	display: block;
	resize: vertical;
	border-radius:50px;
	background: #444;
	min-height: 32px;
}
[contentEditable=true]:empty:not(:focus)::before {
	content: attr(placeholder);
}
/***Like***/
.like-share {
	border-top: 0px solid #111;
	border-bottom: 0px solid #111;
	padding: 10px;
	margin-top: 10px;
	background-color: #191919;
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 20px;
	padding-right: 20px;
}
.ossn-like-comment,
.ossn-total-likes {
	margin-left: 10px;
}
/***Global***/
.time-created {
	font-size: 14px;
	font-style: italic;
	color: #999;
}
/***Sidebar Nav***/
.sidebar {
	background-color: #090909;
	height: 200px;
	z-index: 1000;
	width: 200px;
	position: fixed;
	height: 100%;
	overflow-y: auto;
	overflow-x: hidden;
	color: #fff;
	box-shadow: 0px 5px 20px #111111;
}
.sidebar-close {
	width:80px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.sidebar-open {
	width:200px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	border-right: 1px solid #;
	box-shadow: 0px 2px 0px #c5ff00;
}
.sidebar-open-no-annimation {
	margin-left: 0px;
}
.sidebar-open-page-container {
	margin-left: 200px !important;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.sidebar-open-page-container-no-annimation {
	margin-left: 200px;
}
.sidebar-close-page-container {
	margin-left:80px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.newseed-uinfo {
	padding: 10px;
}
.newseed-uinfo img {
	display: inline-block;
	border-radius: 50px;
	float: left;
	border: 3px solid #007700;
}
.newseed-uinfo .name {
	display: inline-block;
	width: 100px;
	margin-left: 10px;
	margin-top: 20px;
}
.newseed-uinfo .name a {
	font-weight: bold;
	display: block;
	color: #fff;
	font-size: 13px;
	text-decoration:none;
}
.newseed-uinfo .name a:hover {
	font-weight: bold;
	display: block;
	color: #c5ff00;
	font-size: 13px;
	text-decoration:none;
}
.newseed-uinfo .name .edit-profile {
	font-weight: inherit;
}
.sidebar-menu-nav {
	overflow: auto;
	font-family: verdana;
	font-size: 12px;
	font-weight: 200;
	top: 0px;
	width: 100%;
	height: 100%;
}
.sidebar-menu-nav ul,
.sidebar-menu-nav li {
	list-style: none;
	padding: 0px;
	margin: 0px;
	line-height: 35px;
}
.sidebar-menu-nav ul:not(collapsed) .arrow:before,
.sidebar-menu-nav li:not(collapsed) .arrow:before {
	font-family: FontAwesome;
	content: "\f078";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
	float: right;
}
.sidebar-menu-nav ul .sub-menu li {
	padding-left: 20px;
}
.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
	border: none;
	line-height: 28px;
	border-bottom: 1px solid #171717;
	margin-left: 0px;
}
.sidebar-menu-nav ul .sub-menu li:hover,
.sidebar-menu-nav li .sub-menu li:hover {
	background-color: #4f5b69;
	color:#c5ff00;
}
.sidebar-menu-nav ul .sub-menu li:before,
.sidebar-menu-nav li .sub-menu li:before {
	font-family: FontAwesome;
	content: "\f105";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
}
.sidebar-menu-nav li {
	padding-left: 0px;
}
.sidebar-menu-nav li a {
	text-decoration: none;
	color: #fff;
}
.sidebar-menu-nav li a i {
	padding-left: 10px;
	width: 20px;
	padding-right: 20px;
}
.sidebar-menu-nav li:hover {
	border-left: 3px solid #fff;
	background-color: #4f5b69;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	-ms-transition: all 1s ease;
	transition: all 1s ease;
}
.sidebar-open
.newseed-uinfo
.name {
	display:inline-block;
}
.sidebar-close
.newseed-uinfo
.name {
	display:none;
}
.sidebar-close
.sub-menu a{
	display:none;
}
.sidebar-close
.sidebar-menu-nav li a
.text {
	display:none;
}
.sidebar-menu-nav ul .sub-menu li:before {
	font-size: 18px
}

.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
	line-height: 40px
}
@media (max-width: 768px)
{
	.site-name{
	}
	.logo{
	}
	.topbar {
		width: 100%;
	}
	.sidebar {
		margin-left:-200px;
	}
	.sidebar-close-page-container {
		margin-left:0px;
	}
	.sidebar-close {
		margin-left:-200px;
	}
	.sidebar-open {
		margin-left:0px;
	}
	.sidebar-menu-nav {
		position: relative;
		width: 100%;
		margin-bottom: 10px;
	}
	.ossn-group-members {
		height: 75px !important;
	}
	.ossn-topbar-dropdown-menu {
		margin-right:-13px;
}
}
/***Ossn css***/
.right {
	float: right;
}
.left {
	float: left;
}
.text-right {
	text-align: right;
}
.text-left {
	text-align: left;
}
.text-center {
	text-align: center;
}
.margin-top-10 {
	margin-top: 10px;
}
.margin-top-20 {
	margin-top: 20px;
}
/***Dropdown***/
.dropdown-submenu {
	position: relative;
}
.dropdown-submenu>.dropdown-menu {
	top: 0;
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
	margin-top: 5px;
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
.dropmenu-topbar-icons {
	left: inherit;
	right: 0;
}
/***Ossn Ads***/
.ossn-ad-item {
}
.ossn-ad-item .ad-image {
	max-width: 100%;
	margin: 0 auto;
	display: block;
}
.ossn-ad-item a {
	text-decoration: none;
	color: #000;
}
.ossn-ad-item .ad-title {
	font-weight: bold;
	font-size: 15px;
	margin-bottom: 5px;
}
.ossn-ad-item .ad-link {
	margin-bottom: 5px;
}
.ossn-ad-item p {
	margin-top: 10px;
	text-align: justify;
}
/***Widgets***/
.ossn-widget {
	box-shadow: 0px 5px 20px #111111;
	margin-bottom: 20px;
	background-color: rgba(0,0,0,.8);
	border-radius: 10px;
}
.ossn-widget .widget-heading {
	border-bottom: 0px solid #E5E5E5;
	background-color: rgba(0,0,0,.7);
	text-align:center;
	border: 0px solid #E9EAED;
	padding: 10px;
	font-weight: bold;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}
.ossn-widget .widget-contents {
	padding: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}
/***Ossn Notifications***/
.ossn-notifications-box {
	width: 430px;
	color: #000;
}
.ossn-notifications-box .notificaton-item {
	border-bottom: 0px solid #eee;
}
.ossn-notifications-box .notificaton-item:hover,
.ossn-notifications-box .notificaton-item .active {
	background: rgba(0,0,0,0);
}
.ossn-notifications-box .type-name {
	font-size: 13px;
	font-weight: bold;
	padding: 1px 10px 5px 10px;
	color: #000;
	height: 25px;
	border-bottom: 0px solid #DDDDDD;
}
.ossn-notification-box-loading {
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 20px;
}
.ossn-no-notification {
	text-align: center;
	padding: 10px;
}
.ossn-notifications-box .type-name .title {
	display: inline-block;
}
.ossn-notifications-box .type-name .links {
	display: inline-block;
	float: right;
}
.ossn-notifications-box .type-name .links a {
	color: #337ab7;
	display: inline;
	font-weight: normal;
}
.ossn-notifications-box .notification-image,
.ossn-notifications-box .notification-image img {
	width: 50px;
	height: 50px;
	display: inline-block;
}
.ossn-notifications-box .bottom-all a,
.ossn-notifications-box .notfi-meta strong {
	color: #337ab7;
}
.ossn-notifications-box .notfi-meta {
	width: 330px;
	margin-left: 5px;
	display: inline-block;
	float: right;
	color: #000;
}
.ossn-notifications-box .bottom-all a {
	font-weight: bold;
}
.ossn-notifications-box .bottom-all {
	background: #F7F7F7;
	text-align: center;
	padding: 0px;
	padding-top: 10px;
	display: block;
	height: 40px;
	border-top: 0px solid #eee;
}
.ossn-notifications-box .metadata {
	margin-bottom: -5px;
}
.ossn-notifications-box .messages-inner {
	max-height: 400px;
	overflow: hidden;
	overflow-y: scroll;
}
.latest-users img {
	margin-bottom: 5px;
}
.ossn-notification-mark-read {
	float: right;
}
.ossn-notifications-all a {;
}
.ossn-notifications-all li {
	padding: 10px;
	display: block;
}
.ossn-notifications-all a:hover {
	background-color: transparent;
	text-decoration: none;
}
.ossn-notifications-box li:hover,
.ossn-notifications-box a:hover,
.ossn-notifications-all a:hover,
.ossn-notifications-all li:hover {
	background: #F9F9F9;
}
.ossn-notification-container {
	background-color: #dc0d17;
	background-image: -webkit-linear-gradient(#fa3c45, #dc0d17);
	color: #fff;
	min-height: 13px;
	padding: 1px 3px;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
	-webkit-border-radius: 2px;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .7);
	-webkit-background-clip: padding-box;
	display: inline-block;
	font-size: 11px;
	line-height: normal;
	position: absolute;
	margin-left: -10px;
	z-index: 1;
}
.notification-friends .image {
	width: 50px;
	height: 50px;
	display: inline-table;
	float: left;
}
.ossn-notifications-friends-inner {
	padding: 6px;
}
.ossn-notifications-friends-inner form {
	display: inline-table;
}
.ossn-notification-page li img {
	display: none;
}
.notification-friends li {
	margin-bottom: 5px;
	width: 100%;
	border-bottom: 0px solid #eee;
}
.notification-friends .notfi-meta a {
	color: #337ab7;
	font-weight: bold;
	display: inline-block;
	width: 200px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ossn-notifications-friends-inner .controls {
	float: right;
	margin-top: 6px;
	display: inline-block;
}
.ossn-notifications-friends-inner .btn {
	padding: 3px 9px;
	border-radius: 1px;
}
.notification-friends {
	max-height: 400px;
}
/***Profile***/


.ossn-profile .top-container {
	background: rgba(0,0,0,0);
	border: 0px solid #C4CDE0;
	border-width: 0px 0px 0px;
	margin-top: -20px;
	padding-bottom:-50px;
}

.ossn-profile .top-container .profile-cover {
	height: 309px;
	border-bottom-left-radius: 50px;
	border-bottom-right-radius: 50px;
	overflow: hidden;
	opacity:  .99;
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(1%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, .38)));
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#94000000', GradientType=0);
}

.ossn-profile .top-container .profile-cover img {
	width: 100%;
}
.ossn-profile-row {
	margin-bottom: 20px;
}
.profile-hr-menu ul {
	margin-bottom: 0px;
	padding: 0px;
}
.profile-hr-menu ul li {
	display: inline-block;
}
.profile-hr-menu ul li a {
	display: block;
	padding: 15px;
	margin-right: 5px;
	font-weight: bold;
	border-right: 0px solid #eee;
}
.profile-hr-menu .dropdown-menu li {
	display: block;
}
.profile-hr-menu .dropdown a i {
	margin-left: 5px;
}
.profile-hr-menu .dropdown-menu li a {
	border-right: 0px;
	margin-right: 0px;
}
.profile-hr-menu ul li:hover {
}
.profile-hr-menu {
	border-bottom: none;
}
.profile-hr-menu ul li:last-child {
	border-right: none
}
.ossn-profile .profile-photo {
	position: absolute;
	margin-left: 20px;
	margin-top: -137px;
	background-color: #fff;
	border: 1px solid #CCC;
	/* border-radius: 2px 2px 2px 2px; */
	-webkit-border-radius: 100px 100px 100px 100px;
	-moz-border-radius: 2px 2px 2px 2px;
	padding: 2px;
	z-index: 1;
	box-shadow: 0px 5px 20px #111111;
}
.ossn-profile .profile-photo img {
	border-radius:100px;
}
.ossn-profile .user-fullname {
	color: #FFF;
	font-weight: bold;
	margin-top: -75px;
	font-size: 2.3vw;
	margin-left: 211px;
	position: absolute;
	text-shadow: 0 0 3px #000;
	/** overlapping issue with longer names on profile page #630 **/
	max-width: 820px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ossn-profile-role {
	font-size: 25px !important;
	margin-top: -38px !important;
}
.btn-standalone-grey {
	color: #333;
	font-weight: bold;
	text-decoration: none;
	width: auto;
	margin: 0;
	font-size: 12px;
	line-height: 16px;
	padding: 5px 6px;
	outline: none;
	text-align: center;
	white-space: nowrap;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.10), inset 0 1px 0 #fff;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #FFF;
	border: 1px solid #999;
	border-bottom-color: #888;
	background: rgba(0,0,0,0);
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
	background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
	background: -o-linear-gradient(#f5f6f6, #e4e4e3);
	background: linear-gradient(#F5F6F6, #E4E4E3);
	text-decoration: none;
}
.btn-standalone-grey:active {
	background: #ddd;
	border-bottom-color: #999;
	box-shadow: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}
.btn-standalone-grey:hover {
	color: #333;
	text-decoration: none;
}
.profile-cover-controls {
	position: absolute;
	width: 100%;
	margin-right: -32px;
	margin-top: 260px;
	z-index: 1;
}
.change-cover {
	float: right;
	position: relative;
	margin-right: 50px !important;
}
.reposition-cover {
	float: right;
	position: relative;
	margin-right: 5px !important;
}
.profile-menu {
	float: right;
	position: relative;
	margin-top: -40px;
	margin-right: 20px;
}
#cover-menu {
	display: none;
}
.upload-photo {
	opacity: 0.9;
	width: 170px;
	padding: 88px;
	position: absolute;
	color: #111;
	text-align: center;
	font-size: 15px;
	font-family: sans-serif;
	border-top-left-radius: 350px;
	border-top-right-radius: 350px;
}
.upload-photo span {
	width: 100%;
	padding: 12px;
	text-align: center;
}
.user-cover-uploading {
	opacity: 0.4;
}
.user-photo-uploading {
	height: 100%;
	opacity: 0.8;
	background: #fff;
	width: 100%;
	padding: 7px;
	position: absolute;
	border-radius: 2px;
}
.user-photo-uploading span {
	display: none;
}
.ossn-profile-bottom {
	margin-top: 23px;
}
.page-sidebar,
.ossn-profile-sidebar {;
}
.ossn-layout-media .content {
	margin-right: 10px;
	margin-left: 10px;
}
.ossn-profile-extra-menu {
	display: inline-block;
}
/***Side Menu icons***/
.menu-section-item-newsfeed:before {
	content: "\f0a1" !important;
}
.menu-section-item-friends:before {
	content: "\f0c0" !important;
}
.menu-section-item-allgroups:before {
	content: "\f0c0" !important;
}
.menu-section-item-photos:before {
	content: "\f03e" !important;
}
.menu-section-item-messages:before {
	content: "\f0e0" !important;
}
.menu-section-item-invite-friends:before {
	content: "\f234" !important;
}
.menu-section-item-addgroup:before {
	content: "\f067" !important;
}
.menu-section-item-groups {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	width: 200px;
	padding-right: 10px;
}
/***Search***/
.ossn-menu-search li {
	display: block;
}
.ossn-menu-search li:hover {
	background: #F9F9F9;
}
.ossn-menu-search li a {
	display: block;
	width: 100%;
	padding: 5px;
}
.ossn-menu-search li a:hover {
	text-decoration: none;
}
.ossn-menu-search li a .text {
	display: inline-block;
}
.ossn-search-page .ossn-users-list-item {
	margin-left: 0px;
	margin-right: 0px;
}
.ossn-search-page .ossn-users-list-item .uinfo {
	margin-left: 25px;
}
.ossn-menu-search-users .text:before {
	font-family: FontAwesome;
	content: "\f007";
	display: absolute;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}
.ossn-menu-search-groups .text:before {
	font-family: FontAwesome;
	content: "\f0c0";
	display: absolute;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}
/***Token Input***/
ul.token-input-list {
	overflow: hidden;
	height: auto !important;
	height: 1%;
	width: 100%;
	font-size: 12px;
	font-family: Verdana;
	min-height: 1px;
	z-index: 999;
	padding: 0;
	margin: 0;
	margin-top: -5px;
	background-color: #fff;
	list-style-type: none;
	clear: left;
	color: #2B5470;
	border-top: 0px dashed #EEE;
	border-right: 0px solid #EEE;
	border-left: 0px solid #EEE;
}
li.token-input-token {
	overflow: hidden;
	height: auto !important;
	height: 15px;
	margin: 3px;
	padding: 1px 3px;
	background-color: #eff2f7;
	color: #2B5470;
	font-weight: bold;
	border: 1px solid #ccd5e4;
	font-size: 11px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	float: left;
	white-space: nowrap;

}
li.token-input-token p {
	display: inline;
	padding: 0;

	margin: 0;
	font-size: 12px;
}
li.token-input-token span {
	color: #a6b3cf;
	margin-left: 5px;
	font-weight: bold;
}
li.token-input-selected-token {
	background-color: #F9F9F9;
	border: 1px solid #eee;
	color: #2B5470
	font-weight: bold;
}
li.token-input-input-token {
	float: left;
	margin: 0;
	padding: 0;
	list-style-type: none;
}
div.token-input-dropdown {
	position: absolute;
	width: 400px;
	background-color: #fff;
	overflow: hidden;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	font-size: 11px;
	font-family: Verdana;
	z-index: 1;
}
div.token-input-dropdown p {
	margin: 0;
	padding: 5px;
}
div.token-input-dropdown ul {
	margin: 0;
	padding: 0;
}
div.token-input-dropdown ul li {
	background-color: #fff;
	padding: 3px;
	margin: 0;
	list-style-type: none;
}
div.token-input-dropdown ul li.token-input-dropdown-item {
	background-color: #fff;
}
div.token-input-dropdown ul li.token-input-dropdown-item2 {
	background-color: #fff;
}
div.token-input-dropdown ul li em {
	font-weight: bold;
	font-style: normal;
}
div.token-input-dropdown ul li.token-input-selected-dropdown-item {
	background-color: #F9F9F9;
	color: #2B5470;
	font-weight: bold;
}
/***System Messages***/
.ossn-system-messages .ossn-system-messages-inner {
	margin-top: 30px;
	z-index: 10000;
	margin-bottom: -100px;
	display: none;
}
.ossn-system-messages .ossn-system-messages-inner .alert {
	margin-bottom: 20px;
}


.alert-danger {
	background:rgba(55,0,0,.7);
}


/** v1-v3 compitible **/
.ossn-message-done {
	border: 1px solid #1EB0DF;
	border-width: 1px;
	background-color: #DAF6FF;
	padding: 13px;
	z-index: 10000;
	text-align: left;
}
/***0ssn modal box***/
.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #000;
	opacity: 0.9;
	height: 100%;
	display: none;
}
.ossn-light {
	opacity: 0.4;
}
.ossn-viewer {
	width: 940px;
	margin: 0 auto;
	position: relative;
}
.ossn-viewer .ossn-container {
	height: 200px;
	position: fixed;
	width: 900px;
	z-index: 10000;
	margin-top: 70px;
	min-height: 515px;
}
.ossn-viewer-loding {
	font-size: 15px;
}
.ossn-viewer .ossn-container .close-viewer {
	float: right;
	margin-right: 5px;
	font-weight: bold;
	font-size: 13px;
	color: #ccc;
}
.ossn-container tbody {
	background: #000;
}
.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #000;
	opacity: 0.9;
	height: 100%;
	display: none;
}
.ossn-viewer .info-block {
	background: #fff;
	height: 100%;
	width: 325px;
	float: right;
	margin-left: -3px;
}
.image-block img {
	max-width: 700px;
}
.ossn-message-box {
	width: 470px;
	min-width: 470px;
	min-height: 96px;
	background: #fff;
	border: 1px solid #999;
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	z-index: 60000;
	margin-top: 100px;
	border-radius: 3px;
	display: none;
	box-shadow: 0 2px 26px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 0, 0, 0.1);
}
.ossn-message-box .close-box {
	float: right;
	color: #ccc;
}
.ossn-message-box .title {
	background: #F5F6F7;
	padding: 11px;
	border-radius: 3px;
	border-bottom: 1px solid #E5E5E5;
	color: #5E5656;
	font-size: 14px;
	font-weight: bold;
}
.ossn-message-box .contents {
	padding: 10px;
	min-height: 150px;
	max-height: 420px;
	overflow-x: auto;
	overflow: overlay;
	overflow-x: -moz-hidden-unscrollable;
}
.ossn-message-box .control {
	margin-left: 10px;
	margin-right: 10px;
	height: 45px;
	padding: 10px;
	border-top: 1px solid #E9EAED;
}
.ossn-message-box .control .controls {
	float: right;
}
.ossn-message-box .control .controls .btn {
	padding: 2px 13px;
	border-radius: 2px;
}
.ossn-message-box .contents input[type='text'] {
	border: 1px solid #EEE;
	width: 292px;
	padding: 7px;
}
.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
	display: inline-table;
}
.ossn-message-box .contents label {
	color: #666;
	font-weight: bold;
	font-size: 13px;
	margin-right: 13px;
}

/*******************************
Ossn Blocked
*********************************/

.ossn-blocked i {
	font-size: 100px;
}
.ossn-blocked {
	text-align: center;
	padding: 100px;
}
.ossn-blocked div {
	font-size: 50px;
	font-weight: bold;
}
.ossn-blocked p {
	font-size: 16px;
}

/********************************
Loading Icon
@source: https://github.com/jlong/css-spinners
*********************************/

@-moz-keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(360deg);
		transform: rotate(360deg)
	}
}
@-webkit-keyframes three-quarters-loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg)
	}
}
@keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}
/* :not(:required) hides this rule from IE9 and below */
.ossn-loading:not(:required) {
	-moz-animation: three-quarters-loader 1250ms infinite linear;
	-webkit-animation: three-quarters-loader 1250ms infinite linear;
	animation: three-quarters-loader 1250ms infinite linear;
	border: 8px solid #c5ff00;
	border-right-color: transparent;
	border-radius: 16px;
	box-sizing: border-box;
	position: relative;
	overflow: hidden;
	text-indent: -9999px;
	width: 24px;
	height: 24px;
}
.ossn-box-loading {
	margin-left: 216px;
	margin-top: 37px;
}

/*******************************
Buttons
*********************************/

/******************************
Users List
*******************************/
.ossn-users-list-item .users-list-controls {
	margin-top: 20px;
}
.ossn-users-list-item .users-list-controls a {
	margin-left: 5px;
}
.ossn-users-list-item {
	border: 1px solid #E9EAED;
	margin-bottom: 10px;
	margin-right: -10px;
	margin-left: -10px;
}
.ossn-users-list-item .uinfo a {
	font-size: 14px;
	font-weight: bold;
	margin-top: 20px;
	float: left;
	text-overflow: ellipsis;
	width: 300px;
	white-space: nowrap;
	overflow: hidden;
}
.ossn-users-list-item .col-md-2 {
	text-align: center;
}

/*********************************
Footer
**********************************/

footer {
	margin-top: 20px;
	padding-top: 5px;
}
footer a{
	color: rgba(0, 0, 0, 0.0);!important;
	pointer-events: none;
	text-decoration: none}.menu-footer-powered {
		color: rgba(0, 0, 0, 0.0);!important;
		pointer-events: none;
		text-decoration: none}.menu-footer-powered:after {
			display: none;
		}

/****************************
Home
****************************/

.home-left-contents {
}
.home-left-contents .logo {
	text-align: center;
}
.home-left-contents .description {
	font-size: 17px;
	text-transform: uppercase;
	font-weight: bold;
	margin-top: 20px;
	text-align: justify;
	color: #fff;
}
.home-left-contents .buttons {
	text-align: center;
	margin-top: 10px;
}
#ossn-home-signup p {
	margin-top: 10px;
}

/**************************
System
***************************/

.ossn-list-users {
	height: 60px;
	border-bottom: 1px solid #E9EAED;
	display: block;
	margin-left: 5px;
	margin-bottom: 10px;
}
.ossn-list-users img,
.ossn-list-users .uinfo {
	display: inline-block;
}
.ossn-list-users .uinfo .userlink {
	font-size: 14px;
	font-weight: bold;
	float: right;
	margin-left: 12px;
	text-overflow: ellipsis;
	width: 370px;
	white-space: nowrap;
	overflow: hidden;
}
.ossn-list-users .friendlink {
	float: right;
	margin-top: 10px;
	margin-right: 9px;
	text-overflow: ellipsis;
	width: 280px;
	white-space: nowrap;
	overflow: hidden;
}
.sidebar-menu-nav .sidebar-menu .menu-content {
	display: block;
}
.ossn-box-inner {
	width: 446px;
}
.home-left-contents .some-icons i {
	font-size: 50px;
}
.home-left-contents .some-icons li {
	display: inline-block;
	color: #fff;
	border: 3px solid #fff;
	border-radius: 100%;
	padding: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
	width: 100px;
	height: 100px;
}
.home-left-contents .some-icons {
	margin-top: 10%;
	text-align: center;
}

/**************************
Similies
**************************/

.ossn-smiley-item {
	display: inline-block !important;
	margin-left: 2px;
	margin-right: 2px;
	width: initial !important;
	margin-bottom: 0px !important;
	margin-top: 0px !important;
	border: 0px !important;
}

/**************************
Embed
**************************/

.ossn_embed_video {
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 0px;
}

/**************************
Photos
***************************/

.ossn-photo-viewer .image-block img,
.ossn-photo-viewer {
	max-width: 100% !important}.ossn-photos-wall {
		background: #111 !important;
		border: 1px solid #111 !important;
	}
	.ossn-wall-item .post-contents img {
		background: #312f2f !important;
		border: 0px solid #111 !important;
		box-shadow: 0px 5px 20px #000 !important;
	}

/**************************
Mobile Layout Settings
***************************/

@media (max-width: 480px) {
/***********************
Comments
***********************/
.comments-list .comments-item .comment-user-img {
	display: none;

}
.comments-item .col-md-11 {
	padding-left: 15px;

}
/************************
Wall
************************/
.ossn-wall-item-type {
	display: block;

}
.ossn-wall-item .meta .user {
	width: 155px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;

}
.ossn-list-users .uinfo .userlink {
	text-overflow: ellipsis;
	width: 195px;
	white-space: nowrap;
	overflow: hidden;

}
.ossn-list-users a.right.btn.btn-primary {
	display: none;

}
.ossn-list-users a.right.btn.btn-danger {
	display: none;

}
.ossn-message-box .contents {
	height: 280px;
	overflow-x: auto;
	overflow: overlay;

}
/***************************
Topbar notification box
*****************************/
.ossn-notifications-box {
	width: 300px;

}
.ossn-notifications-box .notfi-meta {
	width: 230px;

}
.notification-friends .notfi-meta a {
	width: 100px;

}
.ossn-notifications-box .notfi-meta,
.ossn-notification-messages .user-item .data {
	width: 215px !important;

}
.ossn-notification-messages .user-item .data .name {
	width: 110px !important;

}
.ossn-notification-messages .reply-text-from {
	width: 200px !important;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;

}
/******************************
Profile
********************************/
.ossn-profile .profile-photo img {
	width: 100px;
	height: 100px;

}
.ossn-profile .user-fullname {
	font-size: 16px;
	margin-left: 135px;
	margin-top: -100px;
	width: 140px;

}
.ossn-profile .top-container .profile-cover {
	height: 188px;

}
.ossn-profile .profile-photo {
	margin-top: -130px;

}
.profile-menu {
	float: none;
	margin: 13px;

}
.ossn-profile .top-container .profile-cover img {
	width: auto;

}
.ossn-group-cover-button,
.profile-cover-controls {
	display: none !important;

}
.upload-photo {
	width: 100px;

}
.profile-hr-menu ul li {
	display: block;
	text-align: center;
	border-bottom: 1px solid rgb(238, 238, 238);
	margin-right: 0px;

}
.profile-hr-menu ul li a {
	margin-right: 0px;

}
.ossn-profile-role {
	display: none;

}
/*****************************
System
*****************************/
.ossn-users-list-item img {
	display: none;

}
.ossn-users-list-item .users-list-controls {
	margin-top: 10px;
	margin-bottom: 10px;

}
.ossn-users-list-item .uinfo a {
	margin-top: 10px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	width: 90px;

}
.ossn-search-page .ossn-users-list-item .uinfo a {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	width: 100px;

}
.ossn-system-messages {
	padding-left: 15px;
	padding-right: 15px;

}
.ossn-users-list-item {
	padding-bottom: 10px;

}
.ossn-widget .widget-contents {
	padding: 5px;

}
.ossn-message-box {
	min-width: 300px;
	width: 300px;

}
.ossn-box-loading {
	margin-left: 150px;
	margin-top: 37px;

}
.ossn-message-box .contents input[type="text"] {

	width: 195px;

}
.ossn-box-inner {
	width: 280px;

}
/**********************
Groups
************************/
.ossn-group-cover img {
	top: auto !important;
}
.ossn-group-cover {
	height: 100px !important;
}
.groups-buttons {
	float: none !important;
}
.ossn-group-cover-header,
.ossn-group-profile .profile-header,
.ossn-group-profile .profile-header .header-bottom {
	height: auto !important;
}
.ossn-group-profile .profile-header {
	max-height: inherit !important;
}
.groups-buttons {
	margin-top: 50px;
}
.ossn-group-profile .profile-header .group-name {
	float: none !important;
}
#group-header-menu li,
#group-header-menu {
	width: 100% !important;
}
#group-header-menu li {
	border-bottom: 0px solid #EEE !important;

}
.group-name {
	text-align: center;
	width: 100%;
	border-bottom: 0px solid #eee;

}
.ossn-group-members {
	margin-left: 15px;
	margin-right: 15px;

}
.ossn-group-members .request-controls,
.ossn-group-members .uinfo {
	display: inline-block;

}
.ossn-group-members .uinfo .userlink {
	width: 130px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;

}
.sidebar-menu-nav .sidebar-menu .menu-content {
	display: block;

}
.sidebar-hide-contents-xs {
	display: none;

}
.home-left-contents .some-icons {
	display: none;

}
/**************************
Layouts
****************************/
.newsfeed-right {
	display: none;

}
.ossn-messages .message-with .user-icon,
.ossn-messages .messages-recent .messages-from .user-item .image {
	display: none;

}
.ossn-messages .message-inner .row {
	margin-left: 0px !important;

}
/*************************
Home Page
**************************/
.logo img {
	width: 260px;

}
.home-left-contents .description {
	font-size: 16px;

}
.home-left-contents {
	margin-bottom: 20px;

}
/*****************************
Wall Menu
******************************/
.dropdown-menu {
	margin-left: -110px;

}
.menu-footer-powered {
	float: none;

}

}


/***************************************
Tablets
****************************************/

@media only screen and (max-width: 992px)
{
	.ossn-group-cover img {
		top: auto !important;

	}
	.dropdown-menu {
		margin-left: -110px;

	}
	.ossn-profile .user-fullname {
		max-width: 500px;
		font-size:3.3vw;
	}
	/*******	Comments	********/
	.comments-list .comments-item .comment-user-img {
		display: none;
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}

	/*******Layouts********/
	.newsfeed-right {
		display: none;
	}
	/*******Messages********/
	.ossn-messages .message-with .user-icon,
	.ossn-messages .messages-recent
	.messages-from .user-item .image {
		display: none;
	}
	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}
	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block
	}
}
@media only screen and (max-width: 1199px)
{
	.comments-list .comments-item .col-md-1,
	.comments-list .comments-item .comment-user-img {
		display: none;
	}
	.comments-list .comments-item .col-md-11 {
		width: 100%;
	}
	.comments-item .col-md-11 {
		padding-left: 15px;
	}
	.group-search-details {
		margin-left: 10px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left: 35px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo a {
		text-overflow: ellipsis;
		width: 200px;
		white-space: nowrap;
		overflow: hidden;
	}
	.ossn-users-list-item .users-list-controls {
		margin-bottom: 10px;
	}
	.ossn-profile .user-fullname {
		max-width: 640px;
	}
}
@media only screen and (max-width: 767px)
{
	.ossn-profile .user-fullname {
		max-width: 767px;
	}
	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left: 0;
	}
}
/*********3rd party components*********/
.sidebar-menu-nav ul .sub-menu li:before {
	font-family: FontAwesome;
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
}
.menu-section-item-groups:before {
	content: "\f07b" !important;
}
.topbar-search input{
	background-color: #333333c7;
	border: 0px !important;
	padding: 10px;
	height: 70px;
	width: 100%;
	color:#fff;
}
.topbar-search input[type=text]:focus, select:focus {
	box-shadow: 0px 0px 5px #c5ff00;
	outline:none;
}
.com-members-memberlist-item img {
	border: 0px !important;
	margin: 5px 5px 5px 5px !important;
	padding:0 !important;
	border-radius:0 !important;
	box-shadow: 0px 5px 20px #000 !important;
}
.col-md-5 {
	width: 40% !important;
}
.ossn-chat-tab-titles:hover {
	background: #222 !important;
	border: 0px !important;
}
.ossn-chat-tab-titles {
	background: #171717 !important;
	color: #fff !important;
	border: 0px !important;
	border-top-left-radius: 10px !important;
	border-top-right-radius: 10px !important;
}
.ossn-chat-bar .friends-list .data {
	border-left: 0px !important;
	border-right: 0px !important;
}
.ossn-chat-base .ossn-chat-bar .friends-list {
	border-top-left-radius: 10px !important;
	border-top-right-radius: 10px !important;
	background: #222 !important;
}
.ossn-chat-base{
	border-top-left-radius: 10px !important;
	border-top-right-radius: 10px !important;
	color:#999 !important;
}
.ossn-chat-base .ossn-chat-bar .inner:hover {
	background: #171717 !important;
	color:#c5ff00 !important;
}
.ossn-chat-base .ossn-chat-bar .inner {
	background: #171717 !important;
	border: 0px !important;
	-webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.0) !important;
	border-top-right-radius: 0px !important;
	border-top-left-radius: 0px !important;
}
.dropdown-menu {
	background-color: #000 !important;
	border: 0px !important;
	color: #999 !important;
}
.dropdown-menu>li>a {
	color: #999 !important;
}
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
	color: #c5ff00 !important;
	background: #000 !important;
}
.ossn-notifications-box {
	border-radius: 10px !important;
}
.ossn-notifications-box .type-name {
	color: #999 !important;
	border-bottom: 0px !important;
}
.ossn-notifications-box .bottom-all {
	background: #000 !important;
	border-top: 0px !important;
}
.ossn-notifications-box li:hover,
.ossn-notifications-box a:hover,
.ossn-notifications-all a:hover,
.ossn-notifications-all li:hover {
	background:  #000 !important;
	color: #c5ff00 !important;
}
.ossn-notification-messages .user-item:hover {
	background: #000 !important;
	color: #c5ff00 !important;
}
.ossn-notifications-box
.bottom-all a,
.ossn-notifications-box
.notfi-meta strong {
	color: #999 !important;
	background:  #000 !important;
}
.ossn-notification-messages .user-item {
	border-bottom: 0px !important;
	border-top: 0px !important;
}
.nav-tabs {
	border-bottom: 2px solid #3c763d !important;
}
.emojii-container {
	background: rgba(0, 0, 0, 0.87)!important;
	width: 254px!important;
	border: 0px transparent !important;
	position: fixed!important;
	bottom: 20px!important;
	right: 20px!important;
	z-index: 10000!important;
	box-shadow: 6px 6px 5px 1px #171717!important;
}
/**************************
Tooltip
****************************/
.tooltip{
	position:absolute;
	z-index:1070;
	display:block;
	font-family:"Helvetica Neue",
	Helvetica,
	Arial,
	sans-serif;
	font-size:12px;
	font-weight:400;
	line-height:1.4;
	filter:alpha(opacity=0);
	opacity:0;
}
.tooltip.in{
	filter:alpha(opacity=90);
	opacity:.9;
}
.tooltip.top{
	padding:5px 0;
	margin-top:-3px;
}
.tooltip.right{
	padding:0 5px;
	margin-left:3px;
}
.tooltip.bottom{
	padding:5px 0;
	margin-top:3px;
}
.tooltip.left{
	padding:0 5px;
	margin-left:-3px;
}
.tooltip-inner{
	max-width:200px;
	padding:3px 8px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	background-color:#000;
	border-radius:4px;
}
.tooltip-arrow{
	position:absolute;
	width:0;
	height:0;
	border-color:transparent;
	border-style:solid;
}
.tooltip.top
.tooltip-arrow{
	bottom:0;
	left:50%;
	margin-left:-5px;
	border-width:5px 5px 0;
	border-top-color:#000;
}
.tooltip.top-left .tooltip-arrow{
	right:5px;
	bottom:0;
	margin-bottom:-5px;
	border-width:5px 5px 0;
	border-top-color:#000;
}
.tooltip.top-right .tooltip-arrow{
	bottom:0;
	left:5px;
	margin-bottom:-5px;
	border-width:5px 5px 0;
	border-top-color:#000;
}
.tooltip.right .tooltip-arrow{
	top:50%;
	left:0;
	margin-top:-5px;
	border-width:5px 5px 5px 0;
	border-right-color:#000;
}
.tooltip.left
.tooltip-arrow{
	top:50%;
	right:0;
	margin-top:-5px;
	border-width:5px 0 5px 5px;
	border-left-color:#000;
}
.tooltip.bottom .tooltip-arrow{
	top:0;
	left:50%;
	margin-left:-5px;
	border-width:0 5px 5px;
	border-bottom-color:#000;
}
.tooltip.bottom-left
.tooltip-arrow{
	top:0;
	right:5px;
	margin-top:-5px;
	border-width:0 5px 5px;
	border-bottom-color:#000;
}
.tooltip.bottom-right
.tooltip-arrow{
	top:0;
	left:5px;
	margin-top:-5px;
	border-width:0 5px 5px;
	border-bottom-color:#000;
}
.fancybox-wrap {
	top:75px !important;
}
.fancybox-inner img {
	max-width: 100%;
	height: auto;
}
