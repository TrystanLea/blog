## title: Heat pump performance and home energy 2021
### published: 2022-06-03

<br>
<div class="row">
  <div class="col2">
Here are our heat pump performance and wider home energy results for 2021.<br><br>

The main changes in 2021 were:
<ul>
<li>Slightly warmer internal temperatures +0.15C more than 2020 and +1.11C more than 2019.<br><br></li>
<li>Slightly colder outside temperatures -0.3C less than 2020.<br><br></li>
<li>Increased electricity costs due to wholesale cost increases. Switch from Agile to Go tariff in August 2021.</li>
</ul>

<b>We achieved an average heat pump COP for the year of 4.04, a heating cost of £369 and a unit cost for heat of 3.83 p/kWh.</b>
<br><br>
It's difficult and perhaps a bit unfair to compare this unit cost with mains gas given that we were lucky to fix our electricity tariff on Octopus Go in August 2021 and also given the price rises across the board.

  </div>
  <div class="col2">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/m2-_x0XZUSM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<i>Video overview of the heat pump system, note that performance data in the video is based on figures from 2019</i>
  </div>
</div>

### Heat pump performance overview

- Annual space heating COP average: 4.2
- Annual domestic hot water COP: 4.1
- Standby electricity consumption: 99.4 kWh
- Combined space heating and DHW COP (not including standby): 4.16
- Combined space heating, DHW and standby COP: 4.04

The following monthly COP figures for space heating and domestic hot water (DHW) are specifically for the periods of time that the heat pump is running. This shows higher COP's in the summer than the winter as we would expect given higher outside temperatures. The combined COP chart includes standby consumption and we can see that it drags down the summer COP's.

<div class="row">
  <div class="col3">
    <a href="images/2020/space_heating_COP.png"><img src="images/2021/space_heating_COP.png?v=1"></a>
  </div>
  <div class="col3">
    <a href="images/2020/DHW_COP.png"><img src="images/2021/DHW_COP.png?v=1"></a>
  </div>
  <div class="col3">
    <a href="images/2020/combined_COP.png"><img src="images/2021/combined_COP.png?v=1"></a>
  </div>
</div>

The average annual COP of 4.04 is very slightly higher than both 2019 and 2020 figures.

The following charts show the electricity consumption of the heat pump separated out again by space heating, hot water and standby. Standby consumption increases in summer as the heat pump spends a lot more hours on standby.

<div class="row">
  <div class="col2">
    <a href="images/2020/hp_monthly_electric_input.png"><img src="images/2021/hp_monthly_electric_input.png?v=1"></a>
  </div>
  <div class="col2">
    <a href="images/2020/hp_monthly_heat_output.png"><img src="images/2021/hp_monthly_heat_output.png?v=1"></a>
  </div>
</div>

### Octopus Agile & Go costs and Grid Carbon Intensity

- Total electricity cost of £906.15 for 6217 kWh (inc VAT)<br>(Coving all our standard electric, 100% of our heating and about 70% of our driving).
- Annual average unit price for whole house: 14.6 p/kWh (inc VAT)
- Annual average unit price of electricity for the heat pump: 15.5 p/kWh (inc VAT)
- Annual average unit price for the electric car: 11.7 p/kWh (inc VAT)
- Annual average unit price for the lighting, appliances and cooking: 18.1 p/kWh (inc VAT)

<div class="row">
  <div class="col2">
The significant drop in unit price moving from Octopus Agile to Go in August 2021 is clearly visible on the following graph. Using our own OpenEnergyMonitor monitoring in conjunction with the smart meter and the Emoncms Agile app, it is possible to work out a breakdown of the average monthly costs by the different load components in our house.
  </div>
  <div class="col2">
    <a href="images/2021/agile_unit_pricing.png"><img src="images/2021/agile_unit_pricing.png"></a>
  </div>
</div>


<div class="row">
  <div class="col2">
The Emoncms Agile app can also be used to explore the carbon intensity of the electricity consumption using half hourly data from <a href="https://carbonintensity.org.uk/">https://carbonintensity.org.uk/</a><br><br>
Again here we see that the overnight electric car charging has the lowest intensity whilst day time loads such as the heat pump and lighting etc is higher.<br><br>
<b>Annual averages:</b>
<ul>
<li>Combined: 179 gCO2/kWh</li>
<li>Heat pump electric: 187 gCO2/kWh (46 gCO2/kWh heat)</li>
<li>EV charging: 163 gCO2/kWh (43 gCO2/mile)</li>
<li>Lighting appliances and cooking: 199 gCO2/kWh</li>
</ul>

At these carbon intensities the heat pump reduces emissions by 82% compared to a gas boiler and the electric car 87% compared to a relatively efficient diesel car. See 2020 blog post appendix for details.

  </div>
  <div class="col2">
    <a href="images/2021/carbonintensity.png"><img src="images/2021/carbonintensity.png"></a>
  </div>
</div>

### Model vs measured

In the 2019 and 2020 reviews I compared our heating consumption in those years to the modelled heat demand from a SAP based energy assessment. I have since spent a bit more time looking at the original assessment assumptions and realise that space heating demand prediction given by SAP is highly dependent not just on the target temperature in the livingarea e.g 21C and the fabric assumptions but also the number of off hours assumed, the extent of the living area and the responsivness of the heating system. If we keep the target temperature the same at 21C the space heating demand prediction can be anywhere from a minimum of 8,558 kWh up to a maximum of 12,215 kWh depending on these non-fabric assumptions.

This makes it hard to give a single number for what the assessment suggests the space heating demand should be. It seems a fairer comparison to take the measured internal and external temperatures for each year, enter these in the SAP model to obtain a prediction for space heating demand and then compare that figure with the measured space heating demand. Here are the results of this comparison:

- Predicted heat demand for 2019 based on measured internal and external temps: 7057 kWh, the actual space heat supplied was 5288 kWh = 25% less than the prediction.

- Predicted heat demand for 2020 based on measured internal and external temps: 8286 kWh, the actual space heat supplied was 6011 kWh = 27% less than the prediction.

- Predicted heat demand for 2021 based on measured internal and external temps: 9202 kWh, the actual space heat supplied was 7328 kWh = 20% less than the prediction.

**Calculating heat loss factors in W/K**

Another approach to comparing modelled fabric performance with measurement is to calculate and compare heat loss factors. I go into the detail of how I do this in the 2020 blog post. It's again not quite possible to make a precise comparison as I still have to make assumptions for heat gains from water, body heat and solar gains. But it's interesting to try nonetheless. 

The chart on the left shows the resulting monthly heat loss factor values, varying between 131 and 243 W/K and an average of 192 W/K. The average is only 6.3% lower than the heat loss factor calculated using the SAP assessment as shown in the graphic on the right. This is quite a bit less than last year where the difference was 15%.

<div class="row">
  <div class="col3">
    <a href="images/2021/HLP.png"><img src="images/2021/HLP.png"></a>
  </div>
  <div class="col2">
    <a href="images/2021/SAPgraphic.png"><img src="images/2021/SAPgraphic.png"></a>
  </div>
</div>

### Detailed monthly data

The data for much of the analysis in this post was collected using our OpenEnergyMonitor monitoring system, I've written a more detailed post on the monitoring setup here: [Monitoring](monitoring). Here are the exported monthly temperature averages and consumption values for 2021:

![monthly2021.png](images/2021/monthly2021.png)

Download [heatpump2021.ods](files/heatpump2021.ods)

### Appendix

See appendix of 2020 post for discussion of carbon intensity and carbon savings discussion.
