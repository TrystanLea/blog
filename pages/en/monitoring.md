## title: Monitoring
### published: 2020-12-20

As you might expect being a co-founder of OpenEnergyMonitor, I've been doing a lot of monitoring of our house to feed into this process of working out what is best to do. This monitoring has three main goals:

**Thermal performance monitoring**

In the earlier posts I've used a SAP based MyHomeEnergyPlanner household assessment and room-by-room heat loss calculations to build up a theoretical picture of the thermal performance of our house. A key output of this process is a total value for the heat loss rate in Watts per Kelvin (W/K) for the building fabric, including ventilation and infiltration. This value is usefully independent of how warm the occupants choose to heat the house and factors such as the heating system or gains from electricity consumption, it reflects just the performance of the fabric. The assessment calculation also suggests annual heating requirements based on internal temperature assumptions that may differ to actual use.

Obviously, with any theoretical model it's accuracy is dependent on the inputs, estimating U-values and air-tightness rates can be a source of quite a bit of error, so can differences in internal temperature. These errors can of course have a significant effect on payback calculations for retrofit and heating decisions. Being able to cross check with measured performance could be a useful way of reducing this error.

By monitoring internal temperature, external temperature, heat input from the heating system, heat gains from electrical consumption (lighting, appliances and cooking) and approximate values for solar gains (perhaps by using solar pv data as a proxy), it should be possible to apply the calculations used in the SAP assessment in reverse in order to calculate a measured value for the building fabric heat loss rate.

I was keen to design the monitoring system to collect the data required to test this process. I've perhaps gone over-board with the number of room temperature sensors...

**Heat pump performance monitoring**

With the heat pump installed another key goal of the monitoring system is to measure the performance of the heat pump, in particular what is called the coefficient of performance (COP), a measure of the amount of heating energy provided by the heat pump divided by the electricity consumed. I also wanted to be able to keep on eye on flow and return temperatures and how often the system might be cycling.

**Octopus Agile costs for different electrical loads.**

More recently we have switched onto the Octopus Agile time of use tariff, which overall is looking much cheaper than previous tariffs. With our OpenEnergyMonitor sub circuit monitoring it's possible to explore the cost of different components of electricity consumption, not just the whole house measurement provided by the smart meter. The average cost of the electricity used by different loads is different depending on what times of the day they usually run, an electric vehicle charging at night will enjoy the lowest average cost, whilst traditional lighting and cooking demands will likely be used at peak times leading to higher costs for these components. I'm particularly interested in the average unit cost of the electricity for the heat pump as this alongside the COP will determine the unit cost of the delivered heat. Can I beat the unit cost of mains gas?


### Monitoring Hardware

The following picture gives aN overview of the monitoring hardware involved:

![monitoring](images/monitoring.png)

- The main electricity monitor is an EmonTx with four clip-on CT sensors to measure consumption on different electrical circuits. I have CT1 monitoring whole house consumption, CT2 monitoring the EV charger, CT3 monitoring the heat pump & CT4 monitoring the fixed lighting circuit. The EmonTx also measures AC voltage to give a more accurate real-power reading.<br>*See the [OpenEnergyMonitor emonTx and emonBase guide](https://guide.openenergymonitor.org/setup/install-emontx/) for more information on the EmonTx and how to install and setup this part of the system.*

- There are 7x EmonTH room temperature and humidity nodes, used to measure the internal temperature.<br>*See [OpenEnergyMonitor emonTH Guide](https://guide.openenergymonitor.org/setup/emonth) for more information on the emonTH temperature and humidity nodes.*

- The heat pump monitor is a RaspberryPi with an MBUS reader to read from the heat meter and a modbus reader to read from the dedicated SDM120 single phase electricity meter. This heat pump monitor also reads the cylinder and outside temperatures using DS18B20 one-wire temperature sensors. 
<br>*See [OpenEnergyMonitor Heat pump Monitoring Guide](https://guide.openenergymonitor.org/applications/heatpump/) for more information on setting up a heat pump monitor and choosing the right components for your system*

- Finally the data is collected locally by an emonBase base-station connected via Ethernet to our internet router. The data is accessible via a web interface served from the emonBase base-station locally.

The following is my \*no expense spared\* monitoring system as it currently stands. <br>
*See further down for a reduced set looking at reducing this overall cost.*

Note: All costs are including VAT

|  |  |  | Quantity | Unit Cost | Cost |
| --- | --- | --- | --- | --- | --- |
| **EmonTx v3** | [Guide](https://guide.openenergymonitor.org/setup/install-emontx/) | [OEM Shop](https://shop.openenergymonitor.com/emontx-energy-monitor-transmitter/) | 1 | £59.40 | £59.40 |
| -- CT sensors | [Learn](https://learn.openenergymonitor.org/electricity-monitoring/ct-sensors/installation) | [OEM Shop](https://shop.openenergymonitor.com/100a-max-clip-on-current-sensor-ct/) | 4 | £9.60 | £38.40 |
| -- AC-AC adapter (voltage sensor) | [Learn](https://learn.openenergymonitor.org/electricity-monitoring/voltage-sensing/measuring-voltage-with-an-acac-power-adapter) | [OEM Shop](https://shop.openenergymonitor.com/ac-ac-power-supply-adapter-ac-voltage-sensor-uk-plug/) | 1 | £10.67 | £10.67 |
| -- Pulse sensor | [Guide](https://guide.openenergymonitor.org/setup/pulse-counting/) | [OEM Shop](https://shop.openenergymonitor.com/optical-utility-meter-led-pulse-sensor/) | 1 | £18.97 | £18.97 |
| **EmonBase** | [Guide](https://guide.openenergymonitor.org/setup/install-emontx/) | [OEM Shop](https://shop.openenergymonitor.com/emonbase-web-connected-base-station/) | 1 | £75.78 | £75.78 |
| **Heat Pump monitor** | [Guide](https://guide.openenergymonitor.org/applications/heatpump/) |  |  |  |  |
| -- RaspberryPi 3 Model B+ |  | [The Pi Hut](https://thepihut.com/collections/raspberry-pi/products/raspberry-pi-3-model-b-plus) | 1 | £33.90 | £33.90 |
| -- SD Card (emonSD) | [Image](https://github.com/openenergymonitor/emonpi/wiki/emonSD-pre-built-SD-card-Download-&-Change-Log) | [OEM Shop](https://shop.openenergymonitor.com/emonsd-pre-loaded-raspberry-pi-sd-card/) | 1 | £9.00 | £9.00 |
| -- USB Power Supply |  | [OEM Shop](https://shop.openenergymonitor.com/5v-dc-usb-power-adapter-uk-plug) | 1 | £9.24 | £9.24 |
| -- Micro USB cable |  | [OEM Shop](https://shop.openenergymonitor.com/micro-usb-cable-20-awg-emonbase/) | 1 | £4.99 | £4.99 |
| -- SDM120-Modbus single phase meter |  | [JW Smart Meters](https://www.jwsmartmeters.co.uk/shop/din-rail-mounted-meters/single-phase-din/sdm120-modbus-mid/) | 1 | £54.00 | £54.00 |
| -- RS485 Modbus reader | [Guide](https://guide.openenergymonitor.org/integrations/emonhub-interfacers/#reading-from-a-sdm120-single-phase-meter) | [Amazon](https://www.amazon.co.uk/WINGONEER-USB-485-Converter-Adapter-Window-1/dp/B016IG6X7I) | 1 | £4.00 | £4.00 |
| -- Sontex 531 MID Heat meter |  | [Sontex](https://sontex.stockshed.com/static-heat-meters/superstatic-440) | 1 | £273.60 | £273.60 |
| -- MBUS to UART reader | [Guide](https://guide.openenergymonitor.org/integrations/emonhub-interfacers/#mbus-reader-for-electric-and-heat-meters) | [OEM Shop](https://shop.openenergymonitor.com/mbus-to-uart/) | 1 | £24.00 | £24.00 |
| -- USB to UART |  | [OEM Shop](https://shop.openenergymonitor.com/programmer-usb-to-serial-uart/) | 1 | £8.28 | £8.28 |
| -- USB mini cable 0.15m |  |  | 1 | £3.95 | £3.95 |
| -- DS18B20 Temperature Sensors | [Guide](https://guide.openenergymonitor.org/setup/temperature-sensors/) | [OEM Shop](https://shop.openenergymonitor.com/encapsulated-ds18b20-temperature-sensor) | 3 | £6.50 | £19.50 |
| **EmonTH** Temperature and Humidity nodes | [Guide](https://guide.openenergymonitor.org/setup/emonth/) | [OEM Shop](https://shop.openenergymonitor.com/emonth-temperature-humidity-node/) | 7 | £37.56 | £262.92 |
|  |  |  |  | **Total** | **£910.00** |

That did come out quite a bit higher than I expected...

Options for reducing this cost (but still meeting the monitoring goals):

- 3x EmonTH units instead of 7 as probably not needed for a sufficient measurement of mean internal temperature, saving £150.24
- Use Heat Pump Monitor RaspberryPi as main system base-station, unneeded duplication, saving £57.13
- [Sontex Superstatic 749](https://sontex.stockshed.com/superstatic-749) instead of 531/440, saving £69.00
- No pulse sensor, not really needed, saving £18.97
- Use a CT from the EmonTx for heat pump electric monitoring instead of SDM120, saving £58
- **Total cost: £557** (of which £354 of OpenEnergyMonitor monitoring and £203 for the heat meter).

**Alternative configurations**

- Using the smart meter: Octopus provide a great API to access smart meter data, if you don't have an EV and a heat pump and all of the electrical consumption measured by the smart meter is inside the house you could use this data for the lighting, appliances and cooking gains for the thermal performance calculation. This would remove the need for the emonTx in doing the long term thermal performance monitoring. It's worth noting that this approach looses the real-time data made possible with the emonTx, but depending on your goals this may not be needed.

- Anther approach without the emonTx would be to use the smart meter, an SDM120 single phase meter on the heat pump and the internal monitoring on the EV charger (if applicable) in order to work out the lighting, appliances and cooking contribution. Again this approach looses the real-time data made possible with the emonTx.

- If you have mains gas and a smart meter, and are with Octopus (or an other supplier with a good API for accessing the data) you could use this data to estimate the heat input into the house. In this case you may only need internal and external temperature monitoring in addition to the smart meter readings.

## Software

Im logging all the data from the sensors above locally on a emonBase base-station. This base station is basically a RaspberryPi with a radio receiver module to receive the data from the emonTx and emonTH monitoring nodes. The data is stored on the SD card (currently 16GB). Over the last 3 years I've amassed 515Mb of data (with 70 feeds), which leaves plenty of space for long term logging on the SD card.

Running on the RaspberryPi is a software stack for processing, logging and visualising the monitoring data. The main application is called EmonCMS which is the software that I mainly work on at OpenEnergyMonitor. This application is accessible locally through your computers web browser, it's much like interacting with a web site on the web but its all running from the little box inside your home. It's also possible to provide remote access when your out and about using remote access services such as dataplicity.

*We do also provide an online version of this software running on Emoncms.org but I would recommend considering local storage using an emonBase, especially if you are installing the system in your own home. The cost is lower for more complex monitoring system's and you have a bit more flexibility and different software modules available.*

**Emoncms basics**

<div class="row">
  <div class="col3">
    <b>Inputs</b><br><br>
    <a href="images/monitoring/emoncms_inputs.png"><img src="images/monitoring/emoncms_inputs.png"></a><br><br>
    Data from sensors first appear in the input list, input's can be configured with input processing to calculate processed values such as kWh data from power data, or to calculate lighting, appliances and cooking electricity demand by subtracting other loads from total household consumption.
  </div>
  <div class="col3">
    <b>Feeds</b><br><br>
    <a href="images/monitoring/emoncms_feeds.png"><img src="images/monitoring/emoncms_feeds.png"></a><br><br>
    Feeds are individual time-series that are recorded to the SD card. These are typically recorded at a fixed interval such as 10s, 60s or half hourly data.
  </div>
  <div class="col3">
    <b>Graphs</b><br><br>
    <a href="images/monitoring/emoncms_graphs.png"><img src="images/monitoring/emoncms_graphs.png"></a><br><br>
    Emoncms provides a number of different ways to visualise and analyse data. The graph module links through to the feeds page giving a quick way to view the recorded time series data. Other options include dedicated app's such as the heat pump and agile dashboards featured below.
  </div>
</div>

**Useful Guides:** [Core concepts](https://guide.openenergymonitor.org/emoncms/coreconcepts/), [Log locally](https://guide.openenergymonitor.org/setup/local), [Graphs](https://guide.openenergymonitor.org/emoncms/graphs/)


### Thermal Performance Monitoring

<div class="row">
  <div class="col2">
    <b>Approach 1: Manual calculation in a spreadsheet</b>
    <br><br>
    For the last couple of years I've been doing the thermal performance calculations manually in a separate spreadsheet.
    <br><br>
    I would start by using the EmonCMS graph interface to calculate average monthly values for the different internal and external temperature sensors, and different sources of heat gain following the process documented here <a href="https://guide.openenergymonitor.org/emoncms/daily-averages/">Calculating Averages</a>.
    <br><br>
    Then using the graph interface CSV export tool I would copy the monthly average values across to the spreadsheet for further calculation.
    <br><br>
    In the spreadsheet I would combine the different room temperature sensors with a weighting by floor area to give a set of monthly mean internal temperature values.
    <br><br>
    I would then subtract the mean internal temperature from the outside temperature for each month, giving the delta T between the inside and outside.
    <br><br>
    Then I would assemble all the different contributors to heat gain in the house on a monthly basis including: heating from the heat pump, utilised heat from domestic hot water (assumed ~50%), heat gains from lighting, appliances and cooking, measured as their electrical consumption all of which will ultimately be converted to heat. A manual estimate for metabolic gains (body heat) and a proxy for solar gains based on the output of a near-by domestic solar PV system that I have data for.
    <br><br>
    The heat loss factor is then given by the total heat input every month divided by the difference in temperature between the inside and the outside temperature.<br><br>
    An example of this spreadsheet is shown on the <a href="heatpump-oneyear">Heat pump: One year on</a> blog post.
  </div>
  <div class="col2">
    <img src="images/monitoring/emoncms_monthly.png">
  </div>
</div> 

**Approach 2: New Emoncms Heat loss rate calculation module**

To try and make this process easier to replicate I've been working more recently on a tool built in to emoncms that assembles the monthly data and performs the heat loss factor calculation without having use a seperate spreadsheet. The screenshot below shows what this tool currently looks like.

The applicable feeds are selected using the dropdown selectors on the left hand side. The monthly boxes are colour coded according to how much data loss there is present in that month. Hovering over each cell gives a tool tip with the % of data present.

The intention is to expand this tool to integrate directly with the MyHomeEnergyPlanner assessment software in a way that makes it easy to compare the assessment calculation against the measured values.

![monitoring](images/monitoring/monitoredheatlossrate.png)

**Results:** As discussed in the blog post on the [heat pump one year on](heatpump-oneyear) my heating energy consumption in the first year was 45% less than the amount predicted by the SAP based assessment. I think I can account for a large part of this as being due to lower internal temperatures and higher external temperatures than those assumed in the assessment, but there is still around a 20% discrepancy remaining.

The [assessment](assessment) predicted the heat loss factor for the house to be 204 W/K. We can see from the above calculation for November that it suggests the measured heat loss factor to be ~174 W/K, which is 15% less than the assessment calculation. It looks like our building fabric or perhaps air-tightness is better than that assumed by SAP. 

I would alternatively need to be missing about 295W of heat gain. Could I be gaining this kind of heat from my neighbours? Using the [room-by-room heatloss calculator](http://localhost/trystan2/roombyroomheatloss2) I can experiment with different temperature levels in the neighbouring properties, the difference in heat gain to our house with neighbours at 21C vs 18C average internal temperature is about 120W. (We would loose 12W if neighbours averaged 18C or gain 108W if neighbours averaged 21C, all very rough figures of course). 

While its hard to say exactly what is the cause for the precise discrepancy between the assessment and the measured values we can see that they are in a similar ball park and that the heat loss looks to be in the direction of less rather than more.


### Heat Pump Monitoring

<div class="row">
  <div class="col2">
  Emoncms includes a built in heat pump monitoring dashboard (part of the Apps module) as discussed in the guide <a href="https://guide.openenergymonitor.org/emoncms/apps/#my-heatpump">here</a>.
  <br><br>
  The main view is divided into three parts, at the top is the live status of the heat pump, the electrical consumption, heat output, COP and flow temperature. 
  <br><br>
  Below that is the electricity input and heat energy output in kWh on a daily basis. Hovering over a given day shows the COP for that day.
  <br><br>
  The last box shows the all time total electricity consumption, heat output and COP.
  <br><br>
  The heat pump dashboard is probably the dashboard I check most often in emoncms. Just to check up on how the system is running.
  </div>
  <div class="col2">
    <a href="images/monitoring/heatpump_monitoring_daily.png"><img src="images/monitoring/heatpump_monitoring_daily.png"></a>
  </div>
</div>

<div class="row">
  <div class="col2">
  Clicking on a particular day in the daily view above takes you to the detailed power and temperature graph for that day.
  <br><br>
  With this view you can check up on how the system temperatures are changing through the day and select specific sections to get the COP for that particular run period.
  <br><br>
  The example screenshot here shows the heating on most of the day and evening, with the flow temperature at 33C and 34C at different times for space heating. The two large temperature ramps, one starting at 7am and the other at 2pm is the hot water cylinder heat up.
  </div>
  <div class="col2">
    <a href="images/monitoring/heatpump_monitor_powerview.png"><img src="images/monitoring/heatpump_monitor_powerview.png"></a>
  </div>
</div>

### Octopus Agile Monitoring & Analysis

<div class="row">
  <div class="col2">
  The Octopus Agile EmonCMS dashboard is available in the apps module as well. It was originally designed as simulator, I wanted to see if the Agile tariff would work for me before switching but it also work well as a dashboard to track costs once you are on the tariff as well.<br><br>
  The dashboard makes it easy to work out how much you are spending and crucially what the average unit rate is for a given selected period. 
  <br><br>
  See the guide here on how to set up this app: <a href="https://guide.openenergymonitor.org/applications/octopusagile/">Octopus Agile Emoncms app</a>.
  <br><br>
  The screenshot on the right shows our whole house consumption over the last 60 days. Our average unit rate has been 11.6p/kWh which is 24% cheaper than the <a href="https://powercompare.co.uk/electricity-prices/">standard unit prices</a> for our area and an amazing 40% less than the previous tariff that we were on.
  <br><br>
  Over the last 120 days (since we joined Octopus) the average unit price has been 10.9p/kWh, prices were a bit cheaper early on and we didnt have the heat pump on during more expensive hours as it was warmer. 
  
  </div>
  <div class="col2">
    <a href="images/monitoring/octopus_agile_60day.png"><img src="images/monitoring/octopus_agile_60day.png"></a>
  </div>
</div>

<div class="row">
  <div class="col2">
  <b>Electric Vehicle costs</b><br><br>
  One of the other really nice benefits of combining monitoring of different circuits in the home with an EmonTx and the Emoncms agile app is that its possible to easily work out the average agile unit rate of different loads.
  <br><br>
  For example an electric car charged at night at the cheapest hours of the day will have a much lower average unit rate than more traditional loads such as lighting, appliances and cooking. I've only recently reconfigured my monitoring to record the EV electricity consumption separately to the rest of the house, so only have the last 20 days in the screenshot to the right. The average unit rate is 8.2p/kWh, which is 37% below the average unit price for all of our electricity over the same period (13.0p/kWh).
  <br><br>
  At 8.2p/kWh our per mile driving cost is 8.2 p/kWh / 3.8 miles/kWh = 2.2p/mile! <i>(I did pay more for the car than I would have paid for a petrol car and so this saving pays back that additional cost plus a bit more).</i>
  </div>
  <div class="col2">
    <a href="images/monitoring/agileEV.png"><img src="images/monitoring/agileEV.png"></a>
  </div>
</div>

<div class="row">
  <div class="col2">
  <b>Heat pump costs</b><br><br>
  I can also look at the average unit price for the electricity used by the heat pump. Over the last 60 days the average unit price has been 13.0p/kWh. 
  <br><br>
  Using the heatpump dashboard I can then find the average COP for this period which was 4.25.
  <br><br>
  The average unit price of the delivered heat was therefore 3.06 p/kWh.
  <br><br>
  This is a little bit cheaper than current mains gas prices assuming a 90% efficient gas boiler (3.17 p/kWh) and cheaper still if you include the additional standing charge of the gas tariff and electricity consumption costs for the gas boiler controls and central heating pump which are all included in the heat pump unit cost above.
  </div>
  <div class="col2">
    <a href="images/monitoring/octopus_agile_heatpump.png"><img src="images/monitoring/octopus_agile_heatpump.png"></a>
  </div>
</div>