

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
      <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>MyReferralApp</title>
      <!-- Include bootstrap CSS -->
      <link type="text/css" href="style/jquery-ui-1.8.16.custom-grey.css" rel="stylesheet" />
      <link type="text/css" href="style/style.css" 	rel="stylesheet">
      <!-- Include jQuery and bootstrap JS plugins -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script type="text/javascript" charset="utf-8" src="js/empanelment.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" charset="utf-8" src="http://code.jquery.com/ui/1.8.16/jquery-ui.min.js"  ></script>
      <script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    
      <script type="text/javascript">
         var unhandledExMsg = 'System encountered technical error.Please try after some time.';
         var sessionExpiresMsg = 'Your session has expired. Kindly click on Login button to re-login.';
         var ajaxTimeout  = '3000';
         ajaxTimeout = new Number(ajaxTimeout);
         
      </script>
      <input id="t1" type ="hidden" value='ag&#95;ruchi&#64;yahoo&#46;com'/>
      <input id="t2" type ="hidden" value='Ruchi&#32;A'/> 
      <!-- Site header and navigation -->
      <header class="top" role="header" id="divHeader">
         <!--Start of Zopim Live Chat Script-->
         <script type="text/javascript">
            window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?46EIOBR0BGs1a4BUVbaq8m4qRTSQml9G";z.t=+new Date;$.
            type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
            
            $zopim(function() {
                $zopim.livechat.setName($("#t2").val());
                $zopim.livechat.setEmail($("#t1").val());		    
              });
         </script>
         <!--End of Zopim Live Chat Script-->
  
            <meta http-equiv="refresh" content="1800;url=expired.jsp">
          
            <script type="text/javascript">
               $(document).ready(function(){
               	var loginName = $("#loginName").val();
               	if((loginName.length) > 13){
               	var seperatedName = loginName.substr(0,13);
               	document.getElementById("sepratedName").innerHTML = seperatedName + "...";
               	}
               	else {
               		document.getElementById("sepratedName").innerHTML = loginName;
               	}
               });
            </script>
			</head>			
            <body>
               <div class="ie-8-bg">
                  <div class="container">
                     <span  class="navbar-brand pull-left" style="margin-top: 6px; padding-left: 0px"> 
                     <img src="images/logo.png" alt="logo" />
                     </span>
                     <div class="pull-right menu-items-div">                        
                        <nav class="navbar-collapse collapse pull-left" role="navigation" style="background-color:#fff;">
                           <ul class="navbar-nav nav">
                              <!-- <li><a href="#">Home</a></li> -->
                              <li><a href="aboutUs.htm" target="_blank">About Us</a></li>
                              <li><a href="aboutTheProgram.htm" target="_blank">About the Program</a></li>
                              <!-- <li><a href="privacyPolicy.htm" target="_blank">Privacy Policy</a></li>
                                 <li><a href="disclaimer.htm" target="_blank">Disclaimer</a></li> -->
                              <li><a href="featureOfferings.htm" target="_blank">Feature Offerings</a></li>
                              <li><a href="lob.htm" target="_blank">Line Of Business</a></li>
                              <li><a href="trainingVideo.htm" target="_blank">How To Get Started</a></li>
                              <!-- <li><a href="contact.htm" target="_blank">Contact Us</a></li> -->
                           </ul>
                        </nav>
                        <div class="pull-left user-info ">
                           <div class="user-info-cont">
                              <strong>Welcome</strong>&nbsp;&nbsp;<span id="sepratedName" title="Ruchi&#32;A"></span><br>
                              <strong>Role:</strong>
                              PARTNER
                           </div>
                        </div>
                        <div class="pull-right" id="logout-bg">
                           <a href="logout">LOGOUT</a><br> 
                           <span id="dateBox"></span><br>
                           <span id="clockBox"></span>
                        </div>
                        <!--- logout bg --->
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <input type="hidden" id="loginName" value="Ruchi&#32;A"/> 
               </div>
            </body>
         </html>
      </header>
      <!-- Middle content section -->
      <div class="middle" id="divBody">
         <div style="width:100%;">
            <button type="button" class="navbar-toggle collapsed show-nav-btn" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="padding:8px 6px !important; ">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <div class="container ui-tabs ui-widget ui-widget-content ui-corner-all">
            <!-- left Nav Starts -->
            <script type="text/javascript">
               $(document).ready(function(){
               	setActiveClass();
               });
            </script>
            <script type="text/javascript">
               $(document).ready(function()
               {
					jQuery(".tab-click").click(function(e){						
						var source = jQuery(".ui-tabs-selected > a").attr("href");
						var target = jQuery(e.target).attr("href");						
						jQuery(".toggle_container >div").addClass("ui-tabs-hide");						
						jQuery(".ui-tabs-nav > li").removeClass("ui-state-active");
						jQuery(".ui-tabs-nav > li").removeClass("ui-tabs-selected");
						jQuery(jQuery(this).parent()).addClass("ui-state-active");						
						jQuery(jQuery(this).parent()).addClass("ui-tabs-selected");
						jQuery(jQuery(e.target).attr("href")).removeClass("ui-tabs-hide");						
					});
               });
               function setActiveClass()
               {
               	var urlText = window.location.href;
               	/*Partner Login*/
               	if(urlText.indexOf("empanelPartner.htm") != -1){
               		$('#empanelment').addClass('active');
               	}
               	else if(urlText.indexOf("acquirePartner.htm") != -1){
               		$('#acquirePartner').addClass('active');
               	}
               	else if(urlText.indexOf("myLeads.htm") != -1){
               		$('#myLeads').addClass('active');
               	}
               	else if(urlText.indexOf("partnerLeads.htm") != -1){
               		$('#partnerLeads').addClass('active');
               	}
               	else if(urlText.indexOf("caseCountDetails.htm") != -1){
               		$('#partnerLeads').addClass('active');
               	}
               	else if(urlText.indexOf("getLeadDetailsForSubPartnerLead.htm") != -1){
               		$('#partnerLeads').addClass('active');
               	}
               	
               	else if(urlText.indexOf("myEarning.htm") != -1){
               		$('#myEarnings').addClass('active');
               	}
               	else if(urlText.indexOf("partnerDashboard.htm") != -1){
               		$('#partnerDashboard').addClass('active');
               	}
               	else if(urlText.indexOf("partnerDashboardbk.htm") != -1){
               		$('#partnerDashboard').addClass('active');
               	}
               	
               	/*BD Login*/
               	else if(urlText.indexOf("acquirePartner.htm") != -1){
               		$('#acquirePartner').addClass('active');
               	}
               	else if(urlText.indexOf("sendLink.htm") != -1){
               		$('#acquirePartner').addClass('active');
               	}
               	
               	/*Finannce Login*/
               	else if(urlText.indexOf("payoutFinanceSearch.htm") != -1){
               		$('#financePayout').addClass('active');
               	}
               	/* Admin login */
               	else if(urlText.indexOf("leadDashBoard.htm") != -1){
               		$('#leadDashboard').addClass('active');
               	}
               	else if(urlText.indexOf("leadsCountPartner.htm") != -1){
               		$('#leadDashboard').addClass('active');
               	}
               	else if(urlText.indexOf("back.htm") != -1){
               		$('#leadDashboard').addClass('active');
               	}
               	/*BE Login*/
               	else if(urlText.indexOf("uploadReportedCases.htm") != -1){
               		$('#uploadReportCases').addClass('active');
               	}
               	else if(urlText.indexOf("downloadPayoutCases.htm") != -1){
               		$('#downloadPayoutCases').addClass('active');
               	}
               	
               	/*Verifier Login*/
               	else if(urlText.indexOf("verifierPartnerSearch.htm") != -1){
               		$('#verifierPartnerSearch').addClass('active');
               	}
               	else if(urlText.indexOf("doDeDupeSearch.htm") != -1){
               		$('#doDeDupeSearch').addClass('active');
               	}
               	else if(urlText.indexOf("searchDedupeView.htm")!=-1){
               		$('#doDeDupeSearch').addClass('active');
               	}
               	else if(urlText.indexOf("verifierSearchResult.htm") != -1){
               		$('#verifierPartnerSearch').addClass('active');
               	}
               	else if(urlText.indexOf("editEmpanelmentFormVerification.htm") != -1){
               		$('#verifierPartnerSearch').addClass('active');
               	}
               	else if(urlText.indexOf("submitVerifiedPartner.htm") != -1){
               		$('#verifierPartnerSearch').addClass('active');
               	}
               	
               	/* Finance Login*/
               	else if(urlText.indexOf("downloadPayoutCasesForFinance.htm")!=-1){
               			$("#financeDownloadCase").addClass('active');
               	}
               	else if(urlText.indexOf("changePassword.htm")!=-1){
               		$("#changePassword").addClass('active');
               }
               	
               }
            </script>
            <div class="col-md-3 cssmenu" id="left-nav">
               <ul class="nav show-nav-data navbar-collapse">
                  <li id="partnerDashboard"><a href="partnerDashboard.htm">DASHBOARD</a></li>
                  <li id="empanelment"><a href="empanelPartner.htm">EMPANELMENT</a></li>
                  <li id="referralForm"><a href="referralForm.htm">REFERRAL FORM</a></li>
                  <li id="rateCard"><a href="selfRateCard.htm">RATE CARD</a></li>
                  <li id="myLeads"><a href="myLeads.htm">MY LEADS</a></li>
                  <li id="partnerLeads"><a href="partnerLeads.htm">MY PARTNER'S LEADS</a></li>
                  <li id="myEarnings"><a href="myEarning.htm">MY EARNINGS</a></li>
                  <li id="acquirePartner"><a href="/acquirePartner.htm">ACQUIRE PARTNER</a></li>
                  <li id="changePassword"><a href="changePassword.htm">CHANGE PASSWORD</a></li>
               </ul>
            </div>
            <!-- left Nav Ends -->
            <div class="col-md-9 content top-title-content">
               <div id="main-contnt" class="bordr-none">
                  <div>                   
                     <script>
                        (function ($, global) {
                            var isFirefox = typeof InstallTrigger !== 'undefined';
                        	var URI = window.location.href;
                        	   
                            var _hash = "!",
                            noBackPlease = function () {
                                global.location.href += "#";
                        
                                setTimeout(function () {
                                    global.location.href += "!";
                                }, 50);
                            };
                           if(!isFirefox && !matchMedia('only screen and (max-width: 1024px)').matches)
                           {
                            	global.setInterval(function () {
                                if (global.location.hash != _hash) {
                                    global.location.hash = _hash;
                                }
                            }, 100);
                            	
                           }
                        
                            global.onload = function () {
                                noBackPlease();
                        
                                // disables backspace on page except on input fields and textarea..
                                $(document.body).keydown(function (e) {
                                    var elm = e.target.nodeName.toLowerCase();
                                    if (e.which == 8 && elm !== 'input' && elm  !== 'textarea') {
                                        e.preventDefault();
                                    }
                                    // stopping event bubbling up the DOM tree..
                                    e.stopPropagation();
                                });
                          } 
                        
                        })(jQuery, window);
                     </script>
                    
                     <style>
                        .label-prp{
                        background-color:#eaeceb !important;border: 0px !important;
                        }
                        .label-prp:focus{box-shadow:none !important;}
                     </style>
                     <div class="upper-title2" align="center">
                        <div class="top-title">Complaints</div>
                     </div>
                     <div class="upper-title main-radio" align="center" id="divPartnerType" style="display: none;">
                        <div class="">
                           <input type="radio" name="partnerType"  class="partnerType input_data" id="individual" value="34" onclick="check(this.id)">
                           &nbsp;&nbsp;<label>Individual</label>
                        </div>
                        <div>
                           <input type="radio" name="partnerType"  class="partnerType input_data" id="partnership" value="35" onclick="check(this.id)">
                           &nbsp;&nbsp;<label>Partnership	</label>
                        </div>
                        <div>
                           <input type="radio" name="partnerType"   class="partnerType input_data" id="pvt" value="37"  onclick="check(this.id)">
                           &nbsp;&nbsp;<label>Pvt Ltd</label>
                        </div>
                        <div>
                           <input type="radio" name="partnerType"   class="partnerType input_data" id="proprietorship" value="36" onclick="check(this.id)">
                           &nbsp;&nbsp;<label>Proprietorship</label>
                        </div>
                     </div>
                     <div>
                        <span class='fieldError' name='firstName' style='display: block;'></span>
                     </div>
                     <div id="partnerBasicInfo">
                        <div id="partnerBasicInfo">
                           <table width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr nameit="individual">
                                    <td>
                                       <input id="tabName" name="tabName" class="input_data" value="PARTNER DETAIL" type="hidden">
                                       <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                                          <div class="save-msg" style="display: none" align="center">Data has been saved successfully</div>
                                          <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                                             <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
                                                <a href="#tabs-1" id="tabs1" class="tab-click tabs-1" tabname="PARTNER DETAIL">Complaint Details</a>
                                             </li>
                                             <li class="ui-state-default ui-corner-top">
                                                <a href="#tabs-2" class="tab-click tabs-2" tabname="BANK DETAILS">Policy Details</a>
                                             </li>
                                             <li class="ui-state-default ui-corner-top">
                                                <a href="#tabs-3" class="tab-click tabs-3" tabname="DOCUMENTATION">Documentation</a>
                                             </li>
                                             <li class="ui-state-default ui-corner-top">
                                                <a href="#tabs-4" class="tab-click tabs-4" tabname="TERMS AND CONDITIONS">Terms &amp; Conditions</a>
                                             </li>
                                             <div class="clear"></div>
                                          </ul>
                                          <div class="toggle_container">
                                             <!-- tab1 starts -->
                                             <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
                                                <div>
                                                   <div class="toggle_head top-none" style="display: none;">Details <span class="plusminus">-</span></div>
                                                   <div class="toggle_body">
                                                      <table class="outer_table no-more-tables-lead-dashboard" width="100%" cellspacing="0" cellpadding="6">
                                                         <tbody>
                                                            <tr class="tr_even">
                                                               <td width="17%" valign="top">
                                                                  Type<span class="red">*</span>
                                                               </td>
                                                               <td width="22%" valign="top">                                                                  
																   <select name="currentAddress.districtName" id="districtCurrentAddress" class="select-medium input_data district current_district" dependentdd="office_city" depend="district" onchange="clearMsg('district_name','district_name_2');">
                                                                     <option selected="selected" value="0" sysid="0">----Select----</option>
																	 <option value="complaint">Complaint</option>
																	 <option value="information">Information</option>
                                                                  </select>
                                                               </td>
                                                               <td valign="top">
                                                                  Type of complaint<span class="red">*</span>
                                                               </td>
                                                               <td valign="top">                                                                 
																  <select name="currentAddress.districtName" id="districtCurrentAddress" class="select-medium input_data district current_district" dependentdd="office_city" depend="district" onchange="clearMsg('district_name','district_name_2');">
                                                                     <option selected="selected" value="0" sysid="0">----Select----</option>
																	 <option value="1">Commission not paid</option>
																	 <option value="2">Premium charged higher than Information</option>
																	 <option value="1">Unit linked policy sold as fixed benefit policy</option>
																	 <option value="2">Regular premium sold as single premium</option>
																	 <option value="1">Policy feature not explained</option>
																	 <option value="2">Documents forged</option>
																	 <option value="2">Signature mismatch</option>
																	 <option value="2">Advisor not giving service</option>
																	 <option value="2">Nominee details not filled properly</option>
																	 <option value="2">Unable to surrender policy</option>
																	 <option value="2">Claim denied</option>
																	 <option value="2">Claim documents not being received</option>
                                                                  </select>
                                                               </td>
                                                               <td style="display: none;" width="15%" valign="top">Middle Name</td>
                                                               <td style="display: none;" width="17%" valign="top">
                                                                  <input class="input-medium input_data" name="middleName" maxlength="50" onkeypress="clearMsg('middle_name');return isAlphabet(event)" type="text">
                                                                  <span class="fieldError" id="middle_name" name="middleName" style="display: block;"></span>
                                                               </td>
                                                            </tr>
                                                           
                                                          
                                                            <tr class="tr_even">
                                                              
                                                               <td class="cAddress1MobileLabel" width="22%" valign="top" >
                                                                  Complaint Details<span class="red">*</span>
                                                               </td>
                                                               <td class="cAddress1MobileBox" width="25%" valign="top" colspan="3">
                                                                  <textarea id="currentAddress1" style="width:600px" class="input-medium input_data addresstext line1  textarea2  textarea3" name="currentAddress.addressLine1" depend="line1" maxlength="100" onkeypress="clearMsg('address_line_1','address_line_12');" onkeydown="clearMsg('address_line_1','address_line_12');" onchange="onCopyPastInCurrentAddress('currentAddress1','premanentAddress1');"></textarea>
                                                                  <span class="fieldError" id="address_line_1" name="currentAddress.addressLine1" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="cstateLabel" width="25%" valign="top">
                                                                  State<span class="red">*</span>
                                                               </td>
                                                               <td class="cstatebox" width="25%" valign="top">
                                                                  <select name="currentAddress.stateName" id="stateCurrentAddress" class="select-medium input_data state" dependentdd="current_district" depend="state" onchange="clearMsg('state_name','state_name_2');">
                                                                     <option selected="selected" value="0">----Select----</option>
                                                                     <option value="ANDAMAN AND NICOBAR ISLANDS" sysid="48">ANDAMAN AND NICOBAR ISLANDS</option>
                                                                     <option value="ANDHRA PRADESH" sysid="17">ANDHRA PRADESH</option>
                                                                     <option value="ARUNACHAL PRADESH" sysid="27">ARUNACHAL PRADESH</option>
                                                                     <option value="ASSAM" sysid="4">ASSAM</option>
                                                                     <option value="BIHAR" sysid="32">BIHAR</option>
                                                                     <option value="CHANDIGARH" sysid="2">CHANDIGARH</option>
                                                                     <option value="CHHATTISGARH" sysid="19">CHHATTISGARH</option>
                                                                     <option value="DADRA AND NAGAR HAVELI" sysid="49">DADRA AND NAGAR HAVELI</option>
                                                                     <option value="DAMAN AND DIU" sysid="50">DAMAN AND DIU</option>
                                                                     <option value="DELHI" sysid="33">DELHI</option>
                                                                     <option value="GOA" sysid="46">GOA</option>
                                                                     <option value="GUJARAT" sysid="10">GUJARAT</option>
                                                                     <option value="HARYANA" sysid="21">HARYANA</option>
                                                                     <option value="HIMACHAL PRADESH" sysid="9">HIMACHAL PRADESH</option>
                                                                     <option value="JAMMU &amp; KASHMIR" sysid="20">JAMMU &amp; KASHMIR</option>
                                                                     <option value="JHARKHAND" sysid="39">JHARKHAND</option>
                                                                     <option value="KARNATAKA" sysid="44">KARNATAKA</option>
                                                                     <option value="KERALA" sysid="29">KERALA</option>
                                                                     <option value="LAKSHADWEEP" sysid="51">LAKSHADWEEP</option>
                                                                     <option value="MADHYA PRADESH" sysid="25">MADHYA PRADESH</option>
                                                                     <option value="MAHARASHTRA" sysid="1">MAHARASHTRA</option>
                                                                     <option value="MANIPUR" sysid="28">MANIPUR</option>
                                                                     <option value="MEGHALAYA" sysid="16">MEGHALAYA</option>
                                                                     <option value="MIZORAM" sysid="47">MIZORAM</option>
                                                                     <option value="NAGALAND" sysid="11">NAGALAND</option>
                                                                     <option value="ORISSA" sysid="3">ORISSA</option>
                                                                     <option value="PUDUCHERRY" sysid="52">PUDUCHERRY</option>
                                                                     <option value="PUNJAB" sysid="34">PUNJAB</option>
                                                                     <option value="RAJASTHAN" sysid="42">RAJASTHAN</option>
                                                                     <option value="SIKKIM" sysid="31">SIKKIM</option>
                                                                     <option value="TAMIL NADU" sysid="45">TAMIL NADU</option>
                                                                     <option value="TRIPURA" sysid="14">TRIPURA</option>
                                                                     <option value="UTTARAKHAND" sysid="15">UTTARAKHAND</option>
                                                                     <option value="UTTAR PRADESH" sysid="40">UTTAR PRADESH</option>
                                                                     <option value="WEST BENGAL" sysid="30">WEST BENGAL</option>
                                                                  </select>
                                                                  <span class="fieldError" id="state_name" name="currentAddress.stateName" style="display:block;"></span>
                                                               </td>
                                                               <td class="cdistrictLabel" width="15%" valign="top">
                                                                  District<span class="red">*</span>
                                                               </td>
                                                               <td class="cdistrictBox" valign="top">
                                                                  <select name="currentAddress.districtName" id="districtCurrentAddress" class="select-medium input_data district current_district" dependentdd="office_city" depend="district" onchange="clearMsg('district_name','district_name_2');">
                                                                     <option selected="selected" value="0" sysid="0">----Select----</option>
                                                                  </select>
                                                                  <span class="fieldError" id="district_name" name="currentAddress.districtName" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even" style="display: none;">
                                                               <th colspan="2" class="pan-card" style="padding: 7px; font-weight: inherit;" valign="top" align="left">
                                                                  PAN Card&nbsp;
                                                                  <input class="input_data radio-emp" id="panCard" name="panCard" onclick="checkPanCardRadio();" checked="checked" type="radio">
                                                                  &nbsp;&nbsp;
                                                                  Acknowledgement Slip &nbsp;
                                                                  <input class="input_data radio-emp" id="ackSlip" name="ackSlip" onclick="checkAckSlipRadio();" value="" type="radio">
                                                               </th>
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                            </tr>
                                                            <tr class="tr_even" nameit="PanCard4" id="pancardTable1">
                                                               <td class="ccityLabel" width="15%" valign="top">
                                                                  City<span class="red">*</span>
                                                               </td>
                                                               <td class="ccityBox" valign="top">
                                                                  <select name="currentAddress.cityName" class="select-medium input_data office_city city" id="city" depend="city" onchange="clearMsg('city_name','city_name_2');">
                                                                     <option selected="selected" value="0" sysid="0">----Select----</option>
                                                                  </select>
                                                                  <span class="fieldError" id="city_name" name="currentAddress.cityName" style="display:block;"></span>
                                                               </td>
                                                               <td valign="top">
                                                                  Name on PAN Card
                                                               </td>
                                                               <td valign="top">
                                                                  <input class="input-medium input_data" id="nameOnPanCard" name="nameOnPanCard" maxlength="100" onkeypress="clearMsg('pan_card_name');return isAlphabet(event)" type="text">
                                                                  <span class="fieldError" id="pan_card_name" name="nameOnPanCard" style="display:block;"></span>
                                                               </td>
                                                            </tr>                                                            
                                                            <tr class="tr_even" nameit="AknSlip4" style="display: none" id="ackSlipTable">
                                                               <td valign="top">
                                                                  Acknowledgement Slip Number
                                                               </td>
                                                               <td valign="top">
                                                                  <input class="input-medium input_data" name="ackSlipNumber" maxlength="30" onkeypress="clearMsg('ack_slip_number');" type="text">
                                                                  <span class="fieldError" id="ack_slip_number" name="ackSlipNumber" style="display:block;"></span>
                                                               </td>
                                                               <td valign="top">
                                                                  Service Tax Applicable<span class="red">*</span>
                                                               </td>
                                                               <td id="tdAckSercvieTax" valign="top">
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                                <div style="display: none;">
                                                   <div class="toggle_head">
                                                      Contact Details 
                                                      <span class="plusminus">-</span>
                                                   </div>
                                                   <div class="toggle_body">
                                                      <table class="outer_table no-more-tables-lead-dashboard" width="100%" cellspacing="0" cellpadding="6">
                                                         <tbody>
                                                            <tr class="tr_even">
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td valign="top">
                                                                  Email-ID
                                                               </td>
                                                               <!-- <td valign="top">
                                                                  <input type="text" class="input-medium input_data" name="emailId" maxlength="50" onkeypress="clearMsg('email_id');" readonly="readonly" />
                                                                  <input type="hidden" class="input-medium input_data" name="contactDetails.emailAddress" maxlength="50" onkeypress="clearMsg('email_id');"/>
                                                                  <span class="fieldError" id="email_id" name="contactDetails.emailAddress" style="display:block;"></span>
                                                                  </td > -->
                                                               <td valign="top">Alternate Number 2</td>
                                                               <td class="hideTd" valign="top">
                                                                  <input class="input-medium input_data hideAlternate2Text" name="contactDetails.alternateNumber2" id="aNo2" onkeydown="return isNumberKey(event,this.id);" onkeyup="return isNumberKey(event,this.id);" onkeypress="clearMsg('alternate_number_2');return isNumberKey(event,this.id)" maxlength="10" type="text">
                                                                  <span class="fieldError" id="alternate_number_2" name="contactDetails.alternateNumber2" style="display:block;"></span>
                                                               </td>
                                                               <td class="showTd" style="display: none;" valign="top">
                                                                  <span class="fieldError" id="alternate_number_2" name="contactDetails.alternateNumber2" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td valign="top">Alternate Email-ID</td>
                                                               <td valign="top">
                                                                  <input class="input-medium input_data" name="contactDetails.alternateEmailAddress" maxlength="50" onkeypress="clearMsg('alternate_email_id');" type="text">
                                                                  <span class="fieldError" id="alternate_email_id" name="contactDetails.alternateEmailAddress" style="display:block;"></span>
                                                               </td>
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                                <div style="display: none;">
                                                   <div class="toggle_head">
                                                      Father's Name
                                                      <span class="plusminus">+</span>
                                                   </div>
                                                   <div class="toggle_body" style="display: none;">
                                                      <table class="outer_table no-more-tables-lead-dashboard" width="100%" cellspacing="0" cellpadding="6">
                                                         <tbody>
                                                            <tr class="tr_even">
                                                               <td width="17%" valign="top">
                                                                  First Name<span class="red">*</span>
                                                               </td>
                                                               <td width="22%" valign="top">
                                                                  <input class="input-medium input_data" name="fatherFirstName" maxlength="50" onkeypress="clearMsg('father_first_name');return isAlphabet(event)" type="text">
                                                                  <span class="fieldError" id="father_first_name" name="fatherFirstName" style="display:block;"></span>											
                                                               </td>
                                                               <td width="15%" valign="top">
                                                                  Middle Name
                                                               </td>
                                                               <td width="17%" valign="top">
                                                                  <input class="input-medium input_data" name="fatherMiddleName" maxlength="50" onkeypress="clearMsg('father_middle_name');return isAlphabet(event)" type="text">
                                                                  <span class="fieldError" id="father_middle_name" name="fatherMiddleName" style="display:block;"></span>											
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td valign="top">Last Name</td>
                                                               <td valign="top">
                                                                  <input class="input-medium input_data" name="fatherLastName" maxlength="50" onkeypress="clearMsg('father_last_name');return isAlphabet(event)" type="text">
                                                                  <span class="fieldError" id="father_last_name" name="fatherLastName" style="display:block;"></span>											
                                                               </td>
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                                <div style="display: none;">
                                                   <div class="toggle_head">
                                                      Current Address
                                                      <span class="plusminus" onclick="mobileCurrentAddress();">+</span>
                                                   </div>
                                                   <div class="toggle_body" style="display: none;">
                                                      <table class="outer_table no-more-tables-lead-dashboard" id="current_address_mobile_view" width="100%" cellspacing="0" cellpadding="6">
                                                         <tbody>
                                                            <tr class="tr_even">
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="caddressline2Label" valign="top">Address Line 2</td>
                                                               <td class="caddressline2box" valign="top">
                                                                  <input id="currentAddress2" class="input-medium input_data addresstext " value="" name="currentAddress.addressLine2" depend="line2" maxlength="100" onkeypress="clearMsg('address_line_2','address_line_22');" onkeydown="clearMsg('address_line_2','address_line_22');" onchange="onCopyPastInCurrentAddress('currentAddress2','permanentAddress2');" type="text">
                                                                  <span class="fieldError" id="address_line_2" name="currentAddress.addressLine2" style="display:block;"></span>
                                                               </td>
                                                               <!-- <td valign="top" class="cdistrictBox">
                                                                  <select name="currentAddress.districtName" id="districtCurrentAddress" class="select-medium input_data district current_district"  dependentdd='office_city' depend='district' onchange="clearMsg('district_name','district_name_2');">
                                                                  	<option selected="selected" value="0" sysid='0'>----Select----</option>
                                                                  </select>
                                                                  <span class="fieldError" id="district_name" name="currentAddress.districtName" style="display:block;"></span>
                                                                  </td> -->
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="caddressline3label" valign="top">Address Line 3</td>
                                                               <td class="caddressline3Box" valign="top">
                                                                  <input id="currentAddress3" class="input-medium input_data addresstext line3 " name="currentAddress.addressLine3" depend="line3" maxlength="100" onkeypress="clearMsg('address_line_3','address_line_32');" onkeydown="clearMsg('address_line_3','address_line_32');" onchange="onCopyPastInCurrentAddress('currentAddress3','permanentAddress3');" type="text">
                                                                  <span class="fieldError" id="address_line_3" name="currentAddress.addressLine3" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="cpinlabel" valign="top">
                                                                  Pin Code<span class="red">*</span>
                                                               </td>
                                                               <td class="cpinBox hideTd" valign="top">
                                                                  <input class="input-medium input_data addresstext pincode pincodeTextInput" id="currentAddressPin" name="currentAddress.pinCode" depend="pincode" onchange="onCopyPastInCurrentAddress('currentAddressPin','permanentPin');" onkeyup="return isNumberKey(event,this.id);" onkeydown="clearMsg('pin_code','pin_code_2');return isNumberKey(event,this.id)" onkeypress="clearMsg('pin_code','pin_code_2');return isNumberKey(event,this.id)" maxlength="6" type="text">
                                                                  <span class="fieldError" id="pin_code" name="currentAddress.pinCode" style="display:block;"></span>
                                                               </td>
                                                               <td class="cpinBox showTd" style="display: none;" valign="top">
                                                                  <span class="fieldError" id="pin_code" name="currentAddress.pinCode" style="display:block;"></span>
                                                               </td>
                                                               <td class="hiddennbsp" width="15%">&nbsp;</td>
                                                               <td class="hiddennbsp">&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                                <div style="display: none;">
                                                   <div class="toggle_head">
                                                      Permanent Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                      <input id="sameAbove" class="sameAsAbove input_data" name="isSameAsCurrent" onclick="mobilePermanentAddress();" type="checkbox">&nbsp; <em>same as above</em> 
                                                      <span class="plusminus" onclick="mobilePermanentAddress();">+</span>
                                                   </div>
                                                   <div class="toggle_body" id="address" style="display: none;">
                                                      <table class="outer_table no-more-tables-lead-dashboard" width="100%" cellspacing="0" cellpadding="6">
                                                         <tbody>
                                                            <tr class="tr_even">
                                                               <td class="pAddress1MobileLabel" width="20%" valign="top">Address Line 1</td>
                                                               <td class="pAddress1MobileBox" width="25%" valign="top">
                                                                  <input id="premanentAddress1" class="input-medium input_data sameAsAboveData line1" name="permanentAddress.addressLine1" maxlength="100" onkeypress="clearMsg('address_line_12');" type="text">
                                                                  <span class="fieldError" id="address_line_12" name="permanentAddress.addressLine1" style="display:block;"></span>
                                                               </td>
                                                               <td class="pstateLabel" width="25%" valign="top">
                                                                  State
                                                                  <span class="red"></span>
                                                               </td>
                                                               <td class="pstatebox" width="17%" valign="top">
                                                                  <select name="permanentAddress.stateName" id="statePermanentAddress" width="25%" class="select-medium input_data state sameAsAboveData" dependentdd="permanent_district" onchange="clearMsg('state_name_2');">
                                                                     <option selected="selected" value="">----Select----</option>
                                                                     <option value="ANDAMAN AND NICOBAR ISLANDS" sysid="48">ANDAMAN AND NICOBAR ISLANDS</option>
                                                                     <option value="ANDHRA PRADESH" sysid="17">ANDHRA PRADESH</option>
                                                                     <option value="ARUNACHAL PRADESH" sysid="27">ARUNACHAL PRADESH</option>
                                                                     <option value="ASSAM" sysid="4">ASSAM</option>
                                                                     <option value="BIHAR" sysid="32">BIHAR</option>
                                                                     <option value="CHANDIGARH" sysid="2">CHANDIGARH</option>
                                                                     <option value="CHHATTISGARH" sysid="19">CHHATTISGARH</option>
                                                                     <option value="DADRA AND NAGAR HAVELI" sysid="49">DADRA AND NAGAR HAVELI</option>
                                                                     <option value="DAMAN AND DIU" sysid="50">DAMAN AND DIU</option>
                                                                     <option value="DELHI" sysid="33">DELHI</option>
                                                                     <option value="GOA" sysid="46">GOA</option>
                                                                     <option value="GUJARAT" sysid="10">GUJARAT</option>
                                                                     <option value="HARYANA" sysid="21">HARYANA</option>
                                                                     <option value="HIMACHAL PRADESH" sysid="9">HIMACHAL PRADESH</option>
                                                                     <option value="JAMMU &amp; KASHMIR" sysid="20">JAMMU &amp; KASHMIR</option>
                                                                     <option value="JHARKHAND" sysid="39">JHARKHAND</option>
                                                                     <option value="KARNATAKA" sysid="44">KARNATAKA</option>
                                                                     <option value="KERALA" sysid="29">KERALA</option>
                                                                     <option value="LAKSHADWEEP" sysid="51">LAKSHADWEEP</option>
                                                                     <option value="MADHYA PRADESH" sysid="25">MADHYA PRADESH</option>
                                                                     <option value="MAHARASHTRA" sysid="1">MAHARASHTRA</option>
                                                                     <option value="MANIPUR" sysid="28">MANIPUR</option>
                                                                     <option value="MEGHALAYA" sysid="16">MEGHALAYA</option>
                                                                     <option value="MIZORAM" sysid="47">MIZORAM</option>
                                                                     <option value="NAGALAND" sysid="11">NAGALAND</option>
                                                                     <option value="ORISSA" sysid="3">ORISSA</option>
                                                                     <option value="PUDUCHERRY" sysid="52">PUDUCHERRY</option>
                                                                     <option value="PUNJAB" sysid="34">PUNJAB</option>
                                                                     <option value="RAJASTHAN" sysid="42">RAJASTHAN</option>
                                                                     <option value="SIKKIM" sysid="31">SIKKIM</option>
                                                                     <option value="TAMIL NADU" sysid="45">TAMIL NADU</option>
                                                                     <option value="TRIPURA" sysid="14">TRIPURA</option>
                                                                     <option value="UTTARAKHAND" sysid="15">UTTARAKHAND</option>
                                                                     <option value="UTTAR PRADESH" sysid="40">UTTAR PRADESH</option>
                                                                     <option value="WEST BENGAL" sysid="30">WEST BENGAL</option>
                                                                  </select>
                                                                  <span class="fieldError" id="state_name_2" name="permanentAddress.stateName" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="paddressline2Label" valign="top">Address Line 2</td>
                                                               <td class="paddressline2box" valign="top">
                                                                  <input id="permanentAddress2" class="input-medium input_data  sameAsAboveData line2" name="permanentAddress.addressLine2" maxlength="100" onkeypress="clearMsg('address_line_22');" type="text">
                                                                  <span class="fieldError" id="address_line_22" name="permanentAddress.addressLine2" style="display:block;"></span>
                                                               </td>
                                                               <td class="pdistrictLabel" width="15%" valign="top">District</td>
                                                               <td class="pdistrictBox" valign="top">
                                                                  <select name="permanentAddress.districtName" class="select-medium input_data sameAsAboveData permanent_district" id="perDistrict" dependentdd="permanent_city" onchange="clearMsg('district_name_2');">
                                                                     <option selected="selected" value="" sysid="0">----Select----</option>
                                                                  </select>
                                                                  <span class="fieldError" id="district_name_2" name="permanentAddress.districtName" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="paddressline3label" valign="top">Address Line 3</td>
                                                               <td class="paddressline3Box" valign="top">
                                                                  <input id="permanentAddress3" class="input-medium input_data sameAsAboveData line3" name="permanentAddress.addressLine3" maxlength="100" onkeypress="clearMsg('address_line_32');" type="text">
                                                                  <span class="fieldError" id="address_line_32" name="permanentAddress.addressLine3" style="display:block;"></span>
                                                               </td>
                                                               <td class="pcityLabel" width="15%" valign="top">
                                                                  City
                                                                  <span class="red"></span>
                                                               </td>
                                                               <td class="pcityBox" valign="top">
                                                                  <select name="permanentAddress.cityName" class="select-medium input_data city permanent_city sameAsAboveData" id="perCity" onchange="clearMsg('city_name_2');">
                                                                     <option selected="selected" value="" sysid="0">----Select----</option>
                                                                  </select>
                                                                  <span class="fieldError" id="city_name_2" name="permanentAddress.cityName" style="display:block;"></span>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td class="ppinlabel" valign="top">Pin Code</td>
                                                               <td class="ppinBox hideTd" valign="top">
                                                                  <input id="permanentPin" class="input-medium input_data pincode sameAsAboveData pincode ppincodeTextInput" value="" name="permanentAddress.pinCode" onkeydown="return isNumberKey(event,this.id);" onkeyup="return isNumberKey(event,this.id)" ;="" onkeypress="clearMsg('pin_code_2');return isNumberKey(event,this.id)" maxlength="6" type="text">
                                                                  <span class="fieldError" id="pin_code_2" name="permanentAddress.pinCode" style="display:block;"></span>
                                                               </td>
                                                               <td class="ppinBox showTd" style="display: none;" valign="top">
                                                                  <span class="fieldError" id="pin_code_2" name="permanentAddress.pinCode" style="display:block;"></span>
                                                               </td>
                                                               <td class="hiddennbsp1" width="15%">&nbsp;</td>
                                                               <td class="hiddennbsp1">&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                                <div style="display: none;">
                                                   <div class="toggle_head">
                                                      Professional Details 
                                                      <span class="plusminus">+</span>
                                                   </div>
                                                   <div class="toggle_body" style="display: none;">
                                                      <table class="outer_table no-more-tables-lead-dashboard" width="100%" cellspacing="0" cellpadding="6">
                                                         <tbody>
                                                            <tr class="tr_even">
                                                               <td width="17%" valign="top">Education Details</td>
                                                               <td width="22%" valign="top">
                                                                  <select class="select-medium input_data" name="educationDetails" onchange="clearMsg('education_details');">
                                                                     <option>----Select----</option>
                                                                     <option value="10">GRADUATE</option>
                                                                     <option value="11">POSTGRADUATE</option>
                                                                     <option value="9">UNDERGRADUATE</option>
                                                                  </select>
                                                                  <span class="fieldError" id="education_details" name="educationDetails" style="display:block;"></span>
                                                               </td>
                                                               <td width="15%" valign="top">Professional Details</td>
                                                               <td width="17%" valign="top">
                                                                  <select class="select-medium input_data" name="professionalDetails" onchange="clearMsg('total_experience');">
                                                                     <option>----Select----</option>
                                                                     <option value="6">CA</option>
                                                                     <option value="7">ENGINEER</option>
                                                                     <option value="8">OTHERS</option>
                                                                  </select>
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td valign="top">Industry Experience</td>
                                                               <td valign="top">
                                                                  <select class="select-medium input_data" name="industrialExperience" onchange="clearMsg('industry_experience');">
                                                                     <option>----Select----</option>
                                                                     <option value="2">FINANCIAL PRODUCTS</option>
                                                                     <option value="1">INSURANCE</option>
                                                                     <option value="5">OTHERS</option>
                                                                     <option value="3">RETAIL</option>
                                                                     <option value="4">TELECOM</option>
                                                                  </select>
                                                                  <span class="fieldError" id="industry_experience" name="industryExperience" style="display:block;"></span>
                                                               </td>
                                                               <td width="15%" valign="top">Certification/Licence</td>
                                                               <td valign="top">
                                                                  <input name="licenceId" value="12" defaultvalue="AMFI" class="input_data radio-emp" type="radio">&nbsp;&nbsp;
                                                                  AMFI&nbsp;&nbsp;
                                                                  <input name="licenceId" value="13" defaultvalue="IRDA" class="input_data radio-emp" type="radio">&nbsp;&nbsp;
                                                                  IRDA&nbsp;&nbsp;
                                                                  <input name="licenceId" value="14" defaultvalue="NONE" checked="checked" class="input_data radio-emp" type="radio">&nbsp;&nbsp;
                                                                  NONE&nbsp;&nbsp;
                                                               </td>
                                                            </tr>
                                                            <tr class="tr_even">
                                                               <td valign="top">Total Experience</td>
                                                               <td valign="top">
                                                                  <select name="totalExperienceInYears" class="select-mini  input_data" onchange="clearMsg('total_experience');">
                                                                     <option>Years</option>
                                                                     <option value="40">1</option>
                                                                     <option value="41">2</option>
                                                                     <option value="42">3</option>
                                                                     <option value="43">4</option>
                                                                     <option value="44">5</option>
                                                                     <option value="45">6</option>
                                                                     <option value="46">7</option>
                                                                     <option value="47">8</option>
                                                                     <option value="48">9</option>
                                                                     <option value="49">10</option>
                                                                     <option value="50">11</option>
                                                                     <option value="51">12</option>
                                                                     <option value="52">13</option>
                                                                     <option value="53">14</option>
                                                                     <option value="54">15</option>
                                                                     <option value="55">16</option>
                                                                     <option value="56">17</option>
                                                                     <option value="57">18</option>
                                                                     <option value="58">19</option>
                                                                     <option value="59">20</option>
                                                                  </select>
                                                                  &nbsp;&nbsp;&nbsp; 
                                                                  <select name="totalExperienceInMonths" class="select-mini input_data">
                                                                     <option>Months</option>
                                                                     <option value="0">0</option>
                                                                     <option value="1">1</option>
                                                                     <option value="2">2</option>
                                                                     <option value="3">3</option>
                                                                     <option value="4">4</option>
                                                                     <option value="5">5</option>
                                                                     <option value="6">6</option>
                                                                     <option value="7">7</option>
                                                                     <option value="8">8</option>
                                                                     <option value="9">9</option>
                                                                     <option value="10">10</option>
                                                                     <option value="11">11</option>
                                                                  </select>
                                                                  <span class="fieldError" id="total_experience" name="totalExperienceInYears" style="display:block;"></span>
                                                               </td>
                                                               <td style="display: none" id="show-irdac-n" width="15%" valign="top">
                                                                  Licence
                                                               </td>
                                                               <td style="display: none" id="show-irdac" valign="top">
                                                                  <input class="input-medium" value="" onkeypress="clearMsg('licence');" type="text">
                                                                  <span class="fieldError" id="licence" name="ackSlipNumber" style="display:block;"></span>
                                                               </td>
                                                               <td colspan="2" id="hide-irdac">&nbsp;</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- tab1 ends -->
                                             <!-- tab2 starts -->
                                             <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                                                <div class="body-title" style="display: none;">
                                                   <div class="fleft" style="margin-top: 7px;">
                                                      <strong>Bank 1</strong>
                                                   </div>
                                                   <div valign="top" class="fright">
                                                      Select Bank for Payment&nbsp;&nbsp;&nbsp;&nbsp;
                                                      <input id="bank1id" class="input-medium input_data radio-emp" name="bankDetails1.makePayment" onclick="manadotryField('bank2id');" type="radio">
                                                   </div>
                                                   <div class="clearfix"></div>
                                                </div>
                                                <div class="body-cont" id="divbank1">
                                                   <table class="no-more-tables-lead-dashboard" width="99%" cellspacing="0" cellpadding="6" border="0" align="center">
                                                      <tbody>
                                                         <tr class="tr_even">
                                                            <td width="24%" valign="top">
                                                               Policy No.<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td class="hideTd" width="31%" valign="top">
                                                               <input class="input-medium input_data bankAccNo1TextInput" name="bankDetails1.accountNumber" id="acNo1" onkeyup="return isNumberKey(event,this.id);" onkeydown="return isNumberKey(event,this.id);" onkeypress="clearMsg('account_number_1');return isNumberKey(event,this.id)" maxlength="20" type="text">
                                                               <span class="fieldError" id="account_number_1" name="bankDetails1.accountNumber" style="display:block;"></span>
                                                            </td>
                                                            <td class="showTd" style="display: none;" width="31%" valign="top">
                                                               <span class="fieldError" id="account_number_1" name="bankDetails1.accountNumber" style="display:block;"></span>
                                                            </td>
                                                            <td width="21%" valign="top">
                                                               Beneficiary Name<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input class="input-medium input_data" name="bankDetails1.beneficiaryName" maxlength="100" onkeypress="clearMsg('beneficiary_name_1');return isAlphabet(event)" type="text">
                                                               <span class="fieldError" id="beneficiary_name_1" name="bankDetails1.beneficiaryName" style="display:block;"></span>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even">
                                                            <td valign="top">
                                                               Policy Type<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <select name="bankDetails1.accountType" class="select-medium input_data" onchange="clearMsg('account_type_1');">
                                                                  <option>----Select----</option>
                                                                  <option value="16">CURRENT</option>
                                                                  <option value="18">NRE</option>
                                                                  <option value="17">NRO</option>
                                                                  <option value="15">SAVINGS</option>
                                                               </select>
                                                               <span class="fieldError" id="account_type_1" name="bankDetails1.accountType" style="display:block;"></span>
                                                            </td>
                                                            <td valign="top">
                                                               MICR Code<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input id="mcr1Id" class="input-medium input_data" name="bankDetails1.micrCode" maxlength="15" onkeydown="return chekPanCardLength(event,this.id);" onkeyup="return chekPanCardLength(event,this.id);" onkeypress="clearMsg('micr_code_1');return chekPanCardLength(event,this.id);" type="text">
                                                               <span class="fieldError" id="micr_code_1" name="bankDetails1.micrCode" style="display:block;"></span>	
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even">
                                                            <td valign="top">
                                                               Bank Name<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input class="input-medium input_data" id="bankName1" name="bankDetails1.bankName" maxlength="100" onkeydown="return chekPanCardLength(event,this.id);" onkeyup="return chekPanCardLength(event,this.id);" onkeypress="clearMsg('bank_name_1');return isAlphabet(event)" type="text">
                                                               <span class="fieldError" id="bank_name_1" name="bankDetails1.bankName" style="display:block;"></span>
                                                            </td>
                                                            <td valign="top">Bank Address<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td valign="top"><textarea class="textarea2 input_data textarea3" id="bankAddress1" name="bankDetails1.bankAddress" maxlength="200" onkeydown="return chekPanCardLength(event,this.id);" onkeyup="return chekPanCardLength(event,this.id);" onkeypress="clearMsg('bank_address_1');return chekPanCardLength(event,this.id);"></textarea>
                                                               <span class="fieldError" id="bank_address_1" name="bankDetails1.bankAddress" style="display: block;"></span>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even">
                                                            <td valign="top">
                                                               Payment Mode<span class="red" id="id_" style="display: inline;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input name="bankDetails1.paymentModeId" class="input_data radio-emp" onclick="ifscMandatory(this,'Bank1')" defaultvalue="CHEQUE" value="20" checked="checked" type="radio">
                                                               CHEQUE
                                                               <input name="bankDetails1.paymentModeId" class="input_data radio-emp" onclick="ifscMandatory(this,'Bank1')" defaultvalue="NEFT " value="19" type="radio">
                                                               NEFT 
                                                            </td>
                                                            <td id="ifscBank1" valign="top">
                                                               IFSC Code
                                                            </td>
                                                            <td style="display: none" id="ifscMandatoryBank1" valign="top">
                                                               IFSC Code<span class="red">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input id="ifscCode1" class="input-medium input_data" name="bankDetails1.ifscCode" maxlength="11" style="text-transform: uppercase" onkeydown="return chekPanCardLength(event,this.id);" onkeyup="return chekPanCardLength(event,this.id);" onkeypress="clearMsg('ifsc_code_1');" type="text">
                                                               <span class="fieldError" id="ifsc_code_1" name="bankDetails1.ifscCode" style="display: block;"></span>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="body-title" style="display: none;">
                                                   <div class="fleft" style="margin-top: 7px;">
                                                      <strong>Bank 2</strong>
                                                   </div>
                                                   <div class="fright">
                                                      Select Bank for Payment&nbsp;&nbsp;&nbsp;&nbsp;
                                                      <input class="input-medium input_data radio-emp" id="bank2id" name="bankDetails2.makePayment" onclick="manadotryField1('bank1id');" type="radio">
                                                   </div>
                                                   <div class="clearfix"></div>
                                                </div>
                                                <div id="divbank2" class="body-cont" style="display: none;">
                                                   <table class="no-more-tables-lead-dashboard" width="99%" cellspacing="0" cellpadding="6" border="0" align="center">
                                                      <tbody>
                                                         <tr class="tr_even">
                                                            <td width="24%" valign="top">
                                                               Beneficiary Bank A/c. No.<span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td class="hideTd" width="31%" valign="top">
                                                               <input class="input-medium input_data bankAccNo2TextInput" name="bankDetails2.accountNumber" id="acNo2" onkeydown="return isNumberKey(event,this.id);" onkeyup="return isNumberKey(event,this.id);" onkeypress="clearMsg('account_number_2');return isNumberKey(event,this.id)" maxlength="20" type="text">
                                                               <span class="fieldError" id="account_number_2" name="bankDetails2.accountNumber" style="display: block;"></span>
                                                            </td>
                                                            <td class="showTd" style="display: none;" width="31%" valign="top">
                                                               <span class="fieldError" id="account_number_2" name="bankDetails2.accountNumber" style="display: block;"></span>
                                                            </td>
                                                            <td width="21%" valign="top">
                                                               Beneficiary Name<span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input class="input-medium input_data" value="" name="bankDetails2.beneficiaryName" maxlength="100" onkeypress="clearMsg('beneficiary_name_2');return isAlphabet(event)" type="text">
                                                               <span class="fieldError" id="beneficiary_name_2" name="bankDetails2.beneficiaryName" style="display: block;"></span>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even">
                                                            <td valign="top">
                                                               Bank Account Type<span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <select name="bankDetails2.accountType" class="select-medium input_data" onchange="clearMsg('account_type_2');">
                                                                  <option>----Select----</option>
                                                                  <option value="16">CURRENT</option>
                                                                  <option value="18">NRE</option>
                                                                  <option value="17">NRO</option>
                                                                  <option value="15">SAVINGS</option>
                                                               </select>
                                                               <span class="fieldError" id="account_type_2" name="bankDetails2.accountType" style="display: block;"></span>
                                                            </td>
                                                            <td valign="top">
                                                               MICR Code<span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td valign="top"><input class="input-medium input_data" name="bankDetails2.micrCode" maxlength="15" onkeypress="clearMsg('micr_code_2');" type="text">
                                                               <span class="fieldError" id="micr_code_2" name="bankDetails2.micrCode" style="display: block;"></span>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even" valign="top">
                                                            <td valign="top">
                                                               Bank Name<span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input class="input-medium input_data" name="bankDetails2.bankName" maxlength="100" onkeypress="clearMsg('bank_name_2');" type="text">
                                                               <span class="fieldError" id="bank_name_2" name="bankDetails2.bankName" style="display:block;"></span>
                                                            </td>
                                                            <td valign="top">
                                                               Bank Address<span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td valign="top"><textarea class="textarea2 input_data textarea3" name="bankDetails2.bankAddress" maxlength="200" onkeypress="clearMsg('bank_address_2');"></textarea>
                                                               <span class="fieldError" id="bank_address_2" name="bankDetails2.bankAddress" style="display: block;"></span>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even" valign="top">
                                                            <td valign="top">
                                                               Payment Mode
                                                               <span class="red" id="_id" style="display: none;">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input name="bankDetails2.paymentModeId" class="input_data radio-emp" onclick="ifscMandatory(this,'Bank2')" defaultvalue="CHEQUE" value="20" checked="checked" type="radio">
                                                               CHEQUE
                                                               <input name="bankDetails2.paymentModeId" class="input_data radio-emp" onclick="ifscMandatory(this,'Bank2')" defaultvalue="NEFT " value="19" type="radio">
                                                               NEFT 
                                                            </td>
                                                            <td id="ifscBank2" valign="top">
                                                               IFSC Code
                                                            </td>
                                                            <td id="ifscMandatoryBank2" style="display: none" valign="top">
                                                               IFSC Code<span class="red">*</span>
                                                            </td>
                                                            <td valign="top">
                                                               <input name="bankDetails2.ifscCode" class="input-medium input_data" maxlength="11" style="text-transform: uppercase" onkeypress="clearMsg('ifsc_code_2');" type="text">
                                                               <span class="fieldError" id="ifsc_code_2" name="bankDetails2.ifscCode" style="display:block;"></span>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <!-- tab2 ends -->
                                             <!-- tab3 starts -->
                                             <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                                                <div class="body-cont">
                                                   <span id="fileiploadError" class="fieldError" style="text-align: center;font-size: 120%;"></span>
                                                   <table class="no-more-tables-emp" width="99%" cellspacing="0" cellpadding="15" border="0" align="center">
                                                      <tbody>
                                                         <tr class="tr_even">
                                                            <td width="22%" valign="top">
                                                               PAN Card<span class="red" id="panCardDoc" style="display: none;">*</span>
                                                            </td>
                                                            <td width="31%">
                                                               <input id="isShowDocName" value="" type="hidden">
                                                               <form action="uploadFile.htm?partnerType=INDIVIDUAL" name="frm1" enctype="multipart/form-data" method="post" target="my_iframe1">
                                                                  <span class="btn-default btn-file">Browse
                                                                  <input id="myFile1" name="file" value="Browse" onclick="hideField('val1','upload1')" type="file"> 
                                                                  </span>
                                                                  <input class="browse-btn" value="Upload" id="upload1" onclick="JavaScript:return uploadFile(frm1,this.id,'myFile1','errorMessage1','','')" type="submit">
                                                                  <div style="clear:both"></div>
                                                                  <span id="errorMessage1" style="display:none"></span>
                                                                  <div><input id="val1" value="" class="input_data label-prp fieldError doc" name="documentsRecieved.panCardAckSlip" style="display: none;" disabled="disabled" type="text"></div>
                                                                  <div><label id="label1" class="val1" style=""></label></div>
                                                                  <input value="PAN Card" name="labelName" type="hidden"> 
                                                                  <iframe id="my_iframe1" name="my_iframe1" src="" style="display: none" onload="loadIframe(this.id,'label1','val1','span1')" width="250" height="27"> </iframe>
                                                               </form>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td valign="top"> 
                                                               Residence Proof<span class="red">*</span>
                                                            </td>
                                                            <td>
                                                               <form action="uploadFile.htm?partnerType=INDIVIDUAL" name="frm2" enctype="multipart/form-data" method="post" target="my_iframe2">
                                                                  <span style="float: left;">
                                                                     <select class="select-medium input_data" id="residenceProof" name="documentsRecieved.resisdenceProofId">
                                                                        <option>----Select----</option>
                                                                        <option value="21">ANY UTILITY BILL</option>
                                                                        <option value="24">BANK ACCOUNT STATEMENT</option>
                                                                        <option value="26">DRIVING LICENSE</option>
                                                                        <option value="25">NOTARIZED RENT AGREEMENT</option>
                                                                        <option value="27">PASSPORT</option>
                                                                        <option value="22">RATION CARD</option>
                                                                        <option value="23">VOTER ID CARD</option>
                                                                     </select>
                                                                     &nbsp;&nbsp;
                                                                  </span>
                                                                  <span class="btn-default btn-file">Browse
                                                                  <input id="myFile2" name="file" value="Browse" onclick="selectFile('selecterror','residenceProof','span2','val2','upload2','label2',event)" type="file"> 
                                                                  </span>
                                                                  <input class="browse-btn" value="Upload" id="upload2" onclick="JavaScript:return uploadFile(frm2,this.id,'myFile2','errorMessage2','residenceProof','selecterror')" type="submit">
                                                                  <div style="clear:both"></div>
                                                                  <span id="selecterror" class="fieldError" name="documentsRecieved.resisdenceProofId"></span>&nbsp; 
                                                                  <span id="errorMessage2" style="display:none;"></span>										    
                                                                  &nbsp;
                                                                  <div> <input id="val2" value="" style="display:none;" class="input_data label-prp fieldError doc" name="documentsRecieved.resisdenceProof" disabled="disabled" type="text"></div>
                                                                  <div align="left"> <label id="label2" class="val2" style=""></label></div>
                                                                  <input value="Residence Proof" name="labelName" type="hidden">
                                                                  <iframe id="my_iframe2" name="my_iframe2" src="" style="display: none" onload="loadIframe(this.id,'label2','val2','span2')" width="250" height="27" frameborder="0"> </iframe>
                                                               </form>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even">
                                                            <td valign="top">Cancelled Cheque</td>
                                                            <td>
                                                               <form action="uploadFile.htm?partnerType=INDIVIDUAL" name="frm3" enctype="multipart/form-data" method="post" target="my_iframe3">
                                                                  <span class="btn-default btn-file">Browse
                                                                  <input id="myFile3" name="file" value="Browse" onclick="hideField('val3','upload3')" type="file"> 
                                                                  </span>
                                                                  <input class="browse-btn" value="Upload" id="upload3" onclick="JavaScript:return uploadFile(frm3,this.id,'myFile3','errorMessage3','','')" type="submit">
                                                                  <div style="clear:both"></div>
                                                                  <span id="errorMessage3" style="display:none;"></span>
                                                                  <div><input id="val3" value="" style="display:none;" class="input_data label-prp fieldError doc" name="documentsRecieved.cancelCheque" disabled="disabled" type="text"></div>
                                                                  <div><label id="label3" class="val3" style=""></label></div>
                                                                  <input value="Cancelled Cheque" name="labelName" type="hidden">
                                                                  <iframe id="my_iframe3" name="my_iframe3" src="" style="display: none" onload="loadIframe(this.id,'label3','val3','span3')" width="250" height="27" frameborder="0"> </iframe>
                                                               </form>
                                                            </td>
                                                         </tr>
                                                         <tr style="display: none;">
                                                            <td valign="top">
                                                               Photograph<span class="red">*</span>
                                                            </td>
                                                            <td>
                                                               <form action="uploadFile.htm?partnerType=INDIVIDUAL" enctype="multipart/form-data" name="frm4" method="post" target="my_iframe4">
                                                                  <span class="btn-default btn-file">Browse
                                                                  <input id="myFile4" name="file" value="Browse" onclick="hideField('val4','upload4')" type="file"> 
                                                                  </span>
                                                                  <input class="browse-btn" value="Upload" id="upload4" onclick="JavaScript:return uploadFile(frm4,this.id,'myFile4','errorMessage4','','')" type="submit">
                                                                  <div style="clear:both"></div>
                                                                  <span id="errorMessage4" style="display: none;"></span>
                                                                  <div><input style="display: none;" id="val4" value="" class="input_data label-prp fieldError doc" name="documentsRecieved.allRequiredPhotograph" disabled="disabled" type="text"></div>
                                                                  <div><label id="label4" class="val4" style=""></label></div>
                                                                  <input value="Photograph" name="labelName" type="hidden">
                                                                  <iframe id="my_iframe4" name="my_iframe4" src="" style="display: none" onload="loadIframe(this.id,'label4','val4','span4')" width="250" height="27" frameborder="0"> </iframe>
                                                               </form>
                                                            </td>
                                                         </tr>
                                                         <tr class="tr_even">
                                                            <td class="serviceTax" valign="top">Service Tax Registration Certificate<br>(mandatory only when service tax is applicable)</td>
                                                            <td>
                                                               <form action="uploadFile.htm?partnerType=INDIVIDUAL" name="frm5" enctype="multipart/form-data" method="post" target="my_iframe5">
                                                                  <span class="btn-default btn-file">Browse
                                                                  <input id="myFile5" name="file" value="Browse" onclick="hideField('val5','upload5')" type="file"> 
                                                                  </span>
                                                                  <input class="browse-btn" value="Upload" id="upload5" onclick="JavaScript:return uploadFile(frm5,this.id,'myFile5','errorMessage5','','')" type="submit">
                                                                  <div style="clear:both"></div>
                                                                  <span id="errorMessage5" style="display: none;"></span>
                                                                  <div><input id="val5" style="display: none;" value="" class="input_data label-prp fieldError doc" name="documentsRecieved.serviceTaxRegistration" disabled="disabled" type="text"></div>
                                                                  <div><label id="label5" class="val5" style=""></label></div>
                                                                  <input value="Service Tax REG" name="labelName" type="hidden">
                                                                  <iframe id="my_iframe5" name="my_iframe5" src="" style="display: none" onload="loadIframe(this.id,'label5','val5','span5')" width="250" height="27" frameborder="0"> </iframe>
                                                               </form>
                                                            </td>
                                                         </tr>
                                                         <tr style="display: none;">
                                                            <td valign="top">TAN Number</td>
                                                            <td>
                                                               <form action="uploadFile.htm?partnerType=INDIVIDUAL" name="frm6" enctype="multipart/form-data" method="post" target="my_iframe6">
                                                                  <span class="btn-default btn-file">Browse
                                                                  <input id="myFile6" name="file" value="Browse" onclick="hideField('val6','upload6')" type="file"> 
                                                                  </span>
                                                                  <input class="browse-btn" value="Upload" id="upload6" onclick="JavaScript:return uploadFile(frm6,this.id,'myFile6','errorMessage6','','')" type="submit">
                                                                  <div style="clear:both"></div>
                                                                  <span id="errorMessage6" style="display: none;"></span>
                                                                  <div><input id="val6" style="display: none;" class="input_data label-prp doc" name="documentsRecieved.tanNumber" disabled="disabled" type="text"></div>
                                                                  <div> <label id="label6" class="val6"></label></div>
                                                                  <input value="TAN Number" name="labelName" type="hidden">
                                                                  <iframe id="my_iframe6" name="my_iframe6" src="" style="display: none" onload="loadIframe(this.id,'label6','val6','span6')" width="250" height="27" frameborder="0"> </iframe>
                                                               </form>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td colspan="2"> </td>
                                                         </tr>
                                                         <tr>
                                                            <td style="font-size:12px; font-style:italic; color:#444" colspan="2" align="left">
                                                               <strong>Note:</strong>
                                                               <br>
                                                               1. Only file extension
                                                               <strong>pdf,doc,jpeg,jpg,gif,bmp,png,docx</strong>
                                                               are allowed.
                                                               <br>
                                                               2. File size can not be greater than <strong>5 MB </strong>.
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <!-- tab3 ends -->
                                             <!-- tab4 starts -->
                                             <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                                                <div class="body-cont">
                                                   <table width="99%" cellspacing="0" cellpadding="6" border="0" align="center">
                                                      <tbody>
                                                         <tr class="tr_even">
                                                            <td>
                                                               <div style="height:282px; overflow-y:scroll; border:1px solid #dedede; background-color:#fff; padding:5px;">
                                                                  <!-- <b>Use of the Website</b> -->
                                                                  <b>Use of the Website</b>
                                                                  <p class="tnc-text">
                                                                     This document is an electronic record in terms of Information Technology Act, 2000 and rules made there under as applicable and the amended provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures.
                                                                     <br>
                                                                     This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access or usage of <a target="_blank" href="http://www.myreferralapp.com">MyReferralApp</a>. The domain name <a target="_blank" href="http://www.myreferralapp.com">MyReferralApp</a> (hereinafter referred to as "Website") is owned by CONCEPTPLUS INFOSOLUTIONS PRIVATE LIMITED/ConceptPlus/Company a company incorporated under the Companies Act, 1956 with its registered office at Regd. Office: 84, Ground Floor Kalyan Vihar, Opp- Rana Pratap Bagh, Delhi -110009, India (here in after referred to as "CONCEPTPLUS INFOSOLUTIONS PRIVATE LIMITED/ConceptPlus/Company").
                                                                     <br>
                                                                     Your use of the Website and services and tools are governed by the following terms and conditions ("Terms of Use") as applicable to the Website including the applicable policies which are incorporated herein by way of reference. If You transact on the Website, You shall be subject to the policies that are applicable to the Website for such transaction. By mere use of the Website, You shall be contracting with CONCEPTPLUS INFOSOLUTIONS PRIVATE LIMITED/ConceptPlus/Company  and these terms and conditions including the policies constitute Your binding obligations, with the company.
                                                                     <br>
                                                                     For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any natural or legal person who has agreed to become a associate on the Website by providing Registration Data while registering on the Website as Registered User using the computer systems. The term "We", "Us", "Our" shall mean CONCEPTPLUS INFOSOLUTIONS PRIVATE LIMITED/ConceptPlus/Company.
                                                                     <br>
                                                                     When You use any of the services provided by Us through the Website, including but not limited to, (e.g. products/services, product/services reviews, seller reviews), You will be subject to the rules, guidelines, policies, terms, and conditions applicable to such service, and they shall be deemed to be incorporated into this Terms of Use and shall be considered as part and parcel of this Terms of Use. We reserve the right, at Our sole discretion, to change, modify, add or remove portions of these Terms of Use, at any time without any prior written notice to You. It is Your responsibility to review these Terms of Use periodically for updates / changes. Your continued use of the Website following the posting of changes will mean that You accept and agree to the revisions. As long as You comply with these Terms of Use, We grant You a personal, non-exclusive, non-transferable, limited privilege to enter and use the Website.
                                                                     <br>
                                                                     ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING. By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by company's Policies ((including but not limited to Privacy Policy, Disclaimer available on the website) as amended from time to time.
                                                                     <br>You agree, undertake and confirm that Your use of Website shall be strictly governed by the following binding principles:
                                                                  </p>
                                                                  <ol class="tnc-text">
                                                                     <li>
                                                                        You shall not host, display, upload, modify, publish, transmit, update or share any information which:
                                                                        <ul class="tnc-text tnc-list">
                                                                           <li>belongs to another person and to which You does not have any right to;</li>
                                                                           <li>is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophilic, libellous, invasive of another's privacy, hateful, or racially, ethnically objectionable, disparaging, relating or encouraging money laundering or gambling, or otherwise unlawful in any manner whatever; or unlawfully threatening or unlawfully harassing including but not limited to "indecent representation of women" within the meaning of the Indecent Representation of Women (Prohibition) Act, 1986;</li>
                                                                           <li>is misleading in any way;</li>
                                                                           <li>is patently offensive to the online community, such as sexually explicit content, or content that promotes obscenity, paedophilia, racism, bigotry, hatred or physical harm of any kind against any group or individual;</li>
                                                                           <li>harasses or advocates harassment of another person;</li>
                                                                           <li>involves the transmission of "junk mail", "chain letters", or unsolicited mass mailing or "spamming";</li>
                                                                           <li>promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous;</li>
                                                                           <li>infringes upon or violates any third party's rights [including, but not limited to, intellectual property rights, rights of privacy (including without limitation unauthorized disclosure of a person's name, email address, physical address or phone number) or rights of publicity];</li>
                                                                           <li>promotes an illegal or unauthorized copy of another person's copyrighted work (see "Copyright complaint" below for instructions on how to lodge a complaint about uploaded copyrighted material), such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;</li>
                                                                           <li>contains restricted or password-only access pages, or hidden pages or images (those not linked to or from another accessible page);</li>
                                                                           <li>provides material that exploits people in a sexual, violent or otherwise inappropriate manner or solicits personal information from anyone;</li>
                                                                           <li>provides instructional information about illegal activities such as making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;</li>
                                                                           <li>contains video, photographs, or images of another person (with a minor or an adult).</li>
                                                                           <li>tries to gain unauthorized access or exceeds the scope of authorized access to the Website or to profiles, blogs, communities, account information, bulletins, friend request, or other areas of the Website or solicits passwords or personal identifying information for commercial or unlawful purposes from other users;</li>
                                                                           <li>engages in commercial activities and/or sales without Our prior written consent such as contests, sweepstakes, barter, advertising and pyramid schemes, or the buying or selling of "virtual" products related to the Website. Throughout this Terms of Use, Company's prior written consent means a communication coming from company's Legal Wing, specifically in response to Your request, and specifically addressing the activity or conduct for which You seek authorization;</li>
                                                                           <li>solicits gambling or engages in any gambling activity which We, in Our sole discretion, believes is or could be construed as being illegal;</li>
                                                                           <li>interferes with another USER's use and enjoyment of the Website or any other individual's User and enjoyment of similar services;</li>
                                                                           <li>refers to any website or URL that, in Our sole discretion, contains material that is inappropriate for the Website or any other website, contains content that would be prohibited or violates the letter or spirit of these Terms of Use.</li>
                                                                           <li>harm minors in any way;</li>
                                                                           <li>infringes any patent, trademark, copyright or other proprietary rights or third party's trade secrets or rights of publicity or privacy or shall not be fraudulent or involve the sale of counterfeit or stolen products;</li>
                                                                           <li>violates any law for the time being in force;</li>
                                                                           <li>deceives or misleads the addressee/ users about the origin of such messages or communicates any information which is grossly offensive or menacing in nature;</li>
                                                                           <li>impersonate another person;</li>
                                                                           <li>contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer resource; or contains any trojan horses, worms, time bombs, cancelbots, easter eggs or other computer programming routines that may damage, detrimentally interfere with, diminish value of, surreptitiously intercept or expropriate any system, data or personal information;</li>
                                                                           <li>threatens the unity, integrity, defence, security or sovereignty of India, friendly relations with foreign states, or public order or causes incitement to the commission of any cognizable offence or prevents investigation of any offence or is insulting any other nation.</li>
                                                                           <li>shall not be false, inaccurate or misleading;</li>
                                                                           <li>shall not, directly or indirectly, offer, attempt to offer, trade or attempt to trade in any item, the dealing of which is prohibited or restricted in any manner under the provisions of any applicable law, rule, regulation or guideline for the time being in force.</li>
                                                                           <li>shall not create liability for Us or cause Us to lose (in whole or in part) the services of Our internet service provider ("ISPs") or other suppliers;</li>
                                                                        </ul>
                                                                     </li>
                                                                     <li>You shall not use any "deep-link", "page-scrape", "robot", "spider" or other automatic device, program, algorithm or methodology, or any similar or equivalent manual process, to access, acquire, copy or monitor any portion of the Website or any Content, or in any way reproduce or circumvent the navigational structure or presentation of the Website or any Content, to obtain or attempt to obtain any materials, documents or information through any means not purposely made available through the Website. We reserve Our right to bar any such activity.
                                                                     </li>
                                                                     <li>You shall not attempt to gain unauthorized access to any portion or feature of the Website, or any other systems or networks connected to the Website or to any server, computer, network, or to any of the services offered on or through the Website, by hacking, password "mining" or any other illegitimate means.
                                                                     </li>
                                                                     <li>You shall not probe, scan or test the vulnerability of the Website or any network connected to the Website nor breach the security or authentication measures on the Website or any network connected to the Website. You may not reverse look-up, trace or seek to trace any information on any other User of or visitor to Website, or any other customer, including any account on the Website not owned by You, to its source, or exploit the Website or any service or information made available or offered by or through the Website, in any way where the purpose is to reveal any information, including but not limited to personal identification or information, other than Your own information, as provided for by the Website.
                                                                     </li>
                                                                     <li>You shall not make any negative, denigrating or defamatory statement(s) or comment(s) about Us or the brand name or domain name used by Us or otherwise engage in any conduct or action that might tarnish the image or reputation, of company or sellers on platform or otherwise tarnish or dilute any company's 's trade or service marks, trade name and/or goodwill associated with such trade or service marks, trade name as may be owned or used by us. You agree that You will not take any action that imposes an unreasonable or disproportionately large load on the infrastructure of the Website or Company's systems or networks, or any systems or networks connected to Company .
                                                                     </li>
                                                                     <li>You agree not to use any device, software or routine to interfere or attempt to interfere with the proper working of the Website or any transaction being conducted on the Website, or with any other person's use of the Website.
                                                                     </li>
                                                                     <li>You may not forge headers or otherwise manipulate identifiers in order to disguise the origin of any message or transmittal You send to Us on or through the Website or any service offered on or through the Website. You may not pretend that You are, or that You represent, someone else, or impersonate any other individual or entity.
                                                                     </li>
                                                                     <li>You may not use the Website or any content for any purpose that is unlawful or prohibited by these Terms of Use, or to solicit the performance of any illegal activity or other activity which infringes the rights of Company and / or others.
                                                                     </li>
                                                                     <li>You shall at all times ensure full compliance with the applicable provisions of the Information Technology Act, 2000 and rules thereunder as applicable and as amended from time to time and also all applicable Domestic laws, rules and regulations (including the provisions of any applicable Exchange Control Laws or Regulations in Force) and International Laws, Foreign Exchange Laws, Statutes, Ordinances and Regulations (including, but not limited to Sales Tax/VAT, Income Tax, Octroi, Service Tax, Central Excise, Custom Duty, Local Levies) regarding Your use of Our service and Your listing, purchase, solicitation of offers to purchase, and sale of products or services. You shall not engage in any transaction in an item or service, which is prohibited by the provisions of any applicable law including exchange control laws or regulations for the time being in force.
                                                                     </li>
                                                                     <li>Solely to enable Us to use the information You supply Us with, so that we are not violating any rights You might have in Your Information, You agree to grant Us a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub-licensable (through multiple tiers) right to exercise the copyright, publicity, database rights or any other rights You have in Your Information, in any media now known or not currently known, with respect to Your Information. We will only use Your information in accordance with the Terms of Use and Privacy Policy applicable to use of the Website.
                                                                     </li>
                                                                     <li>From time to time, You shall be responsible for providing information relating to the products or services proposed to be sold by You. In this connection, You undertake that all such information shall be accurate in all respects. You shall not exaggerate or over emphasize the attributes of such products or services so as to mislead other Users in any manner.
                                                                     </li>
                                                                     <li>You shall not engage in advertising to, or solicitation of, other Users of the Website to buy or sell any products or services, including, but not limited to, products or services related to that being displayed on the Website or related to us. You may not transmit any chain letters or unsolicited commercial or junk email to other Users via the Website. It shall be a violation of these Terms of Use to use any information obtained from the Website in order to harass, abuse, or harm another person, or in order to contact, advertise to, solicit, or sell to another person other than Us without Our prior explicit consent. In order to protect Our Users from such advertising or solicitation, We reserve the right to restrict the number of messages or emails which a user may send to other Users in any 24-hour period which We deems appropriate in its sole discretion. You understand that We have the right at all times to disclose any information (including the identity of the persons providing information or materials on the Website) as necessary to satisfy any law, regulation or valid governmental request. This may include, without limitation, disclosure of the information in connection with investigation of alleged illegal activity or solicitation of illegal activity or in response to a lawful court order or subpoena. In addition, We can (and You hereby expressly authorize Us to) disclose any information about You to law enforcement or other government officials, as we, in Our sole discretion, believe necessary or appropriate in connection with the investigation and/or resolution of possible crimes, especially those that may involve personal injury.<br>
                                                                        We reserve the right, but has no obligation, to monitor the materials posted on the Website. Company  shall have the right to remove or edit any content that in its sole discretion violates, or is alleged to violate, any applicable law or either the spirit or letter of these Terms of Use. Notwithstanding this right, YOU REMAIN SOLELY RESPONSIBLE FOR THE CONTENT OF THE MATERIALS YOU POST ON THE WEBSITE AND IN YOUR PRIVATE MESSAGES. Please be advised that such Content posted does not necessarily reflect Company views. In no event shall Company  assume or have any responsibility or liability for any Content posted or for any claims, damages or losses resulting from use of Content and/or appearance of Content on the Website. You hereby represent and warrant that You have all necessary rights in and to all Content which You provide and all information it contains and that such Content shall not infringe any proprietary or other rights of third parties or contain any libellous, tortious, or otherwise unlawful information.
                                                                     </li>
                                                                     <li>Your correspondence or business dealings with, or participation in promotions of, advertisers found on or through the Website, including payment and delivery of related products or services, and any other terms, conditions, warranties or representations associated with such dealings, are solely between You and such advertiser. We shall not be responsible or liable for any loss or damage of any sort incurred as the result of any such dealings or as the result of the presence of such advertisers on the Website.
                                                                     </li>
                                                                     <li>It is possible that other users (including unauthorized users or "hackers") may post or transmit offensive or obscene materials on the Website and that You may be involuntarily exposed to such offensive and obscene materials. It also is possible for others to obtain personal information about You due to your use of the Website, and that the recipient may use such information to harass or injure You. We does not approve of such unauthorized uses, but by using the Website You acknowledge and agree that We are not responsible for the use of any personal information that You publicly disclose or share with others on the Website. Please carefully select the type of information that You publicly disclose or share with others on the Website.
                                                                     </li>
                                                                     <li>Company shall have all the rights to take necessary action and claim damages that may occur due to your involvement/participation in any way on your own or through group/s of people, intentionally or unintentionally in DoS/DDoS (Distributed Denial of Services).
                                                                     </li>
                                                                  </ol>
                                                                  <p class="tnc-text">
                                                                     <b>Indemnity</b><br>
                                                                     You shall indemnify and hold harmless Company , its owner, licensee, affiliates, subsidiaries, group companies (as applicable) and their respective officers, directors, agents, and employees, from any claim or demand, or actions including reasonable attorneys' fees, made by any third party or penalty imposed due to or arising out of Your breach of this Terms of Use, privacy Policy and other Policies, or Your violation of any law, rules or regulations or the rights (including infringement of intellectual property rights) of a third party.
                                                                     <br><br>
                                                                     <b>Arbitration, Law and Jurisdiction</b> <br>
                                                                     Any dispute, controversy or claims arising out of or relating to referral program or the breach, termination or invalidity thereof, shall be settled by sole arbitrator appointed by the company and arbitration proceedings shall be conducted in accordance with the provisions of the Arbitration and Conciliation Act, 1996, as amended from time to time. The place of arbitration shall be Delhi/NOIDA and the arbitral proceedings shall be conducted in the English language and any award shall be rendered in English.
                                                                     <br><br>
                                                                     The rights and obligations of the Parties under this agreement shall be governed as per Indian laws and shall be under the exclusive jurisdiction of the courts located at Delhi.
                                                                  </p>
                                                               </div>
                                                               <br>  
                                                               <input class="term-check" type="checkbox"><span style="padding-left: 8px;">Accept Terms &amp; Conditions</span>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <!-- tab4 ends -->
                                             <div style="padding: 12px;" align="right">
                                                <span class="save"><a href="javascript:void(0);" class="main-btn save-btn" onclick="savePartner(this, 'save')">Save</a>&nbsp;&nbsp;</span> 
                                                <span class="submit" style="display: none"><a href="#" class="main-btn" onclick="savePartner(this, 'submit')">Submit</a></span>
                                                <!-- 						<span class="after-term" style="display: none"><a href="emp-detail-read-partner.html" class="main-btn">Submit</a></span> -->
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <!-- #main-contnt contents Ends -->
            </div>
            <!-- right contents Ends -->
         </div>
      </div>
      <!-- Site footer -->
      <div class="bottom" id="divFooter">
         <style>
            .sub-footer-nav{
            background:url(./images/footer-bg.png) repeat-x;
            position:relative;
            width:100%;
            }
            .sub-footer-nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            }
            .sub-footer-nav li {
            float: left;
            padding: 0px 10px;
            }
            .sub-footer-nav li a {
            display: inline-block;
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            font-size:13px;
            text-transform:uppercase;
            padding-left: -15px;
            }
            .sub-footer-nav li a:hover, 
            {
            text-decoration: underline;
            color:#ebebeb;
            }
         </style>
         <br>
         <div class="container">
            <!-- <div class="footer-wrapper" style="text-align:center;"> -->
            <!-- <div class="sub-footer-nav" style="margin: 40px 0px;"> -->
            <div class="footer" style="margin: -10px 0 -20px 0;">
               <footer class="nav-footer sub-footer-nav">
                  <span><a href="/privacyPolicy.htm" target="_blank">Privacy Policy</a></span>
                  <span><a href="/disclaimer.htm" target="_blank">Disclaimer</a></span>
                  <span><a href="/contact.htm" target="_blank">Contact Us</a></span>
                  <br><br>                                
               </footer>
            </div>
            <div style="text-align:center; font-size:12px; background-color:#f7f6f2;  padding: 10px;">Copyright &copy; 2016 MyReferralApp. All rights reserved.</div>
         </div>
         <!-- </div>
            </div> -->
      </div>
   </body>
</html>

