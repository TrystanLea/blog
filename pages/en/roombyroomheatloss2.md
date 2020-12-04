## title: Room by room heat loss calculation 2
### published: 2018-07-25

*Updated: 30th November 2020*

**Calculation notes:**

- See Home Energy Assessment & Retrofit Scenario for full details on the house.

- Chosen U-values are discussed on the 'Home Energy Assessment' page.

- Party wall U-value of 0.5 W/K.m2 taken from MCS Heat Pump Calculator. The SAP assessment assumes that neighbouring properties are heated and that there is therefore no heat loss through solid party walls. The heat loss calculation below is based on the MCS Heat Pump Calculator which is intended for heating system design rather than energy performance comparison, hence taking into account real possibility where neighbouring property is unheated for a period of time.

- Average air changes per hour is higher than modelled using MyHomeEnergyPlanner which is based on SAP which suggested an effective air change rate of 0.74 air changes per hour (ACH).

- The model below suggests a maximum heat requirement of 5.5kW during times where the ambient temperature drops to -3C. My previous calculation using the MCS Heat Pump Calculator spreadsheet itself with higher U-values for the walls suggested 6.0kW. A 5kW EcoDan without supplemental heating would not be sufficient if the outside temperature stayed at -3C for several days and the neighbouring properties were unheated if this heat demand is correct.

- EcoDan performance at different flow temperatures Table 5.2) suggests nominal COP at a flow temperature of 40C of between 3.15 when its 2C outside and 2.7 when its -7C outside. The maximum capacity drops from 5 kW to 4.5kW over the same range. Linear interpolation at -3C suggests a COP of 2.9 and max capacity of 4.72 kW.

**Maximum heat demand at different input assumptions**

- Applying the effective air change rate calculated using MyHomeEnergyPlanner of 0.74 air changes per hour (ACH) drops the maximum heat requirement from 5.5kW down to 4.3kW, well within the capacity of the 5kW EcoDan. It would be great to do an air-tightness test to work out which is the more realistic figure.

- If neighbouring properties are occupied at 18C and air changes per hour is 0.74, the maximum heat requirement drops to 3.9 kW.

- If neighbouring properties are occupied at 18C, air changes per hour is 0.74 and we assume average temperatures in January of ~ 5.5C, the average heat requirement drops to 2.5 kW in the coldest month. In practice I have found the thermal mass of our house to buffer below zero temperature swings, it can be usual to experience say -1/-2C overnight but then 4-6C during the daytime on the coldest days and so the average heat the heat pump needs to deliver on these days is much lower than the maximum suggested by the coldest hour of the day. This said if we experience a protracted period (e.g a week) of below zero temperatures the heat pump may well struggle on its own. We do have a backup wood stove if needed in these extreme circumstances but have not as of yet experienced this problem. 

- Another option would be to drop the Livingroom and study temperature to 19.5C, Bathroom to 18C and reducing the effective air change rate to 0.74 ACH as above reduces the maximum heat requirement from 5.5W to 4.0kW (unheated neighbours) or 3.7kW (heated neighbours).

**Radiator system heat output**

- The example case below has the MWT of the radiator circuit at 40C, the flow temperature would need to be a couple of degrees higher to provide this MWT, perhaps 42/43C. As you can see the radiator system is not able to provide enough heat at MWT 40C and -3C outside. The MWT would need to be 43.2C to match the heat loss at -3C. The 5.5kW of heat demand would also be greater than the 4.72 kW of maxmimum heat output that the 5kW EcoDan could supply, suggesting a need for a larger heat pump as well as more radiators or under floor heating. However:

- As discussed above, in practice these very low temperature periods are very rare and there are a number of factors that can reduce this maximum heat demand. We also have optional supplementary heating that we could use if we did get an extreme prolonged below zero period.

- In practice so far we have found that average January temperatures and assuming heated neighbours and lower air change rates are a better guide to the maximum heat output that we need to put in from the heatpump (when operating continuously). We also typically have the livingroom set point at 20C rather than 21C. The model suggests a heat requirement of 2.3 kW in this case and we are able to drop the mean water temperature all the way down to 31C, which is much more efficient, this matches monitored experience.

- No uplift factor taken into account in radiator & heat pump sizing. Continuous heating assumed.

**Heat loss calculation:**

Room by room heat loss calculation is based on the MCS Heat Pump Calculator that implements the EN12831 heat loss calculation standard.

<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<script type="text/javascript" src="lib/heatlossjs/config_new.js?v=1"></script>
<script type="text/javascript" src="files/midterrace_data.js?v=1"></script>
<link rel="stylesheet" type="text/css" href="lib/heatlossjs/style.css?v=1" />
<script type="text/javascript" src="lib/heatlossjs/model.js?v=1"></script>
<div id="heatloss"></div><script>heatloss.init("#heatloss")</script>
