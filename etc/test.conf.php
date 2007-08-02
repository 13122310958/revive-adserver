;<?php exit; ?>
;*** DO NOT REMOVE THE LINE ABOVE ***
;------------------------------------------------------------------------------------------;
; Test Environment Settings - Make Sure The Following Are Correct!                         ;
;------------------------------------------------------------------------------------------;

;------------------------------------------------------------------------------------------;
; Database Settings                                                                        ;
;------------------------------------------------------------------------------------------;

[database]
type                                = mysql
host                                = localhost
port                                = 3306
username                            =
password                            =
name                                = oa_simpletest ; Don't set this to be your Openads
                                                    ; database - the test database is
                                                    ; created/dropped during testing!
persistent                          = false
mysql4_compatibility                = false


;------------------------------------------------------------------------------------------;
; Do NOT Change Any Of The Following!                                                      ;
;------------------------------------------------------------------------------------------;

;------------------------------------------------------------------------------------------;
; General Openads Installation Settings                                                    ;
;------------------------------------------------------------------------------------------;

[openads]
installed                           = true
requireSSL                          = false
sslPort                             = 443

[max]
installed                           = true
uiEnabled                           = true
language                            = english

;------------------------------------------------------------------------------------------;
; Database Settings                                                                        ;
;------------------------------------------------------------------------------------------;

[databaseMysql]
statisticsSortBufferSize            =

;------------------------------------------------------------------------------------------;
; Optional Alternative Time Zone Setting                                                   ;
;------------------------------------------------------------------------------------------;

[timezone]
location                            =

;------------------------------------------------------------------------------------------;
; Delivery Path and File Name Settings                                                     ;
;------------------------------------------------------------------------------------------;

[webpath]
admin                               =
delivery                            =
deliverySSL                         =
images                              =
imagesSSL                           =

[file]
click                               = ck.php
conversionvars                      = tv.php
content                             = ac.php
conversion                          = ti.php
conversionjs                        = tjs.php
flash                               = fl.js
google                              = ag.php
frame                               = afr.php
image                               = ai.php
js                                  = ajs.php
layer                               = al.php
log                                 = lg.php
popup                               = apu.php
view                                = avw.php
xmlrpc                              = axmlrpc.php
local                               = alocal.php
frontcontroller                     = fc.php

[store]
mode                                =
webDir                              =
ftpHost                             =
ftpPath                             =
ftpUsername                         =
ftpPassword                         =
ftpPassive                          =

[origin]
type                                = "None"
host                                =
port                                = 80
script                              = /www/delivery/dxmlrpc.php
timeout                             = 10
protocol                            = http

;------------------------------------------------------------------------------------------;
; Delivery Details                                                                         ;
;------------------------------------------------------------------------------------------;

[delivery]
cacheExpire                         = 1200
cachePath                           =
acls                                = true
obfuscate                           = false
execPhp                             = false
ctDelimiter                         = __
chDelimiter                         = ","
keywords                            = false
cgiForceStatusHeader                = false ; Set this to true if using a CGI sapi which
                                            ; does not correctly deal with HTTP headers
                                            ; and leaves the description empty
                                            ; (i.e. "HTTP/1.1 302" insead that 302 Found)

[p3p]
policies                            = true
compactPolicy                       = CUR ADM OUR NOR STA NID
policyLocation                      =

;------------------------------------------------------------------------------------------;
; User Interface Settings                                                                  ;
;------------------------------------------------------------------------------------------;

[graphs]
ttfDirectory                        =   ; The directory where True Type Fonts are stored
ttfName                             =   ; Name of the True Type Font to use in graphs, only
                                        ; supported in the test suite at present

;------------------------------------------------------------------------------------------;
; Statistics Logging & Maintenance Details                                                 ;
;------------------------------------------------------------------------------------------;

[logging]
adRequests                          = false
adImpressions                       = true
adClicks                            = true
trackerImpressions                  = true
reverseLookup                       = false
proxyLookup                         = true
sniff                               = false
defaultImpressionConnectionWindow   =
defaultClickConnectionWindow        =
blockAdImpressions                  = 0
blockAdClicks                       = 0
blockTrackerImpressions             = 0
logInUTC                            = false   ; If true delivery log raw data in UTC
ignoreHosts                         =         ; Comma separated list of hosts

[modules]
AdServer                            = true
Tracker                             = true

[maintenance]
autoMaintenance                     = 1

timeLimitScripts                    = 300    ; Should maintenance scripts be limited to run no longer than
                                             ; this many seconds? Set to 0 for no time limit
operationInterval                   = 60
compactStats                        = true
compactStatsGrace                   = 604800

channelForecasting                  = true
;channelForecastingDaysBack          = 30     ; How many days from history should be used for forecasting
;channelForecastingDaysAhead         = 7      ; If campaign expire date is empty forecast for this number of days
;channelForecastingMaxDaysAhead      = 30     ; Even if campaign expire date is biger do not forecast more than
;channelForecastingMaxRunTime        = 40     ; Maximum time allowed for channel forecating maintenance (in minutes)

[priority]
instantUpdate                       = true
useZonePatterning                   = false
defaultZoneForecastImpressions      = 10
defaultClickRatio                   = 0.005
defaultConversionRatio              = 0.0001
randmax                             = 2147483647 ; This should be autogenerated in installation process by mt_getrandmax()

;------------------------------------------------------------------------------------------;
; Table Details                                                                            ;
;------------------------------------------------------------------------------------------;

[table]
prefix              = oa_
split               = false             ; Don't change - the use of split tables is NOT
                                        ; supported without custom, external code to insert
                                        ; raw data
lockfile            =                   ; Only required when split table operation is used
type                = INNODB            ; Either MyISAM, or INNODB, for MySQL ONLY

;------------------------------------------------------------------------------------------;
; Table Names                                                                              ;
;------------------------------------------------------------------------------------------;

acls                                     = acls
acls_channel                             = acls_channel
ad_category_assoc                        = ad_category_assoc
ad_zone_assoc                            = ad_zone_assoc
affiliates                               = affiliates
affiliates_extra                         = affiliates_extra
agency                                   = agency
application_variable                     = application_variable
banners                                  = banners
campaigns                                = campaigns
campaigns_trackers                       = campaigns_trackers
category                                 = category
channel                                  = channel
clients                                  = clients
data_intermediate_ad                     = data_intermediate_ad
data_intermediate_ad_connection          = data_intermediate_ad_connection
data_intermediate_ad_variable_value      = data_intermediate_ad_variable_value
data_raw_ad_click                        = data_raw_ad_click
data_raw_ad_impression                   = data_raw_ad_impression
data_raw_ad_request                      = data_raw_ad_request
data_raw_tracker_click                   = data_raw_tracker_click
data_raw_tracker_impression              = data_raw_tracker_impression
data_raw_tracker_variable_value          = data_raw_tracker_variable_value
data_summary_ad_hourly                   = data_summary_ad_hourly
data_summary_ad_zone_assoc               = data_summary_ad_zone_assoc
data_summary_channel_daily               = data_summary_channel_daily
data_summary_zone_country_daily          = data_summary_zone_country_daily
data_summary_zone_country_forecast       = data_summary_zone_country_forecast
data_summary_zone_country_monthly        = data_summary_zone_country_monthly
data_summary_zone_domain_page_daily      = data_summary_zone_domain_page_daily
data_summary_zone_domain_page_forecast   = data_summary_zone_domain_page_forecast
data_summary_zone_domain_page_monthly    = data_summary_zone_domain_page_monthly
data_summary_zone_impression_history     = data_summary_zone_impression_history
data_summary_zone_site_keyword_daily     = data_summary_zone_site_keyword_daily
data_summary_zone_site_keyword_forecast  = data_summary_zone_site_keyword_forecast
data_summary_zone_site_keyword_monthly   = data_summary_zone_site_keyword_monthly
data_summary_zone_source_daily           = data_summary_zone_source_daily
data_summary_zone_source_forecast        = data_summary_zone_source_forecast
data_summary_zone_source_monthly         = data_summary_zone_source_monthly
images                                   = images
log_maintenance_forecasting              = log_maintenance_forecasting
log_maintenance_priority                 = log_maintenance_priority
log_maintenance_statistics               = log_maintenance_statistics
password_recovery                        = password_recovery
placement_zone_assoc                     = placement_zone_assoc
plugins_channel_delivery_assoc           = plugins_channel_delivery_assoc
plugins_channel_delivery_domains         = plugins_channel_delivery_domains
plugins_channel_delivery_rules           = plugins_channel_delivery_rules
preference                               = preference
preference_advertiser                    = preference_advertiser
preference_publisher                     = preference_publisher
session                                  = session
targetstats                              = targetstats
trackers                                 = trackers
tracker_append                           = tracker_append
userlog                                  = userlog
variables                                = variables
variable_publisher                       = variable_publisher
zones                                    = zones

;------------------------------------------------------------------------------------------;
; Split Tables - Only has effect when [table][split] set to true                           ;
;------------------------------------------------------------------------------------------;

[splitTables]
data_raw_ad_click                        = true
data_raw_ad_impression                   = true
data_raw_ad_request                      = true
data_raw_tracker_click                   = true
data_raw_tracker_impression              = true
data_raw_tracker_variable_value          = true

;------------------------------------------------------------------------------------------;
; Debugging/Error Logging Details                                                          ;
;------------------------------------------------------------------------------------------;

[log]
enabled             = true
methodNames         = false
lineNumbers         = false
type                = file
name                = test.log
priority            = PEAR_LOG_DEBUG
ident               = OA
paramsUsername      =
paramsPassword      =
fileMode            = 0644

[deliveryLog]
enabled             = false
name                = delivery.log
fileMode            = 0644

;------------------------------------------------------------------------------------------;
; Non-configurable items for the Delivery Engine                                           ;
;------------------------------------------------------------------------------------------;

[cookie]
permCookieSeconds   = 31536000      ; 1 year in seconds

[debug]
logfile             =                       ; The delivery engine debugging file
production          = false                 ; Is it production server? (do not show backtrace and error sourcecontext)
                                            ; If it is delivery do not show any errors
sendErrorEmails     = false                 ; Send emails containing error reports - do not work in delivery
emailSubject        = Error from Openads    ; Error report subject
email               = email@example.com     ; Where to send error reports
emailAdminThreshold = PEAR_LOG_ERR          ; Email the error to admin if threshold reached
errorOverride       = true                  ; If true do not show notices
showBacktrace       = false                 ; If true print backtrace

[var]
prefix              = OA_           ; Used to prefix some variables and used in invocation codes
cookieTest          = ct            ; Used for the forced cookie test redirect
cacheBuster         = cb            ; Cache buster
channel             = source        ; Channel of the website
dest                = oadest        ; Used to pass in a URL to redirect to after action
logClick            = log           ; Used to indicate if a click should be logged
n                   = n             ; Used to name a cookie containing displayed banner information
params              = oaparams      ; Used to pass in custom delimited key=value pairs into an ad-call
viewerId            = OAID          ; Used for passing viewer ID cookie value
campaignId          = campaignid    ; Used for passing campaign ID cookie value
adId                = bannerid      ; Used for passing ad ID cookie value
creativeId          = cid           ; Used for passing creative ID cookie value
zoneId              = zoneid        ; Used for passing zone ID cookie value
blockAd             = OABLOCK       ; Used for passing banner blocking cookie value
capAd               = OACAP         ; Used for passing banner capping cookie value
sessionCapAd        = OASCAP        ; Used for passing session banner capping cookie value
blockCampaign       = OACBLOCK      ; Used for passing campaign blocking cookie value
capCampaign         = OACCAP        ; Used for passing campaign capping cookie value
sessionCapCampaign  = OASCCAP       ; Used for passing session campaign capping cookie value
blockZone           = OAZBLOCK      ; Used for passing zone blocking cookie value
capZone             = OAZCAP        ; Used for passing zone capping cookie value
sessionCapZone      = OASZCAP       ; Used for passing session zone capping cookie value
vars                = OAVARS        ; Used for passing variables
trackonly           = trackonly     ; Used to avoid redirecting after a click
openads             = openads       ; Used as identifier for the adsense click tracking comments

;------------------------------------------------------------------------------------------;
; Load Balancing / Distributed Statistics                                                  ;
;------------------------------------------------------------------------------------------;

[lb]
enabled             = false         ; Should distributed stats be enabled
type                = mysql         ; Main database details
host                = localhost
port                = 3306
username            =
password            =
name                =
persistent          = false
compactStats        = true
compactStatsGrace   = 604800

;------------------------------------------------------------------------------------------;
; Sync / Dashboard Settings                                                                ;
;------------------------------------------------------------------------------------------;

[sync]
host                = sync.openads.org
script              = /xmlrpc.php
port                = 80

[dashboard]
protocol            = http://
host                = sync.openads.org
path                = /dashboard-sync/dashboard/dashboard_iframe.php

;------------------------------------------------------------------------------------------;
; Plugins Settings                                                                ;
;------------------------------------------------------------------------------------------;

[channelDerivation]
cacheExpire=86400
cachePath=/var/plugins/cache/channelDerivation/
xmlrpcScript=/www/delivery/delivery-xmlrpc.php

[geotargeting]
type="none"
saveStats=false

;------------------------------------------------------------------------------------------;
; Test configuration
;------------------------------------------------------------------------------------------;

[test]
urlToTracSvnBrowser = https://developer.openads.org/browser/branches/max/trunk/

;------------------------------------------------------------------------------------------;
