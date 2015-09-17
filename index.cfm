<cfparam name="URL.owner_id" default="-1">
<cfparam name="URL.assignee" default="55721816">    
<cfparam name="URL.grouping_id" default="3">
<cfparam name="URL.groupid" default="3">    
<cfparam name="URL.search" default="-1">
<cfparam name="URL.state" default="1">
<cfparam name="URL.page" default="energy">
<cfparam name="URL.from_date" default="">
<cfparam name="URL.to_date" default="">
<cfparam name="URL.order_by_dir" default="ASC">
<cfparam name="URL.order_by" default="energy_id">


<cftry>
<cfquery name="energy" datasource="bc_data_ds">
SELECT *, category, identifier
FROM datamanager.energy e
LEFT JOIN datamanager.grouping g ON g.group_id = e.grouping_id    
WHERE 1=1
AND state = <cfqueryparam value="1" cfsqltype="cf_sql_integer">  
<cfif URL.assignee NEQ -1>
AND owner_id = <cfqueryparam value="#URL.assignee#" cfsqltype="cf_sql_integer">
</cfif> 
<cfif URL.groupid NEQ -1>
AND grouping_id = <cfqueryparam value="#URL.groupid#" cfsqltype="cf_sql_integer">
</cfif>    
ORDER BY #URL.order_by# #URL.order_by_dir#
</cfquery>
<cfcatch type="any">
  Apologies, an error has occurred. Please try again later.
</cfcatch>
</cftry>
    
<cftry>
<cfquery name="energy1" datasource="bc_data_ds">
SELECT *, category, identifier
FROM datamanager.energy e
LEFT JOIN datamanager.grouping g ON g.group_id = e.grouping_id    
WHERE 1=1
AND state = <cfqueryparam value="1" cfsqltype="cf_sql_integer">  
<cfif URL.assignee NEQ -1>
AND owner_id = <cfqueryparam value="#URL.assignee#" cfsqltype="cf_sql_integer">
</cfif> 
AND grouping_id = <cfqueryparam value="2" cfsqltype="cf_sql_integer">  
ORDER BY #URL.order_by# #URL.order_by_dir#
</cfquery>
<cfcatch type="any">
  Apologies, an error has occurred. Please try again later.
</cfcatch>
</cftry>    

<!DOCTYPE html>
<html>
<head>
	<title>Better Current</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="favicon.png" />  
    <!--<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
	<link rel="apple-touch-icon" href="images/ipub_logo_57_57_black.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/ipub_logo_72_72_black.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/ipub_logo_114_114_black.png"> 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<style>
.icon {
//*   width: 50px;
   Height: 50px; *//
   background: url(/images/icon.png)
   z-index: 999999;        
}

.icon .count {
    background:#ff0000;
    position: absolute; 
    bottom: 35px;
    left: 55%;
    min-width:14px;
    height: 14px;
    color:#ffffff;
    border-radius: 50%;
    padding: 2px;
    text-align: center;
    font-size: 12px;
    z-index: 999999;
}    
    
    </style>    

<!-- Start of first page -->
<div data-role="page" id="main">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="b">
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Generation</li>
            <li><a href="#solar" data-transition="slide">
                <img src="images/album-p.jpg">
            <h2>BetterGen Solar 3kW</h2>
            <p>1 hr til full. 4.72 kWh Generated Today</p></a>
            </li>
            <li data-role="list-divider">Stored</li>
            <li><a href="#storage" data-transition="slide">
                <img src="images/album-hc.jpg">
            <h2>BetterGen Storage 5.6kWh</h2>
            <p>3.5 hrs stored at this rate. 3.34 kWh Consumed Today</p></a>
            </li>
              <cfset countenergy = 0>
                  <cfset countenergyTotal = 0>
              <cfoutput query="energy">
              <cfset countenergy = countenergy + 1>
              <cfset countenergyTotal = countenergyTotal + (volts*amps*hoursperday)    >
              </cfoutput>               
            <li data-role="list-divider">Outlets & Devices - <cfoutput>#NumberFormat(countenergyTotal,'9,999')#</cfoutput> kWh <img src="images/up_arrow_red.png" height="15" style="padding-top: 6px; padding-left: 2px;"></li>
            <li data-role="list-divider">Outage Backup</li>      
   
            <cfoutput query="energy">
            <li><a href="##usage#energy_id#"  data-transition="slide">
                <img src="images/album-bb.jpg">
            <h2>#description#</h2>
            <p>#NumberFormat(volts*amps,'9,999')# Watts</p></a>
            </li>
            </cfoutput>
            <li data-role="list-divider">Essential</li>      
   
            <cfoutput query="energy1">
            <li><a href="##usage#energy_id#"  data-transition="slide">
                <img src="images/album-bb.jpg">
            <h2>#description#</h2>
            <p>#NumberFormat(volts*amps,'9,999')# Watts</p></a>
            </li>
            </cfoutput>                  
        </ul>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="#" data-icon="grid" class="ui-btn-active ui-state-persist">Power</a>
                </li>
                <li><a href="#alerts" data-icon="star">Alerts</a>
             
                </li>
                <li><a href="#setup" data-icon="gear">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->

<div data-role="page" id="solar">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="a">
        <a href="#main" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-carat-l" data-transition="slide" data-direction="reverse">Back</a>
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Generation</li>
            <li>
                <img src="images/album-p.jpg">
            <h2>BetterGen Solar 3kW</h2>
            <p>1 hr til full. 4.72 kWh Generated Today</p>
            </li>               
        </ul>
        <p>
            &nbsp;
        <div>
        <form>
        <label for="slider-flip-m">BetterGen Solar:</label>
            <select name="slider-flip-m" id="slider-flip-m" data-role="slider" data-mini="true">
                <option value="off">Off</option>
                <option value="on" selected="">On</option>
            </select>
        </form>
        </div> 
        </p>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="#" data-icon="grid" class="ui-btn-active ui-state-persist">Power</a>
                </li>
                <li><a href="#alerts" data-icon="star">Alerts</a>
             
                </li>
                <li><a href="#setup" data-icon="gear">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->     
            
<div data-role="page" id="storage">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="a">
        <a href="#main" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-carat-l" data-transition="slide" data-direction="reverse">Back</a>
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Stored</li>
            <li>
                <img src="images/album-hc.jpg">
            <h2>BetterGen Storage 5.6kWh</h2>
            <p>3.5 hrs stored at this rate. 3.34 kWh Consumed Today</p>
            </li>              
        </ul>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="#" data-icon="grid" class="ui-btn-active ui-state-persist">Power</a>
                </li>
                <li><a href="#alerts" data-icon="star">Alerts</a>
             
                </li>
                <li><a href="#setup" data-icon="gear">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->

<cfoutput query="energy">            
<div data-role="page" id="usage#energy_id#">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="a">
        <a href="##main" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-carat-l" data-transition="slide" data-direction="reverse">Back</a>
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Consumption</li>
            <li><a href="##">
                <img src="images/album-bb.jpg">
            <h2>#description#</h2>
            <p>#NumberFormat(volts*amps,'9,999')# Watts</p></a>
            </li>          
        </ul>
        <p>
            &nbsp;
        <div>
        <form>
        <label for="slider-flip-m">#description#:</label>
            <select name="slider-flip-m" id="slider-flip-m" data-role="slider" data-mini="true">
                <option value="off">Off</option>
                <option value="on" selected="">On</option>
            </select>
        </form>
        </div> 
        </p>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="##" data-icon="grid" class="ui-btn-active ui-state-persist">Power</a>
                </li>
                <li><a href="##alerts" data-icon="star">Alerts</a>
             
                </li>
                <li><a href="##setup" data-icon="gear">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->
</cfoutput>

<cfoutput query="energy1">            
<div data-role="page" id="usage#energy_id#">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="a">
        <a href="##main" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-carat-l" data-transition="slide" data-direction="reverse">Back</a>
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Consumption</li>
            <li><a href="##">
                <img src="images/album-bb.jpg">
            <h2>#description#</h2>
            <p>#NumberFormat(volts*amps,'9,999')# Watts</p></a>
            </li>          
        </ul>
        <p>
            &nbsp;
        <div>
        <form>
        <label for="slider-flip-m">#description#:</label>
            <select name="slider-flip-m" id="slider-flip-m" data-role="slider" data-mini="true">
                <option value="off">Off</option>
                <option value="on" selected="">On</option>
            </select>
        </form>
        </div> 
        </p>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="##" data-icon="grid" class="ui-btn-active ui-state-persist">Power</a>
                </li>
                <li><a href="##alerts" data-icon="star">Alerts</a>
             
                </li>
                <li><a href="##setup" data-icon="gear">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->
</cfoutput>          

<div data-role="page" id="alerts">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="b">
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Alerts</li>
            <li><a href="##">
            <h2>Utility Power Outage Detected</h2>
            <p>Today at 10:20pm, 5 minutes ago.</p>    
            <p>Call your utility to find out how long.</p>
            <p>Your backup system is in Outage Conserve Mode.</p>    
                </a>
            </li>
            <li data-role="list-divider">Alert History</li>
            <li><a href="##">
            <h2>Utility Power Outage Detected</h2>
            <p>August 23<sup>rd</sup>, 2014 at 1:20am, 1 year ago.</p>     
                </a>
            </li>            
        </ul>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="#main" data-icon="grid">Power</a>
                </li>
                <li><a href="#" data-icon="star" data-icon="grid" class="ui-btn-active ui-state-persist">Alerts</a>
             
                </li>
                <li><a href="#setup" data-icon="gear">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->          

<div data-role="page" id="setup">
      

    <div data-role="header" style="text-align: center;"  data-position="fixed" data-theme="b">
        
    <img src="images/bc-logo.png" height="40">

    </div>    
    <!-- /header -->

	<div role="main" class="ui-content">
         
        <ul data-role="listview">
            <li data-role="list-divider">Setup</li>
        </ul>
        <p>&nbsp;
<label for="text-basic">Text Alerts:</label>
<input type="text" name="text-basic" id="text-basic" value="416-450-2499">
<label for="text-basic">Email Alerts:</label>
<input type="text" name="text-basic" id="text-basic" value="john.wilson@bullfrogpower.com">    
        <input type="submit" value="Update" data-theme="a">    
        </p>
	</div><!-- /content -->  
                      
                   
                      
	<div data-role="footer" data-position="fixed" data-theme="b">
        
            
        <div data-role="navbar">
<div class="icon">
    <span class="count">1</span>
</div>             
            <ul>
                <li><a href="#main" data-icon="grid">Power</a>
                </li>
                <li><a href="#alerts" data-icon="star" data-icon="grid">Alerts</a>
             
                </li>
                <li><a href="#" data-icon="gear" class="ui-btn-active ui-state-persist">Setup</a></li>
            </ul>
        </div><!-- /navbar -->         
	</div><!-- /footer -->
                        
</div><!-- /page -->                            
                  
<!-- Start of second page -->
<div data-role="page" id="bar">

	<div data-role="header">
		<h1>Bar</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
		<p><a href="#foo">Back to foo</a></p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->
</body>
</html>
