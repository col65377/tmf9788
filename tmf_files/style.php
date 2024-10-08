/* older css template */
body, td, th, dd, dt, h1, h2, h3, h4, h5, h6, p, ol, ul, li {
}
body, small {
}
td, th {
}
textarea, pre {
font-family: monospace;
}

/* page body formatting */
body {
    color:  #000000;
    background-color: #ffffff;
}
body.leftmain {
    color:  #000000;
    background-color: #a0b8c8;
    text-align: left;
}

/* right links */
a:link, a:visited, a:hover, a:active {
    color: #0000cc;
}

/* left links */
.leftmain a:link, .leftmain a:visited, .leftmain a:hover, .leftmain a:active {
    color:  #000000;
}
.leftunseen, .leftrecent, .leftspecial, .leftspecial a:link, .leftspecial a:visited, .leftspecial a:hover, .leftspecial a:active {
    color:  #770000;
}
.leftrecent {
    font-weight:bold;
}
.leftnoselect a:link, .leftnoselect a:visited, .leftnoselect a:hover, .leftnoselect a:active {
    color:  #002266;
}

/* highlighted texts */
.highlight {
    color:  #002266;
}

/* left_main.tpl definitions */
.sqm_wrapperTable   {
    border:0;
    padding:0;
    margin-left:0;
    border-spacing:0;
    width:99%
}
.leftmain table {
    border:0;
    padding:0;
    margin:0;
    border-spacing:0;
}
.sqm_folderHeader {
    font-size:18px;
    font-weight:bold;
    text-align:center;
}
.sqm_clock {
}
.sqm_lastRefreshTime {
    white-space: nowrap;
}
.sqm_refreshButton {
}

/* formating of error template */
.thead_caption {
    font-weight: bold;
    text-align: center;
}

.error_list {
}
.error_table {
    color: #ff0000;
    border: 2px solid #dcdcdc;
    background-color: #a0b8c8;
    width: 100%;
}
.error_thead {
    background-color: #666666;
}
.error_thead_caption {
    background-color: #666666;
}
.error_row {
    color: #ff0000;
}
.error_val {
    color: #000000;
    width: 80%;
    border: 2px solid #dcdcdc;

}
.error_key {
    width: 20%;
    border: 2px solid #dcdcdc;
    color: #ff0000;
    font-weight: bold;
    font-style: italic;
    background-color: #dcdcdc;
}

/* form fields */
input.sqmtextfield{
}
input.sqmpwfield {
}
input.sqmcheckbox {
}
input.sqmradiobox {
}
input.sqmhiddenfield {
}
input.sqmsubmitfield {
}
input.sqmresetfield {
}
input.sqmtextarea {
}

/* basic definitions */
.table_empty {
    width:100%;
    border:0;
    margin:0;
    padding:0;
    border-spacing:0;
}

.table_standard {
    width:100%;
    border:1px solid #dcdcdc;
    padding:0;
    margin:0;
    border-spacing:0;
}

em		{
    font-weight:bold;
    font-style:normal;
}

small	{
    font-size:80%;
}

/* login.tpl definitions */
#sqm_login table {
    border:0;
    margin:0;
    padding:0;
    border-spacing:0;
    margin-left:auto;
    margin-right:auto;
}
#sqm_login td {
    padding:2px;
}

.sqm_loginImage {
    margin-left:auto;
    margin-right:auto;
    border:0;
    padding:2px;
}
.sqm_loginTop {
    text-align:center;
    font-size:80%;
}
.sqm_loginOrgName {
    font-weight:bold;
    text-align:center;
    background: #dcdcdc;
    width:350px;
    border:0;
}
.sqm_loginFieldName {
    text-align:right;
    width:30%;
}
.sqm_loginFieldInput {
    text-align:left;
}
.sqm_loginSubmit {
    text-align:center;
}

/* page_header.tpl definitions */
.sqm_currentFolder	{
    background: #ababab;
    padding:2px;
    text-align: left;
}
.sqm_headerSignout	{
    background: #ababab;
    padding:2px;
    text-align: right;
    font-weight:bold;
}
.sqm_topNavigation	{
    padding:2px;
    text-align: left;
}
.sqm_providerInfo	{
    padding:2px;
    text-align: right;
}

/* message_list.tpl definitions */
.table_messageListWrapper	{
    width:100%;
    padding:0;
    border-spacing:0;
    border:0;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    background: #ababab;
}

.table_messageList	{
    width:100%;
    padding:0;
    border-spacing:0;
    border:0;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    background: #ffffcc;
}

.table_messageList	a	{
    white-space:nowrap;
}

.table_messageList	tr.headerRow	{
    text-align: left;
    white-space:nowrap;
    font-weight:bold;
}
.table_messageList td.spacer {
    height:1px;
    background: #dcdcdc;
}

.table_messageList	tr		{
    vertical-align:top;
}
.table_messageList	tr.even	{
    background: #ededed;
}
.table_messageList	tr.odd	{
    background: #ffffff;
}
.table_messageList	tr.mouse_over	{
    background: #ffffcc;
}
.table_messageList	tr.clicked	{
    background: #ff9933;
}

.table_messageList	td	{
    white-space:nowrap;
}
.table_messageList	td.col_check	{
    text-align: left;
}
.table_messageList	td.col_subject	{
    text-align: left;
}
.table_messageList	td.col_flags	{
    text-align: left;
}
.table_messageList	td.col_date	{
    text-align:center;
}
.table_messageList	td.col_text	{
    text-align: left;
}

.unread		{
    font-weight:bold;
}
.deleted	{
    color: #ababab;
}
.flagged	{
    color: #cc0000;
}
.high_priority	{
    color: #800000;
}
.low_priority	{
    color: #000000;
}

.col_checked	{
}

.links_paginator			{
    text-align: left;
}

.message_count				{
    text-align:right;
    font-size:8pt;
}

.message_list_controls {
    background: #dcdcdc;
}

.message_control_button {
    padding:0px;
    margin:0px;
}
.message_control_buttons {
    text-align: left;
    font-size:10px;		/* replaces <small> tags to allow greater control of fonts w/ using an id. */
}
.message_control_delete {
    text-align: right;
    font-size:10px;		/* replaces <small> tags to allow greater control of fonts w/ using an id. */
}
.message_control_move {
    text-align: right;
    font-size:10px;		/* replaces <small> tags to allow greater control of fonts w/ using an id. */
}

.spacer	{
    height:5px;
    background: #ffffff;
}


