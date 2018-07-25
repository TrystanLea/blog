## title: Room by room heat loss calculation 2
### published: 2018-07-25

**Calculation notes:**

- See Home Energy Assessment & Retrofit Scenario for full details on the house.

- Chosen U-values are discussed on the 'Home Energy Assessment' page.

- Party wall U-value of 0.5 W/K.m2 taken from MCS Heat Pump Calculator. The SAP assessment assumes that neighbouring properties are heated and that there is therefore no heat loss through solid party walls. The heat loss calculation below is based on the MCS Heat Pump Calculator which is intended for heating system design rather than energy performance comparison, hence taking into account real possibility where neighbouring property is unheated for a period of time.

- Average air changes per hour is higher than modelled using MyHomeEnergyPlanner which is based on SAP which suggested an effective air change rate of 0.74 air changes per hour (ACH).

- The model below suggests a maximum heat requirement of 5.5kW during times where the ambient temperature drops to -3C. My previous calculation using the MCS Heat Pump Calculator spreadsheet itself with higher U-values for the walls suggested 6.0kW. An 5kW EcoDan would not be sufficient if this heat demand is correct.

- EcoDan performance @ different flow temperatures. Table 5.2 suggests nominal COP of between 3.15 (2C) and 2.7 (-7C) at a water outlet temperature of 40C. The maximum capacity drops from 5 kW to 4.5kW over the same range. Linear interpolation at -3C suggests a COP of 2.9 and max capacity of 4.72 kW.

- Applying the effective air change rate calculated using MyHomeEnergyPlanner of 0.74 air changes per hour (ACH) drops the maximum heat requirement from 5.5kW down to 4.3kW, well within the capacity of the 5kW EcoDan. It would be great to do an air-tightness test to work out which is the more realistic figure.

- Dropping the Livingroom and study temperature to 19C, Bathroom to 18C and reducing the effective air change rate to 0.74 ACH as above reduces the maximum heat requirement from 5.5W to 4.0kW, further within the range of the 5kW EcoDan.

- The Mean Water Temperature of the radiator circuit is likely to be a couple of degrees lower than the flow temperature, perhaps 38C if the flow temperature is 40C. While the example below includes high output fan assisted radiators, reducing the air change rate and room temperatures as above would make it possible to use double panel convector radiators only.

- No uplift factor taken into account in radiator & heat pump sizing. Continuous heating assumed. Livingroom has a backup wood burning stove which provides ample additional capacity for rare occasions.

**Heat loss calculation:**

Room by room heat loss calculation is based on the MCS Heat Pump Calculator that implements the EN12831 heat loss calculation standard.

<script type="text/javascript" src="files/midterrace_data.js"></script>
<link rel="stylesheet" type="text/css" href="lib/heatlossjs/style.css" />
<script type="text/javascript" src="lib/heatlossjs/model.js"></script>
<div id="heatloss"></div><script>heatloss.init("#heatloss")</script>
